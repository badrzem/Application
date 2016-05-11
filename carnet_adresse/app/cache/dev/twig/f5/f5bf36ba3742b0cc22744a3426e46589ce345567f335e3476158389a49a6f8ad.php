<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_5da4e0b23bf9344979bf5c4aa2c69661ed60ff90853cdacd9db23d4365e33c39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_846d734402c07a6fff578d21dfc273d1e7dc42f0d049b59c283691b039485b89 = $this->env->getExtension("native_profiler");
        $__internal_846d734402c07a6fff578d21dfc273d1e7dc42f0d049b59c283691b039485b89->enter($__internal_846d734402c07a6fff578d21dfc273d1e7dc42f0d049b59c283691b039485b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_846d734402c07a6fff578d21dfc273d1e7dc42f0d049b59c283691b039485b89->leave($__internal_846d734402c07a6fff578d21dfc273d1e7dc42f0d049b59c283691b039485b89_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4b169d95b4b4975dce77887ff97d57e424275df0a9a6a8698349e17dfaf26f7 = $this->env->getExtension("native_profiler");
        $__internal_b4b169d95b4b4975dce77887ff97d57e424275df0a9a6a8698349e17dfaf26f7->enter($__internal_b4b169d95b4b4975dce77887ff97d57e424275df0a9a6a8698349e17dfaf26f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b4b169d95b4b4975dce77887ff97d57e424275df0a9a6a8698349e17dfaf26f7->leave($__internal_b4b169d95b4b4975dce77887ff97d57e424275df0a9a6a8698349e17dfaf26f7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
