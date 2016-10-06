<?php

// src/eveg/PagesBundle/Menu/Builder.php
// https://gist.github.com/nateevans/9958390

 
namespace eveg\PagesBundle\Menu;
 
use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RequestStack;
 
class MenuBuilder extends ContainerAware
{
	private $factory;
	private $pagesRepo;
	private $requestStack;
	private $securityContext;

    /**
     * @param FactoryInterface $factory
     *
     * Add any other dependency you need
     */
    public function __construct(FactoryInterface $factory, $pagesRepo, RequestStack $requestStack, $securityContext)
    {
        $this->factory = $factory;
        $this->pagesRepo = $pagesRepo;
        $this->requestStack = $requestStack;
        $this->securityContext = $securityContext;
    }

    public function createPagesMenu(array $options)
    {

    	$publishedPages = $this->pagesRepo->findForMenu();
    	$locale = $this->requestStack->getCurrentRequest()->getLocale();

        if(!empty($publishedPages)) {
            $menu = $this->factory->createItem('root');
            $menu->setChildrenAttribute('class', 'nav navbar-nav');

            $menu->addChild('Pages', array('label' => 'Ressources'))
                 ->setAttribute('dropdown', true)
            ;

            foreach ($publishedPages as $keyPage => $page) {
            
                if($locale == 'fr' || $locale == 'fr_fr') {
                    $menu['Pages']->addChild($keyPage, array('route' => 'eveg_pages_go', 'routeParameters' => array('slug' => $page->getTitleSlugFr()), 'label' => $page->getTitleFr()));
                } else {
                    if(!empty($page->getTitleEn())) {
                        $menu['Pages']->addChild($keyPage, array('route' => 'eveg_pages_go', 'routeParameters' => array('slug' => $page->getTitleSlugEn()), 'label' => $page->getTitleEn()));
                    } else {
                        $menu['Pages']->addChild($keyPage, array('route' => 'eveg_pages_go', 'routeParameters' => array('slug' => $page->getTitleSlugFr()), 'label' => $page->getTitleFr()));
                    }
                }

            }

            return $menu;
        }

        $menu = $this->factory->createItem('root');
        return $menu;
    	
    }

    public function createAdminPagesMenu(array $options)
    {

    	$menu = $this->factory->createItem('root');
    	$menu->setChildrenAttribute('class', 'nav navbar-nav');

    	if($this->securityContext->isGranted(array('ROLE_PAGE_WRITER'))) {
	    	$menu->addChild('Pages', array('route' => 'eveg_pages_admin_index', 'label' => 'Pages'))
	    		 ->setAttribute('icon', 'fa fa-newspaper-o')
	    	;
	    }

    	return $menu;

    }
}