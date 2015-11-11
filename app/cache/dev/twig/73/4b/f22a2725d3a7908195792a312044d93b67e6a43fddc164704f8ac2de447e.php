<?php

/* ::base.html.twig */
class __TwigTemplate_734bf22a2725d3a7908195792a312044d93b67e6a43fddc164704f8ac2de447e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
         <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Beta | Première entreprise de recrutement en Mauritanie\">
    <meta name=\"author\" content=\"Alassane Dia\">
    <title>Beta</title>
    <!-- Bootstrap -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Bootstrap responsive -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome-ie7.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Bootbusiness theme -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/boot-business.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

    </head>
    <body>
        
       <header>
      <!-- Start: Navigation wrapper -->
      <div class=\"navbar navbar-fixed-top\">
        <div class=\"navbar-inner\">
          <div class=\"container\">
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("annonce_homepage");
        echo "\" class=\"brand brand-bootbus\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/beta2.jpg"), "html", null, true);
        echo "\" height=\"80\" width=\"80\"> </a>
            <!-- Below button used for responsive navigation -->
            <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class=\"nav-collapse collapse\">        
              <ul class=\"nav pull-right\">
                 <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("annonce_homepage");
        echo "\">Accueil</a></li>
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle active-link\" data-toggle=\"dropdown\">Espance<b class=\"caret\"></b></a>
                  <ul class=\"dropdown-menu\">
                    <li class=\"nav-header\">Candidat</li>
                 
                    <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("candidat_homepage");
        echo "\">Candidat</a></li>    
                    <li class=\"nav-header\">Recrtueurs</li>
                 
                    <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("entreprise_homepage");
        echo "\">Entreprise</a></li>                     
                    
                  </ul>                  
             
                ";
        // line 56
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 57
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion </a></li> 
                
";
        } else {
            // line 60
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
                <li><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Inscription </a></li>
               
                ";
        }
        // line 64
        echo "              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>
<p></p><br><br><br><br>


        ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo "                <p></p>
            ";
        // line 77
        $this->env->loadTemplate("::footer.html.twig")->display($context);
        // line 78
        echo "        </body>
        <script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/boot-business.js"), "html", null, true);
        echo "\"></script>

    
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Beta Conseil!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 75,  200 => 74,  195 => 6,  189 => 5,  180 => 82,  176 => 81,  172 => 80,  168 => 79,  165 => 78,  163 => 77,  160 => 76,  157 => 75,  155 => 74,  143 => 64,  137 => 61,  132 => 60,  125 => 57,  123 => 56,  116 => 52,  110 => 49,  101 => 43,  86 => 33,  73 => 23,  69 => 22,  64 => 20,  60 => 19,  55 => 17,  50 => 15,  46 => 14,  33 => 6,  29 => 5,  23 => 1,  105 => 43,  99 => 40,  93 => 37,  89 => 36,  80 => 30,  75 => 28,  71 => 27,  66 => 25,  62 => 24,  57 => 21,  51 => 19,  49 => 18,  35 => 7,  31 => 3,  28 => 2,);
    }
}
