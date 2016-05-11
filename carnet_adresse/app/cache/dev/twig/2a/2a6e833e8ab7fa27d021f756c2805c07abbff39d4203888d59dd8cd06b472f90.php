<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_5a6576fd92c03c576f26a0401a886a5a7cade894fab690315cde68a191d708d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_0f8aa7eecf90c133af7d34d3d3114b65676396fbae4c6d7439910f1bfa287d14 = $this->env->getExtension("native_profiler");
        $__internal_0f8aa7eecf90c133af7d34d3d3114b65676396fbae4c6d7439910f1bfa287d14->enter($__internal_0f8aa7eecf90c133af7d34d3d3114b65676396fbae4c6d7439910f1bfa287d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f8aa7eecf90c133af7d34d3d3114b65676396fbae4c6d7439910f1bfa287d14->leave($__internal_0f8aa7eecf90c133af7d34d3d3114b65676396fbae4c6d7439910f1bfa287d14_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0dcabfb520678d36836edc4385137c7354381cfb4cde33da9ff9615da2a17f76 = $this->env->getExtension("native_profiler");
        $__internal_0dcabfb520678d36836edc4385137c7354381cfb4cde33da9ff9615da2a17f76->enter($__internal_0dcabfb520678d36836edc4385137c7354381cfb4cde33da9ff9615da2a17f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_0dcabfb520678d36836edc4385137c7354381cfb4cde33da9ff9615da2a17f76->leave($__internal_0dcabfb520678d36836edc4385137c7354381cfb4cde33da9ff9615da2a17f76_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
