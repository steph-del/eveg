<?php

namespace eveg\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SyntaxonSearchControllerTest extends WebTestCase
{
	public function testExceptionYmlFormat()
	{

		$this->setExpectedException('\Symfony\Component\HttpKernel\Exception\NotFoundHttpException');

		$client = static::createClient();

		$client->request('GET', '/api/syntaxons/search.yml?term=arrhenatheretea');

	}

	public function testJsonResponse()
	{
		$client = static::createClient();

		$client->request('GET', '/api/syntaxons/search.json?term=arrhenatheretea');

		// is it a json response ?
		$this->assertEquals('application/json', $client->getResponse()->headers->get('content_type'));

		// success ?
		$this->assertEquals(200, $client->getResponse()->getStatusCode());
		
	}

	public function testXmlResponse()
	{
		$client = static::createClient();

		$client->request('GET', '/api/syntaxons/search.xml?term=arrhenatheretea');

		// is it a json response ?
		$this->assertEquals('application/xml', $client->getResponse()->headers->get('content_type'));

		// success ?
		$this->assertEquals(200, $client->getResponse()->getStatusCode());
		
	}

	/*
	public function testExceptionJqueryTermVariable()
	{

		$this->setExpectedException('\Symfony\Component\HttpKernel\Exception\HttpException');

		$client = static::createClient();

		// the parameter must be 'term'
		$client->request('GET', '/api/syntaxons/search.json?searchedTerm=arr');

	}
	*/
}