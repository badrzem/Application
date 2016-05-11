<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_ff6ba5830d8885a9505591348c0ac21f3cc9a84c205a426a3e02e44d5c8d73fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_8d9021516074c373f0c8862cb0410b0e2fabfaa4e1e67c0b68bbe13ef066fa7b = $this->env->getExtension("native_profiler");
        $__internal_8d9021516074c373f0c8862cb0410b0e2fabfaa4e1e67c0b68bbe13ef066fa7b->enter($__internal_8d9021516074c373f0c8862cb0410b0e2fabfaa4e1e67c0b68bbe13ef066fa7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d9021516074c373f0c8862cb0410b0e2fabfaa4e1e67c0b68bbe13ef066fa7b->leave($__internal_8d9021516074c373f0c8862cb0410b0e2fabfaa4e1e67c0b68bbe13ef066fa7b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07ade83be67d105faa59972d5cf659a66e881694ffe2258d7856a25b509414b5 = $this->env->getExtension("native_profiler");
        $__internal_07ade83be67d105faa59972d5cf659a66e881694ffe2258d7856a25b509414b5->enter($__internal_07ade83be67d105faa59972d5cf659a66e881694ffe2258d7856a25b509414b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_07ade83be67d105faa59972d5cf659a66e881694ffe2258d7856a25b509414b5->leave($__internal_07ade83be67d105faa59972d5cf659a66e881694ffe2258d7856a25b509414b5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
