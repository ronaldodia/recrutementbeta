<?php

namespace Candidat\CandidatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateur\UtilisateurBundle\Form\FormationType;
use Utilisateur\UtilisateurBundle\Entity\Candidat;
use Utilisateur\UtilisateurBundle\Entity\Utilisateur;
use Utilisateur\UtilisateurBundle\Entity\Formation;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
class FormationController extends Controller {

    public function addformationAction(Request $request) {

  if (false === $this->get('security.context')->isGranted('ROLE_USER')||$this->get('security.context')->isGranted('ROLE_ADMIN')||$this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
    

        $em = $this->getDoctrine()->getEntityManager();
        $candidat = new Candidat();


        $candidat = $em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($this->getUser());
if(!$candidat){
             $this->get('session')->getFlashBag()->add('msgformation', 'formation');
          
        $router = $this->container->get('router');
         return $this->redirect($router->generate('candidat_showformation'), 307);
             }
        $candidat->getUtilisateur();
        $formation = new Formation();
        
        $formation->setIdCandidat($candidat);
        $em->persist($candidat);
        $form = $this->createForm(new FormationType(), $formation);

        $form->handleRequest($request);
        if ($form->isValid()) {

            $add = $form->getData();
            try {
                $em->persist($add);
                $em->flush();
                $this->get('session')->getFlashBag()->add('notice', 'enregistré');
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('notice', 'enregistré');
                $this->get('session')->getFlashBag()->add('erreur', $e);
            }
        }



        return $this->render('CandidatBundle:Pages:addformation.html.twig', array(
                    'form' => $form->createView()));
    }

    public function showformationAction() {
      if (false === $this->get('security.context')->isGranted('ROLE_USER')||$this->get('security.context')->isGranted('ROLE_ADMIN')||$this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
    
        $em = $this->getDoctrine()->getManager();
        $c = $em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($this->getUser());
        $candidatformation = $em->getRepository("UtilisateurBundle:Formation")->findByIdCandidat($c);

        return $this->render('CandidatBundle:Pages:afficherformation.html.twig', array('candidat' => $candidatformation));
    }

    public function editformationAction(Request $request, $id) {

 if (false === $this->get('security.context')->isGranted('ROLE_USER')||$this->get('security.context')->isGranted('ROLE_ADMIN')||$this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
    

        $em = $this->getDoctrine()->getManager();
        $candidat = new Candidat();
  $formation = new Formation();

         $candidat = $em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($this->getUser());

       
      
      

     $formation=$this->getDoctrine()->getRepository("UtilisateurBundle:Formation")->find($id);
if(!$formation){
          throw $this->createNotFoundException(
            'Aucune formation trouvé pour cet id : '.$id
        );}
           
     
if($formation->getIdCandidat()!=$candidat){
           
         throw $this->createNotFoundException(
            'Aucune formation trouvé pour cet id : '.$id
        );
        }
        $form = $this->createForm(new FormationType(), $formation);

        $form->handleRequest($request);
        if ($form->isValid()) {

            $add = $form->getData();
            try {
                $em->persist($add);
                $em->flush();
                $this->get('session')->getFlashBag()->add('notice', 'enregistré');
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('notice', 'enregistré');
                $this->get('session')->getFlashBag()->add('erreur', $e);
            }
        }



        return $this->render('CandidatBundle:Pages:editformation.html.twig', array('id' => $id,
                    'form' => $form->createView()));
    }

    public function deleteformationAction( $id) {
        
      if (false === $this->get('security.context')->isGranted('ROLE_USER')||$this->get('security.context')->isGranted('ROLE_ADMIN')||$this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
    

        $router = $this->container->get('router');

        $em = $this->getDoctrine()->getManager();
        $c=new Candidat();
        $c=$em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($this->getUser());
       
        $formation=new Formation();

     $formation=$this->getDoctrine()->getRepository("UtilisateurBundle:Formation")->find($id);

     if(!$formation){
          throw $this->createNotFoundException(
            'Aucune formation trouvé pour cet id : '.$id
        );
         
         }
if($formation->getIdCandidat()!=$c){
            return $this->redirect($router->generate('annonce_403'), 307);}


            try {
                $em->remove($formation);
                $em->flush();
                $this->get('session')->getFlashBag()->add('msgsup', 'enregistré');
            } catch (\Exception $e) {

                $this->get('session')->getFlashBag()->add('msgnonsup', $e);
            }
        



       return  $this->redirect($router->generate('candidat_showformation'), 307);
    }

}