<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_51cbef0a455687a4280a3067a89b9ecfb28cc47f1b1a61a33355b35f28b9af9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2d09a7cfe30e17251e1c40d138b037195240d7ce7bf5abbf8df71b73b560efc = $this->env->getExtension("native_profiler");
        $__internal_e2d09a7cfe30e17251e1c40d138b037195240d7ce7bf5abbf8df71b73b560efc->enter($__internal_e2d09a7cfe30e17251e1c40d138b037195240d7ce7bf5abbf8df71b73b560efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e2d09a7cfe30e17251e1c40d138b037195240d7ce7bf5abbf8df71b73b560efc->leave($__internal_e2d09a7cfe30e17251e1c40d138b037195240d7ce7bf5abbf8df71b73b560efc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
