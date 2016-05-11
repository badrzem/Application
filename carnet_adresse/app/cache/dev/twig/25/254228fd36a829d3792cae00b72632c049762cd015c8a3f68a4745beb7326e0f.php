<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_72f5bb674bce75cbf61abadbca415c6abceda4dd47f9fae5d6082bf78fbcaa53 extends Twig_Template
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
        $__internal_e738cf13ed120d83e0fa12e38ca0f23c54308dfb01461868395ee7f9ee7be01f = $this->env->getExtension("native_profiler");
        $__internal_e738cf13ed120d83e0fa12e38ca0f23c54308dfb01461868395ee7f9ee7be01f->enter($__internal_e738cf13ed120d83e0fa12e38ca0f23c54308dfb01461868395ee7f9ee7be01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e738cf13ed120d83e0fa12e38ca0f23c54308dfb01461868395ee7f9ee7be01f->leave($__internal_e738cf13ed120d83e0fa12e38ca0f23c54308dfb01461868395ee7f9ee7be01f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
