<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateur\UtilisateurBundle\Form\VilleType;
use Utilisateur\UtilisateurBundle\Form\UtilisateurType;
use Utilisateur\UtilisateurBundle\Form\UtilisateurType2;
use Utilisateur\UtilisateurBundle\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
class UtilisateursController extends Controller {

//methode pour recuperer la liste des roles
    protected function getRoles() {
        $roles = array();

        foreach ($this->container->getParameter('security.role_hierarchy.roles') as $name => $rolesHierarchy) {
            $roles[$name] = $name;

            foreach ($rolesHierarchy as $role) {
                if (!isset($roles[$role])) {
                    $roles[$role] = $role;
                }
            }
        }

        return $roles;
    }
//action pour ajouter un utilisateur
    public function addusersAction(Request $request) {

if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new UtilisateurType($this->getRoles()));

        $form->handleRequest($request);
        if ($form->isValid()) {

            //echo $form->getViewData();
            try{$registration = $form->getData();
            $em->persist($registration);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success','enregistré'); 
            
            }catch(\Exception $e){
                $this->get('session')->getFlashBag()->add('error', $e); 
            }
        } return $this->render('AdminBundle:Pages:addutilisateur.html.twig', array(
                    'adduserform' => $form->createView()));
    }

   
                public function showutilisateursAction() {
if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();
     $utilisateur=$em->getRepository("UtilisateurBundle:Utilisateur")->findAll();
     
       




        return $this->render('AdminBundle:Pages:showutilisateur.html.twig', array(
                    'utilisateur'=>$utilisateur));
    } 
    
   
         
     public function editutilisateurAction(Request $request,$id) {
if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();
        
        $utilisateur=new Utilisateur();
        $utilisateur=$em->getRepository("UtilisateurBundle:Utilisateur")->findOneById($id);
        $form = $this->createForm(new UtilisateurType2($this->getRoles()),$utilisateur);

        $form->handleRequest($request);

        if ($form->isValid()) {
           try{ 
            $em->flush();
             $this->get('session')->getFlashBag()->add('success','enregistré'); 
            
            }catch(\Exception $e){
                 $this->get('session')->getFlashBag()->add('error',$e); 
            }
        }
          return $this->render('AdminBundle:Pages:editutilisateur.html.twig', array(
                    'formulaire' => $form->createView(),'id'=>$id));
        }  
}
