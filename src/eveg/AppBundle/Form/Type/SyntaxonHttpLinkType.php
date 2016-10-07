<?php
// eveg/AppBundle/Form/Type/SyntaxonHttpLinkType.php

namespace eveg\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

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
            'label' => 'eveg.dictionary.link',
            'required'      => true,
            'attr' => array(
                'placeholder' => "http://"
                )
        ));
        $builder->add('title', 'text', array(
            'label' => 'eveg.dictionary.title',
            'attr' => array(
                'placeholder' => 'Soyez concis et explicite. Ex : "Br.-Bl. 1936 : diagnose"')
            ));

        $builder->add('diagnosisOf', ChoiceType::class, array(
            'label' => 'eveg.dictionary.diagnosis_of',
            'choices' => $possibleDiagnosis,
            'choices_as_values' => true,
            'choice_label' => function ($value, $key, $index) {
                if($value == null) {
                    return '-';
                }
                return $value;                  // or if you want to translate some key return 'form.choice.'.$key;
            },
            'attr' => array(
                'class' => 'form-control',
            ),
        ));
        
        if($grantedCircle) {
            $builder->add('visibility', ChoiceType::class, array(
            'label' => 'eveg.dictionary.visibility',
            'choices' => array(
                'public' => 'eveg.dictionary.public',
                'private' => 'eveg.dictionary.private',
                'group' => 'eveg.dictionary.circle'),
            'attr' => array(
                'class' => 'form-control',
            ),
            ));
        } else {
            $builder->add('visibility', ChoiceType::class, array(
            'label' => 'eveg.dictionary.visibility',
            'choices' => array(
                'public' => 'eveg.dictionary.public',
                'private' => 'eveg.dictionary.private'),
            'attr' => array(
                'class' => 'form-control',
            ),
            ));
        }

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'eveg\AppBundle\Entity\SyntaxonHttpLink',
            'choice_translation_domain' => true,
        ));
    }

    public function getName()
    {
        return 'SyntaxonHttpLink';
    }
}