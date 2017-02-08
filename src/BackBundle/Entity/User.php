<?php

namespace BackBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Gedmo\Mapping\Annotation As Gedmo;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints\DateTime;


/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    const ROLE_USER = 'ROLE_USER';
    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ACCOUNTDISABLE = 2;
    const NORMAL_ACCOUNT = 512;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var string
     *
     * @ORM\Column(name="dn", type="string", length=255, nullable=true)
     */
    protected $dn;
    
    protected $logged;

    /**
     * @var string
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    protected $firstName;

    /**
     * @var string
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     */
    protected $lastName;


    /**
     * @var string
     *
     */
    protected $sAMAccountName;
    /**
     * @var string
     */
    protected $fullName;

    /**
     * @var string
     *
     */
    protected $address;
    /**  /**
     * @var string
     *
     */
    protected $phone;
    /**
     * @var string
     *
     */
    protected $mobile;

    /**
     * @var string
     *
     */
    protected $city;
    /**
     * @var string
     *
     */
    protected $country;
    /**
     * @var string
     *
     */
    protected $postalCode;
    /**
     * @var string
     *
     */
    protected $office;
    /**
     * @var string
     *
     */
    protected $service;
    /**
     * @var string
     *
     */
    protected $group;
    /**
     * @var string
     *
     */
    protected $groupNotSelect;

    /**
     * @var string
     *
     * @ORM\Column(name="adminCount", type="string", length=255, nullable=true)
     */
    protected $adminCount;

    /**
     * @var text
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    protected $description;

    protected $memberOf;
    /**
     * @var text
     *
     */
    protected $at;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->logged = false;
        $this->memberOf = new ArrayCollection();


    }

    /*  -------  -----  ------  ---- ------*/
    /**
     * @param $array
     * @param $attr
     * @return null
     */
    function getData($array, $attr)
    {
        return isset($array[0][$attr][0]) ? $array[0][$attr][0] : null;
    }

    public function init($data)
    {
        if (!empty($data)) {
            $this->setDn($this->getData($data, "distinguishedname"));
            $this->setUsername($this->getData($data, "samaccountname"));
            $this->setUsernameCanonical($this->getData($data, "samaccountname"));
            $this->setEmail($this->getData($data, "userprincipalname"));
            $this->setEmailCanonical($this->getData($data, "userprincipalname"));
            $this->setSuperAdmin((bool) false);

            $adminCount = ($this->getData($data, "admincount") === null || $this->getData($data, "admincount") == 0) ? false : true;
            $this->setAdminCount($adminCount);
            if ($adminCount === true) {
                $this->addRole(static::ROLE_ADMIN);
                $this->setSuperAdmin((bool) true);
            } else {
                $this->setRoles(static::ROLE_USER);
            }

            $this->setPassword(md5(uniqid($this->getData($data, 'cn'))));


            $disable = $this->getData($data, "useraccountcontrol");
            if ($disable == static::ACCOUNTDISABLE) {
                $this->setEnabled(false);
            } else if ($disable == static::NORMAL_ACCOUNT) {
                $this->setEnabled(true);
            } else {
                $this->setEnabled(true);
            }

            $this->setSAMAccountName($this->getData($data, "samaccountname"));

            $this->setFullName($this->getData($data, "displayname"));
            $this->setLastName($this->getData($data, "sn"));
            $this->setFirstName($this->getData($data, "givenname"));
//            $this->setFirstName($this->getData($data, "displayname"));
            $this->setAddress($this->getData($data, "streetaddress"));
            $this->setCity($this->getData($data, "l"));
            $this->setPostalCode($this->getData($data, "postalcode"));
            $this->setCountry($this->getData($data, "c"));
            $this->setDescription($this->getData($data, "description"));

            $date = new \DateTime();
            $date->setTimestamp($this->getData($data, "lastlogontimestamp"));
//           echo date ("d/m/Y H:i:s", $this->getData($data, "lastlogontimestamp")) ;

            $this->setLastLogin($date);

            $telephone = $this->getData($data, "homephone");
            if ($telephone !== null) {
                $tel = explode("(0)", $telephone);
                if (count($tel) > 1) {
                    $arrayPhone = str_split($tel[1]);
                    $phone = "0";
                    foreach ($arrayPhone as $key => $number) {
                        if ($number != " ") {
                            $phone .= $number;
                        }
                    }
                    if (count(str_split($phone)) == 10)
                        $this->setPhone($telephone);
                }
            }
            $mobile = $this->getData($data, "telephonenumber");
            if ($mobile !== null) {
                $tel = explode("(0)", $mobile);
                if (count($tel) > 1) {
                    $arrayPhone = str_split($tel[1]);
                    $phone = "0";
                    foreach ($arrayPhone as $key => $number) {
                        if ($number != " ") {
                            $phone .= $number;
                        }
                    }
                    if (count(str_split($phone)) == 10)
                        $this->setMobile($phone);
                } else {
                    $this->setMobile($mobile);
                }
            }

            if (isset($data[0]["memberof"]) && !empty($data[0]["memberof"])) {
                foreach ($data[0]["memberof"] as $key => $val) {
                    if ($key !== "count") {
                        $this->addMemberOf($val);
                    }
                }

            }


            $login = $this->getData($data, "userprincipalname");
            $at = explode("@", $login);

            if (count($at) > 0) {
                $this->setAt(substr(strstr($login, '@', false), 1));
            }


        }

        return $this;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set sAMAccountName
     *
     * @param string $sAMAccountName
     *
     * @return User
     */
    public function setSAMAccountName($sAMAccountName)
    {
        $this->sAMAccountName = $sAMAccountName;

        return $this;
    }

    /**
     * Get sAMAccountName
     *
     * @return string
     */
    public function getSAMAccountName()
    {
        return $this->sAMAccountName;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     *
     * @return User
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return User
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return User
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set office
     *
     * @param string $office
     *
     * @return User
     */
    public function setOffice($office)
    {
        $this->office = $office;

        return $this;
    }

    /**
     * Get office
     *
     * @return string
     */
    public function getOffice()
    {
        return $this->office;
    }

    /**
     * Set service
     *
     * @param string $service
     *
     * @return User
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set group
     *
     * @param string $group
     *
     * @return User
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set groupNotSelect
     *
     * @param string $groupNotSelect
     *
     * @return User
     */
    public function setGroupNotSelect($groupNotSelect)
    {
        $this->groupNotSelect = $groupNotSelect;

        return $this;
    }

    /**
     * Get groupNotSelect
     *
     * @return string
     */
    public function getGroupNotSelect()
    {
        return $this->groupNotSelect;
    }

    /**
     * Set adminCount
     *
     * @param string $adminCount
     *
     * @return User
     */
    public function setAdminCount($adminCount)
    {
        $this->adminCount = $adminCount;

        return $this;
    }

    /**
     * Get adminCount
     *
     * @return string
     */
    public function getAdminCount()
    {
        return $this->adminCount;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return User
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Add member
     *
     * @param $member
     * @return $this
     */
    public function addMemberOf($member)
    {
        $this->memberOf[] = $member;
        return $this;
    }

    /**
     * Remove member
     * @param $member
     */
    public function removeMemberOf($member)
    {
        $this->memberOf->removeElement($member);
    }

    /**
     * Get member
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMember()
    {
        return $this->memberOf;
    }

    /* GETTERS AND SETTERS*/


    /**
     * Set dn
     *
     * @param string $dn
     * @return User
     */
    public function setDn($dn)
    {
        $this->dn = $dn;

        return $this;
    }


    /**
     * Get dn
     *
     * @return string
     */
    public function getDn()
    {
        return $this->dn;
    }

    /**
     * Set dn
     *
     * @param boolean $logged
     * @return User
     */
    public function setLogged($logged)
    {
        $this->logged = $logged;

        return $this;
    }


    /**
     * Get logged
     *
     * @return string
     */
    public function getLogged()
    {
        return $this->logged;
    }

    /**
     * Get at
     *
     * @return string
     */
    public function getAt()
    {
        return $this->at;
    }

    /**
     * Set at
     *
     * @param string $at
     * @return User
     */
    public function setAt($at)
    {
        $this->at = $at;

        return $this;
    }
}
