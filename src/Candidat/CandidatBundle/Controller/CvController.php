<?php

namespace Candidat\CandidatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateur\UtilisateurBundle\Entity\Candidat;
use Utilisateur\UtilisateurBundle\Entity\Experience;
use Utilisateur\UtilisateurBundle\Entity\Competence;
use Utilisateur\UtilisateurBundle\Entity\Langues;
use Utilisateur\UtilisateurBundle\Entity\Formation;
use Utilisateur\UtilisateurBundle\Entity\Utilisateur;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;



class CvController extends Controller {

  

    public function showcvAction(){
        
      if (false === $this->get('security.context')->isGranted('ROLE_USER')) {
           
        throw new AccessDeniedException();
    }
     $em=$this->getDoctrine()->getManager();
    $c=$em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($this->getUser());
     if(!$c){
             $this->get('session')->getFlashBag()->add('msgformation', 'formation');
          
        $router = $this->container->get('router');
         return $this->redirect($router->generate('candidat_showcv'), 200);
             }
    $candidatformation=$em->getRepository("UtilisateurBundle:Formation")->findByIdCandidat($c);
   $candidatlangue=$em->getRepository("UtilisateurBundle:NivLanguCandidat")->findByIdCandidat($c);
   $candidatcompetence=$em->getRepository("UtilisateurBundle:Competence")->findByIdCandidat($c);
   $candidatexperience=$em->getRepository("UtilisateurBundle:CandidatExperienceNiveau")->findByIdCandidat($c);
  
    return $this->render('CandidatBundle:Pages:affichercv.html.twig',array('formation'=>$candidatformation,'langue'=>$candidatlangue,'competence'=>$candidatcompetence,
        'experience'=>$candidatexperience,'candidat'=>$c));
    
}
}