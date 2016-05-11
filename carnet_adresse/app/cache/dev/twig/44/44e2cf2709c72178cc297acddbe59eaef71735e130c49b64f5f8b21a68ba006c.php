<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_1c692220f0d7142ed9985ad5014d75ad5bf588d79844c336c849e01842ee1af3 extends Twig_Template
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
        $__internal_4f1153c8e2e9341617a47feb07801e46a12d1935ed428b26b6354a4bab8b7247 = $this->env->getExtension("native_profiler");
        $__internal_4f1153c8e2e9341617a47feb07801e46a12d1935ed428b26b6354a4bab8b7247->enter($__internal_4f1153c8e2e9341617a47feb07801e46a12d1935ed428b26b6354a4bab8b7247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_4f1153c8e2e9341617a47feb07801e46a12d1935ed428b26b6354a4bab8b7247->leave($__internal_4f1153c8e2e9341617a47feb07801e46a12d1935ed428b26b6354a4bab8b7247_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
