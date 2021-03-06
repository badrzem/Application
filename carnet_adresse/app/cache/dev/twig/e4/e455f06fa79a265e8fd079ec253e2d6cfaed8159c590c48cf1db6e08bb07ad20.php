<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_ec79c0c512f15e0a26040d533d19ebbb8db3e5d9e52bb3d91e124975399451b6 extends Twig_Template
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
        $__internal_db739246ab999e1ffb750f6724a44d40c964aa6b22012385d378786ed916a620 = $this->env->getExtension("native_profiler");
        $__internal_db739246ab999e1ffb750f6724a44d40c964aa6b22012385d378786ed916a620->enter($__internal_db739246ab999e1ffb750f6724a44d40c964aa6b22012385d378786ed916a620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_db739246ab999e1ffb750f6724a44d40c964aa6b22012385d378786ed916a620->leave($__internal_db739246ab999e1ffb750f6724a44d40c964aa6b22012385d378786ed916a620_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_55b1398ea923552fe1065b28209b88871cfa0311988d5941f2adcf7e0206f05e = $this->env->getExtension("native_profiler");
        $__internal_55b1398ea923552fe1065b28209b88871cfa0311988d5941f2adcf7e0206f05e->enter($__internal_55b1398ea923552fe1065b28209b88871cfa0311988d5941f2adcf7e0206f05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_55b1398ea923552fe1065b28209b88871cfa0311988d5941f2adcf7e0206f05e->leave($__internal_55b1398ea923552fe1065b28209b88871cfa0311988d5941f2adcf7e0206f05e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_71b081a987b3e7e0594de5a5925e9e86bbd95beb2117f397397852a9796652cf = $this->env->getExtension("native_profiler");
        $__internal_71b081a987b3e7e0594de5a5925e9e86bbd95beb2117f397397852a9796652cf->enter($__internal_71b081a987b3e7e0594de5a5925e9e86bbd95beb2117f397397852a9796652cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_71b081a987b3e7e0594de5a5925e9e86bbd95beb2117f397397852a9796652cf->leave($__internal_71b081a987b3e7e0594de5a5925e9e86bbd95beb2117f397397852a9796652cf_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7dcb20e337df97df88349627c92f26b9f61f3dcece7e01ee221a12a75b2bc448 = $this->env->getExtension("native_profiler");
        $__internal_7dcb20e337df97df88349627c92f26b9f61f3dcece7e01ee221a12a75b2bc448->enter($__internal_7dcb20e337df97df88349627c92f26b9f61f3dcece7e01ee221a12a75b2bc448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7dcb20e337df97df88349627c92f26b9f61f3dcece7e01ee221a12a75b2bc448->leave($__internal_7dcb20e337df97df88349627c92f26b9f61f3dcece7e01ee221a12a75b2bc448_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
