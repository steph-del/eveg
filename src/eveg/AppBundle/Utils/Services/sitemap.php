<?php
// src/eveg/appBundle/Utils/Services/sitemap.php

namespace eveg\AppBundle\Utils\Services;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\RouterInterface;

/**
 * Sitemap generator
 *
 */
class sitemap
{
	private $router;
    private $em;

    public function __construct(RouterInterface $router, ObjectManager $em)
    {
        $this->router = $router;
        $this->em = $em;
    }

    public function generate()
    {
        $urls = array();        

        $syntaxons = $this->em->getRepository('evegAppBundle:SyntaxonCore')->findAllForSitemap();

        foreach ($syntaxons as $syntaxon) {
            $urls[] = array(
                'loc' => $this->router->generate('eveg_show_one', array('id' => $syntaxon['id']), true)
            );
        }

        return $urls;
    }

}