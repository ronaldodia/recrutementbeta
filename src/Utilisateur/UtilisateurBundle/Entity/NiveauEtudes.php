<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NiveauEtudes
 *
 * @ORM\Table(name="niveau_etudes")
 * @ORM\Entity
 */
class NiveauEtudes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_NIVEAU_ETUDES", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNiveauEtudes;

    /**
     * @var string
     *
     * @ORM\Column(name="NIVEAU_ETUDES", type="string", length=56, nullable=false)
     */
    private $niveauEtudes;



    /**
     * Get idNiveauEtudes
     *
     * @return integer 
     */
    public function getIdNiveauEtudes()
    {
        return $this->idNiveauEtudes;
    }

    /**
     * Set niveauEtudes
     *
     * @param string $niveauEtudes
     * @return NiveauEtudes
     */
    public function setNiveauEtudes($niveauEtudes)
    {
        $this->niveauEtudes = $niveauEtudes;

        return $this;
    }

    /**
     * Get niveauEtudes
     *
     * @return string 
     */
    public function getNiveauEtudes()
    {
        return $this->niveauEtudes;
    }
    
    
    
    public function __toString(){
        
        
        return $this->niveauEtudes; 
    }
}
