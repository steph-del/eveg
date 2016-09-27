<?php
// eveg/AppBundle/Form/Type/SyntaxonFileType.php

namespace eveg\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use eveg\AppBundle\Entity\SyntaxonCore;

class SyntaxonFileType extends AbstractType
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

        $builder->add('fileFile', 'vich_file', array(
            'label' => 'eveg.dictionary.file',
            'required'      => true,
            'download_link' => true
        ));
        $builder->add('title', 'text', array(
            'label' => 'eveg.dictionary.title',
            'attr' => array(
                'placeholder' => 'eveg.app.show_one.files.add.placeholder')
            ));
        $builder->add('diagnosisOf', ChoiceType::class, array(
            'label' => 'eveg.file.is_diagnosis',
            'choices' => $possibleDiagnosis,
            'choices_as_values' => true,
            'choice_label' => function ($value, $key, $index) {
                if($value == null) {
                    return '-';
                }
                return $value;
                // or if you want to translate some key
                //return 'form.choice.'.$key;
            },
            'attr' => array(
                'class' => 'form-control'
            ),
        ));

        if($grantedCircle) {
            $builder->add('visibility', ChoiceType::class, array(
                'label' => 'eveg.dictionary.visibility',
                'choices' => array(
                    'public' => 'Public',
                    'private' => 'Privé',
                    'group' => 'Cercle'),
                'attr' => array(
                    'class' => 'form-control'
                ),
            ));
        } else {
            $builder->add('visibility', ChoiceType::class, array(
            'label' => 'eveg.dictionary.visibility',
            'choices' => array(
                'public' => 'Public',
                'private' => 'Privé'),
            'attr' => array(
                    'class' => 'form-control'
                ),
            ));
        }
        
        /*$builder->add('license', ChoiceType::class, array(
            'choices' => array(
                'CC-BY-CA' => 'CC-BY-CA')
        ));*/

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'eveg\AppBundle\Entity\SyntaxonFile',
            'choice_translation_domain' => true,
        ));
    }

    public function getName()
    {
        return 'SyntaxonFile';
    }
}