<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_21d8743d5fa61fce331de1d847bd4f4c94ae661479638d90e1717b649574598f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_9406a569b6300f5f64ff4f27364baa042f311de0150d4a80af254b75e34bedf2 = $this->env->getExtension("native_profiler");
        $__internal_9406a569b6300f5f64ff4f27364baa042f311de0150d4a80af254b75e34bedf2->enter($__internal_9406a569b6300f5f64ff4f27364baa042f311de0150d4a80af254b75e34bedf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9406a569b6300f5f64ff4f27364baa042f311de0150d4a80af254b75e34bedf2->leave($__internal_9406a569b6300f5f64ff4f27364baa042f311de0150d4a80af254b75e34bedf2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0eee8ceb3a0e9b869f175b057c3c690b9633ed75f2480d8c83a574e8b5b4a829 = $this->env->getExtension("native_profiler");
        $__internal_0eee8ceb3a0e9b869f175b057c3c690b9633ed75f2480d8c83a574e8b5b4a829->enter($__internal_0eee8ceb3a0e9b869f175b057c3c690b9633ed75f2480d8c83a574e8b5b4a829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_0eee8ceb3a0e9b869f175b057c3c690b9633ed75f2480d8c83a574e8b5b4a829->leave($__internal_0eee8ceb3a0e9b869f175b057c3c690b9633ed75f2480d8c83a574e8b5b4a829_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
