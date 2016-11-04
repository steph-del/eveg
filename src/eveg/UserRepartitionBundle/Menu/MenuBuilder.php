<?php
// src/eveg/UserRepartitionBundle/Menu/MenuBuilder.php

 
namespace eveg\UserRepartitionBundle\Menu;
 
use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\HttpFoundation\Session\Session;
 
class MenuBuilder implements ContainerAwareInterface
{
	use ContainerAwareTrait;

	public function repartitionMenu(FactoryInterface $factory, array $options)
	{
		$securityContext = $this->container->get('security.authorization_checker');

    	if($securityContext->isGranted(array('ROLE_SUPER_ADMIN'))) {
    		$menu = $factory->createItem('root');
    		$menu->setChildrenAttribute('class', 'nav navbar-nav');

			$menu->addChild('UserRepartition', array('label' => 'Données choro.'))
				->setAttribute('dropdown', true)
				->setAttribute('icon', 'fa fa-position');

			$menu['UserRepartition']->addChild('ListEnabledAndActive', array('route' => 'eveg_user_repartition_list_enabled_and_active', 'label' => 'Données activées et validées'));
			$menu['UserRepartition']->addChild('ListDisabledOrUnactive', array('route' => 'eveg_user_repartition_list_disabled_or_unactive', 'label' => 'Données non activées ou non validées'));
			$menu['UserRepartition']->addChild('Separator1')
                     ->setAttribute('role', 'separator')
                     ->setAttribute('class', 'divider');
            $menu['UserRepartition']->addChild('Conflicts', array('route' => 'eveg_user_repartition_admin_conflicts', 'label' => 'Conflits'));
            $menu['UserRepartition']->addChild('Validation', array('route' => 'eveg_user_repartition_admin_unresolved', 'label' => 'Données à valider'));
		}

		return $menu;
	}

}
