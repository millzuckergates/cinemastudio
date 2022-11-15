<?php

namespace App\Form;

use App\Entity\Films;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BarreDeRechercheFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('q', null, [
                'label' => false,
                'attr' => [
                    'class' => 'search-form form-control border-secondary border-end-0',
                    'placeholder' => 'Rechercher un film, une série...',
                    'style' => 'border-radius: 20px; border-top-right-radius: 0; border-bottom-right-radius: 0; font-size: 13px;'
                ]
            ])
            // Décommenter si le formulaire passe en POST pour ne pas avoir le submit en GET

            // ->add('recherche', SubmitType::class, [
            //     'attr' => [
            //         'class' => 'btn btn-primary'
            //     ]
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'method' => 'get',
            'csrf_protection' => false,
            'attr' => [
                'class' => 'res-navsearch d-flex w-50 mx-auto'
            ]
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
