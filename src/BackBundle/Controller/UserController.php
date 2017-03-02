<?phpnamespace BackBundle\Controller;use BackBundle\Entity\User;use BackBundle\Form\UserSessionType;use BackBundle\Form\UserType;use BackBundle\Form\UserEditType;use BackBundle\Form\UserEditPasswordType;use BackBundle\Form\UserEditInfoType;use Symfony\Bundle\FrameworkBundle\Controller\Controller;use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;use Symfony\Component\HttpFoundation\Response;use Symfony\Component\Ldap\LdapClient;/** * Class UserController * @package BackBundle\Controller * @Route("/user") */class UserController extends Controller{    /**     * @Route("/all", name="back_user_list")     * @param Request $request     * @return Response     */    public function indexAction(Request $request)    {        $ldap = $this->get("ldap_service");        if (!$ldap) {            die("Error");        }        $users = $ldap->getAllUser();        return $this->render('BackBundle:User:list.html.twig', array(            "users" => $users,        ));    }    /**     * @Route("/add", name="back_user_add")     * @param Request $request     * @return Response     */    public function addAction(Request $request)    {        $ad = $this->get("ldap_service");        $result = null;        $adGroups = $ad->getAllGroup();        $data["groups"] = $adGroups;        $user = new User();        $user->setAddress("Bis, 2 Avenue Foch");        $user->setPostalCode("94160");        $user->setCity("Saint-Mandé");        $user->setCountry("France");        $form = $this->createForm(UserType::class, $user);        $data ['form'] = $form->createView();        if ($form->handleRequest($request)->isValid()) {            $result = $ad->addUser($user);            $data["result"] = $result;        }        return $this->render('BackBundle:User:add-user.html.twig', $data);//      return $this->render('BackBundle:Default:add.html.twig', $data);    }    /**     * @Route("/edit/{login}", name="back_user_edit")     * @param Request $request     * @param $login     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response     */    public function editAction(Request $request, $login)    {        $ad = $this->get("ldap_service");//        $person = $ad->base64Decode($login);        $adUser = $ad->getUserByLogin($login);        $user = new User();        $user = $user->init($adUser);        if (null === $user->getDn()) {            $this->setFlash("custom-alerts alert alert-warning fade in",                '<i class="fa fa-warning"></i> L\'utilisateur demandé n\'existe plus.');            return $this->redirectToRoute('back_user_list');        }//        dump($user) //        or die;        $form = $this->createForm(UserEditType::class, $user);        $data = array('form' => $form->createView());        $data['user'] = $user;        $data['adUser'] = $adUser;        $adGroups = $ad->getAllGroup();        $data["groups"] = $adGroups;        if ($form->handleRequest($request)->isValid()) {            $result = $ad->editUser($user);            $data["result"] = $result !== null ? true : false;            if ($result) {                $this->setFlash("custom-alerts alert alert-success fade in",                    '<i class="fa fa-check"></i> Les modifications ont été bien enregistrées. ');            } else {                $this->setFlash("custom-alerts alert alert-warning fade in",                    '<i class="fa fa-check"></i> Une erreur s\'est produite lors de la modification.');            }            if ($result !== null) {                $data['user'] = $result;//                return $this->redirectToRoute('back_user_edit', array('login' => $result->getSAMAccountName()), 301);            }        }        return $this->render('BackBundle:User:edit-user.html.twig', $data);    }    /**     * @param Request $request     */    public function removeAction(Request $request)    {        die("User remove");    }    /**     * @Route("/get", name="back_user_get",options = {"expose"=true})     * @param Request $request     * @return JsonResponse     */    function getUserAjaxAction(Request $request)    {        $result = false;        $data = array();        if ($request->isXmlHttpRequest()) {            $username = $request->get('user');            $ad = $this->get("ldap_service");            $adGroup = $ad->getGroup($ad->base64Decode($username));            $adUser = $ad->getUser($ad->base64Decode($username));//            $adGroups = $ad->getAllGroup();            if (!empty($adUser)) {                $user = new User();                $data["fullname"] = $user->getData($adUser, "cn");                $data["email"] = $user->getData($adUser, "userprincipalname");                $data["group"] = $user->getData($adGroup, "objectClass=Group");                $data["login"] = $user->getData($adUser, "samaccountname");                $data["username"] = $user->getData($adUser, "userprincipalname");                $data["address"] = $user->getData($adUser, "st");                $data["villePostalCode"] = $user->getData($adUser, "l") . " " . $user->getData($adUser, "postalcode");                $data["country"] = $user->getData($adUser, "c");                $data["tel"] = $user->getData($adUser, "telephonenumber");                $data["office"] = $user->getData($adUser, "title");                $result = true;            }        }        return new Response (json_encode(array('result' => $result, "user" => $data)));    }    /**     * @Route("/remove", name="back_user_remove",options = {"expose"=true})     * @param Request $request     * @return JsonResponse     */    function removeUserAjaxAction(Request $request)    {        $result = false;        $message = "Erreur XMLHttpRequest";        if ($request->isXmlHttpRequest()) {            $tree = $request->get('tree');            $username = $request->get('username');            $ad = $this->get("ldap_service");            $result = $ad->removeUser($tree);            dump($result) or die;            if ($result) {                $message = "<b>" . $username . "</b> a été supprimé.";            } else {                $message = "<b>" . $username . "</b> n'a pas pu être supprimé.";            }        }        return new Response (json_encode(array('result' => $result, "message" => $message)));    }    /**     * @Route("/remove/group", name="back_user_remove_group",options = {"expose"=true})     * @param Request $request     * @return JsonResponse     */    function removeUserGroupAjaxAction(Request $request)    {        $result = false;        $message = "Erreur XMLHttpRequest";        if ($request->isXmlHttpRequest()) {            $dnUser = $request->get('dnUser');            $dnGroup = $request->get('dnGroup');            $username = $request->get('username');            $groupName = $request->get('groupName');            $ad = $this->get("ldap_service");            $result = $ad->removeUserGroup($dnGroup, $dnUser);            if ($result) {                $message = $username . " a été supprimé du groupe (" . $groupName . ".";            } else {                $message = $username . " n'a pas pu être supprimé du groupe .";            }        }        return new Response(json_encode(array('result' => $result, "message" => $message)));    }    /**     * @Route("/users/{ou}.html", name="back_user_by_ou")     * @param $ou     * @return Response     */    function UsersByOuAction($ou)    {        $ad = $this->get("ldap_service");        $tabOU = array("Issy-Les-Moulineaux", "Saint-mande", "Maroc", "Luxembourg", "Compteutilisateur", "Compteutilisateur");        if (in_array($ou, $tabOU)) {            $users = $ad->getAllUser($ou);        } else {            return $this->redirectToRoute('back_user_list');        }        return $this->render('BackBundle:User:list.html.twig', array(            "users" => $users,            "ou" => $ou        ));    }    /**     * @Route("/users/filter-{filter}.html", name="back_user_filter")     * @param $filter     * @return Response     */    function UsersFilterAction($filter)    {        $ad = $this->get("ldap_service");        $users = null;        $ou = null;        if ($filter === "locked") {            $users = $ad->getUserInfoComputer("locked");            $ou = "Bloqués";        } else if ($filter === "disabled") {            $users = $ad->getUserInfoComputer("disabled");            $ou = "Désactivés";        } else if ($filter === "expires") {            $users = $ad->getUserInfoComputer("expires");            $ou = "Expirés";        } else {            return $this->redirectToRoute('back_user_list');        }        return $this->render('BackBundle:User:list.html.twig', array(            "users" => $users,            "ou" => $ou,        ));    }//    /**//     * @Route("/user-edit/{person}", name="edit_user")//     * @param $person//     * @param Request $request//     * @return Response//     *///    function editUserAction(Request $request, $person)//    {//        $ad = $this->get("ldap_service");////        $person = $ad->base64Decode($person);//        $adUser = $ad->getUser($person);//        $user = new User();//        $user = $user->init($adUser);////        $form = $this->createForm(new UserEditType(), $user);//        $data = array('form' => $form->createView());//        $data['user'] = $user;//        $data['adUser'] = $adUser;//        $adGroups = $ad->getAllGroup();//        $data["groups"] = $adGroups;//////        if ($request->getSession()->has('result-edit')) {//            $data['result'] = $request->getSession()->get('result-edit');//            $request->getSession()->remove('result-edit');//        }////        if ($form->handleRequest($request)->isValid()) {//            $result = $ad->editUser($user, $person);//            $data["result"] = $result !== null ? true : false;//            if ($result !== null) {//                $data['user'] = $result;//                $request->getSession()->set('result-edit', true);//                return $this->redirectToRoute('edit_user', array('person' => $ad->base64Encode($result->getDn())), 301);//            }//        }//        return $this->render('BackBundle:User:edit-user.html.twig', $data);//    }    /**     * @Route("/edit/{person}.html", name="edit_password")     * @param $person     * @param Request $request     * @return Response     */    function editPasswordUserAction(Request $request, $person)    {        $ad = $this->get("ldap_service");        $person = $ad->base64Decode($person);        $adUser = $ad->getUserByUserPrincipalName($person);        $data = array();        $user = new User();        $user = $user->init($adUser);        if ($user->getAccess()) {            return $this->redirectToRoute('dashboard', array(), 301);        } else if (!empty($user->getDn()) && !$user->getAccess()) {            $result = null;            $form = $this->createForm(new UserEditPasswordType(), $user);            $data['form'] = $form->createView();            $data['user'] = $user;            if ($form->handleRequest($request)->isValid()) {                $result = $ad->changePasswordUser($user);                $data["result"] = $result;            }        }        return $this->render('BackBundle:User:edit-pwd-user.html.twig', $data);    }    /**     * @Route("/edit-info/user={person}.html", name="edit_info_user")     * @param Request $request     * @param $person     * @return Response     */    function editInfoUserAction(Request $request, $person)    {        $ad = $this->get("ldap_service");        $person = $ad->base64Decode($person);        $adUser = $ad->getUserByUserPrincipalName($person);        $data = array();        $user = new User();        $user = $user->init($adUser);        // $user->setTitle("Développeur");        //$user->setPhone("063189133");        if ($user->getAccess()) {            return $this->redirectToRoute('dashboard', array(), 301);        } elseif (!empty($user->getDn()) && !$user->getAccess()) {            $result = null;            $form = $this->createForm(new UserEditInfoType(), $user);            $data['form'] = $form->createView();            $data['user'] = $user;            if ($request->getSession()->has('result-edit-info')) {                $data['result'] = $request->getSession()->get('result-edit-info');                $request->getSession()->remove('result-edit-info');            }            if ($form->handleRequest($request)->isValid()) {                $result = $ad->editInfoUser($user, $person);                $request->getSession()->set('result-edit-info', $result);                return $this->redirectToRoute('edit_info_user', array('person' => $ad->base64Encode($person)), 301);            }        }        return $this->render('BackBundle:User:edit-info-user.html.twig', $data);    }    /*  * @doc custom-alerts alert alert-danger fade in  */    function setFlash($action, $value)    {        $this->container->get('session')->getFlashBag()->set($action, $value);    }}//    /**//     * @Route("/all", name="back_form_edit")//     * @param Request $request//     * @return Response//     *///    function editInfoUserAction(Request $request, $person)//    {////////}/* *  *  *         $data = null;        $OU = null;        $base = $this->container->getParameter('ldap_base_dn');        $ldap->bind($this->container->getParameter('ldap_search_dn'), $this->container->getParameter('ldap_pass'));        if ($ldap && $base) {            $query = "(&(objectClass=User)(objectClass=person)(!(objectClass=computer)))";            if ($OU == null) {                $tree = $base;            } else {                $tree = "OU=Users," . "OU=" . $OU . "," . $base;            }            $search = $ldap->find($base, $query);        }        dump($search); */