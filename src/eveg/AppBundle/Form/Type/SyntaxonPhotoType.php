<?php
// eveg/AppBundle/Form/Type/SyntaxonPhotoType.php

namespace eveg\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SyntaxonPhotoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('imageFile', 'vich_image', array(
            'required'      => true,
            'download_link' => true
        ));
        $builder->add('user');
        $builder->add('date');
        $builder->add('country');
        $builder->add('department');
        $builder->add('city');
        $builder->add('locality');
        $builder->add('title');
        $builder->add('description');
        $builder->add('license');

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'eveg\AppBundle\Entity\SyntaxonPhoto',
        ));
    }

    public function getName()
    {
        return 'SyntaxonPhoto';
    }
}