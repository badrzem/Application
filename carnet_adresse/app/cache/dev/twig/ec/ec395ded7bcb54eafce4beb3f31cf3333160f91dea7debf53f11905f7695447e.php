<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_cae90652a8835b3defd18e54c6c09d87060e6a69d9a5d7c27f6fc1105326cba0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_f315312ca96802ec3d5d91c555200e6bdf5277701fcb69dcee822e10f0356a35 = $this->env->getExtension("native_profiler");
        $__internal_f315312ca96802ec3d5d91c555200e6bdf5277701fcb69dcee822e10f0356a35->enter($__internal_f315312ca96802ec3d5d91c555200e6bdf5277701fcb69dcee822e10f0356a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f315312ca96802ec3d5d91c555200e6bdf5277701fcb69dcee822e10f0356a35->leave($__internal_f315312ca96802ec3d5d91c555200e6bdf5277701fcb69dcee822e10f0356a35_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae7d86c1ba9a18b8c223db28b96e332ba391020a6645899b4ad97313d1a04316 = $this->env->getExtension("native_profiler");
        $__internal_ae7d86c1ba9a18b8c223db28b96e332ba391020a6645899b4ad97313d1a04316->enter($__internal_ae7d86c1ba9a18b8c223db28b96e332ba391020a6645899b4ad97313d1a04316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_ae7d86c1ba9a18b8c223db28b96e332ba391020a6645899b4ad97313d1a04316->leave($__internal_ae7d86c1ba9a18b8c223db28b96e332ba391020a6645899b4ad97313d1a04316_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
