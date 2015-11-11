<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Utilisateur\UtilisateurBundle\Entity\Utilisateur;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Entreprise
 *
 * @ORM\Table(name="entreprise", indexes={@ORM\Index(name="FK_ASSOCIATION_15", columns={"ID_VILLE"})})
 * @ORM\Entity(repositoryClass="Utilisateur\UtilisateurBundle\Repository\EntrepriseRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Entreprise
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ENTREPRISE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="SITE_INTERNET", type="string", length=255, nullable=true)
     */
    private $siteInternet;

    /**
     * @var string
     *
     * @ORM\Column(name="LOGO", type="string", length=255, nullable=false)
     */
    private $logo;

    
    
    
    
    
    /**
     ** @Assert\File(
     *     maxSize = "2024k",
     *     mimeTypes = {"image/png", "image/jpeg","image/pjpeg"},
     *     mimeTypesMessage = "format invalide"
     * )
     * @var file 
     */
    public $file;
    
    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION_ENTREPRISE", type="text", nullable=false)
     */
    private $descriptionEntreprise;

    
        /**
* @ORM\OneToOne(targetEntity="Utilisateur\UtilisateurBundle\Entity\Utilisateur", cascade={"persist"})
*  @ORM\JoinColumn(nullable=true)
*/
private $utilisateur;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="NOM_CONTACT", type="string", length=255, nullable=true)
     */
    private $nomContact;

    /**
     * @var integer
     *
     * @ORM\Column(name="TELEPHONE_CONTACT", type="integer", nullable=false)
     */
    private $telephoneContact;
    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE_ENTREPRISE", type="text", nullable=false)
     */
    private $adresseEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_ENTREPRISE", type="string", length=100,unique=true, nullable=false)
     */
    private $nomEntreprise;

    /**
     * @var \Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_VILLE", referencedColumnName="ID_VILLE",nullable=false)
     * })
     */
    private $idVille;

     /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SecteurActivite", inversedBy="idEntreprise")
     * @ORM\JoinTable(name="entreprise_secteur",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ID_ENTREPRISE", referencedColumnName="ID_ENTREPRISE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ID_SECTEUR_ACTIVITE", referencedColumnName="ID_SECTEUR_ACTIVITE",nullable=false)
     *   }
     * )
     */
    private $idSecteurActivite;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idSecteurActivite = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idEntreprise
     *
     * @return integer 
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }

    /**
     * Set siteInternet
     *
     * @param string $siteInternet
     * @return Entreprise
     */
    public function setSiteInternet($siteInternet)
    {
        $this->siteInternet = $siteInternet;

        return $this;
    }

    /**
     * Get siteInternet
     *
     * @return string 
     */
    public function getSiteInternet()
    {
        return $this->siteInternet;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Entreprise
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    
    
      /**
     * Set logo
     *
     * @param string $logo
     * @return Entreprise
     */
    public function setAdresseEntreprise($adresseEntreprise)
    {
        $this->adresseEntreprise = $adresseEntreprise;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getAdresseEntreprise()
    {
        return $this->adresseEntreprise;
    }

    
    /**
     * Set descriptionEntreprise
     *
     * @param string $descriptionEntreprise
     * @return Entreprise
     */
    public function setDescriptionEntreprise($descriptionEntreprise)
    {
        $this->descriptionEntreprise = $descriptionEntreprise;

        return $this;
    }

    /**
     * Get descriptionEntreprise
     *
     * @return string 
     */
    public function getDescriptionEntreprise()
    {
        return $this->descriptionEntreprise;
    }

    /**
     * Set nomContact
     *
     * @param string $nomContact
     * @return Entreprise
     */
    public function setNomContact($nomContact)
    {
        $this->nomContact = $nomContact;

        return $this;
    }

    /**
     * Get nomContact
     *
     * @return string 
     */
    public function getNomContact()
    {
        return $this->nomContact;
    }

    /**
     * Set telephoneContact
     *
     * @param integer $telephoneContact
     * @return Entreprise
     */
    public function setTelephoneContact($telephoneContact)
    {
        $this->telephoneContact = $telephoneContact;

        return $this;
    }

    /**
     * Get telephoneContact
     *
     * @return integer 
     */
    public function getTelephoneContact()
    {
        return $this->telephoneContact;
    }

    /**
     * Set nomEntreprise
     *
     * @param string $nomEntreprise
     * @return Entreprise
     */
    public function setNomEntreprise($nomEntreprise)
    {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Get nomEntreprise
     *
     * @return string 
     */
    public function getNomEntreprise()
    {
        return $this->nomEntreprise;
    }

    /**
     * Set idVille
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Ville $idVille
     * @return Entreprise
     */
    public function setIdVille(\Utilisateur\UtilisateurBundle\Entity\Ville $idVille = null)
    {
        $this->idVille = $idVille;

        return $this;
    }

    /**
     * Get idVille
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\Ville 
     */
    public function getIdVille()
    {
        return $this->idVille;
    }

    /**
     * Add idSecteurActivite
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\SecteurActivite $idSecteurActivite
     * @return Entreprise
     */
    public function addIdSecteurActivite(\Utilisateur\UtilisateurBundle\Entity\SecteurActivite $idSecteurActivite)
    {
        $this->idSecteurActivite[] = $idSecteurActivite;

        return $this;
    }

    /**
     * Remove idSecteurActivite
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\SecteurActivite $idSecteurActivite
     */
    public function removeIdSecteurActivite(\Utilisateur\UtilisateurBundle\Entity\SecteurActivite $idSecteurActivite)
    {
        $this->idSecteurActivite->removeElement($idSecteurActivite);
    }

    /**
     * Get idSecteurActivite
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdSecteurActivite()
    {
        return $this->idSecteurActivite;
    }
     /**
   * @param Utilisateur\UtilisateurBundle\Entity\Utilisateur $utilisateur
   */
  public function setUtilisateur(\Utilisateur\UtilisateurBundle\Entity\Utilisateur $utilisateur = null)
  {
    $this->utilisateur = $utilisateur;
  }

  /**
   * @return Utilisateur\UtilisateurBundle\Entity\Utilisateur 
   */
  public function getUtilisateur()
  {
    return $this->utilisateur;
  } 
 public function __toString()
{
    return $this->getNomEntreprise();
}   









public function getAbsolutePath()
    {
        return null === $this->logo ? null : $this->getUploadRootDir().'/'.$this->logo;
    }

    public function getWebPath() 
   {
        return null === $this->logo ? null : $this->getUploadDir().'/'.$this->logo;
    }

   
    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'logos/';
    }
   

    protected function getUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return $this->getTmpUploadRootDir()."/";
    }
 
    protected function getTmpUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__ . '/../../../../web/logos/';
    }
 
     /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->file) {
            // faites ce que vous voulez pour générer un nom unique
            $this->logo = sha1(uniqid(mt_rand(), true)).'.'.$this->file->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }

        // s'il y a une erreur lors du déplacement du fichier, une exception
        // va automatiquement être lancée par la méthode move(). Cela va empêcher
        // proprement l'entité d'être persistée dans la base de données si
        // erreur il y a
        $this->file->move($this->getUploadRootDir(), $this->logo);

        unset($this->file);
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }
}

