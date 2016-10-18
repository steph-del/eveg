<?php
// eveg/AppBundle/Form/Type/SyntaxonFileLinkType.php

namespace eveg\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SyntaxonFileLinkType extends AbstractType
{

    private $securityContext;
    private $possibleDiagnosisService;
    private $sFileRepo;
    private $requestStack;

    public function __construct($securityContext, $possibleDiagn, $sFileRepo, $requestStack)
    {
        $this->securityContext = $securityContext;
        $this->possibleDiagnosisService = $possibleDiagn;
        $this->sFileRepo = $sFileRepo;
        $this->requestStack = $requestStack;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $grantedCircle = $this->securityContext->isGranted('ROLE_CIRCLE');
        $currentId = $this->requestStack->getCurrentRequest()->get('id');
        $possibleDiagnosis = $this->possibleDiagnosisService->getPossibleDiagnosis($currentId);
        $files = $this->sFileRepo->getPublicFiles();
        $outputFiles = array("" => "");
        foreach ($files as $key => $file) {
            //array_push($outputFiles, $file->getOriginalName());
            $outputFiles[$file->getId()] = $file->getOriginalName();
        }

        $builder->add('fileLink', ChoiceType::class, array(
            'label'        => 'eveg.dictionary.file',
            'required'     => true,
            'choices'      => $outputFiles,
            'attr' => array(
                'class' => 'form-control chosen-select'
            ),
            'mapped' => false,
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
                return $value;                  // or if you want to translate some key return 'form.choice.'.$key;
            },
            'attr' => array(
                'class' => 'form-control chosen-select'
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
        return 'SyntaxonFileLink';
    }
}