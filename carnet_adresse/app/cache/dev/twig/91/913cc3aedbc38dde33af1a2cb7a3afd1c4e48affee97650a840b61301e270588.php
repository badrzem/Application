<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_83b5f793ff3ab2992526195213cbdaae4e4876936f6e6f5610a3992a3045c3d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_df4ec16a100cebf3088d9802f17cbb3bc169ec96520b217ff8e49a22da03d6d4 = $this->env->getExtension("native_profiler");
        $__internal_df4ec16a100cebf3088d9802f17cbb3bc169ec96520b217ff8e49a22da03d6d4->enter($__internal_df4ec16a100cebf3088d9802f17cbb3bc169ec96520b217ff8e49a22da03d6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df4ec16a100cebf3088d9802f17cbb3bc169ec96520b217ff8e49a22da03d6d4->leave($__internal_df4ec16a100cebf3088d9802f17cbb3bc169ec96520b217ff8e49a22da03d6d4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_462661ce9035fe948d7ad805b2971580667e030cae2982181b937e4a92aa9fbf = $this->env->getExtension("native_profiler");
        $__internal_462661ce9035fe948d7ad805b2971580667e030cae2982181b937e4a92aa9fbf->enter($__internal_462661ce9035fe948d7ad805b2971580667e030cae2982181b937e4a92aa9fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_462661ce9035fe948d7ad805b2971580667e030cae2982181b937e4a92aa9fbf->leave($__internal_462661ce9035fe948d7ad805b2971580667e030cae2982181b937e4a92aa9fbf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
