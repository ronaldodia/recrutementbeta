<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domainecompetence
 *
 * @ORM\Table(name="domainecompetence")
 * @ORM\Entity
 */
class Domainecompetence
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_DOMAINE_COMPETENCE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDomaineCompetence;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_DOMAINE_COMPETENCE", type="string", length=56,unique=true, nullable=false)
     */
    private $nomDomaineCompetence;



    /**
     * Get idDomaineCompetence
     *
     * @return integer 
     */
    public function getIdDomaineCompetence()
    {
        return $this->idDomaineCompetence;
    }

    /**
     * Set nomDomaineCompetence
     *
     * @param string $nomDomaineCompetence
     * @return Domainecompetence
     */
    public function setNomDomaineCompetence($nomDomaineCompetence)
    {
        $this->nomDomaineCompetence = $nomDomaineCompetence;

        return $this;
    }

    /**
     * Get nomDomaineCompetence
     *
     * @return string 
     */
    public function getNomDomaineCompetence()
    {
        return $this->nomDomaineCompetence;
    }
    
    
public function __toString(){
    return $this->nomDomaineCompetence;
}
}
