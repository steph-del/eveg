<?php

namespace eveg\UserRepartitionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use eveg\UserRepartitionBundle\Entity\Repartition;
use Symfony\Component\HttpFoundation\Request;

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

    /**
	* @Security("has_role('ROLE_SUPER_ADMIN')") 
	*/
    public function unresolvedRepartitionsAction()
    {

    	$em = $this->getDoctrine()->getManager();
    	$repartitionRepo = $em->getRepository('evegUserRepartitionBundle:Repartition');
    	$repartitions = $repartitionRepo->findUnresolvedRepartitions();

    	return $this->render('evegUserRepartitionBundle:Admin:unresolvedRepartitions.html.twig', array(
            'repartitions' => $repartitions,
        ));
    }

    /**
    * Validate a Repartition data
    *
    * @param \Repartition $repartition repartition object (auto converted by ParamConverter annotation)
    * @param integer      $id          repartition id
    * @param \Request     $request
    *
    * @ParamConverter("repartition_id", class="evegUserRepartitionBundle:Repartition")
    * @Security("has_role('ROLE_SUPER_ADMIN')") 
    */
    public function validateRepartitionAction(Repartition $repartition, $id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        try {
            $repartition->setValidated(true);
            $em->flush();
            $em->clear();
            $request->getSession()->getFlashBag()->add('success', 'La donnée #'.$repartition->getId().' a été validée.');
        } catch(Exception $e) {
            $request->getSession()->getFlashBag()->add('warning', 'Erreur lors de la validation de la donnée #'.$repartition->getId().'.');
        }

        return $this->redirect($this->generateUrl('eveg_user_repartition_admin_unresolved'));
    }

    /**
    * Unvalidate a Repartition data
    *
    * @param \Repartition $repartition repartition object (auto converted by ParamConverter annotation)
    * @param integer      $id          repartition id
    * @param \Request     $request
    *
    * @ParamConverter("repartition_id", class="evegUserRepartitionBundle:Repartition")
    * @Security("has_role('ROLE_SUPER_ADMIN')") 
    */
    public function unvalidateRepartitionAction(Repartition $repartition, $id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        try {
            $repartition->setValidated(false);
            $em->flush();
            $em->clear();
            $request->getSession()->getFlashBag()->add('success', 'La donnée #'.$repartition->getId().' a été dévalidée.');
        } catch(Exception $e) {
            $request->getSession()->getFlashBag()->add('warning', 'Erreur lors de la dévalidation de la donnée #'.$repartition->getId().'.');
        }

        return $this->redirect($this->generateUrl('eveg_user_repartition_admin_unresolved'));
    }
}
