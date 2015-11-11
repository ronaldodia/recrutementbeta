<?php

/* EntrepriseBundle:Default:index.html.twig */
class __TwigTemplate_31ce4bbda81a14576b65a1e01682ad6a5a4e8c6c2bef46dbf7420c9ece9867bb extends Twig_Template
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <br><br>

     <div class=\"content\">
      <!-- Start: SERVICE LIST -->
        <div class=\"container\">
          <div class=\"page-header\">
                            <h2><small><font color=\"black\"><font size=+2><u>Espace Entreprise</u></font></font></small></h2>
          </div>
                
          <div class=\"span3\">";
        // line 15
        $this->env->loadTemplate("EntrepriseBundle:Modules:menuentreprise.html.twig")->display($context);
        echo "</div>
           <div class=\"row-fluid\">
              
          <div class=\"span9\" class=\"icon-align-left\">BINEVENU(E) DANS VOTRE ESPACE ENTREPRISE ";
        // line 18
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username")), "html", null, true);
        echo " !
              <br> <br>
               
          </div>
           </div>
          </div>
        </div>
      <!-- End: SERVICE LIST -->
  
     ";
    }

    public function getTemplateName()
    {
        return "EntrepriseBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  42 => 15,  31 => 6,  28 => 5,);
    }
}
