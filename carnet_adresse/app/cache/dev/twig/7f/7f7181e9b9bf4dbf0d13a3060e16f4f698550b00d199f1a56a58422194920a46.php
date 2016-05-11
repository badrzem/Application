<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_cb1bbaffb4e6c7c7bc60882eecb499d8803b87f0ee8b59f25525e63bdbf231b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_ae2029fabc3852f2975b860b75e2759d9308759b3ac794cd7984f4b7f67f1559 = $this->env->getExtension("native_profiler");
        $__internal_ae2029fabc3852f2975b860b75e2759d9308759b3ac794cd7984f4b7f67f1559->enter($__internal_ae2029fabc3852f2975b860b75e2759d9308759b3ac794cd7984f4b7f67f1559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae2029fabc3852f2975b860b75e2759d9308759b3ac794cd7984f4b7f67f1559->leave($__internal_ae2029fabc3852f2975b860b75e2759d9308759b3ac794cd7984f4b7f67f1559_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca15baed43d47e8cb36e03147a9c9112e66d7313c35b8e991f702cca6e1aa7ae = $this->env->getExtension("native_profiler");
        $__internal_ca15baed43d47e8cb36e03147a9c9112e66d7313c35b8e991f702cca6e1aa7ae->enter($__internal_ca15baed43d47e8cb36e03147a9c9112e66d7313c35b8e991f702cca6e1aa7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ca15baed43d47e8cb36e03147a9c9112e66d7313c35b8e991f702cca6e1aa7ae->leave($__internal_ca15baed43d47e8cb36e03147a9c9112e66d7313c35b8e991f702cca6e1aa7ae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
