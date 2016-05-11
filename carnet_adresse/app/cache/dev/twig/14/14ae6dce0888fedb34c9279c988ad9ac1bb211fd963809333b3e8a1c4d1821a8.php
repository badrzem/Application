<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_f232e1eb4e9030b7b12da940ef8db3f5f0434c8fd613db2ca04c69866f3fb713 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_c7898dd5075cf4910cafed60614a38a256f86b8667ffeed56e141d89fede9c5d = $this->env->getExtension("native_profiler");
        $__internal_c7898dd5075cf4910cafed60614a38a256f86b8667ffeed56e141d89fede9c5d->enter($__internal_c7898dd5075cf4910cafed60614a38a256f86b8667ffeed56e141d89fede9c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7898dd5075cf4910cafed60614a38a256f86b8667ffeed56e141d89fede9c5d->leave($__internal_c7898dd5075cf4910cafed60614a38a256f86b8667ffeed56e141d89fede9c5d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11374b4770c9805b4add1cffa574a0eb14437ef18e1a9b28e1f0f636ef074c4d = $this->env->getExtension("native_profiler");
        $__internal_11374b4770c9805b4add1cffa574a0eb14437ef18e1a9b28e1f0f636ef074c4d->enter($__internal_11374b4770c9805b4add1cffa574a0eb14437ef18e1a9b28e1f0f636ef074c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_11374b4770c9805b4add1cffa574a0eb14437ef18e1a9b28e1f0f636ef074c4d->leave($__internal_11374b4770c9805b4add1cffa574a0eb14437ef18e1a9b28e1f0f636ef074c4d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
