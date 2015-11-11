<?php

namespace Entreprise\EntrepriseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateur\UtilisateurBundle\Entity\Entreprise;
use Utilisateur\UtilisateurBundle\Form\EntrepriseType2;
use Utilisateur\UtilisateurBundle\Entity\Offre;
use Utilisateur\UtilisateurBundle\Entity\LigneOffre;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class InformationController extends Controller
{
    public function indexAction()
    {        
        if (false === $this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
          $router = $this->container->get('router');
     

        $em = $this->getDoctrine()->getRepository("Utilisateur\UtilisateurBundle\Entity\Entreprise");
        $entreprise = $em->findOneByUtilisateur($this->getUser());
        if (!$entreprise) {
            return $this->redirect($router->generate('fos_user_security_logout'), 307);
        }
        return $this->render('EntrepriseBundle:Pages:informationentreprise.html.twig', array('entreprise' => $entreprise));
        
      
    }
  public function editinformationAction(Request $request)
    {     
      
      if (false === $this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
      $entitemanager=$this->getDoctrine()->getManager();   
          $router = $this->container->get('router');
     

        $em = $this->getDoctrine()->getRepository("Utilisateur\UtilisateurBundle\Entity\Entreprise");
        $entreprise = $em->findOneByUtilisateur($this->getUser());
        if (!$entreprise) {
            return $this->redirect($router->generate('fos_user_security_logout'), 307);
        }
         
        $form = $this->createForm(new EntrepriseType2(),$entreprise );

        $form->handleRequest($request);
        if ($form->isValid()) {

       try{ $add = $form->getData();
      $entitemanager->persist($add);
           $entitemanager->flush();
           $this->get('session')->getFlashBag()->add('succes', 'enregistré'); 
        }catch(\Exception $e){
            $this->get('session')->getFlashBag()->add('erreur', e.$e); 
        }}



        return $this->render('EntrepriseBundle:Pages:editerinformation.html.twig', array(
                    'addcompanyform' => $form->createView()));
        
        
      
    }   
    
    
    
}
