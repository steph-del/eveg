<?php

namespace eveg\UserRepartitionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use eveg\AppBundle\Entity\SyntaxonCore;

class DefaultController extends Controller
{
	/**
	* @ParamConverter("syntaxon_id", class="evegAppBundle:syntaxonCore")
	* @Security("has_role('ROLE_USER')") 
	*/
    public function addRepartitionAction(SyntaxonCore $syntaxon, $id, Request $request)
    {


    	// baseveg repartition maps to Json
		$serializer = $this->container->get('jms_serializer');
		$repDepFrJson = $serializer->serialize($syntaxon->getRepartitionDepFr(), 'json');
		$repUeJson = $serializer->serialize($syntaxon->getRepartitionEurope(), 'json');

        return $this->render('evegUserRepartitionBundle:Default:addRepartition.html.twig',
        	array('syntaxon'     => $syntaxon,
        		  'repDepFrJson' => $repDepFrJson,
        		  'repUeJson'    => $repUeJson,
        	));
    }
}
