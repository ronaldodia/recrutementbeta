<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_5d8ff8710b61ac1a0a8bcddf00299ef1343d19c5473a56235349ee33e65d033b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <br><br>

     <div class=\"content\">
      <!-- Start: SERVICE LIST -->
        <div class=\"container\">
         
          
           <div class=\"row-fluid\">
              
          <div class=\"span9\" class=\"icon-align-left\">
              <br> <br>
  

";
        // line 19
        echo "
<p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
<a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("annonce_homepage");
        echo "\" class=\"btn btn-primary\">ALLEZ A ACCUEIL</a> Ou à <a href=\"";
        echo $this->env->getExtension('routing')->getPath("utilisateur_redirection");
        echo "\" class=\"btn btn-primary\">Votre Espace</a>


    ";
        // line 24
        if ((!twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session")))) {
            // line 25
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token"), "providerKey")) . ".target_path")), "method");
            // line 26
            echo "        ";
            if ((!twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : null)))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 27
            echo "    ";
        }
        // line 28
        echo "    

           </div>
          </div>
        </div>
      <!-- End: SERVICE LIST -->
  
     ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  75 => 27,  66 => 26,  63 => 25,  61 => 24,  53 => 21,  49 => 20,  46 => 19,  31 => 5,  28 => 4,);
    }
}
