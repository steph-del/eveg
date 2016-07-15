<?php
// eveg/AppBundle/Form/Type/FeedbackMapDepFrType.php

namespace eveg\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class FeedbackMapDepFrType extends AbstractType
{
    
	public function buildForm(FormBuilderInterface $builder, array $options)
	{

		$builder->add('about', 'hidden');
		$builder->add('email', EmailType::class);
		$builder->add('type', ChoiceType::class, array(
			'choices' => array(
				'other' => 'eveg.app.show_one.feedback.syntaxon.type.repartition'
			),
			'attr' => array(
				'class' => 'form-control'
			),
		));
		$builder->add('syntaxon', 'hidden');
		$builder->add('message', 'textarea', array(
			'attr' => array('rows' => 6, 'class' => 'form-control'),
		));
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'eveg\AppBundle\Entity\Feedback',
            'cascade_validation' => true,
            'choice_translation_domain' => true,
        ));
    }

    public function getName()
    {
        return 'feedbackMapDepFr';
    }

}