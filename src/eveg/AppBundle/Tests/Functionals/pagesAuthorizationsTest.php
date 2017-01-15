<?php
// src/eveg/AppBundle/Tests/Functionals/DefaultControllerTest.php

namespace eveg\AppBundle\Tests\Functionals;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
//use Symfony\Component\HttpFoundation\Session\Session;
//use Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage;
//use Symfony\Component\HttpFoundation\Session\Storage\MockArraySessionStorage;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

/**
 * To avoid Session already initialized error, run the test with --stderr option :
 * phpunit --stderr -c app/ src/eveg/AppBundle/Tests/Functionals/DefaultControllerTest.php
 * See also
 * http://symfony.com/doc/current/components/http_foundation/session_testing.html
 * https://github.com/sebastianbergmann/phpunit/issues/1193
 *
 * Don't forget to disable Xdebug while running tests
 *
 * Don't forget to load data fixtures : php app/console doctrine:fixtures:load --append
 */

class DefaultControllerTest extends WebTestCase
{

    protected function createAuthorizedClient($userName)
	{
		$client = static::createClient();
		$container = $client->getContainer();

		$session = $container->get('session');
		/** @var $userManager \FOS\UserBundle\Doctrine\UserManager */
		$userManager = $container->get('fos_user.user_manager');
		/** @var $loginManager \FOS\UserBundle\Security\LoginManager */
		$loginManager = $container->get('fos_user.security.login_manager');
		$firewallName = $container->getParameter('fos_user.firewall_name');

		$user = $userManager->findUserBy(array('username' => $userName));
		$loginManager->loginUser($firewallName, $user);

		// save the login token into the session and put it in a cookie
		$container->get('session')->set('_security_' . $firewallName, 
		serialize($container->get('security.context')->getToken()));
		$container->get('session')->save();
		$client->getCookieJar()->set(new Cookie($session->getName(), $session->getId()));

		return $client;
	}

	/**
	 * PUBLIC PAGES
	 */
    public function testHomepageRedirection()
    {
        $client = self::createClient();
        $client->request('GET', '/');
		$statusCode = $client->getResponse()->getStatusCode();
		$this->assertEquals($statusCode, 302);        
    }

    public function testPublicPagesAvailable()
    {
    	$client = self::createClient();

    	// App page
        $client->request('GET', '/app');
        $this->assertTrue($client->getResponse()->isSuccessful());

        // Participate page
        $client->request('GET', '/participer');
        $this->assertTrue($client->getResponse()->isSuccessful());

        // About page
        $client->request('GET', '/a-propos-du-projet-eveg');
        $this->assertTrue($client->getResponse()->isSuccessful());

        // Contact page
        $client->request('GET', '/contact');
        $this->assertTrue($client->getResponse()->isSuccessful());

        // Versions page
        $client->request('GET', '/version');
        $this->assertTrue($client->getResponse()->isSuccessful());

        // Synsystem page
        $client->request('GET', '/synsystem');
        $this->assertTrue($client->getResponse()->isSuccessful());

        // App test page
        $client->request('GET', '/app/1');
        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function testPublicPageNotAvailable()
    {
        $client = self::createClient();

        // Activities page (ROLE_USER only)
        $client->request('GET', '/activites');
        $statusCode = $client->getResponse()->getStatusCode();
		$this->assertEquals($statusCode, 302); 					// Redirected to login page

		// Admin page (ROLE_ADMIN only)
		$client->request('GET', '/admin');
        $statusCode = $client->getResponse()->getStatusCode();
		$this->assertEquals($statusCode, 302); 					// Redirected to login page

		// User's documents page
        $client->request('GET', '/user/docs');
        $statusCode = $client->getResponse()->getStatusCode();
		$this->assertEquals($statusCode, 302); 					// Redirected to login page

        // User's account page
        $client->request('GET', '/profile/');
        $statusCode = $client->getResponse()->getStatusCode();
		$this->assertEquals($statusCode, 302); 					// Redirected to login page
    }

    /**
     * USERS PAGES
     */
    public function testUserPagesAvailable()
    {
        $client = $this->createAuthorizedClient('testUser');

        // Activities page
        $client->request('GET', '/activites');
        $this->assertTrue($client->getResponse()->isSuccessful());

        // User's documents page
        $client->request('GET', '/user/docs');
        $this->assertTrue($client->getResponse()->isSuccessful());

        // User's account page
        $client->request('GET', '/profile/');
        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function testUserPagesNotAvailable()
    {
        $client = $this->createAuthorizedClient('testUser');

        // Admin page
        $client->request('GET', '/admin');
        $statusCode = $client->getResponse()->getStatusCode();
		$this->assertEquals($statusCode, 403); 					// Access not allowed
    }

    /**
     * ADMIN PAGES
     */
    public function testAdminPagesAvailable()
    {
    	$client = $this->createAuthorizedClient('testAdmin');

    	// Admin page
        $client->request('GET', '/admin/');
        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function testAdminPagesNotAvailable()
    {
        $client = $this->createAuthorizedClient('testAdmin');

        // Admin users page (ROLE_SUPER_ADMIN only)
        $client->request('GET', '/admin/users');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 403);                  // Access not allowed

        // Admin users page (ROLE_SUPER_ADMIN only)
        $client->request('GET', '/admin/documents');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 403);                  // Access not allowed

        // Admin infos (parameters) page (ROLE_SUPER_ADMIN only)
        $client->request('GET', '/admin/infos');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 403);                  // Access not allowed

        // Admin users page (ROLE_SUPER_ADMIN only)
        $client->request('GET', '/admin/documents');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 403);                  // Access not allowed

