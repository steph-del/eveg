<?php
// eveg/AppBundle/Form/Type/SyntaxonNoteType.php

namespace eveg\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SyntaxonNoteType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('note', 'ckeditor', array(
			'label' => false,
			'attr' => array(
				'placeHolder' => 'Entrez vos notes personnelles ici.'
				)
			));
	}
	
}