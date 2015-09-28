<?php
// src/eveg/UserBundle/Form/Type/AdminProfileFormType.php

namespace eveg\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AdminProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('name');
        $builder->add('roles', 'choice', array(
            'choices' => $this->getExistingRoles(),
            'data' => $group->getRoles(),
            'label' => 'Roles',
            'expanded' => true,
            'multiple' => true,
            'mapped' => true,
        ));
        
    }

    public function getName()
    {
        return 'fos_user_profile';
    }
}