<?php
// src/eveg/AppBundle/Controller/SyntaxonHttpLinkController.php

namespace eveg\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use eveg\AppBundle\Entity\SyntaxonCore;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use eveg\AppBundle\Form\Type\SyntaxonCoreHttpLinkType;
use eveg\AppBundle\Entity\SyntaxonHttpLink;
use eveg\AppBundle\Form\Type\SyntaxonHttpLinkType;
use Symfony\Component\HttpKernel\Exception\HttpException;
//use Symfony\Component\HttpFoundation\Response;

/**
 * SyntaxonHttpLink controller.
 *
 */
class SyntaxonHttpLinkController extends Controller
{
	/**
	* @ParamConverter("syntaxon", class="evegAppBundle:syntaxonCore",
	* 	options= { "repository_method" = "findByIdWithAllEntities" })
	* 
	*/
	public function addHttpLinkAction(SyntaxonCore $syntaxon, $id, Request $request)
	{
		
		$request = $this->getRequest();

		// Creates the form...
    	$form = $this->createForm(new SyntaxonCoreHttpLinkType());

        // ... and then hydrates it
        $form->handleRequest($request);

        // Job routine
		if($form->isValid()) {

			$data = $form->getData();

			$httpLinks = $data->getSyntaxonHttpLinks();
			$nbHttpLinks = count($httpLinks);

			$currentUser = $this->getUser();

			foreach ($httpLinks as $key => $httpLink) {
				if(!preg_match('/^http:\/\//', $httpLink->getLink())) {
					$httpLink->setLink('http://'.$httpLink->getLink());
				}
				$httpLink->setSyntaxonCore($syntaxon);
				$httpLink->setUser($currentUser);
				$httpLink->setUpdatedAt(new \DateTime('now'));

				$syntaxon->addSyntaxonHttpLink($httpLink);
			}

			$em = $this->getDoctrine()->getManager();
      		$em->persist($syntaxon);
      		$em->flush();

      		if ($nbHttpLinks == 1) {
      			$request->getSession()->getFlashBag()->add('success', 'Un nouveau lien enregistré.');
      		} elseif ($nbHttpLinks > 1) {
      			$request->getSession()->getFlashBag()->add('success', $nbHttpLinks.' nouveaux liens enregistrés.');
      		} else {
      			$request->getSession()->getFlashBag()->add('warning', 'Aucun nouveau lien enregistré.');
      		}

      		return $this->redirect($this->generateUrl('eveg_show_one', 
        			array('id' => $id)
        		));
      		
		}

		return $this->render('evegAppBundle:Default:addHttpLink.html.twig', array(
			'syntaxon' => $syntaxon,
			'form' => $form->createView()
		));
	}

	/**
	* @ParamConverter("syntaxon", class="evegAppBundle:syntaxonCore",
	* 	options= { "repository_method" = "findByIdWithAllEntities" })
	* @ParamConverter("httpLink", class="evegAppBundle:SyntaxonHttpLink", options={"id" = "idHttpLink"})
	* 
	*/
	public function editHttpLinkAction(SyntaxonCore $syntaxon, $id, SyntaxonHttpLink $httpLink)
	{
		
		// author of the httpLink == current user ?
		if($httpLink->getUser()->getId() !== $this->getUser()->getId()) {
			Throw new HttpException(401, 'You are not allowed to edit this link.');
		}

		$request = $this->getRequest();

		// Creates the form...
    	$form = $this->createForm(new SyntaxonHttpLinkType($this->get('security.authorization_checker')), $httpLink);

        // ... and then hydrates it
        $form->handleRequest($request);

        // Job routine
		if($form->isValid()) {
			if(!preg_match('/^http:\/\//', $httpLink->getLink())) {
				$httpLink->setLink('http://'.$httpLink->getLink());
			}
			$httpLink->setUpdatedAt(new \DateTime('now'));
			$em = $this->getDoctrine()->getManager();
      		$em->persist($httpLink);
      		$em->flush();

      		$request->getSession()->getFlashBag()->add('success', 'Les informations relative à votre lien ont été modifiées.');

      		return $this->redirect($this->generateUrl('eveg_show_one', 
        			array('id' => $id)
        		));
		}

		return $this->render('evegAppBundle:Default:editHttpLink.html.twig', array(
			'syntaxon' => $syntaxon,
			'form' => $form->createView()
		));
	}

	/**
	* @ParamConverter("syntaxon", class="evegAppBundle:syntaxonCore",
	* 	options= { "repository_method" = "findByIdWithAllEntities" })
	* @ParamConverter("httpLink", class="evegAppBundle:SyntaxonHttpLink", options={"id" = "idHttpLink"})
	* 
	*/
	public function getHttpLinkAction(SyntaxonCore $syntaxon, $id, SyntaxonHttpLink $httpLink)
	{

		$visibility = $httpLink->getVisibility();
		if($visibility == 'private') {
			if($this->get('security.context')->isGranted('ROLE_USER')) {
				if($httpLink->getUser()->getId() != $this->get('security.context')->getToken()->getUser()->getId()) {
					Throw new HttpException(401, 'You are not allowed to access to this link.');
				}
			} else {
				Throw new HttpException(401, 'You are not allowed to access to this link.');
			}
		}
		if($visibility == 'group' and (!$this->get('security.context')->isGranted('ROLE_CIRCLE'))) {
			Throw new HttpException(401, 'You are not allowed to access to this link.');
		}
		// Hit+1
		$httpLink->setHit($httpLink->getHit()+1);
		$em = $this->getDoctrine()->getManager();
  		$em->persist($httpLink);
  		$em->flush();

		// Return
		return $this->redirect($httpLink->getLink());
	}
}