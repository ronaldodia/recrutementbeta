<?php

/* AdminBundle:Pages:creerentreprise.html.twig */
class __TwigTemplate_ed2ec3fdf27db364ca90a244277d0df2b3559427bea9f281c42c79bf65149bb7 extends Twig_Template
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
              
             
              <h2><small><font color=\"black\"><font size=+2><u>Espace Admin</u></font></font></small></h2>
          </div>
                
          <div class=\"span3\">";
        // line 17
        $this->env->loadTemplate("AdminBundle:Modules:menuadmin.html.twig")->display($context);
        echo "</div>
           <div class=\"row-fluid\">
               <div class=\"span9\">
                   <center><h1><small> Ajouter une entreprise </small></h1></center>
                   
                       <br> 
          ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 24
            echo "              <div class=\"form-row\"><font color=\"green\">entreprise ajoutée</font></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 27
            echo "              <div class=\"form-row\"><font color=\"red\">Erreur ajout, cette entreprise existe! </font></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                   <div>
                       <form method=\"POST\" action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("admin_addentreprise");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["addcompanyform"]) ? $context["addcompanyform"] : null), 'enctype');
        echo " class=\"form-signin-signup\">
";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["addcompanyform"]) ? $context["addcompanyform"] : null), 'widget');
        echo " 
                   <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
    </form>
</di>
           </div>
          </div>
        </div></div>
      <!-- End: SERVICE LIST -->
    </div>
     ";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Pages:creerentreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 31,  79 => 30,  76 => 29,  69 => 27,  64 => 26,  57 => 24,  53 => 23,  44 => 17,  31 => 6,  28 => 5,);
    }
}
