<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_1073213fcbd64d3745b0e9fbaff66fa73aec05143c095849d0391660f7722d71 extends Twig_Template
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
        $__internal_72a94475f4dd3a29fd5ec46458e27b68558396a7242558b9aa1eb0f1c3997863 = $this->env->getExtension("native_profiler");
        $__internal_72a94475f4dd3a29fd5ec46458e27b68558396a7242558b9aa1eb0f1c3997863->enter($__internal_72a94475f4dd3a29fd5ec46458e27b68558396a7242558b9aa1eb0f1c3997863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_72a94475f4dd3a29fd5ec46458e27b68558396a7242558b9aa1eb0f1c3997863->leave($__internal_72a94475f4dd3a29fd5ec46458e27b68558396a7242558b9aa1eb0f1c3997863_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
