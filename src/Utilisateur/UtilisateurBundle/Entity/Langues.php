<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Langues
 *
 * @ORM\Table(name="langues")
 * @ORM\Entity
 */
class Langues
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_LANGUE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLangue;

    /**
     * @var string
     *
     * @ORM\Column(name="LANGUE", type="string", length=56, nullable=false)
     */
    private $langue;



    /**
     * Get idLangue
     *
     * @return integer 
     */
    public function getIdLangue()
    {
        return $this->idLangue;
    }

    /**
     * Set langue
     *
     * @param string $langue
     * @return Langues
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return string 
     */
    public function getLangue()
    {
        return $this->langue;
    }
    public function __toString(){
        return $this->getLangue();
    }
}
