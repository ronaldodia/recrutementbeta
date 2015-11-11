<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatutActuel
 *
 * @ORM\Table(name="statut_actuel")
 * @ORM\Entity
 */
class StatutActuel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_STATUT_ACTUEL", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatutActuel;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_STATUT", type="string", length=56, nullable=false)
     */
    private $nomStatut;



    /**
     * Get idStatutActuel
     *
     * @return integer 
     */
    public function getIdStatutActuel()
    {
        return $this->idStatutActuel;
    }

    /**
     * Set nomStatut
     *
     * @param string $nomStatut
     * @return StatutActuel
     */
    public function setNomStatut($nomStatut)
    {
        $this->nomStatut = $nomStatut;

        return $this;
    }

    /**
     * Get nomStatut
     *
     * @return string 
     */
    public function getNomStatut()
    {
        return $this->nomStatut;
    }
    
     public function __toString()
    {
        return $this->nomStatut;
    }
}
