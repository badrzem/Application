<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_d22ff52f8e39845a2d76982e53f477b72a8201db4f752df4188e59d744bae23f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_857d835f86d95e6149d59073b93efbc4367b7032657a9d54e43267e91178a9ec = $this->env->getExtension("native_profiler");
        $__internal_857d835f86d95e6149d59073b93efbc4367b7032657a9d54e43267e91178a9ec->enter($__internal_857d835f86d95e6149d59073b93efbc4367b7032657a9d54e43267e91178a9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_857d835f86d95e6149d59073b93efbc4367b7032657a9d54e43267e91178a9ec->leave($__internal_857d835f86d95e6149d59073b93efbc4367b7032657a9d54e43267e91178a9ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b29be409ac98fc3275176cf54bb36c9bd21d0ee83c9359275e2b8a5609463f5 = $this->env->getExtension("native_profiler");
        $__internal_8b29be409ac98fc3275176cf54bb36c9bd21d0ee83c9359275e2b8a5609463f5->enter($__internal_8b29be409ac98fc3275176cf54bb36c9bd21d0ee83c9359275e2b8a5609463f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_8b29be409ac98fc3275176cf54bb36c9bd21d0ee83c9359275e2b8a5609463f5->leave($__internal_8b29be409ac98fc3275176cf54bb36c9bd21d0ee83c9359275e2b8a5609463f5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
