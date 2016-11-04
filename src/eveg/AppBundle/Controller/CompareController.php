<?php
// src/eveg/AppBundle/Controller/CompareController.php

namespace eveg\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpFoundation\JsonResponse;

class CompareController extends Controller
{

	public function getNbItemsAction()
	{
		// Session already started ?
		if(!$this->container->get('session')->isStarted()) {
			$session = new Session();
			$session->start();
		} else {
			$session = $this->container->get('session');
		}

		$nbItems = count($session->get('eveg_compare'));

		return new JsonResponse($nbItems);
	}

	public function getItemsAction()
	{
		// Session already started ?
		if(!$this->container->get('session')->isStarted()) {
			$session = new Session();
			$session->start();
		} else {
			$session = $this->container->get('session');
		}

		return new JsonResponse($session->get('eveg_compare'));
	}

	public function addItemAction()
	{
		// Session already started ?
		if(!$this->container->get('session')->isStarted()) {
			$session = new Session();
			$session->start();
		} else {
			$session = $this->container->get('session');
		}

		$compareArray = $session->get('eveg_compare');

		$nbItems = count($compareArray);

		if($nbItems >= 2) {
			return new JsonResponse("Error, you already have ".$nbItems." items for comparison, that is enough !");
		} else {

			$currentId = $session->get('idReferer');
			$compareArray[$currentId] = $session->get('syntaxonNameReferer');

			$session->set('eveg_compare', $compareArray);

			return new JsonResponse($session->get('eveg_compare'));
		}
	}

	public function removeItemAction(Request $request)
	{
		// Session already started ?
		if(!$this->container->get('session')->isStarted()) {
			$session = new Session();
			$session->start();
		} else {
			$session = $this->container->get('session');
		}

		$id = $request->get('id');

		$compareArray = $session->get('eveg_compare');

		$nbItems = count($compareArray);

		if($nbItems > 0 and $nbItems <= 2) {
			unset($compareArray[$id]);

			$session->set('eveg_compare', $compareArray);

			return new JsonResponse($session->get('eveg_compare'));
		} else {

			return new JsonResponse("Error, you have ".$nbItems." items for comparison, can't remove one !");
		}
	}

	public function emptyAction()
	{
		// Session already started ?
		if(!$this->container->get('session')->isStarted()) {
			$session = new Session();
			$session->start();
		} else {
			$session = $this->container->get('session');
		}

		$session->set('eveg_compare', '');

		return new JsonResponse($session->get('eveg_compare'));
	}

	public function compareAction()
	{
		// Session already started ?
		if(!$this->container->get('session')->isStarted()) {
			$session = new Session();
			$session->start();
		} else {
			$session = $this->container->get('session');
		}

		$compareArray = $session->get('eveg_compare');
		$nbItems = count($compareArray);
		$ids = array();

		if($nbItems == 2) {
			
			foreach ($compareArray as $key => $value) {
				array_push($ids, $key);
			}

			// Retrieve syntaxon according to user's rights
			$findGoodRepo = $this->get('eveg_app.get_syntaxon_according_user');
			// Get syntaxon1
			$syntaxon1 = $findGoodRepo->getSyntaxon($ids[0], $depFrFilter = null, $ueFilter = null);
			// Get syntaxon2
			$syntaxon2 = $findGoodRepo->getSyntaxon($ids[1], $depFrFilter = null, $ueFilter = null);

			// Retrieve synonyms according to user's rights
			$findGoodRepoSynonyms = $this->get('eveg_app.get_synonyms_according_user');
			$synonyms1 = $findGoodRepoSynonyms->getSynonyms($syntaxon1->getCatminatCode(), $depFrFilter = null, $ueFilter = null);
			$synonyms2 = $findGoodRepoSynonyms->getSynonyms($syntaxon2->getCatminatCode(), $depFrFilter = null, $ueFilter = null);

			// All parents
			$catCode = $this->get('eveg_app.catCode');
			$allParents1 = $catCode->getAllParents($syntaxon1->getCatminatCode());
			$allParents2 = $catCode->getAllParents($syntaxon2->getCatminatCode());

			// baseflor
			$species1 = $this->getDoctrine()->getRepository('evegAppBundle:Baseflor')
        					->findByCatminatCode($syntaxon1->getCatminatCode());
        	$species2 = $this->getDoctrine()->getRepository('evegAppBundle:Baseflor')
        					->findByCatminatCode($syntaxon2->getCatminatCode());
        	$ecologicalValuesAvg1 = $this->getDoctrine()->getRepository('evegAppBundle:Baseflor')
        					->findEcologicalAverageByCatminatCode($syntaxon1->getCatminatCode());
        	$ecologicalValuesAvg2 = $this->getDoctrine()->getRepository('evegAppBundle:Baseflor')
        					->findEcologicalAverageByCatminatCode($syntaxon2->getCatminatCode());

        	// repartition data
			$serializer = $this->container->get('jms_serializer');
			$merger = $this->get('user_repartition.merge');
			$repDepFrJson1 = $serializer->serialize($syntaxon1->getRepartitionDepFr(), 'json');
			$repDepFrJson2 = $serializer->serialize($syntaxon2->getRepartitionDepFr(), 'json');
        	$repDepFrUsersJson1 = $serializer->serialize($merger->mergeObsForSyntaxon($syntaxon1), 'json');
        	$repDepFrUsersJson2 = $serializer->serialize($merger->mergeObsForSyntaxon($syntaxon2), 'json');
			$repUeJson1 = $serializer->serialize($syntaxon1->getRepartitionEurope(), 'json');
			$repUeJson2 = $serializer->serialize($syntaxon2->getRepartitionEurope(), 'json');

			return $this->render('evegAppBundle:Default:compare.html.twig', array(
				'syntaxon1' 		   => $syntaxon1,
				'syntaxon2' 		   => $syntaxon2,
				'synonyms1' 		   => $synonyms1,
				'synonyms2' 		   => $synonyms2,
				'allParents1' 		   => $allParents1,
				'allParents2' 		   => $allParents2,
				'species1'			   => $species1,
				'species2'			   => $species2,
				'ecologicalValuesAvg1' => $ecologicalValuesAvg1,
				'ecologicalValuesAvg2' => $ecologicalValuesAvg2,
				'repDepFrJson1'		   => $repDepFrJson1,
				'repDepFrJson2'		   => $repDepFrJson2,
				'repDepFrUsersJson1'   => $repDepFrUsersJson1,
				'repDepFrUsersJson2'   => $repDepFrUsersJson2,
				'repUeJson1'		   => $repUeJson1,
				'repUeJson2'		   => $repUeJson2
			));
		} else {
			Throw new HttpException(500, "Can't compare ".$nbItems." item(s).");
		}
	}
}
