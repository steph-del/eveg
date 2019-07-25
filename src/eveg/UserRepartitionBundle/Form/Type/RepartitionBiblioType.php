<?php
// eveg/UserRepartitionBundle/Form/Type/RepartitionBiblioType.php

namespace eveg\UserRepartitionBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RepartitionBiblioType extends AbstractType
{

    private $repartitionTablesHelper;

    public function __construct($repartitionTablesHelper)
    {
        $this->repartitionTablesHelper = $repartitionTablesHelper;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        /*$builder->add('synonymType', ChoiceType::class, array(
            'label'    => 'Type de synonyme',
            'choices'  => $this->getSynonymTypes(),
            'required' => false,
            'attr'         => array(
                'class' => 'form-control'
            ),
        ));
        $builder->add('syntaxonBiblioName', TextType::class, array(
            'label'    => 'Nom du syntaxon cité',
            'required' => false,
        ));
        $builder->add('syntaxonBiblioAuthor', TextType::class, array(
            'label'    => 'Nom de l\'autorité',
            'required' => false,
        ));*/

        $builder->add('biblio', EntityType::class, array(
            'label'        => 'Source bibliographique',
            'class'        => 'evegBiblioBundle:BaseBiblio',
            'choice_label' => 'reference',
            'choices_as_values' => true,
            'required'     => false,
            'attr'         => array(
                'class' => 'form-control biblio'
            ),
        ));
        
        $builder->add('biblioToAdd', TextType::class, array(
            'label'    => 'Si la source bibliographique n\'est pas disponbile dans le menu déroulant ci-dessus, précisez là ici, elle sera ajoutée pour les prochaines requètes.' ,
            'required' => false,
            'mapped'   => false,
        ));
        /*$builder->add('selfObservation', CheckboxType::class, array(
            'label'    => 'Observation personnelle',
            'required' => false,
        ));*/
        $builder->add('comment', TextareaType::class, array(
            'label'    => 'Commentaire',
            'required' => false,
            'attr'         => array(
                'class' => 'form-control'
            ),
        ));

        $builder->add('shape', ChoiceType::class, array(
            'label'    => 'Département',
            'choices'  => $this->getDepFrShapeChoices(),
            'required' => true,
            'attr'         => array(
                'class' => 'form-control biblio'
            ),
        ));
        $builder->add('value', ChoiceType::class, array(
            'label'    => 'Valeur',
            'required' => true,
            'choices'  => $this->getValuesChoices(),
            'attr'         => array(
                'class' => 'form-control biblio'
            ),
        ));
        $builder->add('save', SubmitType::class, array(
            'attr' => array(
                'class' => 'btn btn-primary'
            ),
            'label' => 'Valider'
        ));
        /*$builder->add('saveAndAdd', SubmitType::class, array(
            'attr' => array(
                'class' => 'btn btn-primary'
            ),
            'label' => 'Valider et ajouter un autre'
        ));*/

    }

    private function getValuesChoices()
    {
        return $this->repartitionTablesHelper->getRepartitionValuesSimpleTable();        
    }

    private function getDepFrShapeChoices()
    {
        return $this->repartitionTablesHelper->getDepFrFullNamesTable();
    }

    private function getSynonymTypes()
    {
        return $this->repartitionTablesHelper->getSynonymsFullNamesTable();
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'eveg\UserRepartitionBundle\Entity\Repartition',
            'choice_translation_domain' => true,
        ));
    }

    public function getName()
    {
        return 'RepartitionBiblio';
    }
}