<?php

/* CandidatBundle:Pages:addlangue.html.twig */
class __TwigTemplate_c867ea4e520792d51cd6df727452b598f393de2c84f9b04bb500359b96c11c15 extends Twig_Template
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
                            <h2><small><font color=\"black\"><font size=+2><u>Espace Candidat     </u></font></font></small></h2>
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
            echo "              <div class=\"form-row\"><font color=\"green\">Langue ajoutée</font></div>
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
            echo "              <div class=\"form-row\"><font color=\"red\">Erreur d'ajout de langue, vérifiez que vous avez créé votre état civile</font></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "   ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "msgsup"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 30
            echo "              <div class=\"form-row\"><font color=\"green\">Langue supprimée</font></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "msgnonsup"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 33
            echo "              <div class=\"form-row\"><font color=\"red\">Erreur de suppression</font></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "               
                
              <form method=\"POST\" action=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("candidat_addlangue");
        echo "\" class=\"form-contact-us\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                      <button type=\"submit\"  class=\"btn-primary btn\">ajouter</button>
    </form>
 ";
        // line 40
        if ((!(null === (isset($context["candidat"]) ? $context["candidat"] : null)))) {
            // line 41
            echo "     
     ";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["candidat"]) ? $context["candidat"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 43
                echo "      
      <div class=\"row\" id=\"ff\">
            <div class=\"page-header\">
                Vous parlez :<font size=+2>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idLangue"), "langue"), "html", null, true);
                echo "</font>
                    | Niveau :<font size=+2>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idNiveauLangue"), "niveau"), "html", null, true);
                echo "</font>
            </div>
        <div><a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidat_editlangue", array("id" => $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idNivLangu"))), "html", null, true);
                echo "\">Modifier</a>
        <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidat_deletelangue", array("id" => $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idNivLangu"))), "html", null, true);
                echo "\">Supprimer</a></div>  </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                 
      ";
        }
        // line 54
        echo "           </div>
          </div>
        </div>
     
  
     ";
    }

    public function getTemplateName()
    {
        return "CandidatBundle:Pages:addlangue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 54,  151 => 52,  143 => 50,  139 => 49,  134 => 47,  130 => 46,  125 => 43,  121 => 42,  118 => 41,  116 => 40,  110 => 37,  104 => 36,  100 => 34,  93 => 33,  88 => 32,  81 => 30,  76 => 29,  69 => 27,  64 => 26,  57 => 24,  53 => 23,  48 => 21,  42 => 18,  31 => 9,  28 => 8,);
    }
}
