<?php

/* AnnonceBundle:Default:index.html.twig */
class __TwigTemplate_a00824271bbc28e67eef01d1538487e118d39a99507575a76f34ad09183fb200 extends Twig_Template
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
               <div class=\"slider\">
        <div class=\"container-fluid\">
     
      </div>
                   
              
              <div align=\"center\"><h2>Liste des offres</h2></div>  
             ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "msgpostule"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "              <div class=\"form-row\"><font color=\"green\">Offre postulée, vous pourrez retrouver les offres postulées  <a href=\"";
            echo $this->env->getExtension('routing')->getPath("candidat_offrepostulees");
            echo "\" target=\"_blank\" class=\"email\" > dans votre espace</a></font></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "msgnonpostule"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "              <div class=\"form-row\"><font color=\"red\">Vous avez déjà postulé à cette offre</font></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "          </div>
          <div class=\"row-fluid\">
            <ul class=\"thumbnails\">
            <div class=\"span12\">
             ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "msgoffre"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 28
            echo "              <div class=\"form-row\"><font color=\"green\">Pas d'offre pour ce type d'offres</font></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    <br>
                   ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            echo " 
                    <li >
                        <table class=\"span3\"><tr><td>
                                    <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("logos/" . $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "idEntreprise"), "logo"))), "html", null, true);
            echo "\" height=\"65\" width=\"80\"> <font color=\"blue\"><font size=\"+2\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_showcompany", array("id" => $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "idEntreprise"), "idEntreprise"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "idEntreprise"), "nomEntreprise"), "html", null, true);
            echo "</a></font></font></h>
                  <div class=\"caption\">
                      ";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["offre"]) ? $context["offre"] : null), "ligneOffre"));
            foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
                // line 37
                echo "                   <u> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "titreOffre"), "html", null, true);
                echo "</u>
                    <p>
                        <i>";
                // line 39
                echo twig_slice($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "descriptionProfileRecherche"), 0, 14);
                echo " ...</i>
                     </p>
                            <span ><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidat_postuler", array("id" => $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "idOffreLigneOffre"), "offreid" => $this->getAttribute($this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "lidOffre"), "lidOffre"))), "html", null, true);
                echo "\" class=\"btn btn-primary\">Postuler</a>
                                <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, ($this->env->getExtension('routing')->getPath("annonce_detailsoffre", array("id" => $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "idOffreLigneOffre"))) . ".html"), "html", null, true);
                echo "\" target=\"_blank\" > Voir les détails</a></span>
                    
                     <br> <b>Date limite: ";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "dateLimiteOffre"), "d-m-Y  H:m:s"), "html", null, true);
                echo "</b>
                               <hr>
                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "</td></tr></table>
                    </li>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    
                    
                    
                    
                    
                    
                    
                    
                    
            </ul>
         
          <div class=\"pagination pagination-centered\">
          
    ";
        // line 62
        echo $this->env->getExtension('knp_pagination')->render((isset($context["offres"]) ? $context["offres"] : null));
        echo "
</div>
      <!-- End: SERVICE LIST -->
    </div>
     ";
    }

    public function getTemplateName()
    {
        return "AnnonceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 62,  149 => 49,  141 => 46,  132 => 44,  127 => 42,  123 => 41,  118 => 39,  112 => 37,  108 => 36,  99 => 34,  91 => 31,  88 => 30,  81 => 28,  77 => 27,  71 => 23,  64 => 21,  59 => 20,  50 => 18,  46 => 17,  31 => 4,  28 => 3,);
    }
}
