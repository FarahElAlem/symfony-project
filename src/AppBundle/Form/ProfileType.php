<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ProfileType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, [
                    'attr' => ['class' => 'form-control'],])
                ->add('email', EmailType::class, [
                    'attr' => ['class' => 'form-control'],])
                ->add('education', TextType::class, [
                    'attr' => ['class' => 'form-control'],])
                ->add('location', TextType::class, [
                    'attr' => ['class' => 'form-control'],])
                ->add('notes', TextareaType::class, [
                    'attr' => ['class' => 'form-control'],])
                ->add('educationTitle', TextType::class, [
                    'attr' => ['class' => 'form-control'],])
                ->add('educationDescription', TextareaType::class, [
                    'attr' => ['class' => 'form-control'],])
                ->add('educationDate', DateType::class, [
                    'attr' => ['class' => 'form-control'],]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Profile'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_profile';
    }


}
