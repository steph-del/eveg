<?php
// src/eveg/AppBundle/Controller/AdminController.php

namespace eveg\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use eveg\AppBundle\Form\Dev\CatCodeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use eveg\UserBundle\Form\Type\AdminProfileFormType;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class AdminController extends Controller
{
	public function dashboardAction()
	{
		$em = $this->getDoctrine()->getManager();
        $lastFeedbacks = $em->getRepository('evegAppBundle:Feedback')->getLastFeedbacks();

		return $this->render('evegAppBundle:Admin:dashboard.html.twig', array(
			'lastFeedbacks' => $lastFeedbacks
		));
	}

	public function testAction()
	{

		// Getting all API routes
	    $apiRoutes = $this->getAllRoutes('api_');

	    // Getting catCode service
		$catCode = $this->get('eveg_app.catCode');

		// Get form
		$catCodeForm = $this->createForm(new CatCodeType());

		// Get test syntaxon
		// Retrieve syntaxon according to user's rights
		$findGoodRepo = $this->get('eveg_app.get_syntaxon_according_user');
		$entity = $findGoodRepo->getSyntaxon(12, $depFrFilter = null, $ueFilter = null);

		// repartitionDepFr to Json
		$serializer = $this->container->get('jms_serializer');
		$repDepFrJson = $serializer->serialize($entity->getRepartitionDepFr(), 'json');

		return $this->render('evegAppBundle:Admin:test.html.twig', array(
							'catCodeForm' => $catCodeForm->createView(),
							'apiRoutes' => $apiRoutes,
							'entity' => $entity,
							'repDepFrJson' => $repDepFrJson,
		));

	}

	public function usersAction()
	{
		// Getting all users
		$userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();

		return $this->render('evegAppBundle:Admin:users.html.twig', array('users' => $users));
	}

	public function editUserAction($id)
	{
		$userForm = $this->createForm(new AdminProfileFormType($id));

		return $this->render('evegAppBundle:Admin:editUser.html.twig', array(
							'form' => $userForm->createView()
		));
	}

	public function deleteUserAction($id)
	{
		$userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('id'=>$id));

        // ADD A FORM TO VALIDATE THIS ACTION

        $em = $this->getDoctrine()->getManager();

        $em->remove($user);

        $em->flush();

        // flashbag
		$this->get('session')->getFlashBag()->add(
            'info',
            'L\'utilisateur "' . $user->getUserName() . '" a été supprimé.'
        );
        return $this->redirect($this->generateUrl('eveg_admin_users'));


	}

	// Dev function. Checks the CATMINAT code and return a set of information about it (parent, children...)
	public function devCatCodeAction()
	{

		$catCode = $this->get('eveg_app.catCode');

		$request = $this->container->get('request');

    			$catminatCode = '';
        		$catminatCode = $request->get('catminatCode');

        		$response = new JsonResponse();

        			// Ok, CATMINAT code is weel formed
        			if($catminatCode != '') {

        				$wellFormed = $catCode->checkCatminatCode($catminatCode);
	        			$directChild = $catCode->getDirectChild($catminatCode, true);
	        			$allChildren = $catCode->getChildren($catminatCode, true);

	        			$response->setData(array(
	        				'wellFormed'  => $wellFormed,
						    'directChild' => $directChild,
						    'allChildren' => $allChildren,
						));
					}

				return $response;
	}

	public function generateAllSlugsAction()
	{
		set_time_limit(1000);

		$batchSize = 20;

		$em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('evegAppBundle:SyntaxonCore')->findAll();

        foreach ($entities as $key => $entity) {
        	$entity->setSyntaxonSlug(null);
        	$em->persist($entity);
        	$em->flush();
        	$em->clear();
        }

        print('   --ok--   ');

        return $this->render('evegAppBundle:Admin:dashboard.html.twig');

	}

	/**
	 * getAllRoutes
	 * Returns an array with all routes containing $prefix
	 * @param $prefix
	 * @return array
	 */
	public function getAllRoutes($prefix = null) {
	    if(is_string($prefix)) $pattern = '/^'.$prefix.'/'; // starts by $prefix
	        else $pattern = '/.*/';
	    $this->allRoutes = array();
	    foreach($this->container->get('router')->getRouteCollection()->all() as $nom => $route) {
	        if(preg_match($pattern, $nom)) $this->allRoutes[$nom] = $route;
	    }
	    return $this->allRoutes;
	}

	public function getDocumentsInfosAction()
	{
		$nbEvegItems 		  = $this->get('eveg_app.nbItems');
		$nbSpreadsheets 	  = $nbEvegItems->getNbSpreadsheets();
		$nbPdfs 			  = $nbEvegItems->getNbPdfs();
		$nbHttpLinks 		  = $nbEvegItems->getNbHttpLinks();
		$nbPhotos 			  = $nbEvegItems->getNbPhotos();
		$mostDwnFiles		  = $nbEvegItems->getMostDownloadedFiles();dump($mostDwnFiles);
		$sumDwnSpreadsheets   = $nbEvegItems->getSumDownloadedSpreadsheets();
		$sumDwnPdfs			  = $nbEvegItems->getSumDownloadedPdfs();
		$sumDwnHttpLinks	  = $nbEvegItems->getSumDownloadedHttpLinks();

		return $this->render('evegAppBundle:Admin/Fragments:documentsThumbnail.html.twig', array(
			'nbSpreadsheets' 	   => $nbSpreadsheets,
			'nbPdfs' 		 	   => $nbPdfs,
			'nbHttpLinks' 	 	   => $nbHttpLinks,
			'nbPhotos'		 	   => $nbPhotos,
			'mostDwnFiles'	 	   => $mostDwnFiles,
			'sumDwnSpreadsheets'   => $sumDwnSpreadsheets,
			'sumDwnPdfs'		   => $sumDwnPdfs,
			'sumDwnHttpLinks'	   => $sumDwnHttpLinks,
		));
	}


}