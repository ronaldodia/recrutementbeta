<?php

namespace Utilisateur\UtilisateurBundle\Form;
use Utilisateur\UtilisateurBundle\Form\LigneOffreType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OffreType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idEntreprise')
            ->add('idTypeOffre')
            ->add('activation')
           
                ->add('ligneOffre','collection', array( 'type' =>  new LigneOffreType(), 'prototype'=>true,'by_reference'=>false, 'allow_add'=>true))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Utilisateur\UtilisateurBundle\Entity\Offre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'utilisateur_utilisateurbundle_offre';
    }
}
