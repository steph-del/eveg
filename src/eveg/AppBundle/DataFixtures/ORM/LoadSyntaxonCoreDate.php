<?php

// src/eveg/AppBundle/DataFixtures/ORM/LoadSyntaxonCoreData.php

namespace eveg\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use eveg\AppBundle\Entity\SyntaxonCore;

class LoadSyntaxonCoreData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $syntaxon0 = new SyntaxonCore();
        $syntaxon0->setfixedCode(1);
        $syntaxon0->setCatminatCode('01/');
        $syntaxon0->setLevel('HAB');
        $syntaxon0->setSyntaxonName('Prairies (habitat)');
        $syntaxon0->setSyntaxonAuthor('');
        $syntaxon0->setCommonName('Prairies (habitat nom commun)');

            $syntaxon1 = new SyntaxonCore();
            $syntaxon1->setfixedCode(2);
            $syntaxon1->setCatminatCode('01/1.');
            $syntaxon1->setLevel('CLA');
            $syntaxon1->setSyntaxonName('Agrostio - Arrhenatheretea');
            $syntaxon1->setSyntaxonAuthor('Br. Bl. 1900');
            $syntaxon1->setCommonName('Prairies');

                $syntaxon2 = new SyntaxonCore();
                $syntaxon2->setfixedCode(3);
                $syntaxon2->setCatminatCode('01/1.1');
                $syntaxon2->setLevel('SUBCLA');
                $syntaxon2->setSyntaxonName('Arrhenatherenea');
                $syntaxon2->setSyntaxonAuthor('Br. Bl. 1901');
                $syntaxon2->setCommonName('Prairies etalia');

                    $syntaxon3 = new SyntaxonCore();
                    $syntaxon3->setfixedCode(4);
                    $syntaxon3->setCatminatCode('01/1.1.1');
                    $syntaxon3->setLevel('ORD');
                    $syntaxon3->setSyntaxonName('Arrhenatheretalia');
                    $syntaxon3->setSyntaxonAuthor('Br. Bl. 1902');
                    $syntaxon3->setCommonName('Prairies');

                $syntaxon4 = new SyntaxonCore();
                $syntaxon4->setfixedCode(3);
                $syntaxon4->setCatminatCode('01/1.1');
                $syntaxon4->setLevel('SUBCLA');
                $syntaxon4->setSyntaxonName('Agrostienea');
                $syntaxon4->setSyntaxonAuthor('Br. Bl. 1903');
                $syntaxon4->setCommonName('Prairies etalia');
        
        $manager->persist($syntaxon0);
        $manager->persist($syntaxon1);
        $manager->persist($syntaxon2);
        $manager->persist($syntaxon3);
        $manager->persist($syntaxon4);


        $manager->flush();
    }
}