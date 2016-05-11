<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_7d11af1a5487ea73db298bc13d95035a6efdab045f63049fb329981fe5d97f8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_83b04d63dc2eade925f336ef91e59cf1b9b315ff16ffdf4eadd1990d0c3b650b = $this->env->getExtension("native_profiler");
        $__internal_83b04d63dc2eade925f336ef91e59cf1b9b315ff16ffdf4eadd1990d0c3b650b->enter($__internal_83b04d63dc2eade925f336ef91e59cf1b9b315ff16ffdf4eadd1990d0c3b650b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83b04d63dc2eade925f336ef91e59cf1b9b315ff16ffdf4eadd1990d0c3b650b->leave($__internal_83b04d63dc2eade925f336ef91e59cf1b9b315ff16ffdf4eadd1990d0c3b650b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2f864a087a744730c2e6e3451c8c45794a9369fee98d4c904c233414708213f = $this->env->getExtension("native_profiler");
        $__internal_c2f864a087a744730c2e6e3451c8c45794a9369fee98d4c904c233414708213f->enter($__internal_c2f864a087a744730c2e6e3451c8c45794a9369fee98d4c904c233414708213f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c2f864a087a744730c2e6e3451c8c45794a9369fee98d4c904c233414708213f->leave($__internal_c2f864a087a744730c2e6e3451c8c45794a9369fee98d4c904c233414708213f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
