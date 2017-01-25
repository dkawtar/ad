<?php

namespace RestApiBundle\Controller;

use BackBundle\Entity\Company;
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
 * Class CompanyApiController
 * @package RestApiBundle\Controller
 */
class CompanyApiController extends Controller
{

    /**
     * * Returne la liste des sociétés.  <a href="../api/companies" target="_blank">Voir</a>
     * * <a href="../api/companies?limit=10&page=0" target="_blank">/api/companies?limit=10&page=0 </a> => Récupérer les 10 premiers.
     * * <a href="../api/companies?limit=10&page=1&search=ron" target="_blank">/api/companies?limit=10&page=1&search=ron</a> => Pagination avec une recherche
     * * Paramètres (Optionnels): 
     * *  - search : pour la recherche d'un mot clé.
     * *  - limit : nombre d'élément à retourner.
     * *  - page (par défault 0) => Pour la pagination.
     * @ApiDoc(
     *   resource = true,
     *   description = "Returne la liste des société.",
     *   statusCodes = { 
     *      200 = "Returned when successful",
     *     404 = "Returned when the Company is not found" }
     * ) <br>
     * @param Request $request
     * @return View
     */
    public function getCompaniesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $limit = ($request->get('limit') !== null && intval($request->get('limit')) > 0) ? intval($request->get('limit')) : null;
        $search = ($request->get('search') !== null) ? $request->get('search') : null;

        $start = $request->get('page');
        $start = $start && ($start != -1 || $start > -1) ? $start : 0;

        $entity = $em->getRepository('BackBundle:Company')->companyPaginationAPI($search,$start, $limit);
        
        $view = FOSView::create();
        if (!$entity) {
            $view->setData($entity)->setStatusCode(404);
        } else {
            $view->setData($entity)->setStatusCode(200);
        }
        return $view;
    }

    /**
     * * Retourne une société par son ID. <br>
     * * Paramètre obligatoire :
     * * - ID: ID Commerciale 
     * * - <a href="../api/companies/1" target="_blank">/api/companies/1 </a> .
     * @ApiDoc(
     *   resource = true,
     *   description = "Retourne un société par son ID.",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when the Company is not found"
     *   }
     * )
     * @param $id
     * @return View
     */
    public function getCompanyAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BackBundle:Company')->find($id);

        $view = FOSView::create();
        if (!$entity) { // throw $this->createNotFoundException('Data not found.');
            $view->setData($entity)->setStatusCode(404);
        } else {
            $view->setData($entity)->setStatusCode(200);
        }
        return $view;
    }
}
