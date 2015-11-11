<?php

/* CandidatBundle:Default:index.html.twig */
class __TwigTemplate_23d51a4f512b41aea324a5746e6fcec93fb7137d17f3658dbfb0c7ce00a79f31 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <br><br>

     <div class=\"content\">
      <!-- Start: SERVICE LIST -->
        <div class=\"container\">
          <div class=\"page-header\">
              
             
              <h2><small><font color=\"black\"><font size=+2><u>Espace Candidat</u></font></font></small></h2>
          </div>
                
          <div class=\"span3\">";
        // line 15
        $this->env->loadTemplate("CandidatBundle:Modules:menucandidat.html.twig")->display($context);
        echo "</div>
           <div class=\"row-fluid\">
               <div class=\"span9\">
          BINEVENU(E) ";
        // line 18
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username")), "html", null, true);
        echo " DANS VOTRE ESPACE!
           </div>
          </div>
        </div></div>
      <!-- End: SERVICE LIST -->
    </div>
     ";
    }

    public function getTemplateName()
    {
        return "CandidatBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  44 => 15,  31 => 4,  28 => 3,);
    }
}
