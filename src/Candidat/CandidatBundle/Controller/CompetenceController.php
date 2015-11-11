<?php

namespace Candidat\CandidatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Utilisateur\UtilisateurBundle\Entity\Candidat;
use Utilisateur\UtilisateurBundle\Entity\Competence;
use Utilisateur\UtilisateurBundle\Form\CompetenceType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
class CompetenceController extends Controller {

    public function addcompetenceAction() {
        
       if (false === $this->get('security.context')->isGranted('ROLE_USER')||$this->get('security.context')->isGranted('ROLE_ADMIN')||$this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
        $em=$this->getDoctrine()->getManager();
        /*$c=new Candidat();
        $c=$em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($this->getUser());
        
       $experience=new Experience();
$nivexperience=new CandidatExperienceNiveau();


$nivexperience->setIdExperience($experience);
$nivexperience->setIdCandidat($c);
$experience->getCandidatNE()->add($nivexperience);*/
        $c=new Candidat();
 $c=$em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($this->getUser());
 if(!$c){
             $this->get('session')->getFlashBag()->add('msgformation', 'formation');
          
        $router = $this->container->get('router');
         return $this->redirect($router->generate('candidat_affichercompetence'), 307);
             }
 $competence=new Competence();
 $competence->setIdCandidat($c);
         $form = $this->createForm(new CompetenceType(),$competence);
         
   
        
          $form->bind($this->getRequest());
        
 if ($form->isValid()) {

        
             try{$add = $form->getData();
                        
           $em->persist($add);
           $em->flush();
           $this->get('session')->getFlashBag()->add('notice', 'enregistré');
           }catch(\Exception $e){
                $this->get('session')->getFlashBag()->add('erreur', $e);   
           }
        }
    return $this->render('CandidatBundle:Pages:addcompetence.html.twig', array(
                    'form' => $form->createView()));
}


public function showcompetenceAction(){
   if (false === $this->get('security.context')->isGranted('ROLE_USER')||$this->get('security.context')->isGranted('ROLE_ADMIN')||$this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
     $em=$this->getDoctrine()->getManager();
    $c=$em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($this->getUser());
     $candidatcompetence=$em->getRepository("UtilisateurBundle:Competence")->findByIdCandidat($c);
   
    return $this->render('CandidatBundle:Pages:affichercompetence.html.twig',array('candidat'=>$candidatcompetence));
    
}






    public function editcompetenceAction(Request $request,$id) {
  if (false === $this->get('security.context')->isGranted('ROLE_USER')||$this->get('security.context')->isGranted('ROLE_ADMIN')||$this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
        $em=$this->getDoctrine()->getManager();
        $router = $this->container->get('router');
        $c=new Candidat();
        $competence=new Competence();
 $c=$em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($this->getUser());

  $competence=$em->getRepository("UtilisateurBundle:Competence")->find($id);
    if(!$competence){
          throw $this->createNotFoundException(
            'Aucune Competence trouvé pour cet id : '.$id
        );
    }
    if($competence->getIdCandidat()!=$c){
            return new RedirectResponse($router->generate('annonce_403'), 307);
           die();
            }

         $form = $this->createForm(new CompetenceType(),$competence);
         
   
        
          $form->handleRequest($request);
        
 if ($form->isValid()) {

        
             try{$add = $form->getData();
                        
           $em->persist($add);
           $em->flush();
           $this->get('session')->getFlashBag()->add('notice', 'enregistré');
           }catch(\Exception $e){
                $this->get('session')->getFlashBag()->add('erreur', $e);   
           }
        }
    return $this->render('CandidatBundle:Pages:editcompetence.html.twig', array('id'=>$id,
                    'form' => $form->createView()));
}





 public function deletecompetenceAction($id) {
   if (false === $this->get('security.context')->isGranted('ROLE_USER')||$this->get('security.context')->isGranted('ROLE_ADMIN')||$this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
        $em=$this->getDoctrine()->getManager();
             $router = $this->container->get('router');
        $c=new Candidat();
        $competence=new Competence();
 $c=$em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($this->getUser());

  $competence=$em->getRepository("UtilisateurBundle:Competence")->find($id);

 
   if(!$competence){
          throw $this->createNotFoundException(
            'Aucune Competence trouvé pour cet id : '.$id
        );
         
         }
if($competence->getIdCandidat()!=$c){
            return new RedirectResponse($router->generate('annonce_403'), 307);}


            try {
                $em->remove($competence);
                $em->flush();
                $this->get('session')->getFlashBag()->add('msgsup', 'enregistré');
            } catch (\Exception $e) {

                $this->get('session')->getFlashBag()->add('msgnonsup', $e);
            }
        



       return new RedirectResponse($router->generate('candidat_affichercompetence'), 307);
    }
    
 }