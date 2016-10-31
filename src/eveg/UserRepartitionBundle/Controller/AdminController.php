<?php

namespace eveg\UserRepartitionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
//use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
	/**
	* @Security("has_role('ROLE_SUPER_ADMIN')") 
	*/
    public function conflictsIndexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$conflictRepo = $em->getRepository('evegUserRepartitionBundle:RepartitionConflict');
    	$conflicts = $conflictRepo->findOpenedConflicts();

    	return $this->render('evegUserRepartitionBundle:Admin:conflicts.html.twig', array(
    		'conflicts' => $conflicts,
    	));
    }
}
