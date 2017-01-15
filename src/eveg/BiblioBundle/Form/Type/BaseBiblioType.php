<?php
// eveg/BiblioBundle/Form/Type/BaseBiblioType.php

namespace eveg\BiblioBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class BaseBiblioType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {           
        $builder->add('files', CollectionType::class, array(
            'entry_type'    => BiblioFileType::class,
            'allow_add'     => true,
            'allow_delete'  => true,
            'by_reference'  => false
        ));
        $builder->add('save', 'submit', array(
            'attr' => array(
                'class' => 'btn btn-default',
            ),
            'label' => 'eveg.file.save'
        ));
        $builder->add('saveAndAdd', 'submit', array(
            'attr' => array(
                'class' => 'btn btn-default',
            ),
            'label' => 'eveg.file.save_and_add_file'
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'eveg\BiblioBundle\Entity\BaseBiblio',
            'choice_translation_domain' => true,
        ));
    }

    public function getName()
    {
        return 'BaseBiblio';
    }
}