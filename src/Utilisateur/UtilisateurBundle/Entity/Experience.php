<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 *
 * @ORM\Table(name="experience")
 * @ORM\Entity
 */
class Experience
{
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_EXPERIENCE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExperience;
    
    
    
    
    
    
    /**
   * @ORM\OneToMany(targetEntity="Utilisateur\UtilisateurBundle\Entity\CandidatExperienceNiveau", mappedBy="idExperience",cascade={"persist"})
   */
    private $candidatNE;  
    
    
    
    

    /**
     * @var string
     *
     * @ORM\Column(name="TITRE_EXPERIENCE", type="string", length=56, nullable=true)
     */
    private $titreExperience;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_DEBUT_EXPERIENCE", type="date", nullable=false)
     */
    private $dateDebutExperience;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_FIN_EXPERIENCE", type="date", nullable=false)
     */
    private $dateFinExperience;

    /**
     * @var string
     *
     * @ORM\Column(name="FONCTION", type="string", length=56, nullable=false)
     */
    private $fonction;

    /**
     * @var integer
     *
     * @ORM\Column(name="NOMBRE_MOIS", type="integer", nullable=true)
     */
    private $nombreMois;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPETENCE_UTILISEES", type="text", nullable=true)
     */
    private $competenceUtilisees;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTREPRISE_EXPERIENCE", type="string", length=56, nullable=false)
     */
    private $entrepriseExperience;

    /**
     * @var string
     *
     * @ORM\Column(name="LIEU_EXPERIENCE", type="text", nullable=true)
     */
    private $lieuExperience;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION_EXPERIENCE", type="text", nullable=false)
     */
    private $descriptionExperience;


public function __construct(){
    
    
    $this->candidatNE= new \Doctrine\Common\Collections\ArrayCollection();
}
    /**
     * Get idExperience
     *
     * @return integer 
     */
    public function getIdExperience()
    {
        return $this->idExperience;
    }

    /**
     * Set titreExperience
     *
     * @param string $titreExperience
     * @return Experience
     */
    public function setTitreExperience($titreExperience)
    {
        $this->titreExperience = $titreExperience;

        return $this;
    }

    /**
     * Get titreExperience
     *
     * @return string 
     */
    public function getTitreExperience()
    {
        return $this->titreExperience;
    }

    /**
     * Set dateDebutExperience
     *
     * @param \DateTime $dateDebutExperience
     * @return Experience
     */
    public function setDateDebutExperience($dateDebutExperience)
    {
        $this->dateDebutExperience = $dateDebutExperience;

        return $this;
    }

    /**
     * Get dateDebutExperience
     *
     * @return \DateTime 
     */
    public function getDateDebutExperience()
    {
        return $this->dateDebutExperience;
    }

    /**
     * Set dateFinExperience
     *
     * @param \DateTime $dateFinExperience
     * @return Experience
     */
    public function setDateFinExperience($dateFinExperience)
    {
        $this->dateFinExperience = $dateFinExperience;

        return $this;
    }

    /**
     * Get dateFinExperience
     *
     * @return \DateTime 
     */
    public function getDateFinExperience()
    {
        return $this->dateFinExperience;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     * @return Experience
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string 
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set nombreMois
     *
     * @param integer $nombreMois
     * @return Experience
     */
    public function setNombreMois($nombreMois)
    {
        $this->nombreMois = $nombreMois;

        return $this;
    }

    /**
     * Get nombreMois
     *
     * @return integer 
     */
    public function getNombreMois()
    {
        return $this->nombreMois;
    }

    /**
     * Set competenceUtilisees
     *
     * @param string $competenceUtilisees
     * @return Experience
     */
    public function setCompetenceUtilisees($competenceUtilisees)
    {
        $this->competenceUtilisees = $competenceUtilisees;

        return $this;
    }

    /**
     * Get competenceUtilisees
     *
     * @return string 
     */
    public function getCompetenceUtilisees()
    {
        return $this->competenceUtilisees;
    }

    /**
     * Set entrepriseExperience
     *
     * @param string $entrepriseExperience
     * @return Experience
     */
    public function setEntrepriseExperience($entrepriseExperience)
    {
        $this->entrepriseExperience = $entrepriseExperience;

        return $this;
    }

    /**
     * Get entrepriseExperience
     *
     * @return string 
     */
    public function getEntrepriseExperience()
    {
        return $this->entrepriseExperience;
    }

    /**
     * Set lieuExperience
     *
     * @param string $lieuExperience
     * @return Experience
     */
    public function setLieuExperience($lieuExperience)
    {
        $this->lieuExperience = $lieuExperience;

        return $this;
    }

    /**
     * Get lieuExperience
     *
     * @return string 
     */
    public function getLieuExperience()
    {
        return $this->lieuExperience;
    }

    /**
     * Set descriptionExperience
     *
     * @param string $descriptionExperience
     * @return Experience
     */
    public function setDescriptionExperience($descriptionExperience)
    {
        $this->descriptionExperience = $descriptionExperience;

        return $this;
    }

    /**
     * Get descriptionExperience
     *
     * @return string 
     */
    public function getDescriptionExperience()
    {
        return $this->descriptionExperience;
    }
    
    
    
    
    
    //mes ajouts
    public function addCandidatNE(\Utilisateur\UtilisateurBundle\Entity\CandidatExperienceNiveau $candidatNE)
  {$candidatNE->setIdExperience($this);
  
    $this->candidatNE[] = $candidatNE;
   
    return $this;
  }

  public function removeCandidatNE(\Utilisateur\UtilisateurBundle\Entity\CandidatExperienceNiveau $candidatNE)
  {
    $this->candidatNE->removeElement($candidatNE);
  }

  public function getCandidatNE()
  {
    return $this->candidatNE;
  }
        
    
}
