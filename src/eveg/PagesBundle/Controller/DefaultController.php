<?php

namespace eveg\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{

    public function goAction($slug, Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
    	$locale = $request->getLocale();

    	$pageFr = $em->getRepository('evegPagesBundle:Page')->findByTitleSlugFr($slug);
    	$pageEn = $em->getRepository('evegPagesBundle:Page')->findByTitleSlugEn($slug);

    	if($locale == 'fr' || $locale == 'fr_FR') {
    		$page = $pageFr;
    	} else {
    		if(!empty($pageEn->getTitleEn() and !empty($pageEn->getContentEn()))) {
    			$page = $pageEn;
    		} else {
    			$page = $pageFr;
    		}
    	}

    	if($page === $pageFr) {
    		return $this->render('evegPagesBundle:Default:showPageFr.html.twig', array('page' => $page));
    	} elseif($page === $pageEn) {
    		return $this->render('evegPagesBundle:Default:showPageEn.html.twig', array('page' => $page));
    	} else {
    		Throw new NotFoundHttpException();
    	}

        
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
