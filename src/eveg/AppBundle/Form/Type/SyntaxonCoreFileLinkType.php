<?php
// eveg/AppBundle/Form/Type/SyntaxonCoreFileLinkType.php

namespace eveg\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class SyntaxonCoreFileLinkType extends AbstractType
{
    
	public function buildForm(FormBuilderInterface $builder, array $options)
	{

        $builder->add('syntaxonFiles', CollectionType::class, array(
            'entry_type'    => SyntaxonFileLinkType::class,
            'allow_add'     => true,
            'allow_delete'  => true,
            'by_reference'  => false
        ));
        
        $builder->add('save', 'submit', array(
            'attr' => array(
                'class' => 'btn btn-primary'
            ),
            'label' => 'eveg.file.save'
        ));
        $builder->add('saveAndAdd', 'submit', array(
            'attr' => array(
                'class' => 'btn btn-primary'
            ),
            'label' => 'eveg.file.save_and_add_file_link'
        ));

	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'eveg\AppBundle\Entity\SyntaxonCore',
            'cascade_validation' => true,
            'choice_translation_domain' => true,
        ));
    }

    public function getName()
    {
        return 'syntaxonCoreFileLink';
    }
}