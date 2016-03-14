<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class createPerson extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options) 
  {
    $builder
      ->add('name')
      ->add('phoneNumber')
      ->add('age')
      ->add('description, TextareaType::class')    
  }

  public function configureOptions(OptionsResolver $resolver) 
  {
    $resolver->setDefaults(array(
      'dataClass' => 'AppBundle\Entity\Post'
      ))
  }
}