<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_535c6067b5dcf601bddc4b19b762f5bc7e76c0f34b5cb3793c2ac80d833475e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a3ac149405347cf6f96e41aa552d89430a28aa8b1a7b0d598f056d1ca9b013f = $this->env->getExtension("native_profiler");
        $__internal_7a3ac149405347cf6f96e41aa552d89430a28aa8b1a7b0d598f056d1ca9b013f->enter($__internal_7a3ac149405347cf6f96e41aa552d89430a28aa8b1a7b0d598f056d1ca9b013f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a3ac149405347cf6f96e41aa552d89430a28aa8b1a7b0d598f056d1ca9b013f->leave($__internal_7a3ac149405347cf6f96e41aa552d89430a28aa8b1a7b0d598f056d1ca9b013f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f7d715500e48ffa9b2272a33225d9e87fbc8dac86ba5e68e045ee305fe1e5ad = $this->env->getExtension("native_profiler");
        $__internal_4f7d715500e48ffa9b2272a33225d9e87fbc8dac86ba5e68e045ee305fe1e5ad->enter($__internal_4f7d715500e48ffa9b2272a33225d9e87fbc8dac86ba5e68e045ee305fe1e5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_4f7d715500e48ffa9b2272a33225d9e87fbc8dac86ba5e68e045ee305fe1e5ad->leave($__internal_4f7d715500e48ffa9b2272a33225d9e87fbc8dac86ba5e68e045ee305fe1e5ad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
