<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_9e5699ed753627ebace1d31d5111867d822538c3685fb7056a94df2761d08bb4 extends Twig_Template
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
        $__internal_1be7c5b95198e9fd9ab35e848ae1c14ea04d66915c2a45925d88045b06d259ae = $this->env->getExtension("native_profiler");
        $__internal_1be7c5b95198e9fd9ab35e848ae1c14ea04d66915c2a45925d88045b06d259ae->enter($__internal_1be7c5b95198e9fd9ab35e848ae1c14ea04d66915c2a45925d88045b06d259ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1be7c5b95198e9fd9ab35e848ae1c14ea04d66915c2a45925d88045b06d259ae->leave($__internal_1be7c5b95198e9fd9ab35e848ae1c14ea04d66915c2a45925d88045b06d259ae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
