<?php
// src/eveg/AppBundle/Controller/AdminController.php

namespace eveg\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use eveg\AppBundle\Entity\SyntaxonCore;


class AdminController extends Controller
{
	public function dashboardAction()
	{
		return $this->render('evegAppBundle:Admin:dashboard.html.twig');
	}

	public function testAction()
	{

		$catminat = '01/1.1.1';
		$syntaxon = $this->getDoctrine()
        ->getRepository('evegAppBundle:SyntaxonCore')
        ->findOneByCatminatCode($catminat);

	    if (!$syntaxon) {
	        throw $this->createNotFoundException(
	            'Aucun syntaxon trouvé pour le code catminat : '.$catminat
	        );
	    }
		
		// Getting CatCode service
		$catCode = $this->container->get('eveg_app.catcode');
		
		$test_code = $syntaxon->getCatminatCode();
		
		$test = $catCode->testCatminat($test_code);
		
		return $this->render('evegAppBundle:Admin:test.html.twig', array(
																		  'nbSlashes' => $test['nbSlashes'],
																		  'fs' => $test['firstSlash'],
																		  'ls' => $test['lastSlash'],
																		  'testCode' => $test_code,
																		  'habCode' => $test['habCode'],
																		  'coreCode' => $test['coreCode'],
																		  'assCode' => $test['assCode'],
																		  'exploded' => $test['exploded'],
																		  'level' => $test['level'],
																		  'cleaned' => $test['cleaned'],
																		  'test' => $test['test'],
																		  'parentCode' => $test['parentCode'],
																		  'parentsCodes' => $test['parentsCodes']));
	}
}