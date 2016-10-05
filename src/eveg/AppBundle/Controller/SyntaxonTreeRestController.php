<?php
// src/eveg/AppBundle/Controller/SyntaxonTreeRestController.php

namespace eveg\AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\FOSRestController;
use JMS\Serializer\SerializationContext;
use Symfony\Component\HttpFoundation\Session\Session;

// routes are automaticly generated by FOSRestBundle using the name of a function
// ex : public function getTestAction will set up an 'api_get_test' route

// How to use Groups (JMSSerializer) with FosRestBundle : http://stackoverflow.com/questions/21413143/how-to-get-groups-working-for-jmsserializerbundle-and-fosrestbundle

class SyntaxonTreeRestController extends FOSRestController
{
  public function getSyntaxonsTreeAction()
  {

    $view = $this->view();
    $view->setSerializationContext(SerializationContext::create()->setGroups(array('baseTree')));

    // Grabbing the repartition filters service, the department filter and the UE filter
    $repFilters = $this->get('eveg_app.repFilters');
    $depFrFilter = $repFilters->getDepFrFilterSession();
    $ueFilter = $repFilters->getUeFilterSession();

    // Grabbing SyntaxonCore repository
    $em = $this->getDoctrine()->getManager();
    $scRepo = $em->getRepository('evegAppBundle:SyntaxonCore');
        
    $syntaxonTree = $scRepo->getBaseTree($depFrFilter, $ueFilter);

    // Translate root tree elements
    $translator = $this->get('translator');
    foreach ($syntaxonTree as $key => $s) {
      $transKey = 'eveg.tree.'.strval($key+1);
      $s->setSyntaxonNameTreeForce($translator->trans($transKey));         // Set translation
    }

    if(empty($syntaxonTree)){
      throw $this->createNotFoundException();
    }

    // Grabbing catCode service
    $catCode = $this->get('eveg_app.catCode');

    foreach ($syntaxonTree as $key => $syntaxon) {

        $catminatCode = $syntaxon->getCatminatCode();
        $level = $catCode->getLevel($catminatCode);
        $nextLevel = $catCode->getNextLevel($level);

        $children = $scRepo->getDirectChildrenByCatminatCode($catminatCode, $nextLevel, $depFrFilter, $ueFilter);

        if ($children == '[]' or $children == null) {
            $syntaxon->setFolder(false);
            $syntaxon->setLazy(false);
        } else {
            // test filters
            $children = $scRepo->getDirectChildrenByCatminatCode($catminatCode, $nextLevel, $depFrFilter, $ueFilter);
            if($children != '[]' or $children != null) {
                $syntaxon->setFolder(true);
                $syntaxon->setLazy(true);
            } else {
                $syntaxon->setFolder(false);
                $syntaxon->setLazy(false);
            }
        }
    }

    $view->setData($syntaxonTree);
    return $view;
    
  }

    public function getSyntaxonNodeAction($id)
    {
        
        $view = $this->view();
        $view->setSerializationContext(SerializationContext::create()->setGroups(array('nodeTree')));

        // Grabbing the repartition filters service, the department filter and the UE filter
        $repFilters = $this->get('eveg_app.repFilters');
        $depFrFilter = $repFilters->getDepFrFilterSession();
        $ueFilter = $repFilters->getUeFilterSession();

        // Grabbing SyntaxonCore repository
        $em = $this->getDoctrine()->getManager();
        $scRepo = $em->getRepository('evegAppBundle:SyntaxonCore');

        // Grabbing catCode service
        $catCode = $this->get('eveg_app.catCode');

        $syntaxon = $scRepo->findOneById($id);

        // 1st step
        $catminatCode = $syntaxon->getCatminatCode();
        $level = $catCode->getLevel($catminatCode);
        $nextLevel = $catCode->getNextLevel($level);

        $syntaxonTree = $scRepo->getDirectChildrenByCatminatCode($catminatCode, $nextLevel, $depFrFilter, $ueFilter);

        // 2nd step
        if(empty($syntaxonTree) and ($syntaxon->getLevel() != 'SUBASS' or $syntaxon->getLevel() != 'ASS')){
            $nextLevel2 = $catCode->getNextLevel($nextLevel);
            $syntaxonTree = $scRepo->getDirectChildrenByCatminatCode($catminatCode, $nextLevel2, $depFrFilter, $ueFilter);
        }

        // 3rd step
        // only available for ALL level (can jump 3 steps : ALL > SUBALL > ASSGR > ASS)
        if(empty($syntaxonTree) and ($syntaxon->getLevel() == 'ALL')){
          $nextLevel3 = $catCode->getNextLevel($nextLevel2);
          $syntaxonTree = $scRepo->getDirectChildrenByCatminatCode($catminatCode, $nextLevel3, $depFrFilter, $ueFilter);
        }

        if(empty($syntaxonTree)){
          //throw $this->createNotFoundException();
            $syntaxon->setFolder(false);
            $syntaxon->setLazy(false);
        }
        
        foreach ($syntaxonTree as $key => $syntaxon) {

            $catminatCode = $syntaxon->getCatminatCode();
            $level = $syntaxon->getLevel();
            if($level != 'SUBASS')                                            $nextLevel = $catCode->getNextLevel($level);
            if($level != 'SUBASS' and $level != 'ASS')                        $nextLevel2 = $catCode->getNextLevel($nextLevel);
            if($level == 'ALL')                                               $nextLevel3 = $catCode->getNextLevel($nextLevel2);


            $children = $scRepo->getDirectChildrenByCatminatCode($catminatCode, $nextLevel, $depFrFilter, $ueFilter);

            // 1st step
            if ($children == '[]' or $children == null) {
              $syntaxon->setFolder(false);
              $syntaxon->setLazy(false);

              // 2nd step
              if(isset($nextLevel2)) {
                $children2 = $scRepo->getDirectChildrenByCatminatCode($catminatCode, $nextLevel2, $depFrFilter, $ueFilter);
                if($children2 == '[]' or $children2 == null) {
                  $syntaxon->setFolder(false);
                  $syntaxon->setLazy(false);

                  // 3rd step
                  // only available for ALL level (can jump 3 steps : ALL > SUBALL > ASSGR > ASS)
                  if(isset($nextLevel3)) {
                    $children3 = $scRepo->getDirectChildrenByCatminatCode($catminatCode, $nextLevel3, $depFrFilter, $ueFilter);
                    if($children3 == '[]' or $children3 == null) {
                      $syntaxon->setFolder(false);
                      $syntaxon->setLazy(false);
                    } else {
                      $syntaxon->setFolder(true);
                      $syntaxon->setLazy(true);
                    }
                  }
                } else {
                  $syntaxon->setFolder(true);
                  $syntaxon->setLazy(true);
                }
              }
            } else {
              $syntaxon->setFolder(true);
              $syntaxon->setLazy(true);
            }
        }

    $view->setData($syntaxonTree);
    return $view;

    }
}