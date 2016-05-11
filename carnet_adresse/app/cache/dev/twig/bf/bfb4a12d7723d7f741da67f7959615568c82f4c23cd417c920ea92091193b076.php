<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_a8d9827aa25f617ab459faf370bcab9361538b7e2af3f91eabcfe3527efe836a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_8840a303991ebf3531128c0b4c830cecbe55cfd0623a504e7ac028608fe25f23 = $this->env->getExtension("native_profiler");
        $__internal_8840a303991ebf3531128c0b4c830cecbe55cfd0623a504e7ac028608fe25f23->enter($__internal_8840a303991ebf3531128c0b4c830cecbe55cfd0623a504e7ac028608fe25f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8840a303991ebf3531128c0b4c830cecbe55cfd0623a504e7ac028608fe25f23->leave($__internal_8840a303991ebf3531128c0b4c830cecbe55cfd0623a504e7ac028608fe25f23_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15b8cf7c0bcbf207687788ee44ea8113c724800f219f31473bb8af3c6c017d4a = $this->env->getExtension("native_profiler");
        $__internal_15b8cf7c0bcbf207687788ee44ea8113c724800f219f31473bb8af3c6c017d4a->enter($__internal_15b8cf7c0bcbf207687788ee44ea8113c724800f219f31473bb8af3c6c017d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_15b8cf7c0bcbf207687788ee44ea8113c724800f219f31473bb8af3c6c017d4a->leave($__internal_15b8cf7c0bcbf207687788ee44ea8113c724800f219f31473bb8af3c6c017d4a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
