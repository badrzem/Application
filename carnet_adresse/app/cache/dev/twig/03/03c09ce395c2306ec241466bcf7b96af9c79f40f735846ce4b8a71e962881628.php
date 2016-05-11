<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_ec6064ee58a44c706482df68a2cbef63cd64e29d6191c39c6a5d41d8069f0a81 extends Twig_Template
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
        $__internal_269fd991f09fc6bf31daed0c873a06c1bece27ab953f65ad9300e0b270afd9be = $this->env->getExtension("native_profiler");
        $__internal_269fd991f09fc6bf31daed0c873a06c1bece27ab953f65ad9300e0b270afd9be->enter($__internal_269fd991f09fc6bf31daed0c873a06c1bece27ab953f65ad9300e0b270afd9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_269fd991f09fc6bf31daed0c873a06c1bece27ab953f65ad9300e0b270afd9be->leave($__internal_269fd991f09fc6bf31daed0c873a06c1bece27ab953f65ad9300e0b270afd9be_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
