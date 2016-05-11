<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_dc392ed6c3af42350f0dd2264e620ecec0e9dccb7150fb31ec70a18731bc2819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_f64aa084bd7b0a113224c8dabfa50ffb0e0f8ec8d7ff9609f55f27ae481646d9 = $this->env->getExtension("native_profiler");
        $__internal_f64aa084bd7b0a113224c8dabfa50ffb0e0f8ec8d7ff9609f55f27ae481646d9->enter($__internal_f64aa084bd7b0a113224c8dabfa50ffb0e0f8ec8d7ff9609f55f27ae481646d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f64aa084bd7b0a113224c8dabfa50ffb0e0f8ec8d7ff9609f55f27ae481646d9->leave($__internal_f64aa084bd7b0a113224c8dabfa50ffb0e0f8ec8d7ff9609f55f27ae481646d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e77684afd2d8f3328799a51168a6d6a75d91b757c872ac5d9267eadc57140e8 = $this->env->getExtension("native_profiler");
        $__internal_3e77684afd2d8f3328799a51168a6d6a75d91b757c872ac5d9267eadc57140e8->enter($__internal_3e77684afd2d8f3328799a51168a6d6a75d91b757c872ac5d9267eadc57140e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_3e77684afd2d8f3328799a51168a6d6a75d91b757c872ac5d9267eadc57140e8->leave($__internal_3e77684afd2d8f3328799a51168a6d6a75d91b757c872ac5d9267eadc57140e8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
