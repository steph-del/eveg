<?php
// src/eveg/AppBundle/Controller/AdminController.php

namespace eveg\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use eveg\AppBundle\Form\Dev\CatCodeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use eveg\UserBundle\Form\Type\AdminProfileFormType;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use eveg\AppBundle\Entity\Infos;

class AdminController extends Controller
{
	/*
 	 * @Security("has_role('ROLE_ADMIN')")
 	 */
	public function dashboardAction()
	{
		$em = $this->getDoctrine()->getManager();
        $lastFeedbacks = $em->getRepository('evegAppBundle:Feedback')->getLastFeedbacks();

		return $this->render('evegAppBundle:Admin:dashboard.html.twig', array(
			'lastFeedbacks' => $lastFeedbacks
		));
	}

	/**
 	 * @Security("has_role('ROLE_SUPER_ADMIN')")
 	 */
	public function usersAction()
	{
		// Getting all users
		$userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();

		return $this->render('evegAppBundle:Admin:users.html.twig', array('users' => $users));
	}

	/**
 	 * @Security("has_role('ROLE_SUPER_ADMIN')")
 	 */
	public function editUserAction($id)
	{
		$userForm = $this->createForm(new AdminProfileFormType($id));

		return $this->render('evegAppBundle:Admin:editUser.html.twig', array(
							'form' => $userForm->createView()
		));
	}

	/**
 	 * @Security("has_role('ROLE_SUPER_ADMIN')")
 	 */
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
	/**
 	 * @Security("has_role('ROLE_SUPER_ADMIN')")
 	 */
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

	/**
 	 * @Security("has_role('ROLE_SUPER_ADMIN')")
 	 */
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
	public function getAllRoutesAction($prefix = null) {
	    if(is_string($prefix)) $pattern = '/^'.$prefix.'/'; // starts by $prefix
	        else $pattern = '/.*/';
	    $this->allRoutes = array();
	    foreach($this->container->get('router')->getRouteCollection()->all() as $nom => $route) {
	        if(preg_match($pattern, $nom)) $this->allRoutes[$nom] = $route;
	    }
	    return $this->allRoutes;
	}

	/**
 	 * @Security("has_role('ROLE_ADMIN')")
 	 */
	public function getDocumentsInfosAction()
	{
		$nbEvegItems 		  = $this->get('eveg_app.nbItems');
		$nbSpreadsheets 	  = $nbEvegItems->getNbSpreadsheets();
		$nbPdfs 			  = $nbEvegItems->getNbPdfs();
		$nbHttpLinks 		  = $nbEvegItems->getNbHttpLinks();
		$nbPhotos 			  = $nbEvegItems->getNbPhotos();
		$mostDwnFiles		  = $nbEvegItems->getMostDownloadedFiles();
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

	/**
 	 * @Security("has_role('ROLE_SUPER_ADMIN')")
 	 */
	public function listDocumentsAction()
	{
        $em = $this->getDoctrine()->getManager();
        $files = $em->getRepository('evegAppBundle:SyntaxonFile')->findAll();
        $httpLinks = $em->getRepository('evegAppBundle:SyntaxonHttpLink')->findAll();
        $photos = $em->getRepository('evegAppBundle:SyntaxonPhoto')->findAll();

        $types = array();
        foreach ($files as $key => $file) {
            array_push($types, $file->getType());
        }

        $uniqueTypes = array_count_values($types);
        if(!array_key_exists('spreadsheet', $uniqueTypes)) $uniqueTypes['spreadsheet'] = 0;   // avoid empty key
        if(!array_key_exists('pdf', $uniqueTypes)) $uniqueTypes['pdf'] = 0;                   // avoid empty key
        

        return $this->render('evegAppBundle:Admin:docs.html.twig', array(
            'usersFiles' => $files,
            'nbSpreadsheets' => ($uniqueTypes['spreadsheet']),
            'nbPdfs' => ($uniqueTypes['pdf']),
            'usersHttpLinks' => ($httpLinks),
            'usersPhotos' => $photos
        ));
	}

	/**
 	 * @Security("has_role('ROLE_SUPER_ADMIN')")
 	 */
	public function infosAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$infos = $em->getRepository('evegAppBundle:Infos')->findAll()[0];
		//$infos = new Infos();

		$formBuilder = $this->get('form.factory')->createBuilder('form', $infos);
		$formBuilder
	      ->add('evegVersion',     'text')
	      ->add('basevegVersion',  'text')
	      ->add('baseflorVersion', 'text')
	      ->add('lastUpdate',      'datetime')
	      ->add('save',            'submit')
	    ;
	    $form = $formBuilder->getForm();

	    $form->handleRequest($request);

	    if($form->isValid()) {
			$em->persist($infos);
			$em->flush();
	    }

	    return $this->render('evegAppBundle:Admin:infos.html.twig', array(
	      'form' => $form->createView(),
	    ));

	}

}