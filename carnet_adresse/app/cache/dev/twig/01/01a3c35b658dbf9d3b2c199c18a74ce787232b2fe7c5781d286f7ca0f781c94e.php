<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ad5340ec523b9e203e91bda26837afb8f4709ef3a5c177e44264aef3a95575d9 extends Twig_Template
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
        $__internal_85d2740f7a839604c06cb0d172058dd43e790b1d428ffd234600ca31fd440654 = $this->env->getExtension("native_profiler");
        $__internal_85d2740f7a839604c06cb0d172058dd43e790b1d428ffd234600ca31fd440654->enter($__internal_85d2740f7a839604c06cb0d172058dd43e790b1d428ffd234600ca31fd440654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_85d2740f7a839604c06cb0d172058dd43e790b1d428ffd234600ca31fd440654->leave($__internal_85d2740f7a839604c06cb0d172058dd43e790b1d428ffd234600ca31fd440654_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c98aff1c90de6dce33c3c7abf13415c7cd3dc36ade09ee6ad0538b0af035d2ef = $this->env->getExtension("native_profiler");
        $__internal_c98aff1c90de6dce33c3c7abf13415c7cd3dc36ade09ee6ad0538b0af035d2ef->enter($__internal_c98aff1c90de6dce33c3c7abf13415c7cd3dc36ade09ee6ad0538b0af035d2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_c98aff1c90de6dce33c3c7abf13415c7cd3dc36ade09ee6ad0538b0af035d2ef->leave($__internal_c98aff1c90de6dce33c3c7abf13415c7cd3dc36ade09ee6ad0538b0af035d2ef_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9f87b61db594304f3ff1573ebdd8e84f486e697d3561ce83411c6ce7196f511c = $this->env->getExtension("native_profiler");
        $__internal_9f87b61db594304f3ff1573ebdd8e84f486e697d3561ce83411c6ce7196f511c->enter($__internal_9f87b61db594304f3ff1573ebdd8e84f486e697d3561ce83411c6ce7196f511c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9f87b61db594304f3ff1573ebdd8e84f486e697d3561ce83411c6ce7196f511c->leave($__internal_9f87b61db594304f3ff1573ebdd8e84f486e697d3561ce83411c6ce7196f511c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a43c98da18f8d2c065ee82ad333a4404bb91dee5e87a8836f4e9a109d535d35c = $this->env->getExtension("native_profiler");
        $__internal_a43c98da18f8d2c065ee82ad333a4404bb91dee5e87a8836f4e9a109d535d35c->enter($__internal_a43c98da18f8d2c065ee82ad333a4404bb91dee5e87a8836f4e9a109d535d35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a43c98da18f8d2c065ee82ad333a4404bb91dee5e87a8836f4e9a109d535d35c->leave($__internal_a43c98da18f8d2c065ee82ad333a4404bb91dee5e87a8836f4e9a109d535d35c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
