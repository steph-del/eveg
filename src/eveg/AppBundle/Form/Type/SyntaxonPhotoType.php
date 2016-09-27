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
    private $session;
    private $locale;

    public function __construct($securityContext, $session)
    {
        $this->securityContext = $securityContext;
        $this->session = $session;
        $this->locale = $session->get('_locale');
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
                'placeholder' => ''
            ),
            'label' => 'eveg.dictionary.author'
        ));
        $builder->add('date', DateType::class, array(
            'widget' => 'single_text',
            'label' => 'eveg.dictionary.date',
            'required'      => true
        ));
        $builder->add('country', TextType::class, array(
            'label' => 'eveg.dictionary.country',
            'required'      => false
            ));
        if($this->locale !== 'en') {
            $builder->add('department', TextType::class, array(
                'label' => 'eveg.dictionary.department',
                'required'      => false
                ));
        }
        $builder->add('city', TextType::class, array(
            'label' => 'eveg.dictionary.town',
            'required'      => false
            ));
        $builder->add('locality', TextType::class, array(
            'label' => 'eveg.dictionary.locality',
            'required'      => false
            ));
        $builder->add('title', TextType::class, array(
            'label' => 'eveg.dictionary.title',
            'required'      => false
            ));
        $builder->add('description', TextareaType::class, array(
            'label' => 'eveg.dictionary.description',
            'attr' => array(
                'rows' => 4, 'class' => 'form-control'
            ),
            'required'      => false
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
                'CC-BY-SA' => 'CC-BY-SA'),
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