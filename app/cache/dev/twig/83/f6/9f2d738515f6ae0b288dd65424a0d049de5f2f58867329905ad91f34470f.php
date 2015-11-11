<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_83f69f2d738515f6ae0b288dd65424a0d049de5f2f58867329905ad91f34470f extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<br></br><br></br>

";
        // line 6
        echo "

<div class=\"content\">
    <div class=\"container\">
        <div class=\"page-header\">
            <h1>Se connecter sur BETA.MR</h1>
        </div>
            

        <div class=\"row\">
            <div class=\"span6 offset3\">
                <h4 class=\"widget-header\"><i class=\"icon-lock\"></i>Connexion  </h4>
                ";
        // line 18
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 19
            echo "<div > <font color=\"red\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</font></div>
";
        }
        // line 21
        echo "
                <div class=\"widget-body\">
                    <div class=\"center-align\">
                        <form class=\"form-horizontal form-signin-signup\" action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                            
                            <label for=\"username\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                            <label for=\"password\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                            <div class=\"remember-me\">
                    <div class=\"pull-left\">
                        <label class=\"checkbox\"><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            <label for=\"remember_me\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></label></div>
<div class=\"pull-right\"><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">J'ai oublié mon mot de passe</a>
                    </div><div class=\"clearfix\"></div>
                  </div>
                            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-large\" />
                        </form>
                        <h4><i class=\"icon-question-sign\"></i> Vous n'avez pas de comtpe?</h4>
                        <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-large bottom-space\">S'inscrire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 43,  99 => 40,  93 => 37,  89 => 36,  80 => 30,  75 => 28,  71 => 27,  66 => 25,  62 => 24,  57 => 21,  51 => 19,  49 => 18,  35 => 6,  31 => 3,  28 => 2,);
    }
}
