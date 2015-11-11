<?php

/* AnnonceBundle:Pages:detailoffre.html.twig */
class __TwigTemplate_c4fa7fe950f459697e5653ba05dd89348c36a875c6a98ae7483ec3d5a4f99f0b extends Twig_Template
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
        echo " 
<br><br>
<div class=\"content\">    
      <div class=\"container\">
        <!-- Start: Product description -->
        <article class=\"article\">
          <div class=\"row bottom-space\">
            <div class=\"span12\">
              <div class=\"page-header\">
                  <center> <h1><small> Nom de  l'entreprise </small><font size=+3>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "lidOffre"), "idEntreprise"), "nomEntreprise"), "html", null, true);
        echo "</font></h1></center>
              </div>
            </div>
            <div class=\"span12 center-align\"></div>
          </div>
          <div class=\"row\">
            <div class=\"page-header\">
                <h1><small> Titre de l'offre </small></h1> <font size=+2>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "titreOffre"), "html", null, true);
        echo "</font>
            </div>
          </div>
        </article>
        <!-- End: Product description -->
        <div class=\"page-header\">
            <h1><small>Metiers: </small></h1>";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "idMetier"));
        foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
            echo " <ul ><li> <font size=+2>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metier"]) ? $context["metier"] : null), "titreMetier"), "html", null, true);
            echo "</font></li></ul> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>
        <div class=\"page-header\">
          <h1><small> Description du poste:</small></h1><font size=+2>";
        // line 29
        echo $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "descriptionPoste");
        echo "</font>
        </div>
        <div class=\"page-header\">
          <h1><small> Description du profile recherché: </small></h1><font size=+2>";
        // line 32
        echo $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "descriptionProfileRecherche");
        echo "</font>
        </div>
        <div class=\"page-header\">
          <h1><small> Exigences: </small>";
        // line 35
        echo $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "exigences");
        echo "</h1>
        </div>
        <div class=\"page-header\">
          <h1><small> Pièces à déposer: </small></h1><font size=+2>";
        // line 38
        echo $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "piecesADeposer");
        echo "</font>
        </div>
        <div class=\"page-header\">
            <h1><small> Date limite: </small> :<font size=+2>";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "dateLimiteOffre"), "d/m/Y \\à H:i"), "html", null, true);
        echo "</font></h1>
        </div>
        <div class=\"page-header\">
            <h1><small> Date de publication: </small> <font size=+2>";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "dateAjoutOffre"), "d/m/Y \\à H:i"), "html", null, true);
        echo "</font></h1>
        </div>
         <span ><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidat_postuler", array("id" => $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "idOffreLigneOffre"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Postuler</a>
                           
      </div>
    </div>
    </div>
   
    ";
    }

    public function getTemplateName()
    {
        return "AnnonceBundle:Pages:detailoffre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 46,  106 => 44,  100 => 41,  94 => 38,  88 => 35,  82 => 32,  76 => 29,  72 => 27,  61 => 26,  52 => 20,  42 => 13,  31 => 4,  28 => 3,);
    }
}
