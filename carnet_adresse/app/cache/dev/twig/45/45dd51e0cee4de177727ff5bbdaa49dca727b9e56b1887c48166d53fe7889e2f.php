<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_f1459a0198d1e354b897b8fe9aa785efc28d1065d8faae3f7b3ea1d3d05fa641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_4e0acf02d7f839882f67d83b12d03a643f51450aa540c55f07f4df5aef774f8d = $this->env->getExtension("native_profiler");
        $__internal_4e0acf02d7f839882f67d83b12d03a643f51450aa540c55f07f4df5aef774f8d->enter($__internal_4e0acf02d7f839882f67d83b12d03a643f51450aa540c55f07f4df5aef774f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e0acf02d7f839882f67d83b12d03a643f51450aa540c55f07f4df5aef774f8d->leave($__internal_4e0acf02d7f839882f67d83b12d03a643f51450aa540c55f07f4df5aef774f8d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b24d237d0fb76cd486913e32b7345dc8110b8bb3d1a601ead24fa778c7b9ed0b = $this->env->getExtension("native_profiler");
        $__internal_b24d237d0fb76cd486913e32b7345dc8110b8bb3d1a601ead24fa778c7b9ed0b->enter($__internal_b24d237d0fb76cd486913e32b7345dc8110b8bb3d1a601ead24fa778c7b9ed0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b24d237d0fb76cd486913e32b7345dc8110b8bb3d1a601ead24fa778c7b9ed0b->leave($__internal_b24d237d0fb76cd486913e32b7345dc8110b8bb3d1a601ead24fa778c7b9ed0b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
