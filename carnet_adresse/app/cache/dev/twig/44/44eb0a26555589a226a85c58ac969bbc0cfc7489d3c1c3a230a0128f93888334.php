<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_dec6333bc9ec7a970ec6277d46207a69d19960c4d085d80e6f4defb88903c318 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_338bf0e25eca1160cf4c9540706a51b6a64b2e70676d178247206f1032194731 = $this->env->getExtension("native_profiler");
        $__internal_338bf0e25eca1160cf4c9540706a51b6a64b2e70676d178247206f1032194731->enter($__internal_338bf0e25eca1160cf4c9540706a51b6a64b2e70676d178247206f1032194731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_338bf0e25eca1160cf4c9540706a51b6a64b2e70676d178247206f1032194731->leave($__internal_338bf0e25eca1160cf4c9540706a51b6a64b2e70676d178247206f1032194731_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8cc640a99eb92522ef412eb87a3f57f3cf93b5fbf60cd251fc9d8c83acce8d9 = $this->env->getExtension("native_profiler");
        $__internal_e8cc640a99eb92522ef412eb87a3f57f3cf93b5fbf60cd251fc9d8c83acce8d9->enter($__internal_e8cc640a99eb92522ef412eb87a3f57f3cf93b5fbf60cd251fc9d8c83acce8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e8cc640a99eb92522ef412eb87a3f57f3cf93b5fbf60cd251fc9d8c83acce8d9->leave($__internal_e8cc640a99eb92522ef412eb87a3f57f3cf93b5fbf60cd251fc9d8c83acce8d9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
