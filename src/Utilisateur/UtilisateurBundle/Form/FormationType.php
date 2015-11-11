<?php

namespace Utilisateur\UtilisateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomFormation')
            ->add('diplome')
            ->add('lieuFormation')
            ->add('etablissementFormation')
            ->add('descriptionFormation')
            ->add('dateDebutFormation', 'date', array(
    'widget' => 'single_text',
    // this is actually the default format for single_text
    'format' => 'dd/M/yyyy',
'data' => new \DateTime(),
))
            ->add('dateFinFormation', 'date', array(
    'widget' => 'single_text',
    // this is actually the default format for single_text
    'format' => 'dd/M/yyyy',
'data' => new \DateTime(),
));
            //->add('idCandidat')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Utilisateur\UtilisateurBundle\Entity\Formation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'utilisateur_utilisateurbundle_formation';
    }
}
