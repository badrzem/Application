<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_b8e8a3a6345a210c58c05558b00207f5c9fb725ac9b98132af9b3f30d723331e extends Twig_Template
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
        $__internal_3bdb447581e0ff193d97822510b960803c04f19e4a57695ca19259c704a34fe1 = $this->env->getExtension("native_profiler");
        $__internal_3bdb447581e0ff193d97822510b960803c04f19e4a57695ca19259c704a34fe1->enter($__internal_3bdb447581e0ff193d97822510b960803c04f19e4a57695ca19259c704a34fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3bdb447581e0ff193d97822510b960803c04f19e4a57695ca19259c704a34fe1->leave($__internal_3bdb447581e0ff193d97822510b960803c04f19e4a57695ca19259c704a34fe1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
