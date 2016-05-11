<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_1f7b5154f1213addec44b2f519b9b7aa7ef8d115bf72af2bac251c753fb1e30a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_580dff606caf6403738847c23952c36137984334e26b493c98553bac7d47f905 = $this->env->getExtension("native_profiler");
        $__internal_580dff606caf6403738847c23952c36137984334e26b493c98553bac7d47f905->enter($__internal_580dff606caf6403738847c23952c36137984334e26b493c98553bac7d47f905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_580dff606caf6403738847c23952c36137984334e26b493c98553bac7d47f905->leave($__internal_580dff606caf6403738847c23952c36137984334e26b493c98553bac7d47f905_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_570439d99f9cd220cc1c38bdaaa0e157534daa5713ab6749e71c9741201d739c = $this->env->getExtension("native_profiler");
        $__internal_570439d99f9cd220cc1c38bdaaa0e157534daa5713ab6749e71c9741201d739c->enter($__internal_570439d99f9cd220cc1c38bdaaa0e157534daa5713ab6749e71c9741201d739c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_570439d99f9cd220cc1c38bdaaa0e157534daa5713ab6749e71c9741201d739c->leave($__internal_570439d99f9cd220cc1c38bdaaa0e157534daa5713ab6749e71c9741201d739c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
