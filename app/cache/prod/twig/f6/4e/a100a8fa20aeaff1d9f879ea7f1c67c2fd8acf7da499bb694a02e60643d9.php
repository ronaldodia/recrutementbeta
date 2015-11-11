<?php

/* CandidatBundle:Pages:afficherexperience.html.twig */
class __TwigTemplate_f64ea100a8fa20aeaff1d9f879ea7f1c67c2fd8acf7da499bb694a02e60643d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "<style>
         * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(images/noise.jpg); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }</style>
    ";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "    <br><br>

     <div class=\"content\">
      <!-- Start: SERVICE LIST -->
        <div class=\"container\">
          <div class=\"page-header\">
                            <h2><small><font color=\"black\"><font size=+2><u>Espace Candidat     </u></font></font></small></h2>
          </div>
                
          <div class=\"span3\">";
        // line 33
        $this->env->loadTemplate("CandidatBundle:Modules:menucandidat.html.twig")->display($context);
        echo "</div>
           <div class=\"row-fluid\">
              
          <div class=\"span9\" class=\"icon-align-left\">BINEVENU(E) ";
        // line 36
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username")), "html", null, true);
        echo " DANS VOTRE ESPACE!
              <br> <br>
              <div class=\"btn btn-navbar\"><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("candidat_addexperience");
        echo "\" >Ajouter une experience</a></div>
              ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "msgsup"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 40
            echo "              <div class=\"form-row\"><font color=\"green\">Expérience supprimée</font></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "msgnonsup"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 43
            echo "              <div class=\"form-row\"><font color=\"red\">Erreur de suppression</font></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  
                         ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "msgformation"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 46
            echo "              <div class=\"form-row\"><font color=\"red\">vous devrez créer votre état civile</font></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo " ";
        if ((!(null === (isset($context["candidat"]) ? $context["candidat"] : null)))) {
            // line 49
            echo "     
     ";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["candidat"]) ? $context["candidat"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 51
                echo "      <hr>
      <div class=\"header\">
            <dl>
            <dd class=\"clear\"></dd>
            
            <dt><font color=\"green\"><font size=+1>";
                // line 56
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "titreExperience")), "html", null, true);
                echo "</font></font></dt>
            <dd>
                <h2>Du <font color=\"green\"><font size=+1>";
                // line 58
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "dateDebutExperience"), "d/m/Y"), "html", null, true);
                echo "</font></font> à <font color=\"green\"><font size=+1>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "dateFinExperience"), "d/m/Y    "), "html", null, true);
                echo "</font></font></h2>
                <p><strong><font color=\"green\"><font size=+1>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idNiveauExperience"), "niveauExperience"), "html", null, true);
                echo "</font></font> d'expérience comme </strong> <font color=\"green\"><font size=+1>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "fonction"), "html", null, true);
                echo "</font></font><br />
                    <strong><b>Pendant:</b></strong> <font color=\"green\"><font size=+1>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "nombreMois"), "html", null, true);
                echo "</font></font> mois à <font color=\"green\"><font size=+1>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "entrepriseExperience"), "html", null, true);
                echo "</font></font> (<font color=\"green\"><font size=+1>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "lieuExperience"), "html", null, true);
                echo "</font></font>)</p>
                 <strong><font color=\"green\"><font size=+1>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "descriptionExperience"), "html", null, true);
                echo "</font></font></strong>, les competences utilisées:<font color=\"green\"><font size=+1>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "competenceUtilisees"), "html", null, true);
                echo "<div><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidat_editexperience", array("id" => $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "idExperience"))), "html", null, true);
                echo "\">Modifier</a> | <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidat_deleteexperience", array("id" => $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "idExperience"))), "html", null, true);
                echo "\">Supprimer</a></div></font></font></p>
            </dd></dl>
         
          </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "         ";
        } else {
            // line 67
            echo "      Vous n'avez pas encore ajouté d'experience.
      ";
        }
        // line 69
        echo "                
           </div>
          </div>
        </div>
     

     ";
    }

    public function getTemplateName()
    {
        return "CandidatBundle:Pages:afficherexperience.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 69,  182 => 67,  179 => 66,  162 => 61,  154 => 60,  148 => 59,  142 => 58,  137 => 56,  130 => 51,  126 => 50,  123 => 49,  120 => 48,  113 => 46,  109 => 45,  106 => 44,  99 => 43,  94 => 42,  87 => 40,  83 => 39,  79 => 38,  74 => 36,  68 => 33,  57 => 24,  54 => 23,  32 => 4,  29 => 3,);
    }
}
