<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * NivLanguCandidat
 *
 * @ORM\Table(name="niv_langu_candidat", indexes={@ORM\Index(name="FK_ASSOCIATION_10", columns={"ID_CANDIDAT"}), @ORM\Index(name="FK_ASSOCIATION_11", columns={"ID_LANGUE"}), @ORM\Index(name="FK_ASSOCIATION_12", columns={"ID_NIVEAU_LANGUE"})})
 * @ORM\Entity(repositoryClass="Utilisateur\UtilisateurBundle\Repository\NivLanguCandidatRepository")
 * @UniqueEntity(fields={"idCandidat", "idLangue"})
 */
class NivLanguCandidat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_NIV_LANGU", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNivLangu;

    /**
     * @var \Candidat
     *
     * @ORM\ManyToOne(targetEntity="Candidat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CANDIDAT", referencedColumnName="ID_CANDIDAT", nullable=false)
     * })
     */
    private $idCandidat;

    /**
     * @var \Langues
     *
     * @ORM\ManyToOne(targetEntity="Langues")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_LANGUE", referencedColumnName="ID_LANGUE", nullable=false)
     * })
     */
    private $idLangue;

    /**
     * @var \NiveauLangue
     *
     * @ORM\ManyToOne(targetEntity="NiveauLangue")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_NIVEAU_LANGUE", referencedColumnName="ID_NIVEAU_LANGUE", nullable=false)
     * })
     */
    private $idNiveauLangue;



    /**
     * Get idNivLangu
     *
     * @return integer 
     */
    public function getIdNivLangu()
    {
        return $this->idNivLangu;
    }

    /**
     * Set idCandidat
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Candidat $idCandidat
     * @return NivLanguCandidat
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
     * Set idLangue
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Langues $idLangue
     * @return NivLanguCandidat
     */
    public function setIdLangue(\Utilisateur\UtilisateurBundle\Entity\Langues $idLangue = null)
    {
        $this->idLangue = $idLangue;

        return $this;
    }

    /**
     * Get idLangue
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\Langues 
     */
    public function getIdLangue()
    {
        return $this->idLangue;
    }

    /**
     * Set idNiveauLangue
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\NiveauLangue $idNiveauLangue
     * @return NivLanguCandidat
     */
    public function setIdNiveauLangue(\Utilisateur\UtilisateurBundle\Entity\NiveauLangue $idNiveauLangue = null)
    {
        $this->idNiveauLangue = $idNiveauLangue;

        return $this;
    }

    /**
     * Get idNiveauLangue
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\NiveauLangue 
     */
    public function getIdNiveauLangue()
    {
        return $this->idNiveauLangue;
    }
}