        // Admin users page (ROLE_ADMIN + ROLE_TRANSLATOR only)
        $client->request('GET', '/admin/translations');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 301);                  // Lexik translation throw a 301 status code (?)

        // Admin Algolia page (ROLE_SUPER_ADMIN only)
        $client->request('GET', '/admin/tb-algolia');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 403);                  // Access not allowed

        // Admin Pages page (ROLE_ADMIN + ROLE_PAGE_WRITER only)
        $client->request('GET', '/admin/pages/');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 403);                  // Access not allowed
    }

    /**
     * PAGE_WRITER PAGES
     */
    public function testPageWriterPagesAvailable()
    {
        $client = $this->createAuthorizedClient('testPageWriter');

        // Admin page
        $client->request('GET', '/admin/');
        $this->assertTrue($client->getResponse()->isSuccessful());

        // Admin Pages page
        $client->request('GET', '/admin/pages/');
        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function testPageWriterPagesNotAvailable()
    {
        $client = $this->createAuthorizedClient('testAdmin');

        // Admin users page (ROLE_SUPER_ADMIN only)
        $client->request('GET', '/admin/users');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 403);                  // Access not allowed

        // Admin users page (ROLE_SUPER_ADMIN only)
        $client->request('GET', '/admin/documents');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 403);                  // Access not allowed

        // Admin infos (parameters) page (ROLE_SUPER_ADMIN only)
        $client->request('GET', '/admin/infos');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 403);                  // Access not allowed

        // Admin users page (ROLE_SUPER_ADMIN only)
        $client->request('GET', '/admin/documents');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 403);                  // Access not allowed

        // Admin users page (ROLE_ADMIN + ROLE_TRANSLATOR only)
        $client->request('GET', '/admin/translations');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 301);                  // Lexik translation throw a 301 status code (?)

        // Admin Algolia page (ROLE_SUPER_ADMIN only)
        $client->request('GET', '/admin/tb-algolia');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 403);                  // Access not allowed
    }

    /**
     * PAGE_TRANSLATOR PAGES
     */
    public function testTranslatorPagesAvailable()
    {
        $client = $this->createAuthorizedClient('testPageWriter');

        // Admin page
        $client->request('GET', '/admin/');
        $this->assertTrue($client->getResponse()->isSuccessful());

        // Admin Translations page
        $client->request('GET', '/admin/translations/');
        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function testTranslatorPagesNotAvailable()
    {
        $client = $this->createAuthorizedClient('testAdmin');

        // Admin users page (ROLE_SUPER_ADMIN only)
        $client->request('GET', '/admin/users');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 403);                  // Access not allowed

        // Admin users page (ROLE_SUPER_ADMIN only)
        $client->request('GET', '/admin/documents');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 403);                  // Access not allowed

        // Admin infos (parameters) page (ROLE_SUPER_ADMIN only)
        $client->request('GET', '/admin/infos');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 403);                  // Access not allowed

        // Admin users page (ROLE_SUPER_ADMIN only)
        $client->request('GET', '/admin/documents');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 403);                  // Access not allowed

        // Admin users page (ROLE_ADMIN + ROLE_PAGE_WRITER only)
        $client->request('GET', '/admin/pages');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 301);                  // Lexik translation throw a 301 status code (?)

        // Admin Algolia page (ROLE_SUPER_ADMIN only)
        $client->request('GET', '/admin/tb-algolia');
        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertEquals($statusCode, 403);                  // Access not allowed
    }
}