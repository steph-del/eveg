<?php
// eveg/BiblioBundle/Form/Type/BiblioFileType.php

namespace eveg\BiblioBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class BiblioFileType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('file', 'vich_file', array(
            'label'         => 'Fichier',
            'required'      => true,
            'download_link' => true,
        ));
        $builder->add('comment', TextareaType::class, array(
            'label' => 'Commentaire',
            'attr'  => array(
                'placeholder' => "Ajouter une note à propos du fichier (tableaux annexes en fin de document par ex.).",
                'rows' => 4, 'class' => 'form-control'
            ),
            'required' => false,
        ));
        $builder->add('copyright', CheckboxType::class, array(
            'label'    => "Fichier non diffusable (droits d'auteur)",
            'required' => false,
            'data'     => true,
            'attr'     => array(
                'style' => 'margin-left:0;'
            ),
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'eveg\BiblioBundle\Entity\BiblioFile',
            'choice_translation_domain' => true,
        ));
    }

    public function getName()
    {
        return 'BiblioFile';
    }
}