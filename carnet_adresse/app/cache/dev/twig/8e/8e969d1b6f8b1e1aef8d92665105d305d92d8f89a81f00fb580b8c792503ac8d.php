<?php

/* TSContactBundle:Default:index.html.twig */
class __TwigTemplate_580afa8c49289a7ea4a9483a88edeb0865e3ca548162e3c55d53f8028a8d891b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f547fbeff74b78caf98f9fda9122363365282bb29d96b420bac78f1ee7ea66dc = $this->env->getExtension("native_profiler");
        $__internal_f547fbeff74b78caf98f9fda9122363365282bb29d96b420bac78f1ee7ea66dc->enter($__internal_f547fbeff74b78caf98f9fda9122363365282bb29d96b420bac78f1ee7ea66dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSContactBundle:Default:index.html.twig"));

        // line 1
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"), array());
        
        $__internal_f547fbeff74b78caf98f9fda9122363365282bb29d96b420bac78f1ee7ea66dc->leave($__internal_f547fbeff74b78caf98f9fda9122363365282bb29d96b420bac78f1ee7ea66dc_prof);

    }

    public function getTemplateName()
    {
        return "TSContactBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% render(controller("FOSUserBundle:Security:login")) %}*/
