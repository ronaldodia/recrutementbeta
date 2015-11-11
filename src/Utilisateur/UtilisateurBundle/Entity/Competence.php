<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table(name="competence", indexes={@ORM\Index(name="FK_ASSOCIATION_13", columns={"ID_DOMAINE_COMPETENCE"}), @ORM\Index(name="FK_ASSOCIATION_17", columns={"ID_CANDIDAT"})})
 * @ORM\Entity(repositoryClass="Utilisateur\UtilisateurBundle\Repository\CompetenceRepository")
 */
class Competence
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_COMPETENCE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCompetence;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_COMPETENCE", type="string", length=56, nullable=true)
     */
    private $nomCompetence;

    /**
     * @var \Candidat
     *
     * @ORM\ManyToOne(targetEntity="Candidat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CANDIDAT", referencedColumnName="ID_CANDIDAT",nullable=false)
     * })
     */
    private $idCandidat;

    /**
     * @var \Domainecompetence
     *
     * @ORM\ManyToOne(targetEntity="Domainecompetence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_DOMAINE_COMPETENCE", referencedColumnName="ID_DOMAINE_COMPETENCE")
     * })
     */
    private $idDomaineCompetence;



    /**
     * Get idCompetence
     *
     * @return integer 
     */
    public function getIdCompetence()
    {
        return $this->idCompetence;
    }

    /**
     * Set nomCompetence
     *
     * @param string $nomCompetence
     * @return Competence
     */
    public function setNomCompetence($nomCompetence)
    {
        $this->nomCompetence = $nomCompetence;

        return $this;
    }

    /**
     * Get nomCompetence
     *
     * @return string 
     */
    public function getNomCompetence()
    {
        return $this->nomCompetence;
    }

    /**
     * Set idCandidat
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Candidat $idCandidat
     * @return Competence
     */
    public function setIdCandidat(\Utilisateur\UtilisateurBundle\Entity\Candidat $idCandidat = null)
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

    /**
     * Set idDomaineCompetence
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Domainecompetence $idDomaineCompetence
     * @return Competence
     */
    public function setIdDomaineCompetence(\Utilisateur\UtilisateurBundle\Entity\Domainecompetence $idDomaineCompetence = null)
    {
        $this->idDomaineCompetence = $idDomaineCompetence;

        return $this;
    }

    /**
     * Get idDomaineCompetence
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\Domainecompetence 
     */
    public function getIdDomaineCompetence()
    {
        return $this->idDomaineCompetence;
    }
}
