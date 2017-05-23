<?php

namespace eveg\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('evegApiBundle:Default:index.html.twig', array('name' => $name));
    }
}
