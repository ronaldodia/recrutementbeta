<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NvieauExperience
 *
 * @ORM\Table(name="nvieau_experience")
 * @ORM\Entity
 */
class NvieauExperience
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_NIVEAU_EXPERIENCE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNiveauExperience;

    /**
     * @var string
     *
     * @ORM\Column(name="NIVEAU_EXPERIENCE", type="string", length=56, nullable=false)
     */
    private $niveauExperience;



    /**
     * Get idNiveauExperience
     *
     * @return integer 
     */
    public function getIdNiveauExperience()
    {
        return $this->idNiveauExperience;
    }

    /**
     * Set niveauExperience
     *
     * @param string $niveauExperience
     * @return NvieauExperience
     */
    public function setNiveauExperience($niveauExperience)
    {
        $this->niveauExperience = $niveauExperience;

        return $this;
    }

    /**
     * Get niveauExperience
     *
     * @return string 
     */
    public function getNiveauExperience()
    {
        return $this->niveauExperience;
    }
    
 public function __toString(){
     return $this->niveauExperience;
 }
}
