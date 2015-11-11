<?php

/* EntrepriseBundle:Pages:affichercv.html.twig */
class __TwigTemplate_324ec67f5df3dee4f5fe7679cecf9de59a9b391ad5fa95102ab3226541358428 extends Twig_Template
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
                            <h2><small><font color=\"black\"><font size=+2><u>Espace Entreprise    </u></font></font></small></h2>
          </div>
                
          <div class=\"span3\">";
        // line 33
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 34
            echo "
              ";
            // line 35
            if ($this->env->getExtension('security')->isGranted("ROLE_MANAGER")) {
                // line 36
                echo "                    ";
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 37
                    echo "                       ";
                    $this->env->loadTemplate("AdminBundle:Modules:menuadmin.html.twig")->display($context);
                    // line 38
                    echo "
                    ";
                } else {
                    // line 40
                    echo "                      ";
                    $this->env->loadTemplate("EntrepriseBundle:Modules:menuentreprise.html.twig")->display($context);
                    // line 41
                    echo "                    ";
                }
                // line 42
                echo "
                 ";
            } else {
                // line 44
                echo "                       ";
                $this->env->loadTemplate("CandidatBundle:Modules:menucandidat.html.twig")->display($context);
                // line 45
                echo "                        
                ";
            }
            // line 47
            echo "

         ";
        }
        // line 49
        echo "</div>
           <div class=\"row-fluid\">
              
          <div class=\"span9\" class=\"left\">BINEVENU(E) ";
        // line 52
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username")), "html", null, true);
        echo " DANS VOTRE ESPACE!
              <br> <br>
            
          
          
          
          
          
          
          
          
          
           <div id=\"page-wrap\">
    
        
        
               <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/" . $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : null), "photo"))), "html", null, true);
        echo "\" class=\"icon-align-left\" align=\"right\" width=\"150\" height=\"60\"> 
    
        <div id=\"contact-info\" class=\"vcard\">
        
            <!-- Microformats! -->
        
            
        
            <p> <h1><small>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : null), "nomCandidat"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : null), "prenom"), "html", null, true);
        echo "</small></h1>
            <br>
                Téléphone: <span class=\"tel\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : null), "telephone"), "html", null, true);
        echo "</span><br />
                <br>
                Email: <a class=\"email\" href=\"mailto:";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "email"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "email"), "html", null, true);
        echo "</a>
                <br><br>
                 <h1><small> Adresse : </small></h1> <font size=+2>";
        // line 82
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
        // line 95
        if ((!(null === (isset($context["formation"]) ? $context["formation"] : null)))) {
            // line 96
            echo "     
     ";
            // line 97
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formation"]) ? $context["formation"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 98
                echo "            <dd>
                <ul><li>";
                // line 99
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "dateDebutFormation"), "d/m/Y"), "html", null, true);
                echo " -  ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "dateFinFormation"), "d/m/Y"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "diplome"), "html", null, true);
                echo " en ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "nomFormation")), "html", null, true);
                echo "<br>
                        ";
                // line 100
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
            // line 104
            echo "        
      ";
        }
        // line 106
        echo "            
            
                      <dd class=\"clear\"></dd>
            
                      <dt><font size=+2><u>Compétences</u></font></dt>
                      <hr>
            ";
        // line 112
        if ((!(null === (isset($context["competence"]) ? $context["competence"] : null)))) {
            // line 113
            echo "     
     ";
            // line 114
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["competence"]) ? $context["competence"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 115
                echo "            <dd>
                <ul><li>";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idDomaineCompetence"), "nomDomaineCompetence"), "html", null, true);
                echo "<br>
                ";
                // line 117
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : null), "nomCompetence")), "html", null, true);
                echo "</li></ul>
               
            </dd>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "      ";
        }
        // line 122
        echo "        <dd class=\"clear\"></dd>
            
        <dt><font size=+2><u>Expériences</u></font></dt>
        <hr>
            ";
        // line 126
        if ((!(null === (isset($context["experience"]) ? $context["experience"] : null)))) {
            // line 127
            echo "     
     ";
            // line 128
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["experience"]) ? $context["experience"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 129
                echo "            <dd>
                <h2>";
                // line 130
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
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idNiveauExperience"), "niveauExperience"), "html", null, true);
                echo "</li>
                    <li>Compétences utilisées: ";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : null), "idExperience"), "competenceUtilisees"), "html", null, true);
                echo " </li>
                    <li>";
                // line 134
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
            // line 140
            echo "        
      ";
        }
        // line 141
        echo "  
            
             <dd class=\"clear\"></dd>
            <dt><font size=+2><u>Langues</u></font></dt>
            <hr>
           ";
        // line 146
        if ((!(null === (isset($context["langue"]) ? $context["langue"] : null)))) {
            // line 147
            echo "     
     ";
            // line 148
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["langue"]) ? $context["langue"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 149
                echo "            <dd>
                 <ul>
                    <li>";
                // line 151
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
            // line 159
            echo "        
      ";
        }
        // line 160
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
        return "EntrepriseBundle:Pages:affichercv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 160,  353 => 159,  337 => 151,  333 => 149,  329 => 148,  326 => 147,  324 => 146,  317 => 141,  313 => 140,  299 => 134,  295 => 133,  291 => 132,  276 => 130,  273 => 129,  269 => 128,  266 => 127,  264 => 126,  258 => 122,  255 => 121,  245 => 117,  241 => 116,  238 => 115,  234 => 114,  231 => 113,  229 => 112,  221 => 106,  217 => 104,  203 => 100,  193 => 99,  190 => 98,  186 => 97,  183 => 96,  181 => 95,  161 => 82,  154 => 80,  149 => 78,  142 => 76,  131 => 68,  112 => 52,  107 => 49,  102 => 47,  98 => 45,  95 => 44,  91 => 42,  88 => 41,  85 => 40,  81 => 38,  78 => 37,  75 => 36,  73 => 35,  70 => 34,  68 => 33,  57 => 24,  54 => 23,  32 => 4,  29 => 3,);
    }
}
