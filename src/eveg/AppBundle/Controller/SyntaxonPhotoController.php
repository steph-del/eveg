<?php
// src/eveg/AppBundle/Controller/SyntaxonPhotoController.php

namespace eveg\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use eveg\AppBundle\Entity\SyntaxonCore;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use eveg\AppBundle\Form\Type\SyntaxonCorePhotoType;

/**
 * SyntaxonPhoto controller.
 *
 */
class SyntaxonPhotoController extends Controller
{
	/**
	* @ParamConverter("syntaxon", class="evegAppBundle:syntaxonCore",
	* 	options= { "repository_method" = "findByIdWithAllEntities" })
	* 
	*/
	public function addPhotoAction(SyntaxonCore $syntaxon, $id, Request $request)
	{
		
		//$syntaxonCore = new SyntaxonCore();
		
		$request = $this->getRequest();

		// Creates the form...
    	$form = $this->createForm(new SyntaxonCorePhotoType());

        // ... and then hydrates it
        $form->handleRequest($request);

        // Job routine
		if($form->isValid()) {

			$data = $form->getData();

			$photos = $data->getSyntaxonPhotos();
			dump($photos);
			$nbPhotos = count($photos);

			/*
			$photos = $syntaxon->getSyntaxonPhotos();

			foreach ($photos as $key => $photo) {
				$photo->setSyntaxonCore($syntaxon);
			}
			*/

			$em = $this->getDoctrine()->getManager();
      		$em->persist($syntaxon);
      		$em->flush();

      		if ($nbPhotos == 1) {
      			$request->getSession()->getFlashBag()->add('success', 'Une nouvelle photo enregistrée.');
      		} elseif ($nbPhotos > 1) {
      			$request->getSession()->getFlashBag()->add('success', $nbPhotos.' nouvelles photos enregistrées.');
      		} else {
      			$request->getSession()->getFlashBag()->add('warning', 'Aucune nouvelle photo enregistrée.');
      		}
      		
		}

		return $this->render('evegAppBundle:Default:addPhoto.html.twig', array(
			'syntaxon' => $syntaxon,
			'form' => $form->createView()
		));
	}
}