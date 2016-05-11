<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_b97d783c61db3a5bda5934c59ded4a35e6fb7c225a37957a13f7fad4b19f85e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_d86a1f0a188a571f534a3721036e518eb5f5e15f0af28f2f30658ed24c734d6b = $this->env->getExtension("native_profiler");
        $__internal_d86a1f0a188a571f534a3721036e518eb5f5e15f0af28f2f30658ed24c734d6b->enter($__internal_d86a1f0a188a571f534a3721036e518eb5f5e15f0af28f2f30658ed24c734d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d86a1f0a188a571f534a3721036e518eb5f5e15f0af28f2f30658ed24c734d6b->leave($__internal_d86a1f0a188a571f534a3721036e518eb5f5e15f0af28f2f30658ed24c734d6b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2fb9dc9d7416ecac5e3d9437bc3b2b231c743656b794c291a95463fce66667ba = $this->env->getExtension("native_profiler");
        $__internal_2fb9dc9d7416ecac5e3d9437bc3b2b231c743656b794c291a95463fce66667ba->enter($__internal_2fb9dc9d7416ecac5e3d9437bc3b2b231c743656b794c291a95463fce66667ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_2fb9dc9d7416ecac5e3d9437bc3b2b231c743656b794c291a95463fce66667ba->leave($__internal_2fb9dc9d7416ecac5e3d9437bc3b2b231c743656b794c291a95463fce66667ba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
