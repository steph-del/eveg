<?php

namespace eveg\UserRepartitionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('evegUserRepartitionBundle:Default:index.html.twig', array('name' => $name));
    }
}
