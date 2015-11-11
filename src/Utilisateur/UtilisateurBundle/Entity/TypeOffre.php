<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeOffre
 *
 * @ORM\Table(name="type_offre")
 * @ORM\Entity
 */
class TypeOffre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TYPE_OFFRE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_type_offre", type="string", length=56, nullable=false)
     */
    private $nomTypeOffre;



    /**
     * Get idTypeOffre
     *
     * @return integer 
     */
    public function getIdTypeOffre()
    {
        return $this->idTypeOffre;
    }

    /**
     * Set nomTypeOffre
     *
     * @param string $nomTypeOffre
     * @return TypeOffre
     */
    public function setNomTypeOffre($nomTypeOffre)
    {
        $this->nomTypeOffre = $nomTypeOffre;

        return $this;
    }

    /**
     * Get nomTypeOffre
     *
     * @return string 
     */
    public function getNomTypeOffre()
    {
        return $this->nomTypeOffre;
    }
    public function __toString()
{
    return $this->getNomTypeOffre()."";
}


}
