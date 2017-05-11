<?php
// src/eveg/AppBundle/Controller/RepartitionFrMergeEuMapController.php

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
class RepartitionFrMergeEuMapController extends Controller
{

	/**
 	 * @Security("has_role('ROLE_SUPER_ADMIN')")
 	 */
	public function defaultAction()
	{
		return $this->render('evegAppBundle:Admin:repartitionMergeFrEuMapDefault.html.twig');
	}

	/**
 	 * @Security("has_role('ROLE_SUPER_ADMIN')")
 	 */
	public function mergeDepFrEuMapAction(Request $request)
	{
		if($request->isXmlHttpRequest()) {

			$response = new JsonResponse();

			// retrieves ioHelpers service
			$ioHelpers = $this->get('eveg_app.io_helpers');

			$em 	   = $this->getDoctrine()->getManager();
	        $SCrepo    = $em->getRepository('evegAppBundle:SyntaxonCore');
	        $level     = $request->get('level');
	        $syntaxons = $SCrepo->getSyntaxonsByLevelWithRepartitions($level);
	        
	        // Set Fr (country) = 1 if at less on departement = 1 
	        foreach ($syntaxons as $keySyntaxon => $syntaxon) {
	      		if(($ioHelpers->isThereAtLessOnePresentData($syntaxon->getRepartitionDepFr())) && ($syntaxon->getRepartitionEurope()->getFrance() != '1')) {
	      			$syntaxon->getRepartitionEurope()->setFrance('1');
	      		} 
	        }

			// Flush
			$em->flush();

			$response->setData(array('done'  => $syntaxons));
			return $response;

		}
	}
}