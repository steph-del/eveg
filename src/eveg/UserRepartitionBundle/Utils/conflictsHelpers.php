<?php
// src/eveg/UserRepartitionBundle/Utils/confilctsHelpers.php

namespace eveg\UserRepartitionBundle\Utils;

use eveg\AppBundle\Entity\SyntaxonCore;
use eveg\UserRepartitionBundle\Entity\Repartition;
use eveg\UserRepartitionBundle\Entity\RepartitionConflict;

/**
 *	Utilities to resolve repartition conflicts
 *
 */
class conflictsHelpers
{
	private $SCRepo;
	private $URepRepo;
      private $mergeUtility;
      private $em;

	public function __construct($SCRepo, $URepRepo, $mergeUtility, $em)
	{
		$this->SCRepo       = $SCRepo;
		$this->URepRepo     = $URepRepo;
            $this->mergeUtility = $mergeUtility;
            $this->em = $em;
	}

	/**
  * Check conflict beetween user data and baseveg data
  *
	* @var     \SyntaxonCore $syntaxon
  * @var     \Repartition  $repartition 
  * @return  null if no conflict, else open a new conflict
	*/
	public function checkBasevegRepartition(SyntaxonCore $syntaxon, Repartition $repartition)
	{
           // $repartition parameters 
	     $repMap   = $repartition->getMap();
           $repShape = $repartition->getShape();
           $repValue = $repartition->getValue();

           if($repMap == 'depFr') {
                  $bvValue   = $this->getSDepFrShape($repShape, $syntaxon);

                  // Compare values (from $repartition and from $syntaxon)
                  if($bvValue == $repValue) {
                        return null;
                  } else {
                        if((($bvValue != "") || ($bvValue != "0")) && (!empty($bvValue)))
                        {
                              // open conflict with baseveg data
                              $this->openBvConflict($syntaxon, $bvValue, $repartition);
                              return $bvValue;
                        }

                        return null;   
                  }
           }

           return null;
	}

      /**
      * Check conflict beetween users data
      * @var     \SyntaxonCore $syntaxon
      * @var     \Repartition  $repartition 
      * @return  null if no conflict, else open a new conflict
      */
      public function checkUsersRepartition(SyntaxonCore $syntaxon, Repartition $repartition)
      {
           
           // $repartition parameters 
           $repMap   = $repartition->getMap();
           $repShape = $repartition->getShape();
           $repValue = $repartition->getValue();
           $repartitions = $this->URepRepo->findEnabledRepartitionBySyntaxonCoreForDepFr($syntaxon, $repShape);

           if($repMap == 'depFr') {
                  foreach ($repartitions as $keyDbRep => $valueDbRep) {
                        // Compare values (from $repartitions (in db) and from $syntaxon)
                        // we stop (return) at the first conflict since they couldn't have other conflicts in db
                        if($valueDbRep->getValue() !== $repValue) {
                              // open conflict with baseveg data
                              $this->openUsersConflict($syntaxon, $repartition, $valueDbRep);
                              return true;
                        }
                  }
           }

           return null;
      }

      /**
       * Open a new conflict beetween baseveg repartition and user's data
       *
       * @var \SyntaxonCore $syntaxon
       * @var string        $bvValue
       * @var \Repartition  $repartition
       */
      public function openBvConflict(SyntaxonCore $syntaxon, $bvValue, Repartition $repartition)
      {
            $conflict        = new RepartitionConflict();
            $basevegItem     = new RepartitionConflictItem();
            $repartitionItem = new RepartitionConflictItem();

            // We don't need to persist
            //    see openUsersConflict

            $conflict->setSyntaxonConcerned($syntaxon)
                     ->setSyntaxonNameConcerned($syntaxon->getSyntaxon())
                     ->setOpenedAt(new \DateTime('now'))
                     ->setOpenedBy($repartition->getSubmitedBy())
                     ->setBeetweenRepartition($repartition)
                     ->setAndBaseveg(true);

            $this->em->persist($conflict);
            $this->em->flush();
            // don't clear em because it can be used again by openUsersConflict

      }

      /**
       * Open a new conflict beetween 2 users repartition data
       *
       * @var \SyntaxonCore $syntaxon
       * @var \Repartition  $repartition
       * @var \Repartition  $repartitionItemDb
       */
      public function openUsersConflict(SyntaxonCore $syntaxon, Repartition $repartition, Repartition $repartitionDb)
      {
            $conflict         = new RepartitionConflict();

            // We don't need to persist $syntaxon, $repartition and $repartitionDb
            //    since Doctrine already know them
            // Neither merging ($this->em->merge), see http://stackoverflow.com/questions/18215975/doctrine-a-new-entity-was-found-through-the-relationship#20517528

            $conflict->setSyntaxonConcerned($syntaxon)
                     ->setSyntaxonNameConcerned($syntaxon->getSyntaxon())
                     ->setOpenedAt(new \DateTime('now'))
                     ->setOpenedBy($repartition->getSubmitedBy())
                     ->setBeetweenRepartition($repartition)
                     ->setAndRepartition($repartitionDb);

            $this->em->persist($conflict);
            $this->em->flush();
            // don't clear em because it can be used again by openBvConflict

      }

