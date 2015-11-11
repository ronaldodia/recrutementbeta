<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre", indexes={@ORM\Index(name="FK_OFFRE_TYPE_OFFRE", columns={"ID_TYPE_OFFRE"}), @ORM\Index(name="FK_ENTREPRISE_OFFRE", columns={"ID_ENTREPRISE"})})
 * @ORM\Entity(repositoryClass="Utilisateur\UtilisateurBundle\Repository\OffreRepository")
 */
class Offre
{
    
 /**
   * @ORM\OneToMany(targetEntity="Utilisateur\UtilisateurBundle\Entity\LigneOffre", mappedBy="lidOffre",cascade={"persist"})
   */
    private $ligneOffre;   
    

    /**
     * @var integer
     *
     * @ORM\Column(name="LID_OFFRE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lidOffre;

    /**
     * @var \Entreprise
     *
     * @ORM\ManyToOne(targetEntity="Entreprise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_ENTREPRISE", referencedColumnName="ID_ENTREPRISE",nullable=false)
     * })
     */
    private $idEntreprise;

    /**
     * @var \TypeOffre
     *
     * @ORM\ManyToOne(targetEntity="TypeOffre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_TYPE_OFFRE", referencedColumnName="ID_TYPE_OFFRE",nullable=false)
     * })
     */
    private $idTypeOffre;

    

   /**
     * @var integer
     *
     * @ORM\Column(name="ACTIVATION_OFFRE", type="boolean", nullable=true)
     */
    private $activation=0;

    /**
     * Constructor
     */
    public function __construct()
    {
        
        $this->idMetier = new \Doctrine\Common\Collections\ArrayCollection();
         $this->ligneOffre = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get lidOffre
     *
     * @return integer 
     */
    public function getLidOffre()
    {
        return $this->lidOffre;
    }

    /**
     * Set idEntreprise
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Entreprise $idEntreprise
     * @return Offre
     */
    public function setIdEntreprise(\Utilisateur\UtilisateurBundle\Entity\Entreprise $idEntreprise = null)
    {
        $this->idEntreprise = $idEntreprise;

        return $this;
    }

    /**
     * Get idEntreprise
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\Entreprise 
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }

    /**
     * Set idTypeOffre
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\TypeOffre $idTypeOffre
     * @return Offre
     */
    public function setIdTypeOffre(\Utilisateur\UtilisateurBundle\Entity\TypeOffre $idTypeOffre = null)
    {
        $this->idTypeOffre = $idTypeOffre;

        return $this;
    }

    /**
     * Get idTypeOffre
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\TypeOffre 
     */
    public function getIdTypeOffre()
    {
        return $this->idTypeOffre;
    }







public function addLigneOffre(\Utilisateur\UtilisateurBundle\Entity\LigneOffre $ligneoffre)
  {$ligneoffre->setLidOffre($this);
  
    $this->ligneOffre[] = $ligneoffre;
   
    return $this;
  }

  public function removeLigneOffre(\Utilisateur\UtilisateurBundle\Entity\LigneOffre $ligneoffre)
  {
    $this->ligneOffre->removeElement($ligneoffre);
  }

  public function getLigneOffre()
  {
    return $this->ligneOffre;
  }
        
/*public function __toString(){
    
    
    return $this->getLidOffre()."";
    
}*/
  
  
  
   
        /**
     * Set activation
     *
     * @param integer $activation
     * @return Offre
     */
    public function setActivation($activation)
    {
        $this->activation = $activation;

        return $this;
    }

    /**
     * Get activation
     *
     * @return integer 
     */
    public function getActivation()
    {
        return $this->activation;
    }
}
