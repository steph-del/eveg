<?php

namespace eveg\PsiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use eveg\PsiBundle\Entity\Node;
use eveg\PsiBundle\Entity\Table;
use eveg\PsiBundle\Entity\TableNode;


class DefaultController extends Controller
{
    public function indexAction()
    {

    	$sp1 = new Node('idiotaxon');
    	$sp1->setCoef('3');
    	$sp1->setRepository('baseflor');
    	$sp2 = new Node('idiotaxon');
    	$sp2->setCoef('2');
    	$sp2->setRepository('baseflor');
    	$sp3 = new Node('idiotaxon');
    	$sp3->setCoef('1');
    	$sp3->setRepository('baseflor');
    	$sp4 = new Node('idiotaxon');
    	$sp4->setCoef('+');
    	$sp4->setRepository('baseflor');
    	$sp5 = new Node('idiotaxon');
    	$sp5->setCoef('+');
    	$sp5->setRepository('baseflor');

    	$synusie = new Node('synusy');
    	$synusie->addChild($sp1);
    	$synusie->addChild($sp2);
    	$synusie->addChild($sp3);
    	$synusie->setRepository('baseveg');

    	$synusie2 = new Node('synusy');
    	$synusie2->addChild($sp2);
    	$synusie2->addChild($sp3);
    	$synusie2->setRepository('baseveg');

    	$table = new Table();
    	$table->setName('Tableau de test');

    	/*$tableNode = new TableNode();
    	$tableNode->setNode($synusie);
    	$tableNode->setTable($table);
    	$tableNode->setPosition(1);
    	$tableNode->setGroupSocio('group1');
    	$table->addNode($synusie);*/

    	$ts = $this->get('eveg_psi.table');
    	$ts->addNodes($table, [$synusie, $synusie2], 1, 'groupSocio1');

    	//$table->addNode($synusie);
//dump($table);

    	//$em = $this->getDoctrine()->getManager('psi_db');
    	//$em->persist($synusie);
    	//$em->persist($table);
    	//$em->persist($tableNode);

    	//$em->flush();
        //return $this->render('evegPsiBundle:Default:index.html.twig', array('node' => $microC, 'pattern' => $pattern, 'patternNode' => $pn, 'pat' => $pat));
        return $this->render('evegPsiBundle:Default:index.html.twig');
    }
}
