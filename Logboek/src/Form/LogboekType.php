<?php

namespace App\Form;

use App\Entity\Logboek;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LogboekType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Begeleidingsbrief')
            ->add('Datum')
            ->add('Aantalm3')
            ->add('Laadlocatie')
            ->add('Vertrektijd')
            ->add('Bestemming')
            ->add('Evenement')
            ->add('user')
            ->add('truck')
            ->add('chauffeur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Logboek::class,
        ]);
    }
}
