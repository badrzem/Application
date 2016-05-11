<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_5fd232d4acbdbfbdbeb13b9055aff33a2332337536081ae4fadc21ae1ffb0155 extends Twig_Template
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
        $__internal_95647c90e7d45915533ec69011409b873737a233eddcf42dae81dd0e3c2f542a = $this->env->getExtension("native_profiler");
        $__internal_95647c90e7d45915533ec69011409b873737a233eddcf42dae81dd0e3c2f542a->enter($__internal_95647c90e7d45915533ec69011409b873737a233eddcf42dae81dd0e3c2f542a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_95647c90e7d45915533ec69011409b873737a233eddcf42dae81dd0e3c2f542a->leave($__internal_95647c90e7d45915533ec69011409b873737a233eddcf42dae81dd0e3c2f542a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
