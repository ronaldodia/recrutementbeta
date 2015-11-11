<?php

/* CandidatBundle:Pages:addformation.html.twig */
class __TwigTemplate_13bd553d142b5e978392ad9690a8d264eabb4d5399e57be339b80ba3b91ab1b5 extends Twig_Template
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

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <br><br>

     <div class=\"content\">
      <!-- Start: SERVICE LIST -->
        <div class=\"container\">
          <div class=\"page-header\">
                            <h2><small><font color=\"black\"><font size=+2><u>Espace Candidat</u></font></font></small></h2>
          </div>
                
          <div class=\"span3\">";
        // line 18
        $this->env->loadTemplate("CandidatBundle:Modules:menucandidat.html.twig")->display($context);
        echo "</div>
           <div class=\"row-fluid\">
              
          <div class=\"span9\" class=\"icon-align-left\">BINEVENU(E) ";
        // line 21
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username")), "html", null, true);
        echo " DANS VOTRE ESPACE!
              <br> <br>
              ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 24
            echo "              <div class=\"form-row\"><font color=\"green\">Formation ajoutée</font></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 27
            echo "              <div class=\"form-row\"><font color=\"red\">Erreur d'ajout de formation, vérifiez que vous avez créé votre état civile</font></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                
              <form method=\"POST\" action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("candidat_addformation");
        echo "\" class=\"form-contact-us\" >
";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomFormation"), 'row');
        echo "
                      ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                      <button type=\"submit\"  class=\"btn-primary btn\">ajouter</button>
    </form>

           </div>
          </div>
        </div>
   
  
     ";
    }

    public function getTemplateName()
    {
        return "CandidatBundle:Pages:addformation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 32,  83 => 31,  79 => 30,  76 => 29,  69 => 27,  64 => 26,  57 => 24,  53 => 23,  48 => 21,  42 => 18,  31 => 9,  28 => 8,);
    }
}
