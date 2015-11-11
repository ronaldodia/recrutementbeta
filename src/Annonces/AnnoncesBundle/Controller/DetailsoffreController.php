<?php

namespace Annonces\AnnoncesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateur\UtilisateurBundle\Entity\Utilisateur;
use FOS\UserBundle\Model\UserManagerInterface;

class DetailsoffreController extends Controller
{
    public function indexAction($id)
    {
        
  
$ligne=$this->getDoctrine()
        ->getRepository('UtilisateurBundle:LigneOffre')
        ->find($id);
    if (!$ligne) {
        throw $this->createNotFoundException(
            'Aucune offre trouvé pour cet id : '.$id
        );
    }
        return $this->render('AnnonceBundle:Pages:detailoffre.html.twig',array('ligne'=>$ligne));
        
        
      
        
    }
    
}
