<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_0c6d24c71cf44ce4a7be93d9bb6a1aa1fabb51b87fb9ea024fbd43d3e4badeec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ceaccdffe1cf2764e70d4adb4c4005e6448771c3391777b6763978a9aadac01 = $this->env->getExtension("native_profiler");
        $__internal_8ceaccdffe1cf2764e70d4adb4c4005e6448771c3391777b6763978a9aadac01->enter($__internal_8ceaccdffe1cf2764e70d4adb4c4005e6448771c3391777b6763978a9aadac01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8ceaccdffe1cf2764e70d4adb4c4005e6448771c3391777b6763978a9aadac01->leave($__internal_8ceaccdffe1cf2764e70d4adb4c4005e6448771c3391777b6763978a9aadac01_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e7ac4293cf8cb22203bed72e88ccde0af114edba202147d6a3f09ffa4e09f55 = $this->env->getExtension("native_profiler");
        $__internal_3e7ac4293cf8cb22203bed72e88ccde0af114edba202147d6a3f09ffa4e09f55->enter($__internal_3e7ac4293cf8cb22203bed72e88ccde0af114edba202147d6a3f09ffa4e09f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3e7ac4293cf8cb22203bed72e88ccde0af114edba202147d6a3f09ffa4e09f55->leave($__internal_3e7ac4293cf8cb22203bed72e88ccde0af114edba202147d6a3f09ffa4e09f55_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
