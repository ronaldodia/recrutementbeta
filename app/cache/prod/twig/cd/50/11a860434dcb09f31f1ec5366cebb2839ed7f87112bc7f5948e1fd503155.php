<?php

/* CandidatBundle:Pages:addcandidat.html.twig */
class __TwigTemplate_cd5011a860434dcb09f31f1ec5366cebb2839ed7f87112bc7f5948e1fd503155 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "msgpasetatcivile"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 24
            echo "              <div class=\"form-row\"><font color=\"green\">Vous devriez créer votre CV avant de pouvoir postuler!</font></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "              ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 27
            echo "              <div class=\"form-row\"><font color=\"green\">Etat civile mis à jour, vous pouvez cliquer sur le bouton 'Etat civile à votre gauche</font></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 30
            echo "              <div class=\"form-row\"><font color=\"red\">Vous devriez modifier ce que vous avez ajouté, vous avez déjà un etat civile</font></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                  <form method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("candidat_add");
        echo "\" class=\"form-contact-us\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["addcandidatform"]) ? $context["addcandidatform"] : null), 'enctype');
        echo ">
";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["addcandidatform"]) ? $context["addcandidatform"] : null), 'widget');
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
        return "CandidatBundle:Pages:addcandidat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  88 => 32,  81 => 30,  76 => 29,  69 => 27,  64 => 26,  57 => 24,  53 => 23,  48 => 21,  42 => 18,  31 => 9,  28 => 8,);
    }
}
