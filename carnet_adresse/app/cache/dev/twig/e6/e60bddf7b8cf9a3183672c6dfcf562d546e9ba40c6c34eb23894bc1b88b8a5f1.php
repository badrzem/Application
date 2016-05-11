<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_c387ca0028e010e709dd2b0cdefb6fe1a1a1d23f7df5b03ac34e9ce255be78bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_fdd6a871a555794766edfea8b1f782479baa01756f97dd7023ee2fc5564a02c3 = $this->env->getExtension("native_profiler");
        $__internal_fdd6a871a555794766edfea8b1f782479baa01756f97dd7023ee2fc5564a02c3->enter($__internal_fdd6a871a555794766edfea8b1f782479baa01756f97dd7023ee2fc5564a02c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdd6a871a555794766edfea8b1f782479baa01756f97dd7023ee2fc5564a02c3->leave($__internal_fdd6a871a555794766edfea8b1f782479baa01756f97dd7023ee2fc5564a02c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ede1bc8e6259a65d01695c9e8ab354acc9b766383d29e0f08573a65b6a251f77 = $this->env->getExtension("native_profiler");
        $__internal_ede1bc8e6259a65d01695c9e8ab354acc9b766383d29e0f08573a65b6a251f77->enter($__internal_ede1bc8e6259a65d01695c9e8ab354acc9b766383d29e0f08573a65b6a251f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_ede1bc8e6259a65d01695c9e8ab354acc9b766383d29e0f08573a65b6a251f77->leave($__internal_ede1bc8e6259a65d01695c9e8ab354acc9b766383d29e0f08573a65b6a251f77_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
