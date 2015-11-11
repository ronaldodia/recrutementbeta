<?php

namespace Candidat\CandidatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateur\UtilisateurBundle\Form\CandidatType;
use Utilisateur\UtilisateurBundle\Entity\Candidat;
use Utilisateur\UtilisateurBundle\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class CandidatController extends Controller {

    public function addcandidatAction(Request $request) {
        if (false === $this->get('security.context')->isGranted('ROLE_USER')||$this->get('security.context')->isGranted('ROLE_ADMIN')||$this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
        
        
         $em = $this->getDoctrine()->getManager();
        $candidat = new Candidat();
     
        $utilisateur=$em->getRepository("UtilisateurBundle:Utilisateur")->findOneById($this->getUser());
        $candidat->setUtilisateur($utilisateur);
        $form = $this->createForm(new CandidatType(), $candidat);

        $form->handleRequest($request);
        if ($form->isValid()) {

            $add = $form->getData();

            try{$em->persist($add);//$candidat->uploadPhoto();
           $em->flush();
          
            $this->get('session')->getFlashBag()->add('notice', 'enregistré');
           
            }catch(\Exception $e){
             $this->get('session')->getFlashBag()->add('erreur', 'erreur');   
            }   
        }



        return $this->render('CandidatBundle:Pages:addcandidat.html.twig', array(
                    'addcandidatform' => $form->createView()));
    }

    public function indexAction() {
 if ($this->get('security.context')->isGranted('ROLE_ADMIN')||$this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
       
        return $this->render('CandidatBundle:Default:index.html.twig');
    }

    public function etatcivileAction() {
if (false === $this->get('security.context')->isGranted('ROLE_USER')) {
           
        throw new AccessDeniedException();
    }
        $router = $this->container->get('router');
        $user = $this->container->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getRepository("Utilisateur\UtilisateurBundle\Entity\Candidat");
        $candidat = $em->findOneByUtilisateur($user);
        if (!$candidat) {
            return $this->redirect($router->generate('candidat_add'), 307);
        }
        return $this->render('CandidatBundle:Pages:etatcivile.html.twig', array('candidat' => $candidat));
    }

    
    


    public function editcandidatAction(Request $request) {
        
        if (false === $this->get('security.context')->isGranted('ROLE_USER')) {
           
        throw new AccessDeniedException();
    }
        
         $em = $this->getDoctrine()->getManager();
        $candidat = new Candidat();
     
        $utilisateur=$em->getRepository("UtilisateurBundle:Utilisateur")->findOneById($this->getUser());
        $candidat=$em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($utilisateur);
        echo "photo".$candidat->setPhoto("");
        $form = $this->createForm(new CandidatType(), $candidat);

        $form->handleRequest($request);
        if ($form->isValid()) {

            $add = $form->getData();

            try{$em->persist($add);
            
           $em->flush();
          
            $this->get('session')->getFlashBag()->add('notice', 'enregistré');
           
            }catch(\Exception $e){
             $this->get('session')->getFlashBag()->add('erreur', 'erreur');   
            }   
        }



        return $this->render('CandidatBundle:Pages:editcandidat.html.twig', array(
                    'editcandidatform' => $form->createView()));
    }
}