<?php
namespace Utilisateur\UtilisateurBundle\Form;

use Utilisateur\UtilisateurBundle\Entity\Entreprise;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Collections\ArrayCollection;

class EntrepriseOffreType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */


public function buildForm(FormBuilderInterface $builder, array $options)
{
   /* $builder->add('idTypeOffre', 'choice', array(
        'choices' => $this->type,
    ));*/
    
    $builder->add('nomEntreprise', 'entity', array(
    'class' => 'UtilisateurBundle:Entreprise',
    
    'expanded' => false,
    'multiple' => false,
       'empty_value' => null,
        'required'=>false,
      
    


));
}

    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Utilisateur\UtilisateurBundle\Entity\Entreprise'
        ));
    }
    
    
    
    


    /**
     * @return string
     */
    public function getName()
    {
        return 'utilisateur_utilisateurbundle_coffre';
    }
}
