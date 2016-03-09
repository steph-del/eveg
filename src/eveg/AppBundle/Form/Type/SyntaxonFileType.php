<?php
// eveg/AppBundle/Form/Type/SyntaxonFileType.php

namespace eveg\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SyntaxonFileType extends AbstractType
{

    private $securityContext;

    public function __construct($securityContext)
    {
        $this->securityContext = $securityContext;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $grantedCircle = $this->securityContext->isGranted('ROLE_CIRCLE');

        $builder->add('fileFile', 'vich_file', array(
            'required'      => true,
            'download_link' => true
        ));
        $builder->add('title', 'text', array(
            'attr' => array(
                'placeholder' => 'Soyez concis et explicite. Ex : "Br.-Bl. 1936 : diagnose"')
            ));
        if($grantedCircle) {
            $builder->add('visibility', ChoiceType::class, array(
            'choices' => array(
                'public' => 'Public',
                'private' => 'Privé',
                'group' => 'Cercle')
            ));
        } else {
            $builder->add('visibility', ChoiceType::class, array(
            'choices' => array(
                'public' => 'Public',
                'private' => 'Privé')
            ));
        }
        
        $builder->add('license', ChoiceType::class, array(
            'choices' => array(
                'CC-BY-CA' => 'CC-BY-CA')
        ));

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'eveg\AppBundle\Entity\SyntaxonFile',
        ));
    }

    public function getName()
    {
        return 'SyntaxonFile';
    }
}