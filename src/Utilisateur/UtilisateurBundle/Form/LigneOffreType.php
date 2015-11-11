<?php

namespace Utilisateur\UtilisateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LigneOffreType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titreOffre')
                ->add('descriptionPoste','textarea',array('attr'=>array('class'=>'ckeditor')))
                ->add('idMetier')
                ->add('descriptionProfileRecherche','textarea',array('attr'=>array('class'=>'ckeditor')))
                ->add('piecesADeposer','textarea',array('attr'=>array('class'=>'ckeditor')))
                ->add('candidateurEnLigne')
                ->add('exigences','textarea',array('attr'=>array('class'=>'ckeditor')))
                ->add('dateLimiteOffre')
              




        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Utilisateur\UtilisateurBundle\Entity\LigneOffre'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'utilisateur_utilisateurbundle_ligneoffre';
    }

}
