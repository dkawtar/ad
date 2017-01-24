<?php

namespace RestApiBundle\Controller;

use BackBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Request\ParamFetcher;


use FOS\RestBundle\View\View as FOSView;

/**
 * Class UserApiController
 * @package RestApiBundle\Controller
 */
class UserApiController extends Controller
{

    /**
     * Returne un objet utilisateur.
     *
     * @ApiDoc(
     *   resource = true,
     *   description = "Return an user identified by login/password",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when the user is not found"
     *   }
     * )
     * @Get("/users/login/username={username}&password={password}")
     * @param $username
     * @param $password
     * @return View
     */
    public function checkSessionAction($username, $password)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('BackBundle:User')->findOneByUsernameCanonical();
        if ($user == null) {
            $user = $em->getRepository('BackBundle:User')->findOneByEmailCanonical($username);
        }
        $view = FOSView::create();

        /* 
        $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
         $isValid = $encoder->isPasswordValid($user->getPassword(), $password, $user->getSalt());
        */

        if ($user) {
            $encoder = $this->container->get('security.password_encoder');
            if (true === $encoder->isPasswordValid($user, $password)) {
                $view->setData($user)->setStatusCode(200);
                return $view;
            }
        }

        $view->setData(array())->setStatusCode(404);
        return $view;
    }

    /**
     * Returne un objet utilisateur.
     * @ApiDoc(
     *   resource = true,
     *   description = "Return an user identified by login/password",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when the user is not found"
     *   }
     * )
     * @Post("/users/connexion")
     *
     * @param ParamFetcher $paramFetcher Paramfetcher
     *
     * @RequestParam(name="username", nullable=false, strict=true, description="login de l'utilisateur.")
     * @RequestParam(name="password", nullable=false, strict=true, description="Mot de pass.")
     * @return array
     */
    public function checkUserAction(ParamFetcher $paramFetcher)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('BackBundle:User')->findOneByUsernameCanonical($paramFetcher->get('username'));
        if ($user == null) {
            $user = $em->getRepository('BackBundle:User')->findOneByEmailCanonical($paramFetcher->get('username'));
        }

        $view = FOSView::create();
        if ($user) {
             $encoder = $this->container->get('security.password_encoder');
            if (true === $encoder->isPasswordValid($user, $paramFetcher->get('password'))) {
                $view->setData($user)->setStatusCode(200);
                return $view;
            }
        }
        $view->setData(array())->setStatusCode(404);
        return $view;
    }
}
