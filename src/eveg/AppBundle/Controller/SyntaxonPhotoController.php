<?php
// src/eveg/AppBundle/Controller/SyntaxonPhotoController.php

namespace eveg\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use eveg\AppBundle\Entity\SyntaxonCore;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use eveg\AppBundle\Form\Type\SyntaxonCorePhotoType;
use eveg\AppBundle\Entity\SyntaxonPhoto;
use eveg\AppBundle\Form\Type\SyntaxonPhotoType;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * SyntaxonPhoto controller.
 *
 */
class SyntaxonPhotoController extends Controller
{
	/**
	* @ParamConverter("syntaxon", class="evegAppBundle:syntaxonCore")
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
			$nbPhotos = count($photos);

			$currentUser = $this->getUser();

			foreach ($photos as $key => $photo) {
				$photo->setSyntaxonCore($syntaxon);
				$photo->setUser($currentUser);
				$photo->setUploadedAt(new \DateTime('now'));
				
				$syntaxon->addSyntaxonPhoto($photo);
			}

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

      		return $this->redirect($this->generateUrl('eveg_show_one', 
        			array('id' => $id)
        		));
      		
		}

		return $this->render('evegAppBundle:Default:addPhoto.html.twig', array(
			'syntaxon' => $syntaxon,
			'form' => $form->createView()
		));
	}

	/**
	* @ParamConverter("syntaxon", class="evegAppBundle:syntaxonCore")
	* @ParamConverter("photo", class="evegAppBundle:SyntaxonPhoto", options={"id" = "idPhoto"})
	* 
	*/
	public function editAction(SyntaxonCore $syntaxon, $id, SyntaxonPhoto $photo)
	{
		
		// author of the photo == current user ?
		if($photo->getUser() !== $this->getUser()) {
			Throw new HttpException(401, 'You are not allowed to edit this file.');
		}

		$request = $this->getRequest();

		// Creates the form...
    	$form = $this->createForm(new SyntaxonPhotoType($this->get('security.authorization_checker')), $photo);

        // ... and then hydrates it
        $form->handleRequest($request);

        // Job routine
		if($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
      		$em->persist($photo);
      		$em->flush();

      		$request->getSession()->getFlashBag()->add('success', 'Les informations relative à votre photo ont été modifiées.');

      		return $this->redirect($this->generateUrl('eveg_show_one', 
        			array('id' => $id)
        		));
		}

		return $this->render('evegAppBundle:Default:editPhoto.html.twig', array(
			'syntaxon' => $syntaxon,
			'form' => $form->createView()
		));
	}

	public function showPhotosAction($id)
	{
		// Retrieve syntaxon according to user's rights
		$findGoodRepo = $this->get('eveg_app.get_syntaxon_according_user');
		$syntaxon = $findGoodRepo->getSyntaxon($id);

		return $this->render('evegAppBundle:Default:showPhotos.html.twig', array(
			'syntaxon' => $syntaxon
		));
	}

	/**
	* @ParamConverter("photo", class="evegAppBundle:SyntaxonPhoto", options={"id" = "idPhoto"})
	* 
	*/
	public function deletePhotoAction(SyntaxonPhoto $photo)
	{

		// author of the photo == current user ?
		if($photo->getUser() !== $this->getUser()) {
			Throw new HttpException(401, 'You are not allowed to delete this picture.');
		}
		// Get entity manager
		$em = $this->getDoctrine()->getManager();

		// Get file title
		$photoTitle = $photo->getTitle();

		// Remove file
		$em->remove($photo);
		$em->flush();

		// Flash
        $this->get('session')->getFlashBag()->add(
            'success',
            'La photo "'.$photoTitle.'" a été supprimée'
        );

        // Redirect to referer
        $referer = $this->getRequest()->headers->get('referer');
        return $this->redirect($referer);

	}
}