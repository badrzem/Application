<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4a5586f56c8d87fd4ecce57ab48551c6c5b57026dd4ec0bd26b5fffce2f9dbc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_729f1d6b9f0dff1833699d3ed4858450192822179d2f67db2c381e2aa03735b6 = $this->env->getExtension("native_profiler");
        $__internal_729f1d6b9f0dff1833699d3ed4858450192822179d2f67db2c381e2aa03735b6->enter($__internal_729f1d6b9f0dff1833699d3ed4858450192822179d2f67db2c381e2aa03735b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_729f1d6b9f0dff1833699d3ed4858450192822179d2f67db2c381e2aa03735b6->leave($__internal_729f1d6b9f0dff1833699d3ed4858450192822179d2f67db2c381e2aa03735b6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e35fdc3bdf5387bc7c5b75087cbed36bb2549fc47ef70b8407baef2780471de3 = $this->env->getExtension("native_profiler");
        $__internal_e35fdc3bdf5387bc7c5b75087cbed36bb2549fc47ef70b8407baef2780471de3->enter($__internal_e35fdc3bdf5387bc7c5b75087cbed36bb2549fc47ef70b8407baef2780471de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e35fdc3bdf5387bc7c5b75087cbed36bb2549fc47ef70b8407baef2780471de3->leave($__internal_e35fdc3bdf5387bc7c5b75087cbed36bb2549fc47ef70b8407baef2780471de3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_247cebbbf66ec333fba8541d0d08400396011fa74529741268f66a29af7f34ea = $this->env->getExtension("native_profiler");
        $__internal_247cebbbf66ec333fba8541d0d08400396011fa74529741268f66a29af7f34ea->enter($__internal_247cebbbf66ec333fba8541d0d08400396011fa74529741268f66a29af7f34ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_247cebbbf66ec333fba8541d0d08400396011fa74529741268f66a29af7f34ea->leave($__internal_247cebbbf66ec333fba8541d0d08400396011fa74529741268f66a29af7f34ea_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_42e322b5e1f2a5dbc8b3eba9d2d9a2188bbd9e7a03b693a6661df693564e18c0 = $this->env->getExtension("native_profiler");
        $__internal_42e322b5e1f2a5dbc8b3eba9d2d9a2188bbd9e7a03b693a6661df693564e18c0->enter($__internal_42e322b5e1f2a5dbc8b3eba9d2d9a2188bbd9e7a03b693a6661df693564e18c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_42e322b5e1f2a5dbc8b3eba9d2d9a2188bbd9e7a03b693a6661df693564e18c0->leave($__internal_42e322b5e1f2a5dbc8b3eba9d2d9a2188bbd9e7a03b693a6661df693564e18c0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
