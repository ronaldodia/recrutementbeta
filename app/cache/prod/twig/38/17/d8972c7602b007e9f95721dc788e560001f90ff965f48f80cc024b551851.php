<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_3817d8972c7602b007e9f95721dc788e560001f90ff965f48f80cc024b551851 extends Twig_Template
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
              
             
              <h2><small><font color=\"black\"><font size=+2><u>ELEMENT INTROUVABLE:</u></font></font></small></h2>
          </div>
                
        
           <div class=\"row-fluid\">
               <div class=\"span12\"><br><br><br><br><br>
         <font color=\"red\"><font size=+5>Ce que vous chercher n'exite pas!</font></font>
         
        !<br> <i> <font color=\"grey\"><font size=+3> Si l'erreur vient d'un mauvais fonctionnement du site, veuillez communiquer
             avec nous s'il vous plaît. Merci</font></font></i>
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           </div>
          </div>
        </div></div>
      <!-- End: SERVICE LIST -->
    </div>
     ";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
