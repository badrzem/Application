<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fe2528d41cda97ac7c33341e1e97600939cb4b9e9f87fbe4ac3e52b08384fa5f extends Twig_Template
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
        $__internal_0377dc3046a0f1c6da17c8f467387e89ed2107c338621a0e37d7483f65341614 = $this->env->getExtension("native_profiler");
        $__internal_0377dc3046a0f1c6da17c8f467387e89ed2107c338621a0e37d7483f65341614->enter($__internal_0377dc3046a0f1c6da17c8f467387e89ed2107c338621a0e37d7483f65341614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0377dc3046a0f1c6da17c8f467387e89ed2107c338621a0e37d7483f65341614->leave($__internal_0377dc3046a0f1c6da17c8f467387e89ed2107c338621a0e37d7483f65341614_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
