<?php

namespace eveg\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SyntaxonTreeRestControllerTest extends WebTestCase
{
	public function testBaseTree()
	{
		$client = static::createClient();

		$client->request('GET', '/api/syntaxons/tree.json');

		// is it a json response ?
		$this->assertEquals('application/json', $client->getResponse()->headers->get('content_type'));

		// success ?
		$this->assertEquals(200, $client->getResponse()->getStatusCode());
		
	}
}