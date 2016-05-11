<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3a5ba453180f2d46c71c0fc4f7e7dc695adcb2db0b00754cb2d93bcac6e259aa extends Twig_Template
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
        $__internal_453e412a9fd9d4610f22ae6f45f347d0f156e54d671326cfb1ef589a2c8bc083 = $this->env->getExtension("native_profiler");
        $__internal_453e412a9fd9d4610f22ae6f45f347d0f156e54d671326cfb1ef589a2c8bc083->enter($__internal_453e412a9fd9d4610f22ae6f45f347d0f156e54d671326cfb1ef589a2c8bc083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_453e412a9fd9d4610f22ae6f45f347d0f156e54d671326cfb1ef589a2c8bc083->leave($__internal_453e412a9fd9d4610f22ae6f45f347d0f156e54d671326cfb1ef589a2c8bc083_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
