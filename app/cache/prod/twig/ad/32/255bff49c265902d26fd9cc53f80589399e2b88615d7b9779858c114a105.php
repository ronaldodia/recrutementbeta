<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_ad32255bff49c265902d26fd9cc53f80589399e2b88615d7b9779858c114a105 extends Twig_Template
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

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    <br><br>

     <div class=\"content\">
      <!-- Start: SERVICE LIST -->
        <div class=\"container\">
         
          
           <div class=\"row-fluid\">
              
          <div class=\"span9\" class=\"icon-align-left\">
              <br> <br>
   ";
        // line 23
        echo "
<form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"form-signin-signup\">
    <div>
        ";
        // line 26
        if (array_key_exists("invalid_username", $context)) {
            // line 27
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : null)), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 29
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
    </div>
</form>
";
        // line 37
        echo "
           </div>
          </div>
        </div>
      <!-- End: SERVICE LIST -->
  
     ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 37,  68 => 33,  60 => 29,  52 => 26,  47 => 24,  44 => 23,  103 => 28,  100 => 27,  93 => 29,  91 => 27,  87 => 25,  81 => 24,  72 => 21,  67 => 20,  62 => 19,  58 => 18,  54 => 27,  46 => 14,  40 => 11,  36 => 10,  29 => 8,  20 => 1,  31 => 11,  28 => 10,);
    }
}
