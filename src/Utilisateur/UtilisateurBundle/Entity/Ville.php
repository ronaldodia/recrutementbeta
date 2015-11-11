<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="ville", indexes={@ORM\Index(name="FK_ASSOCIATION_14", columns={"ID_PAYS"})})
 * @ORM\Entity
 */
class Ville
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_VILLE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVille;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_VILLE", type="string", length=56, unique=true ,nullable=false)
     */
    private $nomVille;

    /**
     * @var \Pays
     *
     * @ORM\ManyToOne(targetEntity="Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PAYS", referencedColumnName="ID_PAYS",nullable=false)
     * })
     */
    private $idPays;



    /**
     * Get idVille
     *
     * @return integer 
     */
    public function getIdVille()
    {
        return $this->idVille;
    }

    /**
     * Set nomVille
     *
     * @param string $nomVille
     * @return Ville
     */
    public function setNomVille($nomVille)
    {
        $this->nomVille = $nomVille;

        return $this;
    }

    /**
     * Get nomVille
     *
     * @return string 
     */
    public function getNomVille()
    {
        return $this->nomVille;
    }

    /**
     * Set idPays
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Pays $idPays
     * @return Ville
     */
    public function setIdPays(\Utilisateur\UtilisateurBundle\Entity\Pays $idPays = null)
    {
        $this->idPays = $idPays;

        return $this;
    }

    /**
     * Get idPays
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\Pays 
     */
    public function getIdPays()
    {
        return $this->idPays;
    }
    
    
        
public function __toString()
{
    return $this->getNomVille();
} 
}
