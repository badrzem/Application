<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9e84c9fca4a8ac2075c092c6f546a46fff90709b31488cb10c32044a7b45c289 extends Twig_Template
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
        $__internal_defa1bf29fa92084b494e743b2b168b39e074c6775141a6022ef4af4812d28bc = $this->env->getExtension("native_profiler");
        $__internal_defa1bf29fa92084b494e743b2b168b39e074c6775141a6022ef4af4812d28bc->enter($__internal_defa1bf29fa92084b494e743b2b168b39e074c6775141a6022ef4af4812d28bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_defa1bf29fa92084b494e743b2b168b39e074c6775141a6022ef4af4812d28bc->leave($__internal_defa1bf29fa92084b494e743b2b168b39e074c6775141a6022ef4af4812d28bc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
