<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_6015400083f8a2f7395cbadc261d277c3bb84581db2f41afa76aee7dfcc26ca8 extends Twig_Template
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
            <h1>Creation de compteer sur BETA.MR</h1>
        </div>
            

        <div class=\"row\">
            <div class=\"span6 offset3\">
                <h4 class=\"widget-header\"><i class=\"icon-lock\"></i>Inscription  </h4>
              
 <div class=\"widget-body\">
                    <div class=\"center-align\">
<form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\"class=\"form-horizontal form-signin-signup\" >
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-large\"/>
    </div>
</form>
                  
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
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  58 => 22,  52 => 21,  35 => 6,  31 => 3,  28 => 2,);
    }
}
