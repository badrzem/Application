<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_e72dfb2390a2d1a0d57a9ae8584f17b9ffc9a1c0d1f2eedba4a5ffcdc37dd5eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_fffc819dade217602859e8576d94c9a92ab75aa20223c05c6a94e9e570686c19 = $this->env->getExtension("native_profiler");
        $__internal_fffc819dade217602859e8576d94c9a92ab75aa20223c05c6a94e9e570686c19->enter($__internal_fffc819dade217602859e8576d94c9a92ab75aa20223c05c6a94e9e570686c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fffc819dade217602859e8576d94c9a92ab75aa20223c05c6a94e9e570686c19->leave($__internal_fffc819dade217602859e8576d94c9a92ab75aa20223c05c6a94e9e570686c19_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d4a68e4166f8dc0a75a0477def5dd10f99ef380e1b33616427d6a6818dd4cad = $this->env->getExtension("native_profiler");
        $__internal_8d4a68e4166f8dc0a75a0477def5dd10f99ef380e1b33616427d6a6818dd4cad->enter($__internal_8d4a68e4166f8dc0a75a0477def5dd10f99ef380e1b33616427d6a6818dd4cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_8d4a68e4166f8dc0a75a0477def5dd10f99ef380e1b33616427d6a6818dd4cad->leave($__internal_8d4a68e4166f8dc0a75a0477def5dd10f99ef380e1b33616427d6a6818dd4cad_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
