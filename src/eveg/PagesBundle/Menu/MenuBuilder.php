<?php

// src/eveg/PagesBundle/Menu/Builder.php
// https://gist.github.com/nateevans/9958390

 
namespace eveg\PagesBundle\Menu;
 
use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\HttpFoundation\RequestStack;
 
class MenuBuilder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

	private $factory;
	private $pagesRepo;
    private $sectionsRepo;
	private $requestStack;
	private $securityAuthCheck;

    /**
     * @param FactoryInterface $factory
     *
     * Add any other dependency you need
     */
    public function __construct(FactoryInterface $factory, $pagesRepo, $sectionsRepo, RequestStack $requestStack, $securityAuthCheck)
    {
        $this->factory = $factory;
        $this->pagesRepo = $pagesRepo;
        $this->sectionsRepo = $sectionsRepo;
        $this->requestStack = $requestStack;
        $this->securityAuthCheck = $securityAuthCheck;
    }

    public function createPagesMenu(array $options)
    {

    	$publishedPages = $this->pagesRepo->findForMenu();
        $publishedSections = $this->sectionsRepo->findForMenu();
    	$locale = $this->requestStack->getCurrentRequest()->getLocale();

        $menu = $this->factory->createItem('root');
        
        if(!empty($publishedPages) || !empty($publishedSections))
        {
            $menu->setChildrenAttribute('class', 'nav navbar-nav');
            $menu->addChild('Pages', array('label' => 'Ressources'))
                 ->setAttribute('dropdown', true)
            ;
        }

        if(!empty($publishedPages)) {
            foreach ($publishedPages as $keyPage => $page) { 

                $slug  = $page->getTitleSlugFr();
                $label = $page->getMenuTitleFr();

                if(empty($page->getSection())) {
                    $menu['Pages']->addChild('page'.$keyPage, array('route' => 'eveg_pages_go', 'routeParameters' => array('slug' => $slug), 'label' => $label));
                }
            }
        }

        if(!empty($publishedSections)) {
            foreach ($publishedSections as $keySection => $section) { 

                $slug  = $section->getTitleSlugFr();
                $label = $section->getMenuTitleFr();

                $menu['Pages']->addChild('section'.$keySection, array('route' => 'eveg_pages_section', 'routeParameters' => array('sectionSlug' => $slug), 'label' => $label));
            }

        }

        return $menu;
    	
    }

    public function createAdminPagesMenu(array $options)
    {

    	$menu = $this->factory->createItem('root');
    	$menu->setChildrenAttribute('class', 'nav navbar-nav');

    	if($this->securityAuthCheck->isGranted(array('ROLE_PAGE_WRITER'))) {
	    	$menu->addChild('Pages', array('route' => 'eveg_pages_admin_index', 'label' => 'Pages'))
	    		 ->setAttribute('icon', 'fa fa-newspaper-o')
	    	;
	    }

    	return $menu;

    }
}