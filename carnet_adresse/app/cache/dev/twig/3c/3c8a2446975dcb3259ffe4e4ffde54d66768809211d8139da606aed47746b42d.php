<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_13126bd75ed5d02813e46f474ce4436a48cb8bcdd0e689e27399217cbbffcd6f extends Twig_Template
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
        $__internal_b56be881ddedf310f11a49d863b95bf46e51d4d82fd5e7d3b7c4830ae2c59a2c = $this->env->getExtension("native_profiler");
        $__internal_b56be881ddedf310f11a49d863b95bf46e51d4d82fd5e7d3b7c4830ae2c59a2c->enter($__internal_b56be881ddedf310f11a49d863b95bf46e51d4d82fd5e7d3b7c4830ae2c59a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_b56be881ddedf310f11a49d863b95bf46e51d4d82fd5e7d3b7c4830ae2c59a2c->leave($__internal_b56be881ddedf310f11a49d863b95bf46e51d4d82fd5e7d3b7c4830ae2c59a2c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
