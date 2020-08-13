<?php

namespace App\Form;

use App\Entity\Entreprise;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntrepriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomEntreprise',TextType::class,array('label'=>"Nom d'entreprise" ,'attr'=>array('class'=>'form-control')))
            ->add('telephone',TextType::class,array('label'=>'Telephone','attr'=>array('class'=>'form-control')))
            ->add('adresse',TextType::class,array('label'=>'Adresse','attr'=>array('class'=>'form-control')))
            ->add('email',EmailType::class,array('label'=>'Email','attr'=>array('class'=>'form-control')))
           // ->add('valider',SubmitType::class,array('attr'=>array('class'=>'btn btn-success')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Entreprise::class,
        ]);
    }
}
