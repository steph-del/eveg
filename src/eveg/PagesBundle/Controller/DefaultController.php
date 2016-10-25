<?php

namespace eveg\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{

    public function goAction($slug)
    {
    	$em = $this->getDoctrine()->getManager();

    	$pageFr = $em->getRepository('evegPagesBundle:Page')->findByTitleSlugFr($slug);

		$page = $pageFr;

		return $this->render('evegPagesBundle:Default:showPageFr.html.twig', array('page' => $page));
    }

    public function sectionAction($sectionSlug)
    {
        $em = $this->getDoctrine()->getManager();
        $section = $em->getRepository('evegPagesBundle:Section')->findByTitleSlugFr($sectionSlug);
        $sectionPages = $em->getRepository('evegPagesBundle:Page')->findBySection($section);

        if(empty($section)) Throw new NotFoundHttpException();

        return $this->render('evegPagesBundle:Default:section.html.twig', array(
            'section' => $section,
            'pages'   => $sectionPages
        ));
    }

    public function sectionGoAction($sectionSlug, $slug)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('evegPagesBundle:Page')->findByTitleSlugFr($slug);

        if(empty($page)) Throw new NotFoundHttpException();

        return $this->render('evegPagesBundle:Default:sectionPage.html.twig', array(
            'page'    => $page
        ));
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
