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
    //private $syntaxonId;

    public function __construct($securityContext, $possibleDiagn)
    {
        $this->securityContext = $securityContext;
        $this->possibleDiagnosisService = $possibleDiagn;
        //$this->syntaxonId = $id;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $grantedCircle = $this->securityContext->isGranted('ROLE_CIRCLE');
        $possibleDiagnosis = $this->possibleDiagnosisService->getPossibleDiagnosis(5188);

        $builder->add('fileFile', 'vich_file', array(
            'required'      => true,
            'download_link' => true
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