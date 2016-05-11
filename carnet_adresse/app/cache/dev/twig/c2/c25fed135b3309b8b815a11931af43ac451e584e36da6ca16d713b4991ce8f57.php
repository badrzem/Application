<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_56195efa3f0306b3e1aa1c2e10d7b53cf8e4e4d00d8d0680cf194a996eedd31b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_e865034a1a8b25f923e111b6618a2d866ca74f3208238bb9df2034ed64225b58 = $this->env->getExtension("native_profiler");
        $__internal_e865034a1a8b25f923e111b6618a2d866ca74f3208238bb9df2034ed64225b58->enter($__internal_e865034a1a8b25f923e111b6618a2d866ca74f3208238bb9df2034ed64225b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e865034a1a8b25f923e111b6618a2d866ca74f3208238bb9df2034ed64225b58->leave($__internal_e865034a1a8b25f923e111b6618a2d866ca74f3208238bb9df2034ed64225b58_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_913cda87a6d08ea936e909d334b0ebc1475f260c6fc5f07bb84314b83aef1999 = $this->env->getExtension("native_profiler");
        $__internal_913cda87a6d08ea936e909d334b0ebc1475f260c6fc5f07bb84314b83aef1999->enter($__internal_913cda87a6d08ea936e909d334b0ebc1475f260c6fc5f07bb84314b83aef1999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_913cda87a6d08ea936e909d334b0ebc1475f260c6fc5f07bb84314b83aef1999->leave($__internal_913cda87a6d08ea936e909d334b0ebc1475f260c6fc5f07bb84314b83aef1999_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