      /**
       * Get the requested shape (convert string)
       * eg : asked "_01", need $syntaxon->getRepartitionDepFr->get01();
       * Could use eval() but risked
       *
       * @var string        $shapeAskedStr
       * @var \SyntaxonCore $syntaxon
       */
      public function getSDepFrShape($shapeAskedStr, SyntaxonCore $syntaxon)
      {
            switch($shapeAskedStr) {
                  case '_01':
                      return $syntaxon->getRepartitionDepFr()->get01();
                      break;
                  case '_02':
                      return $syntaxon->getRepartitionDepFr()->get02();
                      break;
                  case '_03':
                      return $syntaxon->getRepartitionDepFr()->get03();
                      break;
                  case '_04':
                      return $syntaxon->getRepartitionDepFr()->get04();
                      break;
                  case '_05':
                      return $syntaxon->getRepartitionDepFr()->get05();
                      break;
                  case '_06':
                      return $syntaxon->getRepartitionDepFr()->get06();
                      break;
                  case '_07':
                      return $syntaxon->getRepartitionDepFr()->get07();
                      break;
                  case '_08':
                      return $syntaxon->getRepartitionDepFr()->get08();
                      break;
                  case '_09':
                      return $syntaxon->getRepartitionDepFr()->get09();
                      break;
                  case '_10':
                      return $syntaxon->getRepartitionDepFr()->get10();
                      break;
                  case '_11':
                      return $syntaxon->getRepartitionDepFr()->get11();
                      break;
                  case '_12':
                      return $syntaxon->getRepartitionDepFr()->get12();
                      break;
                  case '_13':
                      return $syntaxon->getRepartitionDepFr()->get13();
                      break;
                  case '_14':
                      return $syntaxon->getRepartitionDepFr()->get14();
                      break;
                  case '_15':
                      return $syntaxon->getRepartitionDepFr()->get15();
                      break;
                  case '_16':
                      return $syntaxon->getRepartitionDepFr()->get16();
                      break;
                  case '_17':
                      return $syntaxon->getRepartitionDepFr()->get17();
                      break;
                  case '_18':
                      return $syntaxon->getRepartitionDepFr()->get18();
                      break;
                  case '_19':
                      return $syntaxon->getRepartitionDepFr()->get19();
                      break;
                  case '_2a':
                      return $syntaxon->getRepartitionDepFr()->get20();
                      break;
                  case '_2b':
                      return $syntaxon->getRepartitionDepFr()->get20();
                      break;
                  case '_21':
                      return $syntaxon->getRepartitionDepFr()->get21();
                      break;
                  case '_22':
                      return $syntaxon->getRepartitionDepFr()->get22();
                      break;
                  case '_23':
                      return $syntaxon->getRepartitionDepFr()->get23();
                      break;
                  case '_24':
                      return $syntaxon->getRepartitionDepFr()->get24();
                      break;
                  case '_25':
                      return $syntaxon->getRepartitionDepFr()->get25();
                      break;
                  case '_26':
                      return $syntaxon->getRepartitionDepFr()->get26();
                      break;
                  case '_27':
                      return $syntaxon->getRepartitionDepFr()->get27();
                      break;
                  case '_28':
                      return $syntaxon->getRepartitionDepFr()->get28();
                      break;
                  case '_29':
                      return $syntaxon->getRepartitionDepFr()->get29();
                      break;
                  case '_30':
                      return $syntaxon->getRepartitionDepFr()->get30();
                      break;
                  case '_31':
                      return $syntaxon->getRepartitionDepFr()->get31();
                      break;
                  case '_32':
                      return $syntaxon->getRepartitionDepFr()->get32();
                      break;
                  case '_33':
                      return $syntaxon->getRepartitionDepFr()->get33();
                      break;
                  case '_34':
                      return $syntaxon->getRepartitionDepFr()->get34();
                      break;
                  case '_35':
                      return $syntaxon->getRepartitionDepFr()->get35();
                      break;
                  case '_36':
                      return $syntaxon->getRepartitionDepFr()->get36();
                      break;
                  case '_37':
                      return $syntaxon->getRepartitionDepFr()->get37();
                      break;
                  case '_38':
                      return $syntaxon->getRepartitionDepFr()->get38();
                      break;
                  case '_39':
                      return $syntaxon->getRepartitionDepFr()->get39();
                      break;
                  case '_40':
                      return $syntaxon->getRepartitionDepFr()->get40();
                      break;
                  case '_41':
                      return $syntaxon->getRepartitionDepFr()->get41();
                      break;
                  case '_42':
                      return $syntaxon->getRepartitionDepFr()->get42();
                      break;
                  case '_43':
                      return $syntaxon->getRepartitionDepFr()->get43();
                      break;
                  case '_44':
                      return $syntaxon->getRepartitionDepFr()->get44();
                      break;
                  case '_45':
                      return $syntaxon->getRepartitionDepFr()->get45();
                      break;
                  case '_46':
                      return $syntaxon->getRepartitionDepFr()->get46();
                      break;
                  case '_47':
                      return $syntaxon->getRepartitionDepFr()->get47();
                      break;
                  case '_48':
                      return $syntaxon->getRepartitionDepFr()->get48();
                      break;
                  case '_49':
                      return $syntaxon->getRepartitionDepFr()->get49();
                      break;
                  case '_50':
                      return $syntaxon->getRepartitionDepFr()->get50();
                      break;
                  case '_51':
                      return $syntaxon->getRepartitionDepFr()->get51();
                      break;
                  case '_52':
                      return $syntaxon->getRepartitionDepFr()->get52();
                      break;
                  case '_53':
                      return $syntaxon->getRepartitionDepFr()->get53();
                      break;
                  case '_54':
                      return $syntaxon->getRepartitionDepFr()->get54();
                      break;
                  case '_55':
                      return $syntaxon->getRepartitionDepFr()->get55();
                      break;
                  case '_56':
                      return $syntaxon->getRepartitionDepFr()->get56();
                      break;
                  case '_57':
                      return $syntaxon->getRepartitionDepFr()->get57();
                      break;
                  case '_58':
                      return $syntaxon->getRepartitionDepFr()->get58();
                      break;
                  case '_59':
                      return $syntaxon->getRepartitionDepFr()->get59();
                      break;
                  case '_60':
                      return $syntaxon->getRepartitionDepFr()->get60();
                      break;
                  case '_61':
                      return $syntaxon->getRepartitionDepFr()->get61();
                      break;
                  case '_62':
                      return $syntaxon->getRepartitionDepFr()->get62();
                      break;
                  case '_63':
                      return $syntaxon->getRepartitionDepFr()->get63();
                      break;
                  case '_64':
                      return $syntaxon->getRepartitionDepFr()->get64();
                      break;
                  case '_65':
                      return $syntaxon->getRepartitionDepFr()->get65();
                      break;
                  case '_66':
                      return $syntaxon->getRepartitionDepFr()->get66();
                      break;
                  case '_67':
                      return $syntaxon->getRepartitionDepFr()->get67();
                      break;
                  case '_68':
                      return $syntaxon->getRepartitionDepFr()->get68();
                      break;
                  case '_69':
                      return $syntaxon->getRepartitionDepFr()->get69();
                      break;
                  case '_70':
                      return $syntaxon->getRepartitionDepFr()->get70();
                      break;
                  case '_71':
                      return $syntaxon->getRepartitionDepFr()->get71();
                      break;
                  case '_72':
                      return $syntaxon->getRepartitionDepFr()->get72();
                      break;
                  case '_73':
                      return $syntaxon->getRepartitionDepFr()->get73();
                      break;
                  case '_74':
                      return $syntaxon->getRepartitionDepFr()->get74();
                      break;
                  case '_75':
                      return $syntaxon->getRepartitionDepFr()->get75();
                      break;
                  case '_76':
                      return $syntaxon->getRepartitionDepFr()->get76();
                      break;
                  case '_77':
                      return $syntaxon->getRepartitionDepFr()->get77();
                      break;
                  case '_78':
                      return $syntaxon->getRepartitionDepFr()->get78();
                      break;
                  case '_79':
                      return $syntaxon->getRepartitionDepFr()->get79();
                      break;
                  case '_80':
                      return $syntaxon->getRepartitionDepFr()->get80();
                      break;
                  case '_81':
                      return $syntaxon->getRepartitionDepFr()->get81();
                      break;
                  case '_82':
                      return $syntaxon->getRepartitionDepFr()->get82();
                      break;
                  case '_83':
                      return $syntaxon->getRepartitionDepFr()->get83();
                      break;
                  case '_84':
                      return $syntaxon->getRepartitionDepFr()->get84();
                      break;
                  case '_85':
                      return $syntaxon->getRepartitionDepFr()->get85();
                      break;
                  case '_86':
                      return $syntaxon->getRepartitionDepFr()->get86();
                      break;
                  case '_87':
                      return $syntaxon->getRepartitionDepFr()->get87();
                      break;
                  case '_88':
                      return $syntaxon->getRepartitionDepFr()->get88();
                      break;
                  case '_89':
                      return $syntaxon->getRepartitionDepFr()->get89();
                      break;
                  case '_90':
                      return $syntaxon->getRepartitionDepFr()->get90();
                      break;
                  case '_91':
                      return $syntaxon->getRepartitionDepFr()->get91();
                      break;
                  case '_92':
                      return $syntaxon->getRepartitionDepFr()->get92();
                      break;
                  case '_93':
                      return $syntaxon->getRepartitionDepFr()->get93();
                      break;
                  case '_94':
                      return $syntaxon->getRepartitionDepFr()->get94();
                      break;
                  case '_95':
                      return $syntaxon->getRepartitionDepFr()->get95();
                      break;
                  default:
                        Throw new \Exception("Non existing fr shape.");
                        break;
            }
      }

}