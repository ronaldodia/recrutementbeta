<?php

/* AnnonceBundle:Default:403.html.twig */
class __TwigTemplate_2a56c3383d31a75997ed49d78f428a64eb4998588a48b416f431516658259e7c extends Twig_Template
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

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <br><br>

     <div class=\"content\">
      <!-- Start: SERVICE LIST -->
        <div class=\"container\">
          <div class=\"page-header\">
              
              <div class=\"span2\">ACCES INTERDIT</div>
            
          </div>
          <div class=\"row-fluid\">
            <ul class=\"thumbnails\">
            <div class=\"span12\">
          
       <font color=\"red\"><font size=+4> Vous n'avez pas le compte approprié pour accèder à cette page :p</font></font>
       <div class=\"text-exception\"><font color=\"green\"><font size=+2>Si vous voulez publier des annonces ou avez un problème, veuillez contacter l'administrateur du site. <br>
           </font></font></div>
                    
                    
                    
                    
                    
                    
                    
                    
            </ul>
         
         
        </div>
      <!-- End: SERVICE LIST -->
    </div>
     ";
    }

    public function getTemplateName()
    {
        return "AnnonceBundle:Default:403.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  28 => 7,);
    }
}
