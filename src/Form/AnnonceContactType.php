<?php

namespace App\Form;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnonceContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'disabled' => true,
                'attr' => [
                    'class' => 'mb-3 form-control rounded-1'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Votre email : ',
                'attr' => [
                    'class' => 'mb-3 form-control rounded-1'
                ]
            ])
            ->add('message', CKEditorType::class, [
                'label' => 'Votre message : '
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
