<?php

namespace Utilisateur\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
class RedirectionController extends Controller
{
    public function indexAction()
    {
       $securityContext = $this->container->get('security.context');
    $router = $this->container->get('router');

    if ($securityContext->isGranted('ROLE_ADMIN')) {
        return $this->redirect($router->generate('admin_homepage'), 307);
    } 

    if ($securityContext->isGranted('ROLE_MANAGER')) {
        return $this->redirect($router->generate('entreprise_homepage'), 307);
    }
 
    if ($securityContext->isGranted('ROLE_USER')) {
        return $this->redirect($router->generate('candidat_homepage'), 307);
    }
    }
}
