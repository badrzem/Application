<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_7dae4b3f0f6f665f4430c965cbb2425e7c463043057f5aeb1b2a26ee650dfdca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_b5ca6eee82f1d5606f8c89b4638ce96516e99de5b5674bae1ac47908e9535efa = $this->env->getExtension("native_profiler");
        $__internal_b5ca6eee82f1d5606f8c89b4638ce96516e99de5b5674bae1ac47908e9535efa->enter($__internal_b5ca6eee82f1d5606f8c89b4638ce96516e99de5b5674bae1ac47908e9535efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5ca6eee82f1d5606f8c89b4638ce96516e99de5b5674bae1ac47908e9535efa->leave($__internal_b5ca6eee82f1d5606f8c89b4638ce96516e99de5b5674bae1ac47908e9535efa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a39b7698f374e44610a1dad3914ab8ef02287a63a2a7cca399675708d342da60 = $this->env->getExtension("native_profiler");
        $__internal_a39b7698f374e44610a1dad3914ab8ef02287a63a2a7cca399675708d342da60->enter($__internal_a39b7698f374e44610a1dad3914ab8ef02287a63a2a7cca399675708d342da60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a39b7698f374e44610a1dad3914ab8ef02287a63a2a7cca399675708d342da60->leave($__internal_a39b7698f374e44610a1dad3914ab8ef02287a63a2a7cca399675708d342da60_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
