<?php

namespace Proxies\__CG__\Utilisateur\UtilisateurBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Entreprise extends \Utilisateur\UtilisateurBundle\Entity\Entreprise implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'idEntreprise', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'siteInternet', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'logo', 'file', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'descriptionEntreprise', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'utilisateur', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'nomContact', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'telephoneContact', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'adresseEntreprise', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'nomEntreprise', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'idVille', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'idSecteurActivite');
        }

        return array('__isInitialized__', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'idEntreprise', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'siteInternet', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'logo', 'file', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'descriptionEntreprise', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'utilisateur', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'nomContact', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'telephoneContact', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'adresseEntreprise', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'nomEntreprise', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'idVille', '' . "\0" . 'Utilisateur\\UtilisateurBundle\\Entity\\Entreprise' . "\0" . 'idSecteurActivite');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Entreprise $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdEntreprise()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdEntreprise();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdEntreprise', array());

        return parent::getIdEntreprise();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteInternet($siteInternet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteInternet', array($siteInternet));

        return parent::setSiteInternet($siteInternet);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteInternet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteInternet', array());

        return parent::getSiteInternet();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogo($logo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogo', array($logo));

        return parent::setLogo($logo);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogo', array());

        return parent::getLogo();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresseEntreprise($adresseEntreprise)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresseEntreprise', array($adresseEntreprise));

        return parent::setAdresseEntreprise($adresseEntreprise);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresseEntreprise()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresseEntreprise', array());

        return parent::getAdresseEntreprise();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionEntreprise($descriptionEntreprise)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionEntreprise', array($descriptionEntreprise));

        return parent::setDescriptionEntreprise($descriptionEntreprise);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionEntreprise()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionEntreprise', array());

        return parent::getDescriptionEntreprise();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomContact($nomContact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomContact', array($nomContact));

        return parent::setNomContact($nomContact);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomContact', array());

        return parent::getNomContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephoneContact($telephoneContact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephoneContact', array($telephoneContact));

        return parent::setTelephoneContact($telephoneContact);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephoneContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephoneContact', array());

        return parent::getTelephoneContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomEntreprise($nomEntreprise)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomEntreprise', array($nomEntreprise));

        return parent::setNomEntreprise($nomEntreprise);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomEntreprise()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomEntreprise', array());

        return parent::getNomEntreprise();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdVille(\Utilisateur\UtilisateurBundle\Entity\Ville $idVille = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdVille', array($idVille));

        return parent::setIdVille($idVille);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdVille', array());

        return parent::getIdVille();
    }

    /**
     * {@inheritDoc}
     */
    public function addIdSecteurActivite(\Utilisateur\UtilisateurBundle\Entity\SecteurActivite $idSecteurActivite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIdSecteurActivite', array($idSecteurActivite));

        return parent::addIdSecteurActivite($idSecteurActivite);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIdSecteurActivite(\Utilisateur\UtilisateurBundle\Entity\SecteurActivite $idSecteurActivite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIdSecteurActivite', array($idSecteurActivite));

        return parent::removeIdSecteurActivite($idSecteurActivite);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdSecteurActivite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdSecteurActivite', array());

        return parent::getIdSecteurActivite();
    }

    /**
     * {@inheritDoc}
     */
    public function setUtilisateur(\Utilisateur\UtilisateurBundle\Entity\Utilisateur $utilisateur = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUtilisateur', array($utilisateur));

        return parent::setUtilisateur($utilisateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getUtilisateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUtilisateur', array());

        return parent::getUtilisateur();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsolutePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsolutePath', array());

        return parent::getAbsolutePath();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebPath', array());

        return parent::getWebPath();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpload', array());

        return parent::preUpload();
    }

    /**
     * {@inheritDoc}
     */
    public function upload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upload', array());

        return parent::upload();
    }

    /**
     * {@inheritDoc}
     */
    public function removeUpload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUpload', array());

        return parent::removeUpload();
    }

}