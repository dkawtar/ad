<?php/* * This file is part of the Symfony package. * * (c) Fabien Potencier <fabien@symfony.com> * * For the full copyright and license information, please view the LICENSE * file that was distributed with this source code. */namespace BackBundle\Security\User;use BackBundle\Entity\User;use FOS\UserBundle\Doctrine\UserManager;use Symfony\Component\Ldap\LdapClient;use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;use Symfony\Component\Ldap\Exception\ConnectionException;use Symfony\Component\Ldap\LdapClientInterface;use Symfony\Component\Security\Core\User\UserInterface;use Symfony\Component\Security\Core\User\UserProviderInterface;/** * Class UserProvider * * @package AppBundle\Security\User */class UserProvider implements UserProviderInterface{    private $userManager;    private $ldap;    private $baseDn;    private $searchDn;    private $searchPassword;    private $defaultRoles;    private $defaultSearch;    /**     * @param UserManager $userManager     * @param LdapClient $ldap     * @param string $baseDn     * @param string $searchDn     * @param string $searchPassword     * @param array $defaultRoles     * @param string $uidKey     * @param string $filter     */    public function __construct(UserManager $userManager,                                LdapClient $ldap,                                $baseDn,                                $searchDn = null,                                $searchPassword = null,                                array $defaultRoles = [],                                $uidKey = 'sAMAccountName',                                $filter = '({uid_key}={username})')    {        $this->userManager = $userManager;        $this->ldap = $ldap;        $this->baseDn = $baseDn;        $this->searchDn = $searchDn;        $this->searchPassword = $searchPassword;        $this->defaultRoles = $defaultRoles;        $this->defaultSearch = str_replace('{uid_key}', $uidKey, $filter);    }    /**     * {@inheritdoc}     */    public function loadUserByUsername($username)    {        try {            $this->ldap->bind($this->searchDn, $this->searchPassword);            $username = $this->ldap->escape($username, '', LDAP_ESCAPE_FILTER);            $query = str_replace('{username}', $username, $this->defaultSearch);            $search = $this->ldap->find($this->baseDn, $query);        } catch (ConnectionException $e) {            throw new UsernameNotFoundException(sprintf('L\'utilisateur "%s" n\'existe pas .', $username), 0, $e);        }        if (!$search || (isset($search["count"]) && @$search["count"] == 0)) {            throw new UsernameNotFoundException(sprintf('L\'utilisateur "%s" n\'existe pas .', $username));        } else            if ($search['count'] > 1) {                throw new UsernameNotFoundException('Trop d\'utilisateur est associé à ce compte');            }        return $this->loadUser($username, $search);    }    /**     * @param $username     * @param $data     * @return User|\FOS\UserBundle\Model\UserInterface     */    public function loadUser($username, $data)    {        $userObject = $this->userManager->findUserByUsernameOrEmail($username);        if (null == $userObject && @$data["count"] !== 0) {            $userObject = new User();        }        $userObject->setDn($userObject->getData($data, "distinguishedname"));        $userObject->setUsername($userObject->getData($data, "samaccountname"));        $userObject->setUsernameCanonical($userObject->getData($data, "samaccountname"));        $userObject->setEmail($userObject->getData($data, "userprincipalname"));        $userObject->setEmailCanonical($userObject->getData($data, "userprincipalname"));        $userObject->setSuperAdmin((bool)false);        $userObject->setLastName($userObject->getData($data, "sn"));        $userObject->setFirstName($userObject->getData($data, "givenname"));        $adminCount = ($userObject->getData($data, "admincount") === null || $userObject->getData($data, "admincount") == 0) ? false : true;        $userObject->setAdminCount($adminCount);        if ($adminCount === true) {            $userObject->addRole(User::ROLE_ADMIN);            $userObject->setSuperAdmin((bool)true);        } else {            $userObject->addRole(User::ROLE_USER);        }        $userObject->setPassword(md5(uniqid($userObject->getData($data, 'cn'))));        $disable = $userObject->getData($data, "useraccountcontrol");        if ($disable == User::ACCOUNTDISABLE) {            $userObject->setEnabled(false);        } else if ($disable == User::NORMAL_ACCOUNT) {            $userObject->setEnabled(true);        } else {            $userObject->setEnabled(true);        }        $this->userManager->updateUser($userObject);        return $userObject;    }    /**     * {@inheritdoc}     */    public function refreshUser(UserInterface $user)    {        return $user;    }    /**     * {@inheritdoc}     */    public function supportsClass($class)    {        return $class === User::class;    }}