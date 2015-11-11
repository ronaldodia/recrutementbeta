<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Metier
 *
 * @ORM\Table(name="metier")
 * @ORM\Entity
 */
class Metier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_METIER", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMetier;

    /**
     * @var string
     *
     * @ORM\Column(name="TITRE_METIER", type="string", length=56, nullable=true)
     */
    private $titreMetier;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Offre", mappedBy="idMetier")
     */
    private $lidOffre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lidOffre = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idMetier
     *
     * @return integer 
     */
    public function getIdMetier()
    {
        return $this->idMetier;
    }

    /**
     * Set titreMetier
     *
     * @param string $titreMetier
     * @return Metier
     */
    public function setTitreMetier($titreMetier)
    {
        $this->titreMetier = $titreMetier;

        return $this;
    }

    /**
     * Get titreMetier
     *
     * @return string 
     */
    public function getTitreMetier()
    {
        return $this->titreMetier;
    }

    /**
     * Add lidOffre
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Offre $lidOffre
     * @return Metier
     */
    public function addLidOffre(\Utilisateur\UtilisateurBundle\Entity\Offre $lidOffre)
    {
        $this->lidOffre[] = $lidOffre;

        return $this;
    }

    /**
     * Remove lidOffre
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Offre $lidOffre
     */
    public function removeLidOffre(\Utilisateur\UtilisateurBundle\Entity\Offre $lidOffre)
    {
        $this->lidOffre->removeElement($lidOffre);
    }

    /**
     * Get lidOffre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLidOffre()
    {
        return $this->lidOffre;
    }
    public function __toString()
{
    return $this->getTitreMetier();
} 
}
