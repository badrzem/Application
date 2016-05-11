<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_99c3848fd33be2078334c50b46bfd64def1718085ca750cf2fe5744fe125f78d extends Twig_Template
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
        $__internal_ff5e4b037dbe378a5c6b7df47e7be37994bba75d3390b2014a4943309d3242d8 = $this->env->getExtension("native_profiler");
        $__internal_ff5e4b037dbe378a5c6b7df47e7be37994bba75d3390b2014a4943309d3242d8->enter($__internal_ff5e4b037dbe378a5c6b7df47e7be37994bba75d3390b2014a4943309d3242d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ff5e4b037dbe378a5c6b7df47e7be37994bba75d3390b2014a4943309d3242d8->leave($__internal_ff5e4b037dbe378a5c6b7df47e7be37994bba75d3390b2014a4943309d3242d8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
