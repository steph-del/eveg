<?php
// src/eveg/AppBundle/DataFixtures/ORM/LoadUserData.php

namespace evegAppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use eveg\UserBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
	/**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('testAdmin')
        		  ->setPassword('test')
              ->setEmail('testAdmin@test.com')
              ->setEnabled(true)
        		  ->addRole('ROLE_ADMIN')
        ;

        $userUser = new User();
        $userUser->setUsername('testUser')
        		 ->setPassword('test')
             ->setEmail('testUser@test.com')
             ->setEnabled(true)
        		 ->addRole('ROLE_USER')
        ;

        $userSuperAdmin = new User();
        $userSuperAdmin->setUsername('testSuperAdmin')
        		 	   ->setPassword('test')
                 ->setEmail('testSuperAdmin@test.com')
                 ->setEnabled(true)
        		 	   ->addRole('ROLE_SUPER_ADMIN')
        ;

        $userPageWriter = new User();
        $userPageWriter->setUsername('testPageWriter')
        		 	   ->setPassword('test')
                 ->setEmail('testPageWriter@test.com')
                 ->setEnabled(true)
                 ->addRole('ROLE_ADMIN')
        		 	   ->addRole('ROLE_PAGE_WRITER')
        ;

        $userBiblio = new User();
        $userBiblio->setUsername('testBiblio')
                   ->setPassword('test')
                   ->setEmail('testBiblio@test.com')
                   ->setEnabled(true)
                   ->addRole('ROLE_ADMIN')
                   ->addRole('ROLE_BIBLIO')
        ;
        
        $userTranslator = new User();
        $userTranslator->setUsername('testTranslator')
                       ->setPassword('test')
                       ->setEmail('testTranslator@test.com')
                       ->setEnabled(true)
                       ->addRole('ROLE_ADMIN')
                       ->addRole('ROLE_TRANSLATOR')
        ;

        $userCircle = new User();
        $userCircle->setUsername('testCircle')
                   ->setPassword('test')
                   ->setEmail('testCircle@test.com')
                   ->setEnabled(true)
                   ->addRole('ROLE_CIRCLE')
        ;

        $manager->persist($userAdmin);
        $manager->persist($userUser);
        $manager->persist($userSuperAdmin);
        $manager->persist($userPageWriter);
        $manager->persist($userBiblio);
        $manager->persist($userTranslator);
        $manager->persist($userCircle);
        $manager->flush();
    }
}