<?php

namespace eveg\BiblioBundle\Controller\BaseBiblio;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use eveg\BiblioBundle\Entity\BaseBiblio;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class BaseBiblioImportController extends Controller
{
	/**
	 * Import the biblio data from baseveg
	 * 
	 * @Security("has_role('ROLE_SUPER_ADMIN')")
	 */
    public function ImportAction(Request $request)
    {
    	$request = $this->getRequest();

		// Creates the form...
    	$form = $this->createFormBuilder()->getForm();
        // ... and then hydrates it
        $form->handleRequest($request);

        if($form->isValid())
        {
        	$em                = $this->getDoctrine()->getManager();
	    	$SBibRepo          = $em->getRepository('evegAppBundle:SyntaxonBiblio');
	    	$SBibReferences    = $SBibRepo->findDistinctReferences();
	    	$SBibRefTable      = array();
	    	foreach ($SBibReferences as $key => $value) {
	    		array_push($SBibRefTable, $value['reference']);
	    	}

	    	$BaseBibRepo       = $em->getRepository('evegBiblioBundle:BaseBiblio');
	    	$BaseBibReferences = $BaseBibRepo->findAll(); 
	    	$BaseBibRefTable   = array();
	    	foreach ($BaseBibReferences as $key => $value) {
	    		array_push($BaseBibRefTable, $value->getReference());
	    	}

	    	$batchSize 	 = 100;   // $entity will be flushed and detached each $batchSize time (prevent memory overload)
			$i       	 = 0;     // just an incremental
			$cycle     	 = 0;     // counts the number of batch cycles
			$currentUser = $this->getUser();

	    	$countToImport = 0;
	    	foreach ($SBibRefTable as $keySBibRef => $SBibRef) {
	    		if(!in_array($SBibRef, $BaseBibRefTable))
	    		{
	    			$countToImport++;
	    			$b = new BaseBiblio();
	    			$b->setUpdatedBy($currentUser)
	    			  ->setUpdatedAt(new \Datetime('now'))
	    			  ->setReference($SBibRef);
	    			$em->persist($b);
	    		}

	    		// Flush and detach entities each $batchSize time
				if (($i % $batchSize) === 0) {
			        $em->flush();
			        $cycle++;
			    }
				$i++;

	    	}

	    	// Flush & clear EM
			$em->flush();
		    $em->clear();

		    return $this->render('evegBiblioBundle:Admin:baseBiblioImport.html.twig',
						array('form'          => $form->createView(),
							  'references'    => $SBibReferences,
							  'bibReferences' => $BaseBibReferences,
							  'counter'		  => $countToImport
						));
        }

        return $this->render('evegBiblioBundle:Admin:baseBiblioImport.html.twig',
        				array('form'          => $form->createView()));
    }
}
