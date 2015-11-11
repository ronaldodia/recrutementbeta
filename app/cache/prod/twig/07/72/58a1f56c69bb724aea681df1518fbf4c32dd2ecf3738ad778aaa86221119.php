<?php

/* CandidatBundle:Pages:affichercv.html.twig */
class __TwigTemplate_077258a1f56c69bb724aea681df1518fbf4c32dd2ecf3738ad778aaa86221119 extends Twig_Template
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
              
          <div class=\"span9\" class=\"left\">BINEVENU(E) ";
        // line 36
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username")), "html", null, true);
        echo " DANS VOTRE ESPACE!
              <br> <br>
            
          
          
          
          
          
          
          
          
          
           <div id=\"page-wrap\">
    
        
        
               <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/" . $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : null), "photo"))), "html", null, true);
        echo "\" class=\"icon-align-left\" align=\"right\" width=\"150\" height=\"60\"> 
    
        <div id=\"contact-info\" class=\"vcard\">
        
            <!-- Microformats! -->
        
            
        
            <p> <h1><small>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : null), "nomCandidat"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : null), "prenom"), "html", null, true);
        echo "</small></h1>
            <br>
                Téléphone: <span class=\"tel\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : null), "telephone"), "html", null, true);
        echo "</span><br />
                <br>
                Email: <a class=\"email\" href=\"mailto:";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "email"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "email"), "html", null, true);
        echo "</a>
                <br><br>
                 <h1><small> Adresse : </small></h1> <font size=+2>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : null), "adresse"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : null), "idVille"), "nomVille"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : null), "idVille"), "idPays"), "nomPays"), "html", null, true);
        echo "</font>
            </p>
        </div>
                
        
        
        <div class=\"clear\"></div>
        
        <dl>
            <dd class=\"clear\"></dd>
            
            <dt><font size=+2><u>Formations :</u></font></dt>
            <hr>
              ";
        // line 79
        if ((!(null === (isset($context["formation"]) ? $context["formation"] : null)))) {
            // line 80
            echo "     
     ";
            // line 81
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formation"]) ? $context["formation"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 82
                echo "            <dd>
                <ul><li>";
                // line 83
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "dateDebutFormation"), "d/m/Y"), "html", null, true);
                echo " -  ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "dateFinFormation"), "d/m/Y"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "diplome"), "html", null, true);
                echo " en ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "nomFormation")), "html", null, true);
                echo "<br>
                        ";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "etablissementFormation"), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "lieuFormation"), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "descriptionFormation"), "html", null, true);
                echo "</li></ul>
            </dd>
            
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "        
      ";
        }
        // line 90
        echo "            
            
                      <dd class=\"clear\"></dd>
            
                      <dt><font size=+2><u>Compétences</u></font></dt>
                      <hr>
            ";
        // line 96
        if ((!(null === (isset($context["competence"]) ? $context["competence"] : null)))) {
            // line 97
            echo "     
     ";
            // line 98
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["competence"]) ? $context["competence"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 99
                echo "            <dd>
                <ul><li>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idDomaineCompetence"), "nomDomaineCompetence"), "html", null, true);
                echo "<br>
                ";
                // line 101
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "nomCompetence")), "html", null, true);
                echo "</li></ul>
               
            </dd>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "      ";
        }
        // line 106
        echo "        <dd class=\"clear\"></dd>
            
        <dt><font size=+2><u>Expériences</u></font></dt>
        <hr>
            ";
        // line 110
        if ((!(null === (isset($context["experience"]) ? $context["experience"] : null)))) {
            // line 111
            echo "     
     ";
            // line 112
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["experience"]) ? $context["experience"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 113
                echo "            <dd>
                <h2>";
                // line 114
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "dateDebutExperience"), "d/m/Y"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "dateFinExperience"), "d/m/Y"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "nombreMois"), "html", null, true);
                echo " mois): <font size=+1>";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "titreExperience")), "html", null, true);
                echo "</font>, ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "entrepriseExperience"), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "lieuExperience"), "html", null, true);
                echo " </h2>
                <ul>
                    <li>Expérience ";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idNiveauExperience"), "niveauExperience"), "html", null, true);
                echo "</li>
                    <li>Compétences utilisées: ";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "competenceUtilisees"), "html", null, true);
                echo " </li>
                    <li>";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "fonction"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "descriptionExperience"), "html", null, true);
                echo "</li>
                </ul>
                
                
            </dd>
             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "        
      ";
        }
        // line 125
        echo "  
            
             <dd class=\"clear\"></dd>
            <dt><font size=+2><u>Langues</u></font></dt>
            <hr>
           ";
        // line 130
        if ((!(null === (isset($context["langue"]) ? $context["langue"] : null)))) {
            // line 131
            echo "     
     ";
            // line 132
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["langue"]) ? $context["langue"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 133
                echo "            <dd>
                 <ul>
                    <li>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idLangue"), "langue"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idNiveauLangue"), "niveau"), "html", null, true);
                echo ")</li>
                    
                    
                </ul>
                
               
            </dd>
             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "        
      ";
        }
        // line 144
        echo "       
            
            
            
        
        </dl>
        
        <div class=\"clear\"></div>
    
    </div>
          </div>
        </div>
     

     ";
    }

    public function getTemplateName()
    {
        return "CandidatBundle:Pages:affichercv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 144,  315 => 143,  299 => 135,  295 => 133,  291 => 132,  288 => 131,  286 => 130,  279 => 125,  275 => 124,  261 => 118,  257 => 117,  253 => 116,  238 => 114,  235 => 113,  231 => 112,  228 => 111,  226 => 110,  220 => 106,  217 => 105,  207 => 101,  203 => 100,  200 => 99,  196 => 98,  193 => 97,  191 => 96,  183 => 90,  179 => 88,  165 => 84,  155 => 83,  152 => 82,  148 => 81,  145 => 80,  143 => 79,  123 => 66,  116 => 64,  111 => 62,  104 => 60,  93 => 52,  74 => 36,  68 => 33,  57 => 24,  54 => 23,  32 => 4,  29 => 3,);
    }
}
