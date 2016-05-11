<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_8854dc9035a92fe57b00332dd9f5702b7d5028ec4321891187966cd66f38ca94 extends Twig_Template
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
        $__internal_ca8f0d6a6e9c041949fd1d60387d0db366d995f57ab99a2d5743a1618ecad17e = $this->env->getExtension("native_profiler");
        $__internal_ca8f0d6a6e9c041949fd1d60387d0db366d995f57ab99a2d5743a1618ecad17e->enter($__internal_ca8f0d6a6e9c041949fd1d60387d0db366d995f57ab99a2d5743a1618ecad17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ca8f0d6a6e9c041949fd1d60387d0db366d995f57ab99a2d5743a1618ecad17e->leave($__internal_ca8f0d6a6e9c041949fd1d60387d0db366d995f57ab99a2d5743a1618ecad17e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
