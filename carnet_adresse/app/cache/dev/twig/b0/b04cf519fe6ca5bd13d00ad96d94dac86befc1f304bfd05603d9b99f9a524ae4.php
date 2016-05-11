<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_6a701491a355531ef1397c17c96e9618e51159663cf8d810ede4f20ad15185ab extends Twig_Template
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
        $__internal_5fcb4e107fa4d6e2cde5e77f8fb2d75e9437ec1e704dbfdf5e4de5967d9afbf1 = $this->env->getExtension("native_profiler");
        $__internal_5fcb4e107fa4d6e2cde5e77f8fb2d75e9437ec1e704dbfdf5e4de5967d9afbf1->enter($__internal_5fcb4e107fa4d6e2cde5e77f8fb2d75e9437ec1e704dbfdf5e4de5967d9afbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_5fcb4e107fa4d6e2cde5e77f8fb2d75e9437ec1e704dbfdf5e4de5967d9afbf1->leave($__internal_5fcb4e107fa4d6e2cde5e77f8fb2d75e9437ec1e704dbfdf5e4de5967d9afbf1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
