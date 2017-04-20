<?
// src/eveg/AppBundle/Controller/RepartitionFrMergeController.php

namespace eveg\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use eveg\AppBundle\Entity\syntaxonRepartitionDepFr;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Part of admin backend 
 */
class RepartitionFrMergeController extends Controller
{

	public function findSyntaxonsByLevelAction(Request $request, $level = null)
	{
		if($request->isXmlHttpRequest()) {

			$response = new JsonResponse();
			$level    = $request->get('level');

			$em 	   = $this->getDoctrine()->getManager();
	        $SCrepo    = $em->getRepository('evegAppBundle:SyntaxonCore');
	        $syntaxons = $SCrepo->findSyntaxonByLevelForMerging($level);
			return new JsonResponse($syntaxons); 
		}

		return null;
	}

	/**
 	 * @Security("has_role('ROLE_SUPER_ADMIN')")
 	 */
	public function defaultAction()
	{
		return $this->render('evegAppBundle:Admin:repartitionMergeFrDefault.html.twig');
	}

	/**
 	 * @Security("has_role('ROLE_SUPER_ADMIN')")
 	 */
	public function mergeDepFrAction(Request $request, $catminatCode = null, $nextLevel = null)
	{
		if($request->isXmlHttpRequest()) {

			$response = new JsonResponse();
			$catminatCode = $request->get('catminatCode');
			$nextLevel    = $request->get('nextLevel');

			// retrieves ioHelpers service
			$ioHelpers = $this->get('eveg_app.io_helpers');

			$em 	  = $this->getDoctrine()->getManager();
	        $SCrepo   = $em->getRepository('evegAppBundle:SyntaxonCore');
	        $children = $SCrepo->getDirectChildrenRepartitionDepFrByCatminatCode($catminatCode, $nextLevel);

	        // Push all repartitions data into a single table : $childrenDepFr
	        $childrenDepFr = array();
	        foreach ($children as $keyChild => $child) {
	        	array_push($childrenDepFr, $child->getRepartitionDepFr());
	        }
	        // Now we have an array of syntaxonRepartitionDepFr that contains all the departement repartition (fr). We have to merge the data into a single object (syntaxonRepartitionDepFr).

	        // Merge children data
	        $mergedChildrenDepFr = new syntaxonRepartitionDepFr();
	        foreach ($childrenDepFr as $keyChildren => $child) {
	      		$ioHelpers->merge2SynatxonDepFr($mergedChildrenDepFr, $child);
	        }

	        // Merge top repartition with children data
			$syntaxonRepartitionDepFr = $SCrepo->getSingleValidSyntaxonByCatminatCodeWithRepartitionDepFr($catminatCode);
			$ioHelpers->merge2SynatxonDepFr($syntaxonRepartitionDepFr->getRepartitionDepFr(), $mergedChildrenDepFr);

			// Flush
			$em->flush();

			$response->setData(array('done'  => 'done'));
			return $response;

		}
	}
}