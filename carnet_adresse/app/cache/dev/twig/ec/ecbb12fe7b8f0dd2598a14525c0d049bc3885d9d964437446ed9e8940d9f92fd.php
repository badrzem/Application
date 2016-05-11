<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_a1b689c5c0c7a27ae252d2ae6af2e89a22590178215442c0e27ba2ecd9e2d341 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_8eb0d9c13def163dc49af1657d1e8dbbb802be46d8eb081199e1b7509b50bbbd = $this->env->getExtension("native_profiler");
        $__internal_8eb0d9c13def163dc49af1657d1e8dbbb802be46d8eb081199e1b7509b50bbbd->enter($__internal_8eb0d9c13def163dc49af1657d1e8dbbb802be46d8eb081199e1b7509b50bbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eb0d9c13def163dc49af1657d1e8dbbb802be46d8eb081199e1b7509b50bbbd->leave($__internal_8eb0d9c13def163dc49af1657d1e8dbbb802be46d8eb081199e1b7509b50bbbd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72a414c6c18be92b21db1414277e7b37b3396a6aa99b0a55ec2505de5f383842 = $this->env->getExtension("native_profiler");
        $__internal_72a414c6c18be92b21db1414277e7b37b3396a6aa99b0a55ec2505de5f383842->enter($__internal_72a414c6c18be92b21db1414277e7b37b3396a6aa99b0a55ec2505de5f383842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_72a414c6c18be92b21db1414277e7b37b3396a6aa99b0a55ec2505de5f383842->leave($__internal_72a414c6c18be92b21db1414277e7b37b3396a6aa99b0a55ec2505de5f383842_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
