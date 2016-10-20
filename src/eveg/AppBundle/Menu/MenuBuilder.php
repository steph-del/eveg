<?php

// src/eveg/AppBundle/Menu/Builder.php
// https://gist.github.com/nateevans/9958390

 
namespace eveg\AppBundle\Menu;
 
use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\HttpFoundation\Session\Session;
 
class MenuBuilder implements ContainerAwareInterface
{
  use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
      $securityContext = $this->container->get('security.authorization_checker');

    	$menu = $factory->createItem('root');
    	$menu->setChildrenAttribute('class', 'nav navbar-nav');
 
		$menu->addchild('Home', array('route' => 'eveg_app_homepage', 'label' => ''))
			->setAttribute('icon', 'home');
		

    if($securityContext->isGranted('ROLE_USER')) {
      $menu->addChild('Activities', array('route' => 'eveg_app_activity', 'label' => 'eveg.menu.activity'));
    }

    $menu->addChild('Participate', array('route' => 'eveg_app_participate', 'label' => 'eveg.menu.participate'));

		$menu->addChild('Contact', array('route' => 'eveg_app_contact', 'label' => 'eveg.menu.contact'));
 
        return $menu;
    }

    public function searchMenu(FactoryInterface $factory, array $options)
    {
      $menu = $factory->createItem('root');
      $menu->setChildrenAttribute('class', 'nav navbar-nav navbar-right');

      $menu->addChild('Search', array('route' => 'eveg_app_homepage', 'label' => 'eveg.search.title'))
        ->setAttribute('class', 'navbar-right')
        ->setAttribute('id', 'search-icon')
        ->setAttribute('icon', 'search')
        ->setAttribute('data-toggle', 'modal')
         ->setAttribute('data-target', '#modalSearch');

      return $menu;

    }

    public function filterMenu(FactoryInterface $factory, array $options)
    {

      $session     = new Session();
      $ueFilter    = $session->get('ueFilter');
      $depFrFilter = $session->get('depFrFilter');
      $filterFlag  = false;

      if(($ueFilter != '[]') or ($depFrFilter != '[]')) {
        if(($ueFilter != null) or ($depFrFilter != null)) {
          $filterFlag = true;
        }
      }

      $menu = $factory->createItem('root');
      $menu->setChildrenAttribute('class', 'nav navbar-nav navbar-right');

      $menu->addChild('Filter', array('route' => 'eveg_app_homepage', 'label' => 'eveg.menu.filter'))
         ->setAttribute('icon', 'filter')
         ->setAttribute('id', 'filter-icon')
         ->setAttribute('class', 'navbar-right')
         ->setAttribute('data-toggle', 'modal')
         ->setAttribute('data-target', '#modalFilter')
         ;
      if($filterFlag == true) {
        $menu['Filter']->setAttribute('class', 'activeFilter')
                       ->setAttribute('iconAppend', 'asterisk')
                       ;

      }

      return $menu;
    }
 
    public function userMenu(FactoryInterface $factory, array $options)
    {
      $securityContext = $this->container->get('security.authorization_checker');

    	$menu = $factory->createItem('root');
    	$menu->setChildrenAttribute('class', 'nav navbar-nav navbar-right');
 
    	/*
    	You probably want to show user specific information such as the username here. That's possible! Use any of the below methods to do this.*/
		
		$user = $this->container->get('security.token_storage')->getToken()->getUser(); // Get username of the current logged in user_error()

		// Check if the visitor has any authenticated roles
    	if($securityContext->isGranted(array('ROLE_ADMIN'))) {
    		$menu->addChild('User', array('label' => $user->getUserName()))
				->setAttribute('dropdown', true)
				->setAttribute('icon', 'fa fa-user');
        $menu['User']->addChild('Docs', array('route' => 'user_docs', 'label' => 'eveg.menu.user.my_docs'));
				$menu['User']->addChild('Account', array('route' => 'fos_user_profile_show', 'label' => 'eveg.menu.user.my_account'));
	    		$menu['User']->addChild('Dashboard', array('route' => 'eveg_admin_dashboard', 'label' => 'eveg.menu.user.dashboard'));
	    		$menu['User']->addChild('Logout', array('route' => 'fos_user_security_logout', 'label' => 'eveg.menu.user.logout'));
    	} elseif($this->container->get('security.context')->isGranted(array('ROLE_USER'))) {
	    	$menu->addChild('User', array('label' => $user->getUserName()))
				->setAttribute('dropdown', true)
				->setAttribute('icon', 'fa fa-user');
        $menu['User']->addChild('Docs', array('route' => 'user_docs', 'label' => 'eveg.menu.user.my_docs'));
				$menu['User']->addChild('Account', array('route' => 'fos_user_profile_show', 'label' => 'eveg.menu.user.my_account'));
				$menu['User']->addChild('Logout', array('route' => 'fos_user_security_logout', 'label' => 'eveg.menu.user.logout'));
    	} else {
	    	$menu->addChild('Anonymous', array('route' => 'fos_user_security_login', 'label' => 'eveg.menu.user.login'));
 
    	}
		 
        return $menu;
    }

    public function languageMenu(FactoryInterface $factory, array $options)
    {
    	// Get local
 		$locale = $this->container->get('request')->getLocale();

    	$menu = $factory->createItem('root');
    	$menu->setChildrenAttribute('class', 'nav navbar-nav navbar-right');
    	
    	$menu->addChild('Language', array('label' => ''/*$locale*/))
    		->setAttribute('dropdown', true)
            ->setAttribute('flag', $locale);

    	if($locale == 'en'){
    		$menu['Language']->addchild('langDe', array('route' => 'eveg_language', 
    												   'routeParameters' => array('lang' => 'de'),
    												   'label' => 'Deutsch'))
                             ->setAttribute('flag', 'de');
            $menu['Language']->addchild('langEs', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'es'),
                                                       'label' => 'Español'))
                             ->setAttribute('flag', 'es');
            $menu['Language']->addchild('langFr', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'fr'),
                                                       'label' => 'Français'))
                             ->setAttribute('flag', 'fr');
            /*$menu['Language']->addchild('langIt', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'it'),
                                                       'label' => 'Italiano'))
                             ->setAttribute('flag', 'it');*/

    	} elseif($locale == 'fr') {
    		$menu['Language']->addchild('langDe', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'de'),
                                                       'label' => 'Deutsch'))
                             ->setAttribute('flag', 'de');
            $menu['Language']->addchild('langEn', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'en'),
                                                       'label' => 'English'))
                             ->setAttribute('flag', 'gb');
            $menu['Language']->addchild('langEs', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'es'),
                                                       'label' => 'Español'))
                             ->setAttribute('flag', 'es');
            /*$menu['Language']->addchild('langIt', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'it'),
                                                       'label' => 'Italiano'))
                             ->setAttribute('flag', 'it');*/

    	} elseif($locale == 'de') {
            $menu['Language']->addchild('langEn', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'en'),
                                                       'label' => 'English'))
                             ->setAttribute('flag', 'gb');
            $menu['Language']->addchild('langEs', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'es'),
                                                       'label' => 'Español'))
                             ->setAttribute('flag', 'es');
            $menu['Language']->addchild('langFr', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'fr'),
                                                       'label' => 'Français'))
                             ->setAttribute('flag', 'fr');
            /*$menu['Language']->addchild('langIt', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'it'),
                                                       'label' => 'Italiano'))
                             ->setAttribute('flag', 'it');*/

        } elseif($locale == 'es') {
            $menu['Language']->addchild('langDe', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'de'),
                                                       'label' => 'Deutsch'))
                             ->setAttribute('flag', 'de');
            $menu['Language']->addchild('langEn', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'en'),
                                                       'label' => 'English'))
                             ->setAttribute('flag', 'gb');
            $menu['Language']->addchild('langFr', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'fr'),
                                                       'label' => 'Français'))
                             ->setAttribute('flag', 'fr');
            /*$menu['Language']->addchild('langIt', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'it'),
                                                       'label' => 'Italiano'))
                             ->setAttribute('flag', 'it');*/

        } elseif($locale == 'it') {
            $menu['Language']->addchild('langDe', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'de'),
                                                       'label' => 'Deutsch'))
                             ->setAttribute('flag', 'de');
            $menu['Language']->addchild('langEn', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'en'),
                                                       'label' => 'English'))
                             ->setAttribute('flag', 'gb');
            $menu['Language']->addchild('langEs', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'es'),
                                                       'label' => 'Español'))
                             ->setAttribute('flag', 'es');
            $menu['Language']->addchild('langFr', array('route' => 'eveg_language', 
                                                       'routeParameters' => array('lang' => 'fr'),
                                                       'label' => 'Français'))
                             ->setAttribute('flag', 'fr');
        }
    	return $menu;

    }

    public function dashboardMenu(FactoryInterface $factory, array $options)
    {
      $securityContext = $this->container->get('security.authorization_checker');

    	$menu = $factory->createItem('root');
    	$menu->setChildrenAttribute('class', 'nav navbar-nav');
 
		$menu->addchild('Home', array('route' => 'eveg_admin_dashboard', 'label' => ''))
			->setAttribute('icon', 'home');
		
    if($securityContext->isGranted(array('ROLE_SUPER_ADMIN'))) {
		  $menu->addChild('Users', array('route' =>'eveg_admin_users', 'label' => 'Utilisateurs'))
        ->setAttribute('icon', 'user');
		}

    if($securityContext->isGranted(array('ROLE_SUPER_ADMIN'))) {
      $menu->addChild('Documents', array('route' =>'eveg_admin_documents', 'label' => 'Documents'))
        ->setAttribute('icon', 'files-o');
    }

    if($securityContext->isGranted(array('ROLE_SUPER_ADMIN'))) {
      $menu->addChild('Versioning', array('route' =>'eveg_admin_versioning', 'label' => 'Versions'))
           ->setAttribute('icon', 'fa fa-tag');
    }

    if($securityContext->isGranted(array('ROLE_SUPER_ADMIN'))) {
      $menu->addChild('Infos', array('route' =>'eveg_admin_infos', 'label' => 'Param'))
           ->setAttribute('icon', 'fa fa-cog');
    }
    
    if($securityContext->isGranted(array('ROLE_TRANSLATOR'))) {
      $menu->addChild('Traductions', array('route' => 'lexik_translation_overview', 'label' => 'Traductions'))
           ->setAttribute('icon', 'fa fa-language');
    }

    if($securityContext->isGranted(array('ROLE_SUPER_ADMIN'))) {
      $menu->addChild('Import', array('label' => 'Import'))
           ->setAttribute('dropdown', true)
           ->setAttribute('icon', 'fa fa-database');
      $menu['Import']->addChild('Core', array('route' => 'eveg_admin_import_baseveg_core', 'label' => 'Core'));
      $menu['Import']->addChild('Fr', array('route' => 'eveg_admin_import_baseveg_repartitionDepFr', 'label' => 'Rep. Fr.'));
      $menu['Import']->addChild('Eu', array('route' => 'eveg_admin_import_baseveg_repartitionEurope', 'label' => 'Rep. UE'));
      $menu['Import']->addChild('Ecology', array('route' => 'eveg_admin_import_baseveg_ecology', 'label' => 'Ecologie'));
      $menu['Import']->addChild('Biblio', array('route' => 'eveg_admin_import_baseveg_biblio', 'label' => 'Biblio'));
      $menu['Import']->addChild('Baseflor', array('route' => 'eveg_admin_import_baseflor', 'label' => 'Baseflor'));
      $menu['Import']->addChild('Separator1')
                     ->setAttribute('role', 'separator')
                     ->setAttribute('class', 'divider');
      $menu['Import']->addChild('Logs', array('route' => 'eveg_admin_import_logs', 'label' => 'Logs'));
    }
 
        return $menu;
    }
}