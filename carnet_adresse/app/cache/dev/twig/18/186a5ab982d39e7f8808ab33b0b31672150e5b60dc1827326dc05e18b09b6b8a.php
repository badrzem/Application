<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_b5524e691f83dbb42b8b579c1c06f3964ddc1c01c5b68fc3842839758c1a1abf extends Twig_Template
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
        $__internal_ba585543de45be6c4cfd8e2ce96e5cff9e970d97047c2f36e7f7bb030b15d167 = $this->env->getExtension("native_profiler");
        $__internal_ba585543de45be6c4cfd8e2ce96e5cff9e970d97047c2f36e7f7bb030b15d167->enter($__internal_ba585543de45be6c4cfd8e2ce96e5cff9e970d97047c2f36e7f7bb030b15d167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ba585543de45be6c4cfd8e2ce96e5cff9e970d97047c2f36e7f7bb030b15d167->leave($__internal_ba585543de45be6c4cfd8e2ce96e5cff9e970d97047c2f36e7f7bb030b15d167_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e5f5d4c1cf17afff7fe99cca20bebb2e00cf3813f4d891c8a8e730846279d43b = $this->env->getExtension("native_profiler");
        $__internal_e5f5d4c1cf17afff7fe99cca20bebb2e00cf3813f4d891c8a8e730846279d43b->enter($__internal_e5f5d4c1cf17afff7fe99cca20bebb2e00cf3813f4d891c8a8e730846279d43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e5f5d4c1cf17afff7fe99cca20bebb2e00cf3813f4d891c8a8e730846279d43b->leave($__internal_e5f5d4c1cf17afff7fe99cca20bebb2e00cf3813f4d891c8a8e730846279d43b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_70bb689e206d083a947f0ddc0d24fced97b54f727e2d3c8971ab0ca8b599c5c6 = $this->env->getExtension("native_profiler");
        $__internal_70bb689e206d083a947f0ddc0d24fced97b54f727e2d3c8971ab0ca8b599c5c6->enter($__internal_70bb689e206d083a947f0ddc0d24fced97b54f727e2d3c8971ab0ca8b599c5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_70bb689e206d083a947f0ddc0d24fced97b54f727e2d3c8971ab0ca8b599c5c6->leave($__internal_70bb689e206d083a947f0ddc0d24fced97b54f727e2d3c8971ab0ca8b599c5c6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_db1b9d35e6aa4395066dd424e7ace0c52fb6caeddfd28d4cb8d1050d50d770cf = $this->env->getExtension("native_profiler");
        $__internal_db1b9d35e6aa4395066dd424e7ace0c52fb6caeddfd28d4cb8d1050d50d770cf->enter($__internal_db1b9d35e6aa4395066dd424e7ace0c52fb6caeddfd28d4cb8d1050d50d770cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_db1b9d35e6aa4395066dd424e7ace0c52fb6caeddfd28d4cb8d1050d50d770cf->leave($__internal_db1b9d35e6aa4395066dd424e7ace0c52fb6caeddfd28d4cb8d1050d50d770cf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
