<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_2c5b5aef33fdad8b176cb803b7328da98a69d65f7e6cc9bc2d3bbe4bfca957f4 extends Twig_Template
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
        $__internal_1376460e3d90cabf242326a3e95c3ef6dd1552515f193859b985c942b4abb966 = $this->env->getExtension("native_profiler");
        $__internal_1376460e3d90cabf242326a3e95c3ef6dd1552515f193859b985c942b4abb966->enter($__internal_1376460e3d90cabf242326a3e95c3ef6dd1552515f193859b985c942b4abb966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1376460e3d90cabf242326a3e95c3ef6dd1552515f193859b985c942b4abb966->leave($__internal_1376460e3d90cabf242326a3e95c3ef6dd1552515f193859b985c942b4abb966_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
