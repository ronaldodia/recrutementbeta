<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Utilisateur\UtilisateurBundle\Repository\SecteurActiviteRepository;
/**
 * SecteurActivite
 *
 * @ORM\Table(name="secteur_activite")
 * @ORM\Entity(repositoryClass="Utilisateur\UtilisateurBundle\Repository\SecteurActiviteRepository")
 */
class SecteurActivite
{
    
    
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_SECTEUR_ACTIVITE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSecteurActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_SECTEUR_ACTIVITE", type="string", length=56, unique=true, nullable=false)
     */
    private $nomSecteurActivite;

   
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Entreprise", mappedBy="idSecteurActivite")
     */
    private $idEntreprise;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEntreprise = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idSecteurActivite
     *
     * @return integer 
     */
    public function getIdSecteurActivite()
    {
        return $this->idSecteurActivite;
    }

    /**
     * Set nomSecteurActivite
     *
     * @param string $nomSecteurActivite
     * @return SecteurActivite
     */
    public function setNomSecteurActivite($nomSecteurActivite)
    {
        $this->nomSecteurActivite = $nomSecteurActivite;

        return $this;
    }

    /**
     * Get nomSecteurActivite
     *
     * @return string 
     */
    public function getNomSecteurActivite()
    {
        return $this->nomSecteurActivite;
    }

    /**
     * Add idEntreprise
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Entreprise $idEntreprise
     * @return SecteurActivite
     */
    public function addIdEntreprise(\Utilisateur\UtilisateurBundle\Entity\Entreprise $idEntreprise)
    {
        $this->idEntreprise[] = $idEntreprise;

        return $this;
    }

    /**
     * Remove idEntreprise
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Entreprise $idEntreprise
     */
    public function removeIdEntreprise(\Utilisateur\UtilisateurBundle\Entity\Entreprise $idEntreprise)
    {
        $this->idEntreprise->removeElement($idEntreprise);
    }

    /**
     * Get idEntreprise
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }
    
        
public function __toString()
{
    return $this->getNomSecteurActivite();
} 
}
