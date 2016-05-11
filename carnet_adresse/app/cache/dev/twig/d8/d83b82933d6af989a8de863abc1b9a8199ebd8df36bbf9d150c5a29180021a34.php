<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_cc3dba65142879f34581ae28355ce2aee4eb3a392562570dc92ba7a36a724adf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_1092017647ac0cac7a8b5f47b0470df42020f36922bac414d79d2fa6afdd8ac7 = $this->env->getExtension("native_profiler");
        $__internal_1092017647ac0cac7a8b5f47b0470df42020f36922bac414d79d2fa6afdd8ac7->enter($__internal_1092017647ac0cac7a8b5f47b0470df42020f36922bac414d79d2fa6afdd8ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1092017647ac0cac7a8b5f47b0470df42020f36922bac414d79d2fa6afdd8ac7->leave($__internal_1092017647ac0cac7a8b5f47b0470df42020f36922bac414d79d2fa6afdd8ac7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8502624a2881abeb3757dd5385b462a798c4b313dfba2f120df060e53534d07 = $this->env->getExtension("native_profiler");
        $__internal_d8502624a2881abeb3757dd5385b462a798c4b313dfba2f120df060e53534d07->enter($__internal_d8502624a2881abeb3757dd5385b462a798c4b313dfba2f120df060e53534d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_d8502624a2881abeb3757dd5385b462a798c4b313dfba2f120df060e53534d07->leave($__internal_d8502624a2881abeb3757dd5385b462a798c4b313dfba2f120df060e53534d07_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
