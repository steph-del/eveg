<?php
// eveg/AppBundle/Form/Type/SyntaxonPhotoType.php

namespace eveg\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SyntaxonPhotoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('imageFile', 'vich_image', array(
            'required'      => true,
            'download_link' => true
        ));
        $builder->add('author', TextType::class, array(
            'attr' => array(
                'placeholder' => 'Caroline Farvacques'
            )
        ));
        $builder->add('date', DateType::class, array(
            'widget' => 'single_text'
        ));
        $builder->add('country');
        $builder->add('department');
        $builder->add('city');
        $builder->add('locality');
        $builder->add('title');
        $builder->add('description');
        $builder->add('license', ChoiceType::class, array(
            'choices' => array(
                'CC-BY-CA' => 'CC-BY-CA')
        ));

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