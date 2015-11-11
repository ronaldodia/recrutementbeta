<?php

/* CandidatBundle:Modules:menucandidat.html.twig */
class __TwigTemplate_7745c004378f847677aa538a13b033c6f3aa79ea09fa475b01d936793835957c extends Twig_Template
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
   <li class=\"nav-header\">Cv</li>
   <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("candidat_etatcivile");
        echo "\">Etat civile</a></li>
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("candidat_showformation");
        echo "\">Mise à jour formation</a></li>
   <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("candidat_afficherexperience");
        echo "\">Mise à jourExperience</a></li>
   <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("candidat_affichercompetence");
        echo "\">Mise à jour Compétences </a></li>
   <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("candidat_addlangue");
        echo "\">Mise à jour langue</a></li>
   <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("candidat_offrepostulees");
        echo "\">Offre Postulées</a></li>
      <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("candidat_showcv");
        echo "\">Aperçu du CV / Télécharger (pdf)</a></li>
      <li><a href=\"#\">Rechercher un emploi</a></li>
      <li><a href=\"#\">Déconnexion</a></li>
  </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "CandidatBundle:Modules:menucandidat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  24 => 4,  19 => 1,  50 => 18,  44 => 15,  31 => 4,  28 => 5,);
    }
}
