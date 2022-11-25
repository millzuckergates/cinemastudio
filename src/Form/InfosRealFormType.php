<?php

namespace App\Form;

use App\Entity\Realisateurs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InfosRealFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom', null, [
                'attr' => [
                    'class' => 'border-0 bg-transparent'
                ]
            ])
            ->add('nom', null, [
                'attr' => [
                    'class' => 'border-0 bg-transparent'
                ]
            ])
            ->add('age')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Realisateurs::class,
            'attr' => [
                'class' => 'm-0 d-flex align-items-center'
            ]
        ]);
    }
}
