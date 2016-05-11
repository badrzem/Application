<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_e7984c2e461a586fe8ec1f9f8c7c93269b7ecd3761b1f19f4fbcf4a92bdace16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_dd17fc2f09e711832afbb5d632c968c4024e9b0d6dab325dc6939575f5242f11 = $this->env->getExtension("native_profiler");
        $__internal_dd17fc2f09e711832afbb5d632c968c4024e9b0d6dab325dc6939575f5242f11->enter($__internal_dd17fc2f09e711832afbb5d632c968c4024e9b0d6dab325dc6939575f5242f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd17fc2f09e711832afbb5d632c968c4024e9b0d6dab325dc6939575f5242f11->leave($__internal_dd17fc2f09e711832afbb5d632c968c4024e9b0d6dab325dc6939575f5242f11_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cde0d0564c916756da621a370c6319bb0ff0d993cbb2149e493c20e6dd387447 = $this->env->getExtension("native_profiler");
        $__internal_cde0d0564c916756da621a370c6319bb0ff0d993cbb2149e493c20e6dd387447->enter($__internal_cde0d0564c916756da621a370c6319bb0ff0d993cbb2149e493c20e6dd387447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_cde0d0564c916756da621a370c6319bb0ff0d993cbb2149e493c20e6dd387447->leave($__internal_cde0d0564c916756da621a370c6319bb0ff0d993cbb2149e493c20e6dd387447_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
