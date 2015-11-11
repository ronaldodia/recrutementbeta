<?php

namespace Entreprise\EntrepriseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
class DefaultController extends Controller
{
    public function indexAction()
    {
        if (false === $this->get('security.context')->isGranted('ROLE_MANAGER')) {
           
        throw new AccessDeniedException();
    }
        return $this->render('EntrepriseBundle:Default:index.html.twig');
    }
}
