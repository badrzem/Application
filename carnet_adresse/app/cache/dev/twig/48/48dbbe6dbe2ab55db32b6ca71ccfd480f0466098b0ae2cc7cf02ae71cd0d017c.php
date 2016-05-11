<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_78eb6a1a6914f778529f5c2ea451e7a804a3f4ca1ed2de64cc1a10822e6560df extends Twig_Template
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
        $__internal_3fa695fbb320b7d1c5e3dc011193d0db1bf625970854bc5b487b327be0ecc27e = $this->env->getExtension("native_profiler");
        $__internal_3fa695fbb320b7d1c5e3dc011193d0db1bf625970854bc5b487b327be0ecc27e->enter($__internal_3fa695fbb320b7d1c5e3dc011193d0db1bf625970854bc5b487b327be0ecc27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3fa695fbb320b7d1c5e3dc011193d0db1bf625970854bc5b487b327be0ecc27e->leave($__internal_3fa695fbb320b7d1c5e3dc011193d0db1bf625970854bc5b487b327be0ecc27e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_457a0748f8fab3ec5cb5e760309c85ec2f76a9d205ee8ab326c66c4b302a78f8 = $this->env->getExtension("native_profiler");
        $__internal_457a0748f8fab3ec5cb5e760309c85ec2f76a9d205ee8ab326c66c4b302a78f8->enter($__internal_457a0748f8fab3ec5cb5e760309c85ec2f76a9d205ee8ab326c66c4b302a78f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_457a0748f8fab3ec5cb5e760309c85ec2f76a9d205ee8ab326c66c4b302a78f8->leave($__internal_457a0748f8fab3ec5cb5e760309c85ec2f76a9d205ee8ab326c66c4b302a78f8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
