<?php

/* @TSContact/Default/index.html.twig */
class __TwigTemplate_1484c6384aac0fee364421aae29f1eccb87edb1c0c5c78a42d345b2f8d90ffb4 extends Twig_Template
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
        $__internal_a9d48d57b096adfb3cc5de9ad772adac5768104b24ab38cbf6a49009342d4467 = $this->env->getExtension("native_profiler");
        $__internal_a9d48d57b096adfb3cc5de9ad772adac5768104b24ab38cbf6a49009342d4467->enter($__internal_a9d48d57b096adfb3cc5de9ad772adac5768104b24ab38cbf6a49009342d4467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSContact/Default/index.html.twig"));

        // line 1
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"), array());
        
        $__internal_a9d48d57b096adfb3cc5de9ad772adac5768104b24ab38cbf6a49009342d4467->leave($__internal_a9d48d57b096adfb3cc5de9ad772adac5768104b24ab38cbf6a49009342d4467_prof);

    }

    public function getTemplateName()
    {
        return "@TSContact/Default/index.html.twig";
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
/* {% render(controller("FOSUserBundle:Security:login")) %}*/
