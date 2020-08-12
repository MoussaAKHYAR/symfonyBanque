<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class,array('label'=>'Nom','attr'=>array('class'=>'form-control')))
            ->add('prenom',TextType::class,array('label'=>'Prenom','attr'=>array('class'=>'form-control')))
            ->add('matricule',TextType::class,array('label'=>'Matricule','attr'=>array('class'=>'form-control')))
            ->add('cin',TextType::class,array('label'=>"Carte d'identité nationale",'attr'=>array('class'=>'form-control')))
            ->add('sexe',TextType::class,array('label'=>'Sexe','attr'=>array('class'=>'form-control')))
            ->add('dateNaissance',DateType::class,array('label'=>'Date de naissance','widget' => 'single_text','attr'=>array('class'=>'form-control')))
            ->add('telephone',TextType::class,array('label'=>'Telephone','attr'=>array('class'=>'form-control')))
            ->add('adresse',TextType::class,array('label'=>'Adresse','attr'=>array('class'=>'form-control')))
            ->add('email',EmailType::class,array('label'=>'Email','attr'=>array('class'=>'form-control')))
            ->add('valider',SubmitType::class,array('attr'=>array('class'=>'btn btn-success')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
