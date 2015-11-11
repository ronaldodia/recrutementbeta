<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateur\UtilisateurBundle\Form\EntrepriseType;
use Utilisateur\UtilisateurBundle\Entity\SecteurActivite;
use Utilisateur\UtilisateurBundle\Form\SecteurActiviteType;
use Utilisateur\UtilisateurBundle\Form\LigneOffreType;
use Utilisateur\UtilisateurBundle\Form\OffreType;
use Utilisateur\UtilisateurBundle\Entity\Offre;
use Utilisateur\UtilisateurBundle\Form\EntrepriseOffreType;
use Utilisateur\UtilisateurBundle\Entity\LigneOffre;
use Utilisateur\UtilisateurBundle\Entity\Entreprise;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class AdminController extends Controller {

//creation d'entreprise:
    public function addcompanyAction(Request $request) {
        if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedException();
    }


        $em = $this->getDoctrine()->getManager();
        $entreprise = new Entreprise();
        $form = $this->createForm(new EntrepriseType(), $entreprise);

        $form->handleRequest($request);
        if ($form->isValid()) {
            try {
                $add = $form->getData();

                $em->persist($add);
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'enregistré');
            } catch (\Exception $e) {

                $this->get('session')->getFlashBag()->add('error', $e);
            }
        }



        return $this->render('AdminBundle:Pages:creerentreprise.html.twig', array(
                    'addcompanyform' => $form->createView()));
    }

    //afficher les entreprises
    //creation d'entreprise:
    public function showcompaniesAction() {
if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedException();
    }

        $em = $this->getDoctrine()->getManager();
        $entreprises = new Entreprise();
        $entreprises = $em->getRepository("UtilisateurBundle:Entreprise")->findAll();

        return $this->render('AdminBundle:Pages:showentreprise.html.twig', array('entreprises' => $entreprises));
    }

    //company information 

    public function showcompanyAction($id) {

if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedException();
    }


        $em = $this->getDoctrine()->getRepository("Utilisateur\UtilisateurBundle\Entity\Entreprise");
        $entreprise = $em->findOneByIdEntreprise($id);
        if (!$entreprise) {
            throw $this->createNotFoundException('n\'existe pas ');
        }

        return $this->render('AdminBundle:Pages:informationentreprise.html.twig', array('entreprise' => $entreprise, 'id' => $id));
    }

    //edit company
    public function editcompanyAction(Request $request, $id) {
        if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }

        $entitemanager = $this->getDoctrine()->getManager();



        $em = $this->getDoctrine()->getRepository("Utilisateur\UtilisateurBundle\Entity\Entreprise");
        $entreprise = $em->findOneByIdEntreprise($id);


        $form = $this->createForm(new EntrepriseType(), $entreprise);

        $form->handleRequest($request);
        if ($form->isValid()) {

            try {
                $add = $form->getData();
                $entitemanager->persist($add);
                $entitemanager->flush();
                $this->get('session')->getFlashBag()->add('succes', 'enregistré');
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('erreur', e . $e);
            }
        }



        return $this->render('AdminBundle:Pages:editerinformation.html.twig', array(
                    'addcompanyform' => $form->createView(), 'id' => $id));
    }

    //ajout secteurActivite

    public function addoffreAction(Request $request) {
        if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();

        $offre = new Offre();
        $ligne = new LigneOffre();


        $ligne->setLidOffre($offre);
        $offre->getLigneOffre()->add($ligne);
        $offre->setActivation(false);
        $em->persist($offre);
        $form = $this->createForm(new OffreType(), $offre);

        $form->handleRequest($request);

        if ($form->isValid()) {

            try {

                $add = $form->getData();

                $em->persist($add);
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'enregistré');
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error', $e);
            }
        }



        return $this->render('AdminBundle:Pages:addoffre.html.twig', array(
                    'addoffre' => $form->createView()));
    }

    public function showoffresAction(Request $request) {
        if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();

        $offre = new Offre();
        $entrepriseid = new Entreprise();
        $form = $this->createForm(new EntrepriseOffreType());

        $offre = $em->getRepository("UtilisateurBundle:Offre")->findAllValide();
        $form->handleRequest($request);
        if ($form->isValid()) {

            $entreprisename = $form['nomEntreprise']->getData();

            $entrepriseid = $em->getRepository("UtilisateurBundle:Entreprise")->findOneByNomEntreprise($entreprisename . "");

            $offre = $em->getRepository("UtilisateurBundle:Offre")->findByValideNomEntreprise($entrepriseid->getIdEntreprise());

            if (!$entrepriseid) {
                throw $this->createNotFoundException('n\'existe pas ');
            }
        }

        return $this->render('AdminBundle:Pages:showoffres.html.twig', array(
                    'offres' => $offre, 'form' => $form->createView()));
    }

    //modifier une offre


    public function editoffreAction(Request $request, $idoffre) {
        if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();

        $offre = new Offre();
        $offre = $em->getRepository("UtilisateurBundle:Offre")->findOneByLidOffre($idoffre);

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
          $em->persist($offre); */

        $form = $this->createForm(new OffreType(), $offre);

        $form->handleRequest($request);

        if ($form->isValid()) {

            /*

              $add = $form->getData();

              $em->persist($add);
              $em->flush();
              $this->get('session')->getFlashBag()->add('success','enregistré'); }
              catch(\Exception $e){
              $this->get('session')->getFlashBag()->add('error',$e);
              } */
            try {
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
                $this->get('session')->getFlashBag()->add('success', 'enregistré');
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error', $e);
            }
        }



        return $this->render('AdminBundle:Pages:editoffre.html.twig', array(
                    'addoffre' => $form->createView(), 'idoffre' => $idoffre));
    }

    public function showoffresexpireAction(Request $request) {
        if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();

        $offre = new Offre();
        $entrepriseid = new Entreprise();
        $form = $this->createForm(new EntrepriseOffreType());

        $offre = $em->getRepository("UtilisateurBundle:Offre")->findAllExpire();
        $form->handleRequest($request);
        if ($form->isValid()) {

            $entreprisename = $form['nomEntreprise']->getData();

            $entrepriseid = $em->getRepository("UtilisateurBundle:Entreprise")->findOneByNomEntreprise($entreprisename . "");

            $offre = $em->getRepository("UtilisateurBundle:Offre")->findByExpireNomEntreprise($entrepriseid->getIdEntreprise());

            if (!$entrepriseid) {
                throw $this->createNotFoundException('n\'existe pas ');
            }
        }

        return $this->render('AdminBundle:Pages:showoffresexpires.html.twig', array(
                    'offres' => $offre, 'form' => $form->createView()));
    }

    
    
    
    
    public function activeroffreAction( $idoffre) {
        if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        $em = $this->getDoctrine()->getManager();
   $router = $this->container->get('router');
        $offre = new Offre();
        $offre = $em->getRepository("UtilisateurBundle:Offre")->findOneByLidOffre($idoffre);
if($offre)
{
    if($offre->getActivation())
    {$offre->setActivation(false);
     
    $em->persist($offre);
    $em->flush();
     $this->get('session')->getFlashBag()->add('desactive', 'enregistré');
    }
    else
    { $offre->setActivation(true);   
    $em->persist($offre);
    $em->flush();
    $this->get('session')->getFlashBag()->add('active', 'enregistré');}
}else
    $this->get('session')->getFlashBag()->add('nonactive', 'echec');
        

        return $this->redirect($router->generate('admin_showoffres'), 307);
    
    }
}
