<?php

namespace Utilisateur\UtilisateurBundle\Repository;

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
class LigneOffreRepository extends EntityRepository {
    //put your code here
    
    public function getOffresEncour($date){
        
$qb=$this->createQueryBuilder('l')
        ->select('l')
        ->join('Utilisateur\UtilisateurBundle\Entity\Offre','o', 'with', 'l.titreOffre = :titre')
        
        
        ->setParameter('titre', '$date')
      ->select('o')
      ;
       

return $qb->getQuery()->getResult();
        
    }
   
    
}

?>
