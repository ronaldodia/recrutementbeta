<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NiveauLangue
 *
 * @ORM\Table(name="niveau_langue")
 * @ORM\Entity
 */
class NiveauLangue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_NIVEAU_LANGUE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNiveauLangue;

    /**
     * @var string
     *
     * @ORM\Column(name="NIVEAU", type="string", length=56, nullable=false)
     */
    private $niveau;



    /**
     * Get idNiveauLangue
     *
     * @return integer 
     */
    public function getIdNiveauLangue()
    {
        return $this->idNiveauLangue;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return NiveauLangue
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
    
    public function __toString(){
        return $this->getNiveau();
    }
}
