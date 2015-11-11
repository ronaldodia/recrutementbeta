<?php

namespace Candidat\CandidatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateur\UtilisateurBundle\Entity\Experience;
use Utilisateur\UtilisateurBundle\Entity\Candidat;
use Utilisateur\UtilisateurBundle\Form\CandidatExperienceNiveauType;
use Utilisateur\UtilisateurBundle\Form\ExperienceType;
use Utilisateur\UtilisateurBundle\Entity\CandidatExperienceNiveau;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
class ExperienceController extends Controller {

    public function addexperienceAction() {
    if (false === $this->get('security.context')->isGranted('ROLE_USER')||$this->get('security.context')->isGranted('ROLE_ADMIN')||$this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
    
        $em=$this->getDoctrine()->getManager();
        $c=new Candidat();
        $c=$em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($this->getUser());
         if(!$c){
             $this->get('session')->getFlashBag()->add('msgformation', 'formation');
          
        $router = $this->container->get('router');
         return $this->redirect($router->generate('candidat_afficherexperience'), 307);
             }
       $experience=new Experience();
$nivexperience=new CandidatExperienceNiveau();


$nivexperience->setIdExperience($experience);
$nivexperience->setIdCandidat($c);
$experience->getCandidatNE()->add($nivexperience);

         $form = $this->createForm(new ExperienceType(),$experience);
         
   
        
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
    return $this->render('CandidatBundle:Pages:addexperience.html.twig', array(
                    'form' => $form->createView()));
}


public function showexperienceAction(){
    if (false === $this->get('security.context')->isGranted('ROLE_USER')||$this->get('security.context')->isGranted('ROLE_ADMIN')||$this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
    
     $em=$this->getDoctrine()->getManager();
    $c=$em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($this->getUser());
     $candidatexperience=$em->getRepository("UtilisateurBundle:CandidatExperienceNiveau")->findByIdCandidat($c);
   
    return $this->render('CandidatBundle:Pages:afficherexperience.html.twig',array('candidat'=>$candidatexperience));
    
}




 public function editexperienceAction(Request $request,$id) {
   if (false === $this->get('security.context')->isGranted('ROLE_USER')||$this->get('security.context')->isGranted('ROLE_ADMIN')||$this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
    
        $em=$this->getDoctrine()->getManager();
        $c=new Candidat();
        $c=$em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($this->getUser());
        
       $experience=new Experience();
$nivexperience=new CandidatExperienceNiveau();
 $router = $this->container->get('router');
$experience=$em->getRepository("UtilisateurBundle:Experience")->find($id);
$nivexperience=$em->getRepository("UtilisateurBundle:CandidatExperienceNiveau")->findOneByIdExperience($experience);
if(!$nivexperience){
          throw $this->createNotFoundException(
            'Aucune Expérience trouvé pour cet id : '.$id
        );
         }
         if($nivexperience->getIdCandidat()!=$c){
            return new RedirectResponse($router->generate('annonce_403'), 307);}
$nivexperience->setIdCandidat($c);
$experience->getCandidatNE()->add($nivexperience);

      
$form = $this->createForm(new ExperienceType(),$experience);
         
   
        
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
    return $this->render('CandidatBundle:Pages:editexperience.html.twig', array('id'=>$id,
                    'form' => $form->createView()));
}






public function deleteexperienceAction($id) {
    
     if (false === $this->get('security.context')->isGranted('ROLE_USER')||$this->get('security.context')->isGranted('ROLE_ADMIN')||$this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
    
     $router = $this->container->get('router');
        $em=$this->getDoctrine()->getManager();
        $c=new Candidat();
        $c=$em->getRepository("UtilisateurBundle:Candidat")->findOneByUtilisateur($this->getUser());
        
       $experience=new Experience();
$nivexperience=new CandidatExperienceNiveau();

$experience=$em->getRepository("UtilisateurBundle:Experience")->find($id);
$nivexperience=$em->getRepository("UtilisateurBundle:CandidatExperienceNiveau")->findOneByIdExperience($experience);

//$nivexperience->setIdCandidat($c);
//$experience->getCandidatNE()->add($nivexperience);

        
   if(!$nivexperience){
          throw $this->createNotFoundException(
            'Aucune Expérience trouvé pour cet id : '.$id
        );
         
         }
if($nivexperience->getIdCandidat()!=$c){
            return new $this->redirect($router->generate('annonce_403'), 307);}


            try {
                $em->remove($nivexperience);
                $em->flush();
                $this->get('session')->getFlashBag()->add('msgsup', 'enregistré');
            } catch (\Exception $e) {

                $this->get('session')->getFlashBag()->add('msgnonsup', $e);
            }
        
 $router = $this->container->get('router');


       return new $this->redirect($router->generate('candidat_afficherexperience'), 307);
    }

}