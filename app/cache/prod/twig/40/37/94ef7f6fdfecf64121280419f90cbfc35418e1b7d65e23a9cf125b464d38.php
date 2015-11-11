<?php

/* AdminBundle:Modules:menuadmin.html.twig */
class __TwigTemplate_403794ef7f6fdfecf64121280419f90cbfc35418e1b7d65e23a9cf125b464d38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav>
  <ul class=\"nav nav-pills nav-stacked \">
    <li class=\"nav-header\">Profile</li>
    <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Afficher / Modifier</a></li>
    <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Modifier le mot de passe</a></li>
  <li class=\"nav-header\">Données des formulaires</li>
   <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("admin_showville");
        echo "\">Villes</a></li>
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_showdomainecompetence");
        echo "\">Dommaines de compétences</a></li>
   <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_showsecteur");
        echo "\">Secteur d'activité</a></li>
   <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_showmetier");
        echo "\">Metiers</a></li>
   <li class=\"nav-header\">Utilisateurs</li>
   <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_showutilisateur");
        echo "\">Gérer les utilisateurs</a></li>
   
   <li class=\"nav-header\">Annonces</li>
   <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("admin_showoffres");
        echo "\">Gérer les annonces</a></li>
      <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("entreprise_showallcvs");
        echo "\">Les CV</a></li>
         <li class=\"nav-header\">Entreprises</li>
   <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_showentreprise");
        echo "\">Gérer les entreprises</a></li>
    
      
  </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Modules:menuadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  56 => 15,  50 => 12,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  24 => 4,  19 => 1,  145 => 55,  136 => 52,  132 => 51,  128 => 50,  124 => 49,  120 => 48,  111 => 46,  103 => 43,  94 => 39,  86 => 34,  81 => 31,  76 => 29,  72 => 27,  69 => 26,  65 => 18,  62 => 23,  59 => 22,  55 => 20,  52 => 19,  49 => 18,  47 => 17,  44 => 16,  42 => 15,  31 => 6,  28 => 5,);
    }
}
