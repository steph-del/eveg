<?php

namespace eveg\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SyntaxonCoreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fixedCode')
            ->add('catminatCode')
            ->add('level')
            ->add('syntaxonName')
            ->add('syntaxonAuthor')
            ->add('commonName')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'eveg\AppBundle\Entity\SyntaxonCore'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'eveg_appbundle_syntaxoncore';
    }
}
