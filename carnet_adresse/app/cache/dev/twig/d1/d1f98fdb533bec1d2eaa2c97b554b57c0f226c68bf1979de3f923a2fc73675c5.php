<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_2b20ebf79d608756954020da196324256d210d51b3758a4167f7785ada7ed3ec extends Twig_Template
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
        $__internal_95958a2d7d4ef014c460c6deec942c023529d1dbb79936de693d61842531d2f6 = $this->env->getExtension("native_profiler");
        $__internal_95958a2d7d4ef014c460c6deec942c023529d1dbb79936de693d61842531d2f6->enter($__internal_95958a2d7d4ef014c460c6deec942c023529d1dbb79936de693d61842531d2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_95958a2d7d4ef014c460c6deec942c023529d1dbb79936de693d61842531d2f6->leave($__internal_95958a2d7d4ef014c460c6deec942c023529d1dbb79936de693d61842531d2f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
