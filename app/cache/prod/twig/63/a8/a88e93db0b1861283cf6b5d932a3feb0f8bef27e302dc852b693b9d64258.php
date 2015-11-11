<?php

/* AdminBundle:Pages:showentreprise.html.twig */
class __TwigTemplate_63a8a88e93db0b1861283cf6b5d932a3feb0f8bef27e302dc852b693b9d64258 extends Twig_Template
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
                            <h2><small><font color=\"black\"><font size=+2><u>Espace Admin     </u></font></font></small></h2>
          </div>
                
          <div class=\"span3\">";
        // line 15
        $this->env->loadTemplate("AdminBundle:Modules:menuadmin.html.twig")->display($context);
        echo "</div>
           <div class=\"row-fluid\">
              
          <div class=\"span9\" class=\"left\">BINEVENU(E) ";
        // line 18
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username")), "html", null, true);
        echo " DANS VOTRE ESPACE!
              <br> <br>
      
          
           
    <div class=\"btn btn-navbar\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_addentreprise");
        echo "\" >Ajouter une entreprise</a></div><br>
    <br>
         <table class=\"row-fluid\" border=\"2\">
             <tr class=\"row btn-primary\"><td class=\"col-md-6\">Logo</td><td class=\"col-md-6\">Nom de l'entreprise</td><td class=\"col-md-6\">Utilisateur</td><td>Actions</td></tr>
                  
";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entreprises"]) ? $context["entreprises"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 29
            echo "                  <td colspan=\"5\"><hr class=\"btn-primary\"></td>
                  <tr class=\"row\">
                     <td class=\"col-md-6\" ><img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("logos/" . $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "logo"))), "html", null, true);
            echo "\" width=\"45\" height=\"30\"></td>
                     <td class=\"col-md-6\" ><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_showcompany", array("id" => $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "idEntreprise"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "nomEntreprise"), "html", null, true);
            echo "</a></td>
                     <td class=\"col-md-6\" >";
            // line 33
            if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "utilisateur", array(), "any", false, true), "username", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "utilisateur"), "username"), "html", null, true);
                echo " [ ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "utilisateur"), "email"), "html", null, true);
                echo " ]";
            } else {
                echo "<font color=\"grey\"> Non assigné</font>";
            }
            echo "</td>
                      
                        <td class=\"col-md-6\"><div align=\"center\"><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_editcompany", array("id" => $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "idEntreprise"))), "html", null, true);
            echo "\"> <span class=\"btn\">Modifier</span></a></div></td>
            
                  </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "              </table>
          
          
          
          </div>
           </div></div></div>
     

     ";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Pages:showentreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 39,  94 => 35,  82 => 33,  76 => 32,  72 => 31,  68 => 29,  64 => 28,  56 => 23,  48 => 18,  42 => 15,  31 => 6,  28 => 5,);
    }
}
