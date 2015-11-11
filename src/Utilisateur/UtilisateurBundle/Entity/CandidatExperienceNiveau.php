<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CandidatExperienceNiveau
 *
 * @ORM\Table(name="candidat_experience_niveau", indexes={@ORM\Index(name="FK_ASSOCIATION_19", columns={"ID_CANDIDAT"}), @ORM\Index(name="FK_ASSOCIATION_20", columns={"ID_EXPERIENCE"}), @ORM\Index(name="FK_ASSOCIATION_21", columns={"ID_NIVEAU_EXPERIENCE"})})
 * @ORM\Entity(repositoryClass="Utilisateur\UtilisateurBundle\Repository\CandidatExperienceNiveauRepository")
 */
class CandidatExperienceNiveau
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CANDIDAT_EXPERIENCE_NIVEAU", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCandidatExperienceNiveau;

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
     * @var \Experience
     *
     * @ORM\ManyToOne(targetEntity="Experience", inversedBy="candidatNE",cascade={"persist", "remove", "merge"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_EXPERIENCE", referencedColumnName="ID_EXPERIENCE")
     * })
     */
    private $idExperience;

    /**
     * @var \NvieauExperience
     *
     * @ORM\ManyToOne(targetEntity="NvieauExperience")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_NIVEAU_EXPERIENCE", referencedColumnName="ID_NIVEAU_EXPERIENCE")
     * })
     */
    private $idNiveauExperience;



    /**
     * Get idCandidatExperienceNiveau
     *
     * @return integer 
     */
    public function getIdCandidatExperienceNiveau()
    {
        return $this->idCandidatExperienceNiveau;
    }

    /**
     * Set idCandidat
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Candidat $idCandidat
     * @return CandidatExperienceNiveau
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

    /**
     * Set idExperience
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Experience $idExperience
     * @return CandidatExperienceNiveau
     */
    public function setIdExperience(\Utilisateur\UtilisateurBundle\Entity\Experience $idExperience)
    {
        $this->idExperience = $idExperience;

        return $this;
    }

    /**
     * Get idExperience
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\Experience 
     */
    public function getIdExperience()
    {
        return $this->idExperience;
    }

    /**
     * Set idNiveauExperience
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\NvieauExperience $idNiveauExperience
     * @return CandidatExperienceNiveau
     */
    public function setIdNiveauExperience(\Utilisateur\UtilisateurBundle\Entity\NvieauExperience $idNiveauExperience )
    {
        $this->idNiveauExperience = $idNiveauExperience;

        return $this;
    }

    /**
     * Get idNiveauExperience
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\NvieauExperience 
     */
    public function getIdNiveauExperience()
    {
        return $this->idNiveauExperience;
    }
}
