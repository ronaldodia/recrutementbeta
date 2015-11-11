<?php

namespace Utilisateur\UtilisateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Utilisateur\UtilisateurBundle\Entity\CandidatExperienceNiveau;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExperienceType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreExperience')
            ->add('dateDebutExperience', 'date', array(
    'widget' => 'single_text',
    // this is actually the default format for single_text
    'format' => 'dd/M/yyyy',
'data' => new \DateTime(''),
))
            ->add('dateFinExperience', 'date', array(
    'widget' => 'single_text',
    // this is actually the default format for single_text
    'format' => 'dd/M/yyyy',
'data' => new \DateTime(),
))
            ->add('fonction')
            ->add('nombreMois')
            ->add('competenceUtilisees')
            ->add('entrepriseExperience')
            ->add('lieuExperience')
            ->add('descriptionExperience')
                ->add('candidatNE','collection', array( 'type' =>  new CandidatExperienceNiveauType(), 'prototype'=>false,'by_reference'=>false, 'allow_add'=>false,'allow_delete'=>false))
        
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Utilisateur\UtilisateurBundle\Entity\Experience'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'utilisateur_utilisateurbundle_experience';
    }
}
