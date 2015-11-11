<?php

namespace Entreprise\EntrepriseBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateur\UtilisateurBundle\Entity\Entreprise;
use Utilisateur\UtilisateurBundle\Entity\Offre;
use Utilisateur\UtilisateurBundle\Entity\LigneOffre;
use Utilisateur\UtilisateurBundle\Entity\Candidat;
use Utilisateur\UtilisateurBundle\Entity\Formation;
use Utilisateur\UtilisateurBundle\Entity\andidatExperienceNiveau;
use Utilisateur\UtilisateurBundle\Entity\NivLanguCandidat;
use Utilisateur\UtilisateurBundle\Form\LigneOffreType;
use Utilisateur\UtilisateurBundle\Form\FiltreCvType;
use Utilisateur\UtilisateurBundle\Form\OffreType2;
use Symfony\Component\HttpFoundation\Request;

class OffresController extends Controller
{
    
    
    public function indexAction(Request $request) {
        
        if (false === $this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
$em = $this->getDoctrine()->getManager();

$offre=new Offre();
$ligne=new LigneOffre();

$entreprise=$em->getRepository("UtilisateurBundle:Entreprise")->findOneByUtilisateur($this->getUser());

$ligne->setLidOffre($offre);
$offre->getLigneOffre()->add($ligne);
$offre->setIdEntreprise($entreprise);
   $em->persist($offre);     
        $form = $this->createForm(new OffreType2(),$offre);

  $form->handleRequest($request);
        
        if ($form->isValid()) {


        try{
             $add = $form->getData();
                        
           $em->persist($add);
           $em->flush();
            $this->get('session')->getFlashBag()->add('succes', 'enregistré');
           }catch( \Exception $e){
               $this->get('session')->getFlashBag()->add('erreur', 'enregistré'); 
           }
        }



        return $this->render('EntrepriseBundle:Pages:addoffres.html.twig', array(
                    'addoffre' => $form->createView()));
    }
    
    
    
    
    
    
        public function mesannoncesAction() {
            
            
            if (false === $this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
$em = $this->getDoctrine()->getManager();

$offre=new Offre();


$entreprise=$em->getRepository("UtilisateurBundle:Entreprise")->findOneByUtilisateur($this->getUser());

$offre=$em->getRepository("UtilisateurBundle:Offre")->findByIdEntreprise($entreprise);

        return $this->render('EntrepriseBundle:Pages:showoffres.html.twig', array(
                   'offres'=>$offre));
    }
    
    
    
        
    public function postulantsAction($id){
        
      if (false === $this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
       
        $em = $this->getDoctrine()->getRepository("Utilisateur\UtilisateurBundle\Entity\LigneOffre");
        $ligneoffre = $em->findOneByIdOffreLigneOffre($id);
      
        return $this->render('EntrepriseBundle:Pages:showpostulants.html.twig', array('ligne' => $ligneoffre));   
    }
    
    
    
    
    
    
     public function showcvAction($id){
         
         
         if (false === $this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
     $em=$this->getDoctrine()->getManager();
    $c=$em->getRepository("UtilisateurBundle:Candidat")->find($id);
   
     $candidatformation=$em->getRepository("UtilisateurBundle:Formation")->findByIdCandidat($c);
   $candidatlangue=$em->getRepository("UtilisateurBundle:NivLanguCandidat")->findByIdCandidat($c);
   $candidatcompetence=$em->getRepository("UtilisateurBundle:Competence")->findByIdCandidat($c);
   $candidatexperience=$em->getRepository("UtilisateurBundle:CandidatExperienceNiveau")->findByIdCandidat($c);
  
    return $this->render('EntrepriseBundle:Pages:affichercv.html.twig',array('formation'=>$candidatformation,'langue'=>$candidatlangue,'competence'=>$candidatcompetence,
        'experience'=>$candidatexperience,'candidat'=>$c));
    
}





  
    
    public function editoffreAction(Request $request, $idoffre) {
          if (false === $this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
$em = $this->getDoctrine()->getManager();

$offre=new Offre();
$offre=$em->getRepository("UtilisateurBundle:Offre")->findOneByLidOffre($idoffre);

$originalLignes = new ArrayCollection();

    // Crée un tableau contenant les objets Tag courants de la
    // base de données
    foreach ($offre->getLigneOffre() as $tag) {
        $originalLignes->add($tag);
    }
/*
$ligne->setLidOffre($offre);
$offre->getLigneOffre()->add($ligne);
$offre->setActivation(false);
   $em->persist($offre);   */  
    
        $form = $this->createForm(new OffreType2(),$offre);

        $form->handleRequest($request);
        
        if ($form->isValid()) {

/*
        
             $add = $form->getData();
                        
           $em->persist($add);
           $em->flush();
            $this->get('session')->getFlashBag()->add('success','enregistré'); }
            catch(\Exception $e){
                 $this->get('session')->getFlashBag()->add('error',$e); 
            }*/
            try{
             // supprime la relation entre le tag et la « Task »
            foreach ($originalLignes as $tag) {
                if ($offre->getLigneOffre()->contains($tag) == false) {
                // supprime la « Task » du Tag
                    $tag->setOffre(null);

                    // si c'était une relation ManyToOne, vous pourriez supprimer la
                    // relation comme ceci
                    // $tag->setTask(null);

                    $em->persist($tag);

                    // si vous souhaitiez supprimer totalement le Tag, vous pourriez
                    // aussi faire comme cela
                    // $em->remove($tag);
                }
            }
            $em->flush();
            $this->get('session')->getFlashBag()->add('success','enregistré'); }
            catch(\Exception $e){
                 $this->get('session')->getFlashBag()->add('error',$e); 
            }
        }



        return $this->render('EntrepriseBundle:Pages:editoffres.html.twig', array(
                    'addoffre' => $form->createView(),'idoffre'=>$idoffre));
    }
   
  

    
    
    
     public function showallcvsAction(Request $request){
        
      if (false === $this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }  $em = $this->getDoctrine()->getRepository("Utilisateur\UtilisateurBundle\Entity\Candidat");
        $candidat = $em->findAll();
       $form = $this->createForm(new FiltreCvType());
$form->handleRequest($request);
        
        if ($form->isValid()) {
            
        $em = $this->getDoctrine()->getRepository("Utilisateur\UtilisateurBundle\Entity\Candidat");
        $candidat = $em->findAllcv($form['tri']->getData());
        }
        return $this->render('EntrepriseBundle:Pages:showallcvs.html.twig', array('candidats' => $candidat,'form'=>$form->createView()));   
    }
}



