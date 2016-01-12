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
use eveg\AppBundle\Entity\syntaxonRepartitionDepFr;
use eveg\AppBundle\Entity\syntaxonRepartitionEurope;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class AdminController extends Controller
{
	public function dashboardAction()
	{
		return $this->render('evegAppBundle:Admin:dashboard.html.twig');
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
		$em = $this->getDoctrine()->getManager();
		$entity = $em->getRepository('evegAppBundle:SyntaxonCore')->findByIdWithAllEntities(12);

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
        	//$entitie->setSyntaxonSlug(null);
        	//print(' '.$key);
        	/*if (($key % $batchSize) === 0) {
		        $em->flush();
		        $em->clear(); // Detaches all objects from Doctrine!
		        print(' '.$key);
		    }*/
		    /*if ($key == 100) {
		    	$em->flush();
		        $em->clear();
		        return $this->render('evegAppBundle:Admin:dashboard.html.twig');
		    }*/
        }

        //$em->flush();
        //$em->clear();

        print('   --ok--   ');

        return $this->render('evegAppBundle:Admin:dashboard.html.twig');


	}

	/**
	 * Import the repartition data (csv file from baseveg).
	 * Only available in dev mode.
	 *
	 */
	public function importRepartitionDepFrAction(Request $request)
	{
		// Only available in dev mode because of increasing memory and time limit
		if($this->container->get('kernel')->getEnvironment() != 'dev') {
			Throw new AccessDeniedException("This function ('importRepartitionDepFr') is only available in dev mode.");
		}

		$request = $this->getRequest();

		// Creates the form...
    	$form = $this->createFormBuilder()
            ->add('importFile', 'file')
            ->getForm();
        // ... and then hydrates it
        $form->handleRequest($request);

        // Job routine
		if($form->isValid()) {
			set_time_limit(1000);
			ini_set('memory_limit', '1024M');

			$batchSize = 100;   // $entity will be flushed and detached each $batchSize time (prevent memory overload)
			$i         = 0;     // just an incremental
			$cycle     = 0;     // counts the number of batch cycles

			// Recovers the uploaded file
			$file = $form->get('importFile')->getData();
			$mimeType = $file->getMimeType();
			$clientOriginaFilelName = $file->getClientOriginalName();

			// File type verification
			if(($mimeType !== 'text/csv') && (FALSE == preg_match('/\.csv/i', $clientOriginaFilelName))) {
				Throw new HttpException(400, "The file must be a csv (the file MIME type should be 'text/csv' or the file name should contain '.csv').");
			}

			// Moves the uploaded file
			$name = $file->getClientOriginalName();
			$dir = __DIR__.'/../../../../web/uploads/import/repartition/depfr';
			$file->move($dir, $name);

			// Variables
			$import = $this->csv_to_array($dir.'/'.$name, ';');		// pushes the csv data into an array
			$importKeys = array_column($import, 'id');				// gets the id values
			$importKeys = array_map('intval', $importKeys);			// makes sure that $importKeys contains integer data

			// Retrieves all syntaxonCore entities
			$em = $this->getDoctrine()->getManager();
			$entities = $em->getRepository('evegAppBundle:SyntaxonCore')->findAll();

			// For each entity, create a new syntaxonRepartitionDepFr object and attaches it
			// If the entity already have a syntaxonRepartitionDepFr then we just update it
			foreach ($entities as $key => $entity) {

				if($entity->getRepartitionDepFr()) {
					$newRepartition = $entity->getRepartitionDepFr();
				} else {
					$newRepartition = new syntaxonRepartitionDepFr;
				}

				$importKey = array_search($entity->getId(), $importKeys);
				if($importKey !== null) {
					$newRepartition
						->set01($import[$importKey]['01'])
						->set02($import[$importKey]['02'])
						->set03($import[$importKey]['03'])
						->set04($import[$importKey]['04'])
						->set05($import[$importKey]['05'])
						->set06($import[$importKey]['06'])
						->set07($import[$importKey]['07'])
						->set08($import[$importKey]['08'])
						->set09($import[$importKey]['09'])
						->set10($import[$importKey]['10'])
						->set11($import[$importKey]['11'])
						->set12($import[$importKey]['12'])
						->set13($import[$importKey]['13'])
						->set14($import[$importKey]['14'])
						->set15($import[$importKey]['15'])
						->set16($import[$importKey]['16'])
						->set17($import[$importKey]['17'])
						->set18($import[$importKey]['18'])
						->set19($import[$importKey]['19'])
						->set20($import[$importKey]['20'])
						->set21($import[$importKey]['21'])
						->set22($import[$importKey]['22'])
						->set23($import[$importKey]['23'])
						->set24($import[$importKey]['24'])
						->set25($import[$importKey]['25'])
						->set26($import[$importKey]['26'])
						->set27($import[$importKey]['27'])
						->set28($import[$importKey]['28'])
						->set29($import[$importKey]['29'])
						->set30($import[$importKey]['30'])
						->set31($import[$importKey]['31'])
						->set32($import[$importKey]['32'])
						->set33($import[$importKey]['33'])
						->set34($import[$importKey]['34'])
						->set35($import[$importKey]['35'])
						->set36($import[$importKey]['36'])
						->set37($import[$importKey]['37'])
						->set38($import[$importKey]['38'])
						->set39($import[$importKey]['39'])
						->set40($import[$importKey]['40'])
						->set41($import[$importKey]['41'])
						->set42($import[$importKey]['42'])
						->set43($import[$importKey]['43'])
						->set44($import[$importKey]['44'])
						->set45($import[$importKey]['45'])
						->set46($import[$importKey]['46'])
						->set47($import[$importKey]['47'])
						->set48($import[$importKey]['48'])
						->set49($import[$importKey]['49'])
						->set50($import[$importKey]['50'])
						->set51($import[$importKey]['51'])
						->set52($import[$importKey]['52'])
						->set53($import[$importKey]['53'])
						->set54($import[$importKey]['54'])
						->set55($import[$importKey]['55'])
						->set56($import[$importKey]['56'])
						->set57($import[$importKey]['57'])
						->set58($import[$importKey]['58'])
						->set59($import[$importKey]['59'])
						->set60($import[$importKey]['60'])
						->set61($import[$importKey]['61'])
						->set62($import[$importKey]['62'])
						->set63($import[$importKey]['63'])
						->set64($import[$importKey]['64'])
						->set65($import[$importKey]['65'])
						->set66($import[$importKey]['66'])
						->set67($import[$importKey]['67'])
						->set68($import[$importKey]['68'])
						->set69($import[$importKey]['69'])
						->set70($import[$importKey]['70'])
						->set71($import[$importKey]['71'])
						->set72($import[$importKey]['72'])
						->set73($import[$importKey]['73'])
						->set74($import[$importKey]['74'])
						->set75($import[$importKey]['75'])
						->set76($import[$importKey]['76'])
						->set77($import[$importKey]['77'])
						->set78($import[$importKey]['78'])
						->set79($import[$importKey]['79'])
						->set80($import[$importKey]['80'])
						->set81($import[$importKey]['81'])
						->set82($import[$importKey]['82'])
						->set83($import[$importKey]['83'])
						->set84($import[$importKey]['84'])
						->set85($import[$importKey]['85'])
						->set86($import[$importKey]['86'])
						->set87($import[$importKey]['87'])
						->set88($import[$importKey]['88'])
						->set89($import[$importKey]['89'])
						->set90($import[$importKey]['90'])
						->set91($import[$importKey]['91'])
						->set92($import[$importKey]['92'])
						->set93($import[$importKey]['93'])
						->set94($import[$importKey]['94'])
						->set95($import[$importKey]['95'])
					;
					
					$entity->setRepartitionDepFr($newRepartition);

					// Flush and detach entities each $batchSize time
					if (($i % $batchSize) === 0) {
				        $em->flush();
				        for ($i=($cycle*$batchSize)+$i; $i < $i=($cycle*$batchSize)+$i+$batchSize; $i++) { 
				        	$em->detach($entities[($cycle*$batchSize)+$i]);
				        }
				        $cycle = $cycle+1;
				    }
					$i = $i+1;

				}
				
	        }
	        // Flush the last entities (the last batch cycle may not be full)
	        $em->flush();
		    $em->clear();

		    // Flash and return
	        $this->get('session')->getFlashBag()->add(
	            'success',
	            count($import).' données ont été importées.'
	        );

	        return $this->render('evegAppBundle:Admin:importDepFr.html.twig', array(
				'form' => $form->createView()
			));
	    }

		return $this->render('evegAppBundle:Admin:importDepFr.html.twig', array(
			'form' => $form->createView()
		));
	}

	/**
	 * Import the European repartition data (csv file from baseveg).
	 * Only available in dev mode.
	 *
	 */
	public function importRepartitionEuropeAction(Request $request)
	{
		// Only available in dev mode because of increasing memory and time limit
		if($this->container->get('kernel')->getEnvironment() != 'dev') {
			Throw new AccessDeniedException("This function ('importRepartitionDepFr') is only available in dev mode.");
		}

		$request = $this->getRequest();

		// Creates the form...
    	$form = $this->createFormBuilder()
            ->add('importFile', 'file')
            ->getForm();
        // ... and then hydrates it
        $form->handleRequest($request);

        // Job routine
		if($form->isValid()) {
			set_time_limit(1000);
			ini_set('memory_limit', '1024M');

			$batchSize = 100;   // $entity will be flushed and detached each $batchSize time (prevent memory overload)
			$i         = 0;     // just an incremental
			$cycle     = 0;     // counts the number of batch cycles

			// Recovers the uploaded file
			$file = $form->get('importFile')->getData();
			$mimeType = $file->getMimeType();
			$clientOriginaFilelName = $file->getClientOriginalName();

			// File type verification
			if(($mimeType !== 'text/csv') && (FALSE == preg_match('/\.csv/i', $clientOriginaFilelName))) {
				Throw new HttpException(400, "The file must be a csv (the file MIME type should be 'text/csv' or the file name should contain '.csv').");
			}

			// Moves the uploaded file
			$name = $file->getClientOriginalName();
			$dir = __DIR__.'/../../../../web/uploads/import/repartition/europe';
			$file->move($dir, $name);

			// Variables
			$import = $this->csv_to_array($dir.'/'.$name, ';');		// pushes the csv data into an array
			$importKeys = array_column($import, 'id');				// gets the id values
			$importKeys = array_map('intval', $importKeys);			// makes sure that $importKeys contains integer data

			// Retrieves all syntaxonCore entities
			$em = $this->getDoctrine()->getManager();
			$entities = $em->getRepository('evegAppBundle:SyntaxonCore')->findAll();

			// For each entity, create a new syntaxonRepartitionEurope object and attaches it
			// If the entity already have a syntaxonRepartitionEurope then we just update it
			foreach ($entities as $key => $entity) {

				if($entity->getRepartitionEurope()) {
					$newRepartition = $entity->getRepartitionEurope();
				} else {
					$newRepartition = new SyntaxonRepartitionEurope;
				}

				$importKey = array_search($entity->getId(), $importKeys);
				if($importKey !== null) {
					$newRepartition
						->setMacronesia($import[$importKey]['macronesia'])
						->setIberian_peninsula($import[$importKey]['iberian_peninsula'])
						->setIsland($import[$importKey]['island'])
						->setScandinavia($import[$importKey]['scandinavia'])
						->setIreland($import[$importKey]['ireland'])
						->setUk($import[$importKey]['uk'])
						->setNetherlands($import[$importKey]['netherlands'])
						->setBelgium($import[$importKey]['belgium'])
						->setLuxembourg($import[$importKey]['luxembourg'])
						->setFrance($import[$importKey]['france'])
						->setGermany($import[$importKey]['germany'])
						->setPoland($import[$importKey]['poland'])
						->setCzech_republic($import[$importKey]['czech_republic'])
						->setSlovakia($import[$importKey]['slovakia'])
						->setSwitzerland($import[$importKey]['switzerland'])
						->setAustria($import[$importKey]['austria'])
						->setItaly($import[$importKey]['italy'])
						->setSlovenia_croatia($import[$importKey]['slovenia_croatia'])
						->setBosnia_montenegro_albania($import[$importKey]['bosnia_montenegro_albania'])
						->setSerbia_macedonia($import[$importKey]['serbia_macedonia'])
						->setHungary($import[$importKey]['hungary'])
						->setRomania_moldova($import[$importKey]['romania_moldova'])
						->setBulgaria($import[$importKey]['bulgaria'])
						->setGreece($import[$importKey]['greece'])
						->setFinland($import[$importKey]['finland'])
						->setEstonia_latvia_lithuania($import[$importKey]['estonia_latvia_lithuania'])
						->setBelarus($import[$importKey]['belarus'])
						->setUkraine($import[$importKey]['ukraine'])
						->setRussia($import[$importKey]['russia'])
					;

					$entity->setRepartitionEurope($newRepartition);

					// Flush and detach entities each $batchSize time
					if (($i % $batchSize) === 0) {
				        $em->flush();
				        for ($i=($cycle*$batchSize)+$i; $i < $i=($cycle*$batchSize)+$i+$batchSize; $i++) { 
				        	$em->detach($entities[($cycle*$batchSize)+$i]);
				        }
				        $cycle = $cycle+1;
				    }
					$i = $i+1;

				}
				
	        }
	        // Flush the last entities (the last batch cycle may not be full)
	        $em->flush();
		    $em->clear();

		    // Flash and return
	        $this->get('session')->getFlashBag()->add(
	            'success',
	            count($import).' données ont été importées (Europe).'
	        );

	        return $this->render('evegAppBundle:Admin:importEurope.html.twig', array(
				'form' => $form->createView()
			));
	    }

		return $this->render('evegAppBundle:Admin:importEurope.html.twig', array(
			'form' => $form->createView()
		));

	}


	/**
	 * Convert a comma separated file into an associated array.
	 * The first row should contain the array keys.
	 * Only available in dev mode (memory limit set up to 1024Mo).
	 * 
	 * Example:
	 * 
	 * @param string $filename Path to the CSV file
	 * @param string $delimiter The separator used in the file
	 * @return array
	 * @link http://gist.github.com/385876
	 * @author Jay Williams <http://myd3.com/>
	 * @copyright Copyright (c) 2010, Jay Williams
	 * @license http://www.opensource.org/licenses/mit-license.php MIT License
	 */
	public function csv_to_array($filename='', $delimiter=',')
	{
		if($this->container->get('kernel')->getEnvironment() != 'dev') {
			Throw new AccessDeniedException("This function ('csv_to_array') is only available in dev mode.");
		}

		if(!file_exists($filename) || !is_readable($filename))
		{
			throw new HttpException(404, $filename.' not found');
		}

		ini_set('memory_limit', '1024M');
		//$count = 0;
		$header = NULL;
		$data = array();
		if (($handle = fopen($filename, 'r')) !== FALSE)
		{
			while (($row = fgetcsv($handle, 10000, $delimiter)) !== FALSE)
			{
				if(!$header) {
					$header = $row;
				}
				else {
					$data[] = array_combine($header, $row);
				}
			}
			fclose($handle);
		}
		return $data;
		
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



}