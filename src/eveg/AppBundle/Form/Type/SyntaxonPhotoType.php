<?php
// eveg/AppBundle/Form/Type/SyntaxonPhotoType.php

namespace eveg\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class SyntaxonPhotoType extends AbstractType
{

    private $securityContext;

    public function __construct($securityContext)
    {
        $this->securityContext = $securityContext;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $grantedCircle = $this->securityContext->isGranted('ROLE_CIRCLE');
        
        $builder->add('imageFile', 'vich_image', array(
            'required'      => true,
            'download_link' => true,
            'label' => 'eveg.dictionary.file'
        ));
        $builder->add('author', TextType::class, array(
            'attr' => array(
                'placeholder' => 'Louise Michel'
            ),
            'label' => 'eveg.dictionary.author'
        ));
        $builder->add('date', DateType::class, array(
            'widget' => 'single_text',
            'label' => 'eveg.dictionary.date'
        ));
        $builder->add('country', TextType::class, array(
            'label' => 'eveg.dictionary.country'
            ));
        $builder->add('department', TextType::class, array(
            'label' => 'eveg.dictionary.department'
            ));
        $builder->add('city', TextType::class, array(
            'label' => 'eveg.dictionary.town'
            ));
        $builder->add('locality', TextType::class, array(
            'label' => 'eveg.dictionary.locality'
            ));
        $builder->add('title', TextType::class, array(
            'label' => 'eveg.dictionary.title'
            ));
        $builder->add('description', TextareaType::class, array(
            'label' => 'eveg.dictionary.description',
            'attr' => array(
                'rows' => 4, 'class' => 'form-control'
            ),
        ));
        if($grantedCircle) {
            $builder->add('visibility', ChoiceType::class, array(
                'choices' => array(
                    'public' => 'Public',
                    'private' => 'Privé',
                    'group' => 'Cercle'
                ),
                'label' => 'eveg.dictionary.visibility',
                'attr' => array(
                    'class' => 'form-control',
                )
            ));
        } else {
            $builder->add('visibility', ChoiceType::class, array(
                'choices' => array(
                    'public' => 'Public',
                    'private' => 'Privé'),
                'label' => 'eveg.dictionary.visibility',
                'attr' => array(
                    'class' => 'form-control'
                )
            ));
        }
        $builder->add('license', ChoiceType::class, array(
            'choices' => array(
                'CC-BY-CA' => 'CC-BY-CA'),
            'label' => 'eveg.dictionary.license',
            'attr' => array(
                'class' => 'form-control'
            )
        ));

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'eveg\AppBundle\Entity\SyntaxonPhoto',
            'choice_translation_domain' => true,
        ));
    }

    public function getName()
    {
        return 'SyntaxonPhoto';
    }
}