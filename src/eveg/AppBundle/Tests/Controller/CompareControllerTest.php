<?php
// src/eveg/AppBundle/Tests/Controller/CompareControllerTest.php

namespace eveg\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Session\Storage\MockArraySessionStorage;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;

/**
 * To mock the session, see http://symfony.com/doc/current/components/http_foundation/session_testing.html
 */

class CompareControllerTest extends WebTestCase
{

	public function testAddItem()
	{
		$client = self::createClient();
		$container = $client->getContainer();
		$session = $container->get('session');

		// Empty the eveg_compare session variable
		$session->set('eveg_compare', null);					
		
		// Add first vegetation to compare and check if eveg_compare is successfully updated
		$session->set('idReferer', 100);
		$session->set('syntaxonNameReferer', 'Arrhenatherenea');
    
    $client->request('GET', '/app/compare/add');
    $response = $client->getResponse();
    $contentType = $response->headers->get('content_type');
    $this->assertTrue($response->isSuccessful());								// is request successful ?
    $this->assertEquals('application/json', $contentType);	  	// is json response ? 
    $compareArray = $session->get('eveg_compare');
    $this->assertEquals($compareArray[100], 'Arrhenatherenea');	// eveg_compare successfully updated ?

	}

	/* Add to much items */
	public function testAddItem2()
	{
		$client = self::createClient();
		$container = $client->getContainer();
		$session = $container->get('session');

		// Empty the eveg_compare session variable
		$session->set('eveg_compare', null);					
		// Fill eveg_compare
		$compareArray = array(
			100 => 'Arrhenatherenea',
			200 => 'Agrostienea');
		$session->set('eveg_compare', $compareArray);

		// Add third vegetation to compare and check if eveg_compare is successfully updated
		$session->set('idReferer', 300);
		$session->set('syntaxonNameReferer', 'Other');
    
    $client->request('GET', '/app/compare/add');
    $response = $client->getResponse();
    $contentType = $response->headers->get('content_type');
    $this->assertTrue($response->isSuccessful());										// is request successful ?
    $this->assertEquals('application/json', $contentType);	  			// is json response ? 
    $this->assertEquals($response->getContent(), '"Error, you already have 2 items for comparison, that is enough !"');	// Returns a json with error message ?

	}

	public function testRemoveItem()
	{
		$client = self::createClient();
		$container = $client->getContainer();
		$session = $container->get('session');

		$session->set('eveg_compare', null);					// Empty the eveg_compare session variable
		// Fill eveg_compare
		$compareArray = array(
			100 => 'Arrhenatherenea',
			200 => 'Agrostienea');
		$session->set('eveg_compare', $compareArray);

		$client->request('GET', '/app/compare/remove', array('id' => 200));
		$response = $client->getResponse();
		$contentType = $response->headers->get('content_type');
		$this->assertTrue($response->isSuccessful());										 	// is request successful ?
		$this->assertEquals('application/json', $contentType);	   				// is json response ?
		$this->assertEquals($session->get('eveg_compare'), array(100 => 'Arrhenatherenea')); // eveg_compare successfully updated ?

	}

	public function testRemoveItemEmptyOrToMuch()
	{
		$client = self::createClient();
		$container = $client->getContainer();
		$session = $container->get('session');

		$session->set('eveg_compare', null);					// Empty the eveg_compare session variable
		// Null eveg_compare
		$compareArray = array();
		$session->set('eveg_compare', $compareArray);

		$client->request('GET', '/app/compare/remove', array('id' => 200));
		$response = $client->getResponse();
		$contentType = $response->headers->get('content_type');
		$this->assertTrue($response->isSuccessful());										 	// is request successful ?
		$this->assertEquals('application/json', $contentType);	   				// is json response ?
		$this->assertEquals($response->getContent(), "\"Error, you have 0 items for comparison, can\u0027t remove one !\"");	// Returns a json with error message ?

	}

	public function testRemoveItemToMuch()
	{
		$client = self::createClient();
		$container = $client->getContainer();
		$session = $container->get('session');

		$session->set('eveg_compare', null);					// Empty the eveg_compare session variable
		// Null eveg_compare
		$compareArray = array(
			100 => 'Arrhenatherenea',
			200 => 'Agrostienea',
			300 => 'Third');
		$session->set('eveg_compare', $compareArray);

		$client->request('GET', '/app/compare/remove', array('id' => 200));
		$response = $client->getResponse();
		$contentType = $response->headers->get('content_type');
		$this->assertTrue($response->isSuccessful());										 	// is request successful ?
		$this->assertEquals('application/json', $contentType);	   				// is json response ?
		$this->assertEquals($response->getContent(), "\"Error, you have 3 items for comparison, can\u0027t remove one !\"");	// Returns a json with error message ?
	}

	public function testEmpty()
	{
		$client = self::createClient();
		$container = $client->getContainer();
		$session = $container->get('session');

		$session->set('eveg_compare', null);					// Empty the eveg_compare session variable
		// Fill eveg_compare
		$compareArray = array(
			100 => 'Arrhenatherenea',
			200 => 'Agrostienea');
		$session->set('eveg_compare', $compareArray);

		$client->request('GET', '/app/compare/empty');
		$response = $client->getResponse();
		$contentType = $response->headers->get('content_type');
		$this->assertTrue($response->isSuccessful());										 	// is request successful ?
		$this->assertEquals('application/json', $contentType);	   				// is json response ?
		$this->assertEquals($session->get('eveg_compare'), null); // eveg_compare successfully updated ?
	}

	public function testCompare()
	{
		$client = self::createClient();
		$container = $client->getContainer();
		$session = $container->get('session');

		$session->set('eveg_compare', null);					// Empty the eveg_compare session variable
		// Fill eveg_compare (be carefull, ids 1 and 2 must be reals)
		$compareArray = array(
			1 => 'First vegetation to compare',
			2 => 'Second vegetation to compare');
		$session->set('eveg_compare', $compareArray);

		$client->request('GET', '/app/compare');
		$response = $client->getResponse();
		$contentType = $response->headers->get('content_type');
		$this->assertTrue($response->isSuccessful());										 	// is request successful ?
		$this->assertEquals('text/html; charset=UTF-8', $contentType);	  // is html response ?
	}
}