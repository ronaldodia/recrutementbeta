<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
class DefaultController extends Controller
{
    public function indexAction()
    {
        if (false === $this->get('security.context')->isGranted('ROLE_ADMIN')) {
           
        throw new AccessDeniedException();
    }
        return $this->render('AdminBundle:Default:index.html.twig');
    } 
        
        
        
}
