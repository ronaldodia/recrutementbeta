<?php

namespace Utilisateur\UtilisateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class FiltreCvType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('tri', 'choice', array(
    'choices'   => array(
        'nom'   => 'par Nom',
        'prenom'   => 'par Prénom',
        'niveauetudes' => 'Par niveau d\'études',
     
    ),
            
    'multiple'  => false,
));
                
           
    }
   

    /**
     * @return string
     */
    public function getName()
    {
        return 'utilisateur_utilisateurbundle_tri';
    }
}
