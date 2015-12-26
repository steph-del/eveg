<?php
// src/eveg/AppBundle/Controller/SyntaxonSearchcontroller.php

namespace eveg\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use eveg\AppBundle\Entity\SyntaxonCore;
use eveg\AppBundle\Form\SyntaxonCoreType;
use JMS\Serializer\SerializationContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class SyntaxonSearchController extends Controller
{
	public function simpleSearchAction($format)
	{

		$request = $this->container->get('request');

		$serializer = $this->container->get('jms_serializer');

		$searchedTerm = $request->get('term');
		$useSynonyms = $request->get('useSynonyms');
		//$depFrFilter = $request->get('depFrFilter');

		$session = new Session();
		$depFrFilter = $session->get('depFrFilterArray');
		
		if(!$searchedTerm)
		{
			throw new \Exception('Empty variable \'term\'.');
		}
		if(!$useSynonyms)
		{
			$useSynonyms = true;
		}
		$searchedTerm = $searchedTerm . ' ';
	    $searchedTerm = str_replace(' ', '%', $searchedTerm);

	    $result = $this->getDoctrine()
	    			   ->getManager()
	    			   ->getRepository('evegAppBundle:SyntaxonCore')
	    			   ->findForSearchEngine($searchedTerm, $useSynonyms, $depFrFilter
	    			   	);

		$serializedResult = $serializer->serialize($result, $format, SerializationContext::create()->setGroups(array('searchEngine')));

		$response = new Response();
		$response->setContent($serializedResult);
		if($format == 'json')
		{
			$response->headers->set('Content-Type', 'application/json');
		} elseif($format == 'xml') {
			$response->headers->set('Content-Type', 'application/xml');
		}
		
    	return $response;
	}
}