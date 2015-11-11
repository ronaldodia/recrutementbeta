<?php

/* EntrepriseBundle:Pages:showallcvs.html.twig */
class __TwigTemplate_aaff23c3af54659f18b04a90c1d628482fa894a8b49fdc253ebeb3c380e2c2e1 extends Twig_Template
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
                            <h2><small><font color=\"black\"><font size=+2><u>Espace Enterprise /Admin    </u></font></font></small></h2>
          </div>
                
         <div class=\"span3\">";
        // line 15
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 16
            echo "
              ";
            // line 17
            if ($this->env->getExtension('security')->isGranted("ROLE_MANAGER")) {
                // line 18
                echo "                    ";
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 19
                    echo "                       ";
                    $this->env->loadTemplate("AdminBundle:Modules:menuadmin.html.twig")->display($context);
                    // line 20
                    echo "
                    ";
                } else {
                    // line 22
                    echo "                      ";
                    $this->env->loadTemplate("EntrepriseBundle:Modules:menuentreprise.html.twig")->display($context);
                    // line 23
                    echo "                    ";
                }
                // line 24
                echo "
                 ";
            } else {
                // line 26
                echo "                       ";
                $this->env->loadTemplate("CandidatBundle:Modules:menucandidat.html.twig")->display($context);
                // line 27
                echo "                        
                ";
            }
            // line 29
            echo "

         ";
        }
        // line 31
        echo "</div>
           <div class=\"row-fluid\">
              
          <div class=\"span9\" class=\"left\">BINEVENU(E) ";
        // line 34
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username")), "html", null, true);
        echo " DANS VOTRE ESPACE!
              <br> <br>
            
          
           
              <div><form action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("entreprise_showallcvs");
        echo "\" method=\"POST\" class=\"form-row\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "<button type=\"submit\" class=\"btn\">Trier</button></form></div><br>
         <table class=\"row-fluid\" border=\"2\">
             <tr class=\"row btn-primary\"><td class=\"col-md-6\">Nom et prénom</td><td class=\"col-md-6\"> Email</td><td class=\"col-md-6\">Civilité</td><td class=\"col-md-6\">Téléphone</td><td class=\"col-md-6\" >Niveau d'études</td><td class=\"col-md-6\">Disponibilité</td></tr>
                 
";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidats"]) ? $context["candidats"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            echo " 
                 
                  <tr class=\"row \">
                      <td class=\"col-md-6\" ><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("entreprise_showcv", array("id" => $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idCandidat"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "nomCandidat"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "prenom"), "html", null, true);
            echo "</a></td>
              
                 <td class=\"col-md-6\" >";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "utilisateur"), "email"), "html", null, true);
            echo "</td> 
                 <td class=\"col-md-6\" >";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "civlite"), "html", null, true);
            echo "</td>
                 <td class=\"col-md-6\" >";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "telephone"), "html", null, true);
            echo "</td> 
                 <td class=\"col-md-6\" >";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idNiveauEtudes"), "niveauEtudes"), "html", null, true);
            echo "</td> 
                  <td class=\"col-md-6\" >";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idStatutActuel"), "nomStatut"), "html", null, true);
            echo "</td> 
                  </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "              </table>
          
          
          
          </div>
           </div></div></div>
     

     ";
    }

    public function getTemplateName()
    {
        return "EntrepriseBundle:Pages:showallcvs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 55,  136 => 52,  132 => 51,  128 => 50,  124 => 49,  120 => 48,  111 => 46,  103 => 43,  94 => 39,  86 => 34,  81 => 31,  76 => 29,  72 => 27,  69 => 26,  65 => 24,  62 => 23,  59 => 22,  55 => 20,  52 => 19,  49 => 18,  47 => 17,  44 => 16,  42 => 15,  31 => 6,  28 => 5,);
    }
}
