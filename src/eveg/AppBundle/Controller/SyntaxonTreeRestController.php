<?php
// src/eveg/AppBundle/Controller/SyntaxonTreeRestController.php

namespace eveg\AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class SyntaxonTreeRestController extends Controller
{
  public function getSyntaxonTreeAction(){
    $syntaxonTree = $this->getDoctrine()
    					 ->getManager()
    					 ->getRepository('evegAppBundle:SyntaxonCore')
    					 ->tree();
    if(empty($syntaxonTree)){
      throw $this->createNotFoundException();
    }
    return $syntaxonTree;
  }
}