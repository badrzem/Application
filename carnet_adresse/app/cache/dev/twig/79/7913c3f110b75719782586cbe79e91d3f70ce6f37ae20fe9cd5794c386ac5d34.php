<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_dce432031c005927781bd9bcf8de8fa91aef7f0d750c6bf9cfb926f47a1c273b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_d8d56c09de42855e076740df18603dcc0ddc725de11a2df8d6fde80f6a3aa376 = $this->env->getExtension("native_profiler");
        $__internal_d8d56c09de42855e076740df18603dcc0ddc725de11a2df8d6fde80f6a3aa376->enter($__internal_d8d56c09de42855e076740df18603dcc0ddc725de11a2df8d6fde80f6a3aa376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8d56c09de42855e076740df18603dcc0ddc725de11a2df8d6fde80f6a3aa376->leave($__internal_d8d56c09de42855e076740df18603dcc0ddc725de11a2df8d6fde80f6a3aa376_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25ac6dd6c06c4ced1f3d92ddb044cbaf3dd6bebe39ebd397785d83b9c2e22e50 = $this->env->getExtension("native_profiler");
        $__internal_25ac6dd6c06c4ced1f3d92ddb044cbaf3dd6bebe39ebd397785d83b9c2e22e50->enter($__internal_25ac6dd6c06c4ced1f3d92ddb044cbaf3dd6bebe39ebd397785d83b9c2e22e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_25ac6dd6c06c4ced1f3d92ddb044cbaf3dd6bebe39ebd397785d83b9c2e22e50->leave($__internal_25ac6dd6c06c4ced1f3d92ddb044cbaf3dd6bebe39ebd397785d83b9c2e22e50_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
