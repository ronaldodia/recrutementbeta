<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre", indexes={@ORM\Index(name="FK_OFFRE_TYPE_OFFRE", columns={"ID_TYPE_OFFRE"}), @ORM\Index(name="FK_ENTREPRISE_OFFRE", columns={"ID_ENTREPRISE"})})
 * @ORM\Entity
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
     *   @ORM\JoinColumn(name="ID_ENTREPRISE", referencedColumnName="ID_ENTREPRISE")
     * })
     */
    private $idEntreprise;

    /**
     * @var \TypeOffre
     *
     * @ORM\ManyToOne(targetEntity="TypeOffre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_TYPE_OFFRE", referencedColumnName="ID_TYPE_OFFRE")
     * })
     */
    private $idTypeOffre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Candidat", inversedBy="lidOffre")
     * @ORM\JoinTable(name="candidat_postuler_offre",
     *   joinColumns={
     *     @ORM\JoinColumn(name="LID_OFFRE", referencedColumnName="LID_OFFRE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ID_CANDIDAT", referencedColumnName="ID_CANDIDAT")
     *   }
     * )
     */
    private $idCandidat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Metier", inversedBy="lidOffre")
     * @ORM\JoinTable(name="offre_metier",
     *   joinColumns={
     *     @ORM\JoinColumn(name="LID_OFFRE", referencedColumnName="LID_OFFRE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ID_METIER", referencedColumnName="ID_METIER")
     *   }
     * )
     */
    private $idMetier;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCandidat = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Add idCandidat
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Candidat $idCandidat
     * @return Offre
     */
    public function addIdCandidat(\Utilisateur\UtilisateurBundle\Entity\Candidat $idCandidat)
    {
        $this->idCandidat[] = $idCandidat;

        return $this;
    }

    /**
     * Remove idCandidat
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Candidat $idCandidat
     */
    public function removeIdCandidat(\Utilisateur\UtilisateurBundle\Entity\Candidat $idCandidat)
    {
        $this->idCandidat->removeElement($idCandidat);
    }

    /**
     * Get idCandidat
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdCandidat()
    {
        return $this->idCandidat;
    }

    /**
     * Add idMetier
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Metier $idMetier
     * @return Offre
     */
    public function addIdMetier(\Utilisateur\UtilisateurBundle\Entity\Metier $idMetier)
    {
        $this->idMetier[] = $idMetier;

        return $this;
    }

    /**
     * Remove idMetier
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Metier $idMetier
     */
    public function removeIdMetier(\Utilisateur\UtilisateurBundle\Entity\Metier $idMetier)
    {
        $this->idMetier->removeElement($idMetier);
    }

    /**
     * Get idMetier
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdMetier()
    {
        return $this->idMetier;
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
}
