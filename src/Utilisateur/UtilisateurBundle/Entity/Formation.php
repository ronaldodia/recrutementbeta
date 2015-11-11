<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation", indexes={@ORM\Index(name="FK_FAIRE_FORMATION", columns={"ID_CANDIDAT"})})
 * @ORM\Entity(repositoryClass="Utilisateur\UtilisateurBundle\Repository\FormationRepository")
 */
class Formation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_FORMATION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_FORMATION", type="string", length=56, nullable=false)
     */
    private $nomFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="DIPLOME", type="string", length=56, nullable=false)
     */
    private $diplome;

    /**
     * @var string
     *
     * @ORM\Column(name="LIEU_FORMATION", type="string", length=125, nullable=false)
     */
    private $lieuFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="ETABLISSEMENT_FORMATION", type="string", length=125, nullable=false)
     */
    private $etablissementFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION_FORMATION", type="text", nullable=false)
     */
    private $descriptionFormation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_DEBUT_FORMATION", type="date", nullable=false)
     */
    private $dateDebutFormation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_FIN_FORMATION", type="date", nullable=false)
     */
    private $dateFinFormation;

    /**
     * @var \Candidat
     *
     * @ORM\ManyToOne(targetEntity="Candidat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CANDIDAT", referencedColumnName="ID_CANDIDAT")
     * })
     */
    private $idCandidat;



    /**
     * Get idFormation
     *
     * @return integer 
     */
    public function getIdFormation()
    {
        return $this->idFormation;
    }

    /**
     * Set nomFormation
     *
     * @param string $nomFormation
     * @return Formation
     */
    public function setNomFormation($nomFormation)
    {
        $this->nomFormation = $nomFormation;

        return $this;
    }

    /**
     * Get nomFormation
     *
     * @return string 
     */
    public function getNomFormation()
    {
        return $this->nomFormation;
    }

    /**
     * Set diplome
     *
     * @param string $diplome
     * @return Formation
     */
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * Get diplome
     *
     * @return string 
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Set lieuFormation
     *
     * @param string $lieuFormation
     * @return Formation
     */
    public function setLieuFormation($lieuFormation)
    {
        $this->lieuFormation = $lieuFormation;

        return $this;
    }

    /**
     * Get lieuFormation
     *
     * @return string 
     */
    public function getLieuFormation()
    {
        return $this->lieuFormation;
    }

    /**
     * Set etablissementFormation
     *
     * @param string $etablissementFormation
     * @return Formation
     */
    public function setEtablissementFormation($etablissementFormation)
    {
        $this->etablissementFormation = $etablissementFormation;

        return $this;
    }

    /**
     * Get etablissementFormation
     *
     * @return string 
     */
    public function getEtablissementFormation()
    {
        return $this->etablissementFormation;
    }

    /**
     * Set descriptionFormation
     *
     * @param string $descriptionFormation
     * @return Formation
     */
    public function setDescriptionFormation($descriptionFormation)
    {
        $this->descriptionFormation = $descriptionFormation;

        return $this;
    }

    /**
     * Get descriptionFormation
     *
     * @return string 
     */
    public function getDescriptionFormation()
    {
        return $this->descriptionFormation;
    }

    /**
     * Set dateDebutFormation
     *
     * @param \DateTime $dateDebutFormation
     * @return Formation
     */
    public function setDateDebutFormation($dateDebutFormation)
    {
        $this->dateDebutFormation = $dateDebutFormation;

        return $this;
    }

    /**
     * Get dateDebutFormation
     *
     * @return \DateTime 
     */
    public function getDateDebutFormation()
    {
        return $this->dateDebutFormation;
    }

    /**
     * Set dateFinFormation
     *
     * @param \DateTime $dateFinFormation
     * @return Formation
     */
    public function setDateFinFormation($dateFinFormation)
    {
        $this->dateFinFormation = $dateFinFormation;

        return $this;
    }

    /**
     * Get dateFinFormation
     *
     * @return \DateTime 
     */
    public function getDateFinFormation()
    {
        return $this->dateFinFormation;
    }

    /**
     * Set idCandidat
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Candidat $idCandidat
     * @return Formation
     */
    public function setIdCandidat(\Utilisateur\UtilisateurBundle\Entity\Candidat $idCandidat )
    {
        $this->idCandidat = $idCandidat;

        return $this;
    }

    /**
     * Get idCandidat
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\Candidat 
     */
    public function getIdCandidat()
    {
        return $this->idCandidat;
    }
}
