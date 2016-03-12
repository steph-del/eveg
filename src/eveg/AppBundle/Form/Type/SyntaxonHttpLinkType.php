<?php
// eveg/AppBundle/Form/Type/SyntaxonHttpLinkType.php

namespace eveg\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SyntaxonHttpLinkType extends AbstractType
{

    private $securityContext;

    public function __construct($securityContext)
    {
        $this->securityContext = $securityContext;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $grantedCircle = $this->securityContext->isGranted('ROLE_CIRCLE');

        $builder->add('link', 'text', array(
            'required'      => true,
            'attr' => array(
                'placeholder' => "http://"
                )
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

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'eveg\AppBundle\Entity\SyntaxonHttpLink',
        ));
    }

    public function getName()
    {
        return 'SyntaxonHttpLink';
    }
}