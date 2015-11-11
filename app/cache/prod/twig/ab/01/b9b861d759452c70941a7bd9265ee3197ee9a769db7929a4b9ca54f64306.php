<?php

/* EntrepriseBundle:Modules:menuentreprise.html.twig */
class __TwigTemplate_ab01b9b861d759452c70941a7bd9265ee3197ee9a769db7929a4b9ca54f64306 extends Twig_Template
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
   <li class=\"nav-header\">Mon Entreprise</li>
   <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("entreprise_informations");
        echo "\">Informations</a></li>
   <li class=\"nav-header\">Annonces</li>
   <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("entreprise_showoffres");
        echo "\">Gérer nos Annonces</a></li>
   <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("entreprise_showallcvs");
        echo "\">Les CV</a></li>
     

      <li><a href=\"#\">Déconnexion</a></li>
  </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "EntrepriseBundle:Modules:menuentreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  33 => 7,  24 => 4,  19 => 1,  48 => 18,  42 => 10,  31 => 6,  28 => 5,);
    }
}
