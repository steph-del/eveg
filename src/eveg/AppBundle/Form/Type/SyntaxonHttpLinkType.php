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
    private $possibleDiagnosisService;
    private $requestStack;

    public function __construct($securityContext, $possibleDiagn, $requestStack)
    {
        $this->securityContext = $securityContext;
        $this->possibleDiagnosisService = $possibleDiagn;
        $this->requestStack = $requestStack;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $grantedCircle = $this->securityContext->isGranted('ROLE_CIRCLE');
        $currentId = $this->requestStack->getCurrentRequest()->get('id');
        $possibleDiagnosis = $this->possibleDiagnosisService->getPossibleDiagnosis($currentId);

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

        $builder->add('diagnosisOf', ChoiceType::class, array(
            'choices' => $possibleDiagnosis,
            'choices_as_values' => true,
            'choice_label' => function ($value, $key, $index) {
                if($value == null) {
                    return '-';
                }
                return $value;
                // or if you want to translate some key
                //return 'form.choice.'.$key;
            }
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