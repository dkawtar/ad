<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Log;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class BackController
 * @package BackBundle\Controller
 */
class BackController extends Controller
{
    /**
     * @Route("/", name="back_home")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $ip = $request->getClientIp();
        $em = $this->getDoctrine()->getManager();
        $log = $em->getRepository('BackBundle:Log')->findOneByIp($ip);
        if (null === $log) {
            $log = new Log();
            $log->setIp($ip);
            $em->persist($log);
            $em->flush();

        }
        $log->setCount($log->getCount() + 1);
        $log->setUserAgent($request->headers->get('User-Agent'));
        $em->flush();
        return $this->render('BackBundle:Pages:index.html.twig');
    }
}
