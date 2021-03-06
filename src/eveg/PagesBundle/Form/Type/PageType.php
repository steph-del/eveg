<?php
// eveg/PagesBundle/Form/Type/PageType.php

namespace eveg\PagesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PageType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('titleFr', TextType::class, array(
            'label' => 'Titre (fr)',
            'attr' => array(
                'class' => 'form-control'
            ),
        ));
        /*$builder->add('titleEn', TextType::class, array(
            'label' => 'Titre (en)',
            'attr' => array(
                'class' => 'form-control'
            ),
            'required' => '',
        ));*/
        $builder->add('menuTitleFr', TextType::class, array(
            'label' => 'Titre du menu (fr)',
            'attr' => array(
                'class' => 'form-control'
            ),
        ));
        /*$builder->add('menuTitleEn', TextType::class, array(
            'label' => 'Titre du menu (en)',
            'attr' => array(
                'class' => 'form-control'
            ),
            'required' => '',
        ));*/
        $builder->add('listOrder', IntegerType::class, array(
            'label' => "Ordre d'apparition dans le menu",
            'attr' => array(
                'class' => 'form-control'
            ),
        ));
        $builder->add('section', EntityType::class, array(
            'class' => 'evegPagesBundle:Section',
            'choice_label' => 'titleFr',
            'empty_data'  => null,
            'required' => false,
            'attr' => array(
                'class' => 'form-control'
            ),
        ));
        $builder->add('contentFr', 'ckeditor', array(
            'config_name' => 'pages_bundle',
            'attr' => array(
                'class' => 'form-control',
                'data-theme' => 'pages'
            ),
            'label' => 'Contenu (fr)'
        ));
        /*$builder->add('contentEn', 'ckeditor', array(
            'config_name' => 'pages_bundle',
            'attr' => array(
                'class' => 'form-control',
                'data-theme' => 'pages'
            ),
            'label' => 'Contenu (en)',
            'required' => '',
        ));*/
        $builder->add('published', CheckboxType::class, array(
            'label' => 'Publier la page',
            'required' => '',
        ));
        $builder->add('save', 'submit', array(
            'attr' => array(
                'class' => 'btn btn-primary form-control'
            ),
            'label' => 'eveg.file.save',
        ));

    }
        

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'eveg\PagesBundle\Entity\Page',
            'choice_translation_domain' => true,
        ));
    }

    public function getName()
    {
        return 'Page';
    }
}