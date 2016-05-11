<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_669a48720b4961ef8e4d997a6027a6eed0250d4772940b4d27052986eacb42c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_eaa4f3e11e652ff4ada65ad9f3401c248342e6f6d063a0e98d78d95281d22a3e = $this->env->getExtension("native_profiler");
        $__internal_eaa4f3e11e652ff4ada65ad9f3401c248342e6f6d063a0e98d78d95281d22a3e->enter($__internal_eaa4f3e11e652ff4ada65ad9f3401c248342e6f6d063a0e98d78d95281d22a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaa4f3e11e652ff4ada65ad9f3401c248342e6f6d063a0e98d78d95281d22a3e->leave($__internal_eaa4f3e11e652ff4ada65ad9f3401c248342e6f6d063a0e98d78d95281d22a3e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7cd6291491332310a7d2b7c2f170cfce3f589e2b3955429a6a03f578ac50e436 = $this->env->getExtension("native_profiler");
        $__internal_7cd6291491332310a7d2b7c2f170cfce3f589e2b3955429a6a03f578ac50e436->enter($__internal_7cd6291491332310a7d2b7c2f170cfce3f589e2b3955429a6a03f578ac50e436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7cd6291491332310a7d2b7c2f170cfce3f589e2b3955429a6a03f578ac50e436->leave($__internal_7cd6291491332310a7d2b7c2f170cfce3f589e2b3955429a6a03f578ac50e436_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
