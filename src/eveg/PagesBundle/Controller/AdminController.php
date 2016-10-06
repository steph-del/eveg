<?php

namespace eveg\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use eveg\PagesBundle\Form\Type\PageType;
use eveg\PagesBundle\Entity\Page;

class AdminController extends Controller
{
	/**
 	 * @Security("has_role('ROLE_PAGE_WRITER')")
 	 */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();

    	$pages = $em->getRepository('evegPagesBundle:Page')->findAll();

        return $this->render('evegPagesBundle:Admin:index.html.twig', array(
        	'pages' => $pages
        ));
    }

    /**
 	 * @Security("has_role('ROLE_PAGE_WRITER')")
 	 */
    public function menuPageAction()
    {
    	$em = $this->getDoctrine()->getManager();

    	$pages = $em->getRepository('evegPagesBundle:Page')->findAll();

        return $this->render('evegPagesBundle:Admin/Fragments:menu.html.twig', array(
        	'pages' => $pages
        ));
    }

    /**
 	 * @Security("has_role('ROLE_PAGE_WRITER')")
 	 */
    public function addPageAction(Request $request)
    {
    	// Creates the form...
    	$form = $this->createForm(new PageType());

        // ... and then hydrates it
        $form->handleRequest($request);

        if($form->isValid())
        {

        	$data = $form->getData();
        	$currentUser = $this->getUser();

        	$page = $data;

        	$page->setlastUpdate(new \DateTime('now'));
        	$page->setAuthor($currentUser);

        	$em = $this->getDoctrine()->getManager();
      		$em->persist($page);
      		$em->flush();

      		$request->getSession()->getFlashBag()->add('success', 'La page '.$page->getTitleFr().' a été créée.');

      		return new RedirectResponse($this->generateUrl('eveg_pages_admin_index'));

        }

        return $this->render('evegPagesBundle:Admin:addPage.html.twig', array(
        	'form' => $form->createView()
        ));
    }

    /**
     * @Security("has_role('ROLE_PAGE_WRITER')")
     */
    public function editPageAction($id, Request $request)
    {

    	$em = $this->getDoctrine()->getManager();
    	$page = $em->getRepository('evegPagesBundle:Page')->findById($id)[0];

    	// Creates the form...
    	$form = $this->createForm(new PageType(), $page);

        if($form->handleRequest($request)->isValid())
        {

        	$currentUser = $this->getUser();

        	$page->setlastUpdate(new \DateTime('now'));
        	$page->setAuthor($currentUser);

      		$em->flush();

      		$request->getSession()->getFlashBag()->add('success', 'La page '.$page->getTitleFr().' a été modifiée.');

      		return new RedirectResponse($this->generateUrl('eveg_pages_admin_index'));

        }

        return $this->render('evegPagesBundle:Admin:editPage.html.twig', array(
        	'form' => $form->createView(),
        	'page' => $page,
        ));
    }

    /**
     * @Security("has_role('ROLE_PAGE_WRITER')")
     */
    public function deletePageAction($id, Request $request)
    {

    	$em = $this->getDoctrine()->getManager();
    	$page = $em->getRepository('evegPagesBundle:Page')->findById($id)[0];

    	$title = $page->getTitleFr();

    	$em->remove($page);
  		$em->flush();

  		$request->getSession()->getFlashBag()->add('success', 'La page '.$title.' a été suprimée.');

  		return new RedirectResponse($this->generateUrl('eveg_pages_admin_index'));

    }

    /**
     * @Security("has_role('ROLE_PAGE_WRITER')")
     */
    public function previewPageFrAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('evegPagesBundle:Page')->findById($id)[0];

        return $this->render('evegPagesBundle:Default:showPageFr.html.twig', array(
            'page' => $page
        ));
    }

    /**
     * @Security("has_role('ROLE_PAGE_WRITER')")
     */
    public function previewPageEnAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('evegPagesBundle:Page')->findById($id)[0];

        return $this->render('evegPagesBundle:Default:showPageEn.html.twig', array(
            'page' => $page
        ));
    }
}
