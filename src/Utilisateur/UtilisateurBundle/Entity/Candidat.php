<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Utilisateur\UtilisateurBundle\Entity\Utilisateur;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * Candidat
 *
 * @ORM\Table(name="candidat", indexes={@ORM\Index(name="FK_CANDIDAT_NIVEAU_ETUDE", columns={"ID_NIVEAU_ETUDES"}), @ORM\Index(name="FK_ASSOCIATION_16", columns={"ID_VILLE"}), @ORM\Index(name="FK_ASSOCIATION_22", columns={"ID_STATUT_ACTUEL"})})
 * @ORM\Entity(repositoryClass="Utilisateur\UtilisateurBundle\Repository\CandidatRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Candidat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CANDIDAT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_CANDIDAT", type="string", length=56, nullable=false)
     */
    private $nomCandidat;

    
     /**
* @ORM\OneToOne(targetEntity="Utilisateur\UtilisateurBundle\Entity\Utilisateur", cascade={"persist"})
*  @ORM\JoinColumn(nullable=false)
*/
private $utilisateur;
 
    
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM", type="string", length=56, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE", type="string", length=125, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="CIVLITE", type="string", length=25, nullable=false)
     */
    private $civlite;

    /**
     * @var string
     *
     * @ORM\Column(name="SITUATION_FAMLILIALE", type="string", length=25, nullable=false)
     */
    private $situationFamliliale;

    /**
     * @var string
     *
     * @ORM\Column(name="SITE", type="string", length=255, nullable=true)
     */
    private $site;

    /**
     * @var integer
     *
     * @ORM\Column(name="TELEPHONE", type="integer", nullable=false)
     */
    private $telephone;

    
    /**
     
     * @var string
     *
     * @ORM\Column(name="PHOTO", type="string", length=255, nullable=true)
     */
    private $photo;

    
    
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
     * @var \Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_VILLE", referencedColumnName="ID_VILLE",nullable=false)
     * })
     */
    private $idVille;

    /**
     * @var \StatutActuel
     *
     * @ORM\ManyToOne(targetEntity="StatutActuel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_STATUT_ACTUEL", referencedColumnName="ID_STATUT_ACTUEL",nullable=false)
     * })
     */
    private $idStatutActuel;

    /**
     * @var \NiveauEtudes
     *
     * @ORM\ManyToOne(targetEntity="NiveauEtudes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_NIVEAU_ETUDES", referencedColumnName="ID_NIVEAU_ETUDES",nullable=false)
     * })
     */
    private $idNiveauEtudes;

   

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="LigneOffre", mappedBy="idCandidat")
     */
    private $idOffreLigneOffre;

    /**
     * Constructor
     */
    public function __construct()
    {
        
        $this->idOffreLigneOffre = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idCandidat
     *
     * @return integer 
     */
    public function getIdCandidat()
    {
        return $this->idCandidat;
    }

    /**
     * Set nomCandidat
     *
     * @param string $nomCandidat
     * @return Candidat
     */
    public function setNomCandidat($nomCandidat)
    {
        $this->nomCandidat = $nomCandidat;

        return $this;
    }

    /**
     * Get nomCandidat
     *
     * @return string 
     */
    public function getNomCandidat()
    {
        return $this->nomCandidat;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Candidat
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Candidat
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set civlite
     *
     * @param string $civlite
     * @return Candidat
     */
    public function setCivlite($civlite)
    {
        $this->civlite = $civlite;

        return $this;
    }

    /**
     * Get civlite
     *
     * @return string 
     */
    public function getCivlite()
    {
        return $this->civlite;
    }

    /**
     * Set situationFamliliale
     *
     * @param string $situationFamliliale
     * @return Candidat
     */
    public function setSituationFamliliale($situationFamliliale)
    {
        $this->situationFamliliale = $situationFamliliale;

        return $this;
    }

    /**
     * Get situationFamliliale
     *
     * @return string 
     */
    public function getSituationFamliliale()
    {
        return $this->situationFamliliale;
    }

    /**
     * Set site
     *
     * @param string $site
     * @return Candidat
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     * @return Candidat
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set image
     *
     * @param string $photo
     */
    public function setPhoto($photo )
    {
        $this->photo = $photo;

        return $this;
    }

   /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set idVille
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Ville $idVille
     * @return Candidat
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
     * Set idStatutActuel
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\StatutActuel $idStatutActuel
     * @return Candidat
     */
    public function setIdStatutActuel(\Utilisateur\UtilisateurBundle\Entity\StatutActuel $idStatutActuel = null)
    {
        $this->idStatutActuel = $idStatutActuel;

        return $this;
    }

    /**
     * Get idStatutActuel
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\StatutActuel 
     */
    public function getIdStatutActuel()
    {
        return $this->idStatutActuel;
    }

    /**
     * Set idNiveauEtudes
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\NiveauEtudes $idNiveauEtudes
     * @return Candidat
     */
    public function setIdNiveauEtudes(\Utilisateur\UtilisateurBundle\Entity\NiveauEtudes $idNiveauEtudes = null)
    {
        $this->idNiveauEtudes = $idNiveauEtudes;

        return $this;
    }

    /**
     * Get idNiveauEtudes
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\NiveauEtudes 
     */
    public function getIdNiveauEtudes()
    {
        return $this->idNiveauEtudes;
    }

   

  
    /**
     * Add idOffreLigneOffre
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Offre $lidOffre
     * @return Candidat
     */
    public function addIdOffreLigneOffre(\Utilisateur\UtilisateurBundle\Entity\LigneOffre $idOffreLigneOffre)
    {
        $this->idOffreLigneOffre[] = $idOffreLigneOffre;

        return $this;
    }

    /**
     * Remove idOffreLigneOffre
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Offre $lidOffre
     */
    public function removeIdOffreLigneOffre(\Utilisateur\UtilisateurBundle\Entity\LigneOffre $idOffreLigneOffre)
    {
        $this->idOffreLigneOffre->removeElement($idOffreLigneOffre);
    }

    /**
     * Get idOffreLigneOffre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdOffreLigneOffre()
    {
        return $this->idOffreLigneOffre;
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
    return $this->getNomCandidat()."";
}  







 public function getAbsolutePath()
    {
        return null === $this->photo ? null : $this->getUploadRootDir().'/'.$this->photo;
    }

    public function getWebPath()
    {
        return null === $this->photo ? null : $this->getUploadDir().'/'.$this->photo;
    }

   
    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'upload/';
    }
   

    protected function getUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return $this->getTmpUploadRootDir()."/";
    }
 
    protected function getTmpUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__ . '/../../../../web/upload/';
    }
 
     /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->file) {
            // faites ce que vous voulez pour générer un nom unique
            $this->photo = sha1(uniqid(mt_rand(), true)).'.'.$this->file->guessExtension();
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
        $this->file->move($this->getUploadRootDir(), $this->photo);

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
