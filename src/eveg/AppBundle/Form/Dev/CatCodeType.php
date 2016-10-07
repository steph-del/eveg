<?php

// eveg/AppBundle/Form/Dev/CatCodeForm.html.twig

namespace eveg\AppBundle\Form\Dev;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CatCodeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder->add('catminatCode', 'text', array('label' => 'Code CATMINAT'));
    }
    
    /**
     * @return string
     */
    public function getName()
    {        
        return 'CatCode';
    }
}