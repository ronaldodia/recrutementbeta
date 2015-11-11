<?php

namespace Utilisateur\UtilisateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Utilisateur\UtilisateurBundle\Entity\Ville;
use Utilisateur\UtilisateurBundle\Entity\StatutActuel;
class CandidatType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomCandidat','text',array('required'=>true))
            ->add('prenom','text',array('required'=>true))
            ->add('adresse','text',array('required'=>true))
            ->add('civlite','choice', array('required'=>true,
    'choices' => array(
        'Mr' => 'Mr',
        'Madame' => 'Madame')))
            ->add('situationFamliliale','choice', array(
    'choices' => array(
        'Celibataire' => 'Celibataire',
        'Marié(e)' => 'Marié(e)')))
            ->add('site','url',array('required'=>false))
            ->add('telephone','number',array('required'=>true))
            ->add('file')
           
            ->add('idVille')
            ->add('idStatutActuel')
            ->add('idNiveauEtudes')
     
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Utilisateur\UtilisateurBundle\Entity\Candidat'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'utilisateur_utilisateurbundle_candidat';
    }
}
