<?php
// eveg/AppBundle/Form/Type/FeedbackMapDepEuropeType.php

namespace eveg\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class FeedbackMapEuropeType extends AbstractType
{
    
	public function buildForm(FormBuilderInterface $builder, array $options)
	{

		$builder->add('about', 'hidden');
		$builder->add('email', EmailType::class);
		$builder->add('type', ChoiceType::class, array(
			'choices' => array(
				'interface' => 'Bug with the interface',
				'data' => 'Problem with data',
				'other' => 'Other'
			)
		));
		$builder->add('syntaxon', 'hidden');
		$builder->add('message');
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'eveg\AppBundle\Entity\Feedback',
            'cascade_validation' => true
        ));
    }

    public function getName()
    {
        return 'feedbackMapEurope';
    }

}