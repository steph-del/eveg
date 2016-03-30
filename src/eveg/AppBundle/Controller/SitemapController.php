<?php
// src/eveg/AppBundle/Controller/SitemapController.php

namespace eveg\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SitemapController extends Controller
{
	public function siteMapAction()
    {
        return $this->render(
            'evegAppBundle:Default:sitemap.xml.twig',
            ['urls' => $this->get('sitemap')->generate()]
        );
    }
}



	