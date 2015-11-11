<?php

namespace Candidat\CandidatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateur\UtilisateurBundle\Form\CandidatType;
use Utilisateur\UtilisateurBundle\Entity\Candidat;
use Utilisateur\UtilisateurBundle\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Utilisateur\UtilisateurBundle\Form\NivLanguCandidatType;
use Utilisateur\UtilisateurBundle\Entity\NivLanguCandidat;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
class LangueController extends Controller {

    public function addlangueAction(Request $request) {
        if (false === $this->get('security.context')->isGranted('ROLE_USER')||$this->get('security.context')->isGranted('ROLE_ADMIN')||$this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
    
        
        
        $em = $this->getDoctrine()->getManager();
  $router = $this->container->get('router');
        $c=new Candidat();
        $c=$em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($this->getUser());
        
        $niv=new NivLanguCandidat();
        $niv->setIdCandidat($c);
        $langue=$em->getRepository("UtilisateurBundle:NivLanguCandidat")->findByIdCandidat($c);
        $form = $this->createForm(new NivLanguCandidatType(),$niv);

        $form->handleRequest($request);
        if ($form->isValid()) {

            $add = $form->getData();

            try{$em->persist($add);
           $em->flush();
          
            $this->get('session')->getFlashBag()->add('notice', 'enregistré');
            return new RedirectResponse($router->generate('candidat_addlangue'), 302);
            }catch(\Exception $e){
             $this->get('session')->getFlashBag()->add('erreur', $e);   
            }   
        }



        return $this->render('CandidatBundle:Pages:addlangue.html.twig', array('candidat'=>$langue,
                    'form' => $form->createView()));
    }

  
    
    
    public function editlangueAction(Request $request,$id) {
        
      if (false === $this->get('security.context')->isGranted('ROLE_USER')||$this->get('security.context')->isGranted('ROLE_ADMIN')||$this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
    
        
        $em = $this->getDoctrine()->getManager();
    $router = $this->container->get('router');
        $c=new Candidat();
        $c=$em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($this->getUser());
        
        $niv=new NivLanguCandidat();
        $niv=$em->getRepository("UtilisateurBundle:NivLanguCandidat")->find($id);
        $langue=$em->getRepository("UtilisateurBundle:NivLanguCandidat")->findByIdCandidat($c);
        if($niv->getIdCandidat()!=$c){
         return $this->redirect($router->generate('annonce_403'), 307);   
        }
        $form = $this->createForm(new NivLanguCandidatType(),$niv);

        $form->handleRequest($request);
        if ($form->isValid()) {

            $add = $form->getData();

            try{$em->persist($add);
           $em->flush();
          
            $this->get('session')->getFlashBag()->add('notice', 'enregistré');
           
            }catch(\Exception $e){
             $this->get('session')->getFlashBag()->add('erreur', $e);   
            }   
        }



        return $this->render('CandidatBundle:Pages:editlangue.html.twig', array('candidat'=>$langue,'id'=>$id,
                    'form' => $form->createView()));
    }
    
    
    
    
    
    public function deletelangueAction($id) {
        
      if (false === $this->get('security.context')->isGranted('ROLE_USER')||$this->get('security.context')->isGranted('ROLE_ADMIN')||$this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
    
         $em = $this->getDoctrine()->getManager();
        $c=new Candidat();
        $c=$em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($this->getUser());
        
       
   $element= new NivLanguCandidat();
        $element=$em->getRepository("UtilisateurBundle:NivLanguCandidat")->find($id);
$router = $this->container->get('router');
     
if($element->getIdCandidat()==$c){
            try{
                $em = $this->getDoctrine()->getManager();$em->remove($element);
           $em->flush();
          
            $this->get('session')->getFlashBag()->add('msgsup', 'enregistré');
           
            }catch(\Exception $e){
             $this->get('session')->getFlashBag()->add('msgnonsup', $e);   
            
            }}
            else
            {return $this->redirect($router->generate('annonce_403'), 307);}
          return $this->redirect($router->generate('candidat_addlangue'), 307);
    }
    
}

