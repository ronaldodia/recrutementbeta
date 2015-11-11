<?php

namespace Utilisateur\UtilisateurBundle\Repository;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityRepository;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SecteurActiviteRepository
 *
 * @author AlassaneOusmane
 */
class OffreRepository extends EntityRepository {
    //put your code here
    
    
    public function getOffresEncour($date){
        
$qb=$this->createQueryBuilder('o')
      //  ->select('o')
      
        ->join('o.ligneOffre','l', 'WITH','l.dateLimiteOffre >:date')
        ->where('o.activation=:activation')
        
        ->setParameter('date', $date)
       ->setParameter('activation', 1)
      ->Addselect('l')
      ;
       

return $qb->getQuery()->getResult();
        
    }
    
       public function findByValideTypeOffre($type){
        $date=new \DateTime();
$qb=$this->createQueryBuilder('o')
      //  ->select('o')
        ->join('o.ligneOffre','l', 'WITH','l.dateLimiteOffre >:date')
        
        
        ->join('o.idTypeOffre','t', 'WITH','t.nomTypeOffre =:type')
        ->where('o.activation=:activation')
        ->setParameter('type', $type)
        ->setParameter('date', $date)
         ->setParameter('activation', 1)
      ->Addselect('t')
      ->Addselect('l')
      ;
       

return $qb->getQuery()->getResult();
        
    }
  
    
    
    
        public function findByValideNomEntreprise($idEntreprise){
        $date=new \DateTime();
$qb=$this->createQueryBuilder('o')
      //  ->select('o')
        ->join('o.ligneOffre','l', 'WITH','l.dateLimiteOffre >:date')
        
        
        ->join('o.idEntreprise','e', 'WITH','e.idEntreprise =:entreprise')
       
        ->setParameter('entreprise', $idEntreprise)
        ->setParameter('date', $date)
       
      ->Addselect('e')
      ->Addselect('l')
      ;
       

return $qb->getQuery()->getResult();
        
    }
    
    
    
    
    public function findAllValide(){
        $date=new \DateTime();
$qb=$this->createQueryBuilder('o')
      //  ->select('o')
        ->join('o.ligneOffre','l', 'WITH','l.dateLimiteOffre >:date')
        
  
        ->setParameter('date', $date)
       
      
      ->Addselect('l')
      ;
       

return $qb->getQuery()->getResult();
        
    }
    
    
    
    
    public function findAllExpire(){
        $date=new \DateTime();
$qb=$this->createQueryBuilder('o')
      //  ->select('o')
        ->join('o.ligneOffre','l', 'WITH','l.dateLimiteOffre <:date')
        
  
        ->setParameter('date', $date)
       
      
      ->Addselect('l')
      ;
       

return $qb->getQuery()->getResult();
        
    }
    
    
    
    
    
    
        public function findByExpireNomEntreprise($idEntreprise){
        $date=new \DateTime();
$qb=$this->createQueryBuilder('o')
      //  ->select('o')
        ->join('o.ligneOffre','l', 'WITH','l.dateLimiteOffre <:date')
        
        
        ->join('o.idEntreprise','e', 'WITH','e.idEntreprise =:entreprise')
       
        ->setParameter('entreprise', $idEntreprise)
        ->setParameter('date', $date)
       
      ->Addselect('e')
      ->Addselect('l')
      ;
       

return $qb->getQuery()->getResult();
        
    }
    
}

?>
