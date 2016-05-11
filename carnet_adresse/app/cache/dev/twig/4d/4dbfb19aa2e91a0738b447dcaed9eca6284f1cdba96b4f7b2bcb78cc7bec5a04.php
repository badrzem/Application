<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_88c31e53e3d637e7080da1c2dafc45b33a9b50434aeced3384a4b005b2509c28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_4b2b4ecbed0f8fb925621dfebfcc5250649cd56c7ae02f7c12474848cb5f66ce = $this->env->getExtension("native_profiler");
        $__internal_4b2b4ecbed0f8fb925621dfebfcc5250649cd56c7ae02f7c12474848cb5f66ce->enter($__internal_4b2b4ecbed0f8fb925621dfebfcc5250649cd56c7ae02f7c12474848cb5f66ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b2b4ecbed0f8fb925621dfebfcc5250649cd56c7ae02f7c12474848cb5f66ce->leave($__internal_4b2b4ecbed0f8fb925621dfebfcc5250649cd56c7ae02f7c12474848cb5f66ce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8497960a17660b8a5f4b93500f9ddee37b655d16e65244a00b0fc1470ed30af = $this->env->getExtension("native_profiler");
        $__internal_e8497960a17660b8a5f4b93500f9ddee37b655d16e65244a00b0fc1470ed30af->enter($__internal_e8497960a17660b8a5f4b93500f9ddee37b655d16e65244a00b0fc1470ed30af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_e8497960a17660b8a5f4b93500f9ddee37b655d16e65244a00b0fc1470ed30af->leave($__internal_e8497960a17660b8a5f4b93500f9ddee37b655d16e65244a00b0fc1470ed30af_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
