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
     * @ORM\Column(name="TITRE_METIER", type="string", length=56, unique=true,nullable=false)
     */
    private $titreMetier;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="LigneOffre", mappedBy="idMetier")
     */
    private $idligneoffre;

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
     * Add idligneoffre
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\LigneOffre $idligneoffre
     * @return Metier
     */
    public function addIdligneoffre(\Utilisateur\UtilisateurBundle\Entity\Offre $idligneoffre)
    {
        $this->idligneoffre[] = $idligneoffre;

        return $this;
    }

    /**
     * Remove lidOffre
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\LigneOffre $idligneoffre
     */
    public function removeIdligneoffre(\Utilisateur\UtilisateurBundle\Entity\Offre $idligneoffre)
    {
        $this->idligneoffre->removeElement($idligneoffre);
    }

    /**
     * Get idligneoffre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdligneoffre()
    {
        return $this->idligneoffre;
    }
    public function __toString()
{
    return $this->getTitreMetier();
} 
}
