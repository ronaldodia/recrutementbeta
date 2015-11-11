<?php

namespace Utilisateur\UtilisateurBundle\Repository;
use Doctrine\ORM\EntityRepository;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CandidatRepository
 *
 * @author AlassaneOusmane
 */
class CandidatRepository extends EntityRepository {
    //put your code here
    
  public function findAllcv($critere)
    {
    
    
      if($critere=="nom")
        return $this->findBy(array(), array('nomCandidat' => 'ASC'));
      
      
      
      if($critere=="prenom")
        return $this->findBy(array(), array('prenom' => 'ASC'));
      
      if($critere=="niveauetudes")
      {  return $this->findBy(array(), array('idNiveauEtudes' => 'ASC'));
               }
               
               
               
               
               
         if(!$critere){
             return $this->findAll();}
    }  
   
 
    
    
   
}

?>
