<?php

namespace Candidat\CandidatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateur\UtilisateurBundle\Form\CandidatType;
use Utilisateur\UtilisateurBundle\Entity\Candidat;
use Utilisateur\UtilisateurBundle\Entity\Utilisateur;
use Utilisateur\UtilisateurBundle\Entity\LigneOffre;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class PostulerController extends Controller {

  
    public function postulerAction($id) {
        
        $router = $this->container->get('router');
        
         $em = $this->getDoctrine()->getManager();
        $candidat = new Candidat();
     
        $utilisateur=$em->getRepository("UtilisateurBundle:Utilisateur")->findOneById($this->getUser());
        $candidat=$em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($utilisateur);
        if(!$candidat){
             $this->get('session')->getFlashBag()->add('msgpasetatcivile', 'enregistré');
            return $this->redirect($router->generate('candidat_etatcivile'), 307);
        }
      $ligne=new LigneOffre();
      
       $ligne=$em->getRepository("UtilisateurBundle:LigneOffre")->find($id);
        if ($ligne) {
     try{$ligne->addIdCandidat($candidat);
            
           $em->flush();
          
            $this->get('session')->getFlashBag()->add('msgpostule', 'enregistré');
           
            }catch(\Exception $e){
             $this->get('session')->getFlashBag()->add('msgnonpostule', 'erreur');   
            }   
        }



       return $this->redirect($router->generate('annonce_homepage'), 307);
    }
    
    
    public function offrepostuleesAction(){
    if (false === $this->get('security.context')->isGranted('ROLE_USER')||$this->get('security.context')->isGranted('ROLE_ADMIN')||$this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
    
        $router = $this->container->get('router');
        $user = $this->container->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getRepository("Utilisateur\UtilisateurBundle\Entity\Candidat");
        $candidat = $em->findOneByUtilisateur($user);
        if (!$candidat) {
            return $this->redirect($router->generate('candidat_add'), 307);
        }
        return $this->render('CandidatBundle:Pages:afficheroffrepostulees.html.twig', array('candidat' => $candidat));   
    }
    
    }