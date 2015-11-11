<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateur\UtilisateurBundle\Form\VilleType;
use Utilisateur\UtilisateurBundle\Entity\SecteurActivite;
use Utilisateur\UtilisateurBundle\Entity\Metier;
use Utilisateur\UtilisateurBundle\Entity\Ville;
use Utilisateur\UtilisateurBundle\Entity\Domainecompetence;
use Utilisateur\UtilisateurBundle\Form\MetierType;
use Utilisateur\UtilisateurBundle\Form\DomainecompetenceType;
use Utilisateur\UtilisateurBundle\Form\SecteurActiviteType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
class DonneesController extends Controller {
//methode pour la creation d'une ville
    public function addvilleAction(Request $request) {
if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new VilleType());

        $form->handleRequest($request);

        if ($form->isValid()) {
           try{ $registration = $form->getData();
            $em->persist($registration);
            $em->flush();
             $this->get('session')->getFlashBag()->add('success','enregistré'); 
            
            }catch(\Exception $e){
                 $this->get('session')->getFlashBag()->add('error',$e); 
            }
        }



        return $this->render('AdminBundle:Pages:ville.html.twig', array(
                    'formulaire' => $form->createView()));
    }

   public function showvilleAction() {
if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();
        $villes=new Ville();
        $villes=$em->getRepository("UtilisateurBundle:Ville")->findAll();
        

        

        



        return $this->render('AdminBundle:Pages:villespays.html.twig', array('villes'=>$villes));
    }
    
   
    
    public function editvilleAction(Request $request,$id) {
if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();
        
        $ville=new Ville();
        $ville=$em->getRepository("UtilisateurBundle:Ville")->findOneByIdVille($id);
        $form = $this->createForm(new VilleType(),$ville);

        $form->handleRequest($request);

        if ($form->isValid()) {
           try{ $registration = $form->getData();
            $em->persist($registration);
            $em->flush();
             $this->get('session')->getFlashBag()->add('success','enregistré'); 
            
            }catch(\Exception $e){
                 $this->get('session')->getFlashBag()->add('error',$e); 
            }
        }
          return $this->render('AdminBundle:Pages:editville.html.twig', array(
                    'formulaire' => $form->createView(),'id'=>$id));
        }
    
   public function removevilleAction($id) {
if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();
        
        $ville=new Ville();
        $ville=$em->getRepository("UtilisateurBundle:Ville")->findOneByIdVille($id);
        
 $villes=new Ville();
        $villes=$em->getRepository("UtilisateurBundle:Ville")->findAll();
         $router = $this->container->get('router');

           try{ 
            $em->remove($ville);
            $em->flush();
             $this->get('session')->getFlashBag()->add('successremove','enregistré'); 
            
            }catch(\Exception $e){
                 $this->get('session')->getFlashBag()->add('errorremove',$e); 
            }
       return $this->redirect($router->generate('admin_showville'), 302);
 
          
        }
      
    
    //ajout secteurActivite
    
    public function addsecteurAction(Request $request) {
if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new SecteurActiviteType() );

        $form->handleRequest($request);
        if ($form->isValid()) {
try{
        
             $add = $form->getData();
                        
           $em->persist($add);
           $em->flush();
           $this->get('session')->getFlashBag()->add('success','enregistré'); 
           }
           catch(\Exception $e){
              $this->get('session')->getFlashBag()->add('error',$e);  
           }
        }



        return $this->render('AdminBundle:Pages:addsecteur.html.twig', array(
                    'addsecteurform' => $form->createView()));
    }
    
     public function showsecteurAction() {
if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();
     $secteurs=$em->getRepository("UtilisateurBundle:SecteurActivite")->findAll();
     
       




        return $this->render('AdminBundle:Pages:showsecteur.html.twig', array(
                    'secteurs'=>$secteurs));
    } 
    
 
    
    
     public function editsecteurAction(Request $request,$id) {
if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();
        
        $secteur=new SecteurActivite();
        $secteur=$em->getRepository("UtilisateurBundle:SecteurActivite")->findOneByIdSecteurActivite($id);
        $form = $this->createForm(new SecteurActiviteType(),$secteur);

        $form->handleRequest($request);

        if ($form->isValid()) {
           try{ 
            $em->flush();
             $this->get('session')->getFlashBag()->add('success','enregistré'); 
            
            }catch(\Exception $e){
                 $this->get('session')->getFlashBag()->add('error',$e); 
            }
        }
          return $this->render('AdminBundle:Pages:editsecteur.html.twig', array(
                    'formulaire' => $form->createView(),'id'=>$id));
        }
        
        
        
           //ajout secteurActivite
    
    public function addmetierAction(Request $request) {
if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new MetierType() );

        $form->handleRequest($request);
        if ($form->isValid()) {
try{
        
             $add = $form->getData();
                        
           $em->persist($add);
           $em->flush();
           $this->get('session')->getFlashBag()->add('success','enregistré'); 
           }
           catch(\Exception $e){
              $this->get('session')->getFlashBag()->add('error',$e);  
           }
        }



        return $this->render('AdminBundle:Pages:addmetier.html.twig', array(
                    'addmetierform' => $form->createView()));
    }
    
    
    
     public function showmetierAction() {
if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();
     $metiers=$em->getRepository("UtilisateurBundle:Metier")->findAll();
     
       




        return $this->render('AdminBundle:Pages:showmetier.html.twig', array(
                    'metiers'=>$metiers));
    } 
   
    
    
    
     public function editmetierAction(Request $request,$id) {
if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();
        
        $metier=new Metier();
        $metier=$em->getRepository("UtilisateurBundle:Metier")->findOneByIdMetier($id);
        $form = $this->createForm(new MetierType(),$metier);

        $form->handleRequest($request);

        if ($form->isValid()) {
           try{ 
            $em->flush();
             $this->get('session')->getFlashBag()->add('success','enregistré'); 
            
            }catch(\Exception $e){
                 $this->get('session')->getFlashBag()->add('error',$e); 
            }
        }
          return $this->render('AdminBundle:Pages:editmetier.html.twig', array(
                    'formulaire' => $form->createView(),'id'=>$id));
        }
        
        
        
        
        
        public function adddomainecompetenceAction(Request $request) {
if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new DomainecompetenceType() );

        $form->handleRequest($request);
        if ($form->isValid()) {
try{
        
             $add = $form->getData();
                        
           $em->persist($add);
           $em->flush();
           $this->get('session')->getFlashBag()->add('success','enregistré'); 
           }
           catch(\Exception $e){
              $this->get('session')->getFlashBag()->add('error',$e);  
           }
        }

  return $this->render('AdminBundle:Pages:adddomainecompetence.html.twig', array(
                    'adddomainecompetenceform' => $form->createView()));}

                    
                    
                       public function showdomainecompetenceAction() {
if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();
     $domainecompetence=$em->getRepository("UtilisateurBundle:Domainecompetence")->findAll();
     
       




        return $this->render('AdminBundle:Pages:showdomainecompetence.html.twig', array(
                    'domaines'=>$domainecompetence));
    } 
    
    
    
    
    
    
     public function editdomainecompetenceAction(Request $request,$id) {
if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();
        
        $domaine=new DomaineCompetence();
        $domaine=$em->getRepository("UtilisateurBundle:Domainecompetence")->findOneByIdDomaineCompetence($id);
        $form = $this->createForm(new DomaineCompetenceType(),$domaine);

        $form->handleRequest($request);

        if ($form->isValid()) {
           try{ 
            $em->flush();
             $this->get('session')->getFlashBag()->add('success','enregistré'); 
            
            }catch(\Exception $e){
                 $this->get('session')->getFlashBag()->add('error',$e); 
            }
        }
          return $this->render('AdminBundle:Pages:editdomainecompetence.html.twig', array(
                    'formulaire' => $form->createView(),'id'=>$id));
        }
        
        
        
        
  
}
