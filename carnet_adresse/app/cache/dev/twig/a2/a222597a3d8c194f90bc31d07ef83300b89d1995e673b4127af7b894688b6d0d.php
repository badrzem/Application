<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_3c575938022cc4edd0b37c80461db7f5f338a2ec0abd07001a7204d115f57613 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_b846917fef1946746df659f138c76cc364576097da57035a9ef9ed7e9274b819 = $this->env->getExtension("native_profiler");
        $__internal_b846917fef1946746df659f138c76cc364576097da57035a9ef9ed7e9274b819->enter($__internal_b846917fef1946746df659f138c76cc364576097da57035a9ef9ed7e9274b819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b846917fef1946746df659f138c76cc364576097da57035a9ef9ed7e9274b819->leave($__internal_b846917fef1946746df659f138c76cc364576097da57035a9ef9ed7e9274b819_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc8b385d29db3016ff5a94fb7b9ccc4967d4ca915142729495ec7d4afee59526 = $this->env->getExtension("native_profiler");
        $__internal_bc8b385d29db3016ff5a94fb7b9ccc4967d4ca915142729495ec7d4afee59526->enter($__internal_bc8b385d29db3016ff5a94fb7b9ccc4967d4ca915142729495ec7d4afee59526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_bc8b385d29db3016ff5a94fb7b9ccc4967d4ca915142729495ec7d4afee59526->leave($__internal_bc8b385d29db3016ff5a94fb7b9ccc4967d4ca915142729495ec7d4afee59526_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
