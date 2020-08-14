<?php

namespace App\Form;

use App\Entity\Client;
use App\Entity\Compte;
use App\Entity\Entreprise;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero',TextType::class,array('label'=>"Numero du compte" ,'attr'=>array('class'=>'form-control')))
            ->add('rib',TextType::class,array('label'=>"Clé RIB" ,'attr'=>array('class'=>'form-control')))
            ->add('solde',TextType::class,array('label'=>"Solde" , 'required' => false,'attr'=>array('class'=>'form-control')))
            ->add('dateOuverture',DateType::class,array('label'=>"Date d'ouverture",'widget' => 'single_text','attr'=>array('class'=>'form-control')))
            ->add('raisonSocial',TextType::class,array('label'=>"Raison social" ,'required' => false,'attr'=>array('class'=>'form-control')))
            ->add('salaire',TextType::class,array('label'=>"Salaire" , 'required' => false,'attr'=>array('class'=>'form-control')))
            ->add('nomEmployeur',TextType::class,array('label'=>"Nom de l'employeur" ,'required' => false,'attr'=>array('class'=>'form-control')))
            ->add('telEmployeur',TextType::class,array('label'=>"Telephone de l'employeur" ,'required' => false,'attr'=>array('class'=>'form-control')))
            ->add('numerIdentification',TextType::class,array('label'=>"Numero d'identification" ,'required' => false,'attr'=>array('class'=>'form-control')))
            ->add('agios',TextType::class,array('label'=>"Agios" , 'required' => false,'attr'=>array('class'=>'form-control')))
            ->add('fraisOuverture',TextType::class,array('label'=>"Frais d'ouverture" ,'attr'=>array('class'=>'form-control')))
            ->add('remuneration',TextType::class,array('label'=>"Rémuneration" ,'attr'=>array('class'=>'form-control')))
            ->add('dateDebut',DateType::class,array('label'=>"Date début", 'required' => false,'widget' => 'single_text','attr'=>array('class'=>'form-control')))
            ->add('dateFin',DateType::class,array('label'=>'Date fin','widget' => 'single_text',  'required' => false,'attr'=>array('class'=>'form-control')))

            ->add('clientPhysique', EntityType::class, [
                'class' => Client::class,
                'choice_label' => 'nom',
                'attr'=>array('class'=>'form-control')
            ])
            ->add('entreprise',EntityType::class, [
                'class' => Entreprise::class,
                'choice_label' => 'nomEntreprise',
                'attr'=>array('class'=>'form-control')
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Compte::class,
        ]);
    }
}
