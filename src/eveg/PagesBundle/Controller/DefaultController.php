<?php

namespace eveg\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use eveg\PagesBundle\Entity\Page;

class DefaultController extends Controller
{

    public function goAction($slug, Request $request)
    {
    	$em = $this->getDoctrine()->getManager();

    	$page = $em->getRepository('evegPagesBundle:Page')->findByTitleSlugFr($slug);

        return $this->render('evegPagesBundle:Default:showPageFr.html.twig', array('page' => $page));
    }

    public function knpMenuAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
    	$locale = $request->getLocale();

    	$outputPages = array();

		$publishedPages = $em->getRepository('evegPagesBundle:Page')->findForMenu();

		foreach ($publishedPages as $keyPage => $page) {
		
			if($locale == 'fr' || $locale == 'fr_fr') {
				array_push($outputPages, array($page->getId(), $page->getTitleFr()));
			} else {
				if(!empty($page->getTitleEn())) {
					array_push($outputPages, array($page->getId(), $page->getTitleEn()));
				} else {
					array_push($outputPages, array($page->getId(), $page->getTitleFr()));
				}
			}

		}

    	return $outputPages;

    }
}
