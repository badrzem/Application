<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a386dd97f6b3a728f8d19309f040c7cc630f9497d55e2e43ca037c477c0c8484 extends Twig_Template
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
        $__internal_c0023f39dd4e38fad3901b63db70ee196fec2058a3f7dfd22edea8cb1b010f25 = $this->env->getExtension("native_profiler");
        $__internal_c0023f39dd4e38fad3901b63db70ee196fec2058a3f7dfd22edea8cb1b010f25->enter($__internal_c0023f39dd4e38fad3901b63db70ee196fec2058a3f7dfd22edea8cb1b010f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c0023f39dd4e38fad3901b63db70ee196fec2058a3f7dfd22edea8cb1b010f25->leave($__internal_c0023f39dd4e38fad3901b63db70ee196fec2058a3f7dfd22edea8cb1b010f25_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
