<?php

namespace Annonces\AnnoncesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateur\UtilisateurBundle\Entity\TypeOffre;
use Utilisateur\UtilisateurBundle\Form\CategorieOffreType;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DefaultController extends Controller {

    public function indexAction(Request $request, $typeoffre = 'tout') {
        $router = $this->container->get('router');
        $form = $this->createForm(new CategorieOffreType());


        $em = $this->getDoctrine()->getRepository("Utilisateur\UtilisateurBundle\Entity\Offre");
        $type = new TypeOffre();
        $type = $this->getDoctrine()->getRepository("Utilisateur\UtilisateurBundle\Entity\TypeOffre")->findOneByNomTypeOffre($typeoffre);

        if ($typeoffre != "tout"&&$type) {
            $offret = $em->findByValideTypeOffre($type->getNomTypeOffre());
            if (!$offret)
                $this->get('session')->getFlashBag()->add('msgoffre', 'enregistré');
        }else {
            $offret = $em->getOffresEncour(new \DateTime());
           
            if (!$offret)
                $this->get('session')->getFlashBag()->add('msgoffre', 'enregistré');
        }
        $form->handleRequest($request);
        if ($form->isValid()) {

            $offretype = $form->getData();

            return $this->redirect($router->generate('annonce_homepage', array('typeoffre' => $offretype)), 302);
        }

 
    $offre = $this->get('knp_paginator')->paginate($offret,$this->get('request')->query->get('page', 1),12);




        return $this->render('AnnonceBundle:Default:index.html.twig', array('offres' => $offre, 'form' => $form->createView()));
    }

    public function pasdroitAction() {
        return $this->render('AnnonceBundle:Default:403.html.twig');
    }

    
    
    
    
    
    
    
       public function showcompanyAction($id) {




        $em = $this->getDoctrine()->getRepository("Utilisateur\UtilisateurBundle\Entity\Entreprise");
        $entreprise = $em->findOneByIdEntreprise($id);
        if (!$entreprise) {
            throw $this->createNotFoundException('n\'existe pas ');
        }

        return $this->render('AnnonceBundle:Pages:informationentreprise.html.twig', array('entreprise' => $entreprise, 'id' => $id));
    }
    
    
    
}
