<?php

namespace RestApiBundle\Controller;

use BackBundle\Entity\Customer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Request\ParamFetcher;

use FOS\RestBundle\View\View as FOSView;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class CustomerApiController
 * @package RestApiBundle\Controller
 */
class CustomerApiController extends Controller
{

    /**
     * * Returne la liste des clients.  <a href="../api/customers" target="_blank">Voir</a>
     * * <a href="../api/customers?limit=10&page=0">/api/customers?limit=10&page=0 </a> => Récupérer les 10 premiers.
     * * <a href="../api/customers?search=jo">/api/customers?search=jo</a> => Pagination avec une recherche
     * * Paramètres (Optionnels): 
     * *  - search : pour la recherche d'un mot clé.
     * *  - limit : nombre d'élément à retourner.
     * *  - page (par défault 0) => Pour la pagination.
     * @ApiDoc(
     *   resource = true,
     *   description = "Returne la liste des clients.",
     *   statusCodes = { 
     *      200 = "Returned when successful",
     *     404 = "Returned when the Customer is not found" }
     * ) <br>
     * @param Request $request
     * @return View
     */
    public function getCustomersAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $limit = ($request->get('limit') !== null && intval($request->get('limit')) > 0) ? intval($request->get('limit')) : null;
        $search = ($request->get('search') !== null) ? $request->get('search') : null;

        $start = $request->get('page');
        $start = $start && ($start != -1 || $start > -1) ? $start : 0;

        $entity = $em->getRepository('BackBundle:Customer')->customerPaginationAPI($search,$start, $limit);


        $view = FOSView::create();
        if (!$entity) {
            $view->setData($entity)->setStatusCode(404);
        } else {
            $view->setData($entity)->setStatusCode(200);
        }
        return $view;
    }

    /**
     * * Retourne un objet client. <br>
     * * Paramètre obligatoire :
     * * - ID: ID du  Client 
     * * <a href="../api/customers/1">/api/customers/1 </a> .

     * @ApiDoc(
     *   resource = true,
     *   description = "Retourne un objet client.",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when the Customer is not found"
     *   }
     * )
     * @param $id
     * @return View
     */
    public function getCustomerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BackBundle:Customer')->find($id);

        $view = FOSView::create();
        if (!$entity) { // throw $this->createNotFoundException('Data not found.');
            $view->setData($entity)->setStatusCode(404);
        } else {
            $view->setData($entity)->setStatusCode(200);
        }
        return $view;
    }
}
