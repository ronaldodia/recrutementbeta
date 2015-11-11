<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneOffre
 *
 * @ORM\Table(name="ligne_offre", indexes={@ORM\Index(name="FK_OFFRE_LIGNE_OFFRE", columns={"LID_OFFRE"})})
 * @ORM\Entity
 */
class LigneOffre
{
    
    
    public function __construct() {
    $this->dateAjoutOffre = new \DateTime();
    $this->dateModificationOffre = new \DateTime();
  
}
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_OFFRE_LIGNE_OFFRE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOffreLigneOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="TITRE_OFFRE", type="string", length=125, nullable=true)
     */
    private $titreOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION_POSTE", type="text", nullable=true)
     */
    private $descriptionPoste;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION_PROFILE_RECHERCHE", type="string", length=255, nullable=true)
     */
    private $descriptionProfileRecherche;

    /**
     * @var string
     *
     * @ORM\Column(name="PIECES_A_DEPOSER", type="string", length=255, nullable=true)
     */
    private $piecesADeposer;

    /**
     * @var integer
     *
     * @ORM\Column(name="CANDIDATEUR_EN_LIGNE", type="integer", nullable=true)
     */
    private $candidateurEnLigne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_LIMITE_OFFRE", type="datetime", nullable=true)
     */
    private $dateLimiteOffre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_AJOUT_OFFRE", type="datetime", nullable=true)
     */
    private $dateAjoutOffre = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_MODIFICATION_OFFRE", type="date", nullable=true)
     */
    private $dateModificationOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="EXIGENCES", type="text", nullable=true)
     */
    private $exigences;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre", inversedBy="ligneOffre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="LID_OFFRE", referencedColumnName="LID_OFFRE")
     * })
     */
    private $lidOffre;



    /**
     * Get idOffreLigneOffre
     *
     * @return integer 
     */
    public function getIdOffreLigneOffre()
    {
        return $this->idOffreLigneOffre;
    }

    /**
     * Set titreOffre
     *
     * @param string $titreOffre
     * @return LigneOffre
     */
    public function setTitreOffre($titreOffre)
    {
        $this->titreOffre = $titreOffre;

        return $this;
    }

    /**
     * Get titreOffre
     *
     * @return string 
     */
    public function getTitreOffre()
    {
        return $this->titreOffre;
    }

    /**
     * Set descriptionPoste
     *
     * @param string $descriptionPoste
     * @return LigneOffre
     */
    public function setDescriptionPoste($descriptionPoste)
    {
        $this->descriptionPoste = $descriptionPoste;

        return $this;
    }

    /**
     * Get descriptionPoste
     *
     * @return string 
     */
    public function getDescriptionPoste()
    {
        return $this->descriptionPoste;
    }

    /**
     * Set descriptionProfileRecherche
     *
     * @param string $descriptionProfileRecherche
     * @return LigneOffre
     */
    public function setDescriptionProfileRecherche($descriptionProfileRecherche)
    {
        $this->descriptionProfileRecherche = $descriptionProfileRecherche;

        return $this;
    }

    /**
     * Get descriptionProfileRecherche
     *
     * @return string 
     */
    public function getDescriptionProfileRecherche()
    {
        return $this->descriptionProfileRecherche;
    }

    /**
     * Set piecesADeposer
     *
     * @param string $piecesADeposer
     * @return LigneOffre
     */
    public function setPiecesADeposer($piecesADeposer)
    {
        $this->piecesADeposer = $piecesADeposer;

        return $this;
    }

    /**
     * Get piecesADeposer
     *
     * @return string 
     */
    public function getPiecesADeposer()
    {
        return $this->piecesADeposer;
    }

    /**
     * Set candidateurEnLigne
     *
     * @param integer $candidateurEnLigne
     * @return LigneOffre
     */
    public function setCandidateurEnLigne($candidateurEnLigne)
    {
        $this->candidateurEnLigne = $candidateurEnLigne;

        return $this;
    }

    /**
     * Get candidateurEnLigne
     *
     * @return integer 
     */
    public function getCandidateurEnLigne()
    {
        return $this->candidateurEnLigne;
    }

    /**
     * Set dateLimiteOffre
     *
     * @param \DateTime $dateLimiteOffre
     * @return LigneOffre
     */
    public function setDateLimiteOffre($dateLimiteOffre)
    {
        $this->dateLimiteOffre = $dateLimiteOffre;

        return $this;
    }

    /**
     * Get dateLimiteOffre
     *
     * @return \DateTime 
     */
    public function getDateLimiteOffre()
    {
        return $this->dateLimiteOffre;
    }

    /**
     * Set dateAjoutOffre
     *
     * @param \DateTime $dateAjoutOffre
     * @return LigneOffre
     */
    public function setDateAjoutOffre($dateAjoutOffre)
    {
        $this->dateAjoutOffre = $dateAjoutOffre;

        return $this;
    }

    /**
     * Get dateAjoutOffre
     *
     * @return \DateTime 
     */
    public function getDateAjoutOffre()
    {
        return $this->dateAjoutOffre;
    }

    /**
     * Set dateModificationOffre
     *
     * @param \DateTime $dateModificationOffre
     * @return LigneOffre
     */
    public function setDateModificationOffre($dateModificationOffre)
    {
        $this->dateModificationOffre = $dateModificationOffre;

        return $this;
    }

    /**
     * Get dateModificationOffre
     *
     * @return \DateTime 
     */
    public function getDateModificationOffre()
    {
        return $this->dateModificationOffre;
    }

    /**
     * Set exigences
     *
     * @param string $exigences
     * @return LigneOffre
     */
    public function setExigences($exigences)
    {
        $this->exigences = $exigences;

        return $this;
    }

    /**
     * Get exigences
     *
     * @return string 
     */
    public function getExigences()
    {
        return $this->exigences;
    }

    /**
     * Set lidOffre
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Offre $lidOffre
     * @return LigneOffre
     */
    public function setLidOffre(\Utilisateur\UtilisateurBundle\Entity\Offre $lidOffre = null)
    {
        $this->lidOffre = $lidOffre;

        return $this;
    }

    /**
     * Get lidOffre
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\Offre 
     */
    public function getLidOffre()
    {
        return $this->lidOffre;
    }
}
