<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_5d399563289e264367d1057e569f98dc050e577369f8d2ec506560e936c6eafe extends Twig_Template
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
        $__internal_812b8ffa262e921c5f0c1614290c0fd68b6b348ae141a66e53030d0db91a9553 = $this->env->getExtension("native_profiler");
        $__internal_812b8ffa262e921c5f0c1614290c0fd68b6b348ae141a66e53030d0db91a9553->enter($__internal_812b8ffa262e921c5f0c1614290c0fd68b6b348ae141a66e53030d0db91a9553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_812b8ffa262e921c5f0c1614290c0fd68b6b348ae141a66e53030d0db91a9553->leave($__internal_812b8ffa262e921c5f0c1614290c0fd68b6b348ae141a66e53030d0db91a9553_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
