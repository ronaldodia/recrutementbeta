<?php

/* EntrepriseBundle:Pages:showoffres.html.twig */
class __TwigTemplate_54a048d9e54d3f297130316bc986be16172ee567c2ed63ac388892b9ae482f41 extends Twig_Template
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
                            <h2><small><font color=\"black\"><font size=+2><u>Espace Entreprise     </u></font></font></small></h2>
          </div>
                
          <div class=\"span3\">";
        // line 15
        $this->env->loadTemplate("EntrepriseBundle:Modules:menuentreprise.html.twig")->display($context);
        echo "</div>
           <div class=\"row-fluid\">
              
          <div class=\"span9\" class=\"left\">BINEVENU(E) ";
        // line 18
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username")), "html", null, true);
        echo " DANS VOTRE ESPACE!
              <br> <br>
            
          
           
    <div class=\"btn btn-navbar\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("entreprise_addoffre");
        echo "\" >Ajouter une offre</a></div><br>
    <br>
         <table class=\"row-fluid\" border=\"2\">
             <tr class=\"row btn-primary\"><td class=\"col-md-6\">Type de l'offre </td><td class=\"col-md-6\"> Titre de l'offre</td><td class=\"col-md-6\">Date d'ajout</td><td class=\"col-md-6\">Date limite</td><td class=\"col-md-6\" colspan=\"3\">Actions</td></tr>
                  
";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 29
            echo "                  <td colspan=\"8\"><hr class=\"btn-primary\"></td>
                  <tr class=\"row\">
              <td class=\"col-md-6\" >";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "idTypeOffre"), "html", null, true);
            echo "</td>
              <td class=\"col-md-6\">";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "ligneOffre"));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                echo " <ul><li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_detailsoffre", array("id" => $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idOffreLigneOffre"))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "titreOffre"), "html", null, true);
                echo "</a></li></ul>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td> </td>
              <td class=\"col-md-6\">";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "ligneOffre"));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                echo " <ul><li>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "dateAjoutOffre"), "d / m / Y H:m"), "html", null, true);
                echo "</li></ul>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td> </td>
                  <td class=\"col-md-6\">";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "ligneOffre"));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                echo " <ul><li>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "dateLimiteOffre"), "d / m / Y H:m"), "html", null, true);
                echo "</li></ul>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td> </td>
                  <td class=\"col-md-6\">";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "ligneOffre"));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                echo " <div><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entreprise_editoffre", array("idoffre" => $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "lidoffre"), "idligneoffre" => $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idOffreLigneOffre"))), "html", null, true);
                echo "\" class=\"btn-primary\">Modifier</a></div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td> </td>
                  <td class=\"col-md-6\">";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "ligneOffre"));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                echo " <div><a href=\"\" class=\"btn-primary\">Supprimer</a></div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td> </td>
                  <td class=\"col-md-6\">";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "ligneOffre"));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                echo " <div><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entreprise_postulants", array("id" => $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idOffreLigneOffre"))), "html", null, true);
                echo "\" class=\"btn-primary\">Voir les postulants</a></div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td> </td>
                 
                  </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "              </table>
          
          
          
          </div>
           </div></div></div>
     

     ";
    }

    public function getTemplateName()
    {
        return "EntrepriseBundle:Pages:showoffres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 41,  141 => 37,  130 => 36,  117 => 35,  104 => 34,  91 => 33,  76 => 32,  72 => 31,  68 => 29,  64 => 28,  56 => 23,  48 => 18,  42 => 15,  31 => 6,  28 => 5,);
    }
}
