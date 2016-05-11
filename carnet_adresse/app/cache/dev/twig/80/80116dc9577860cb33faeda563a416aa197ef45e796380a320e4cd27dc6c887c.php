<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_c71e0f25f1728384dcc80e1a2210d155d77e8164c8d10c82913f1546088edcc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71e1c9e5342ae9ceb309b956ad88aca3a0d1371e303b5615fb34e7c416fef4d5 = $this->env->getExtension("native_profiler");
        $__internal_71e1c9e5342ae9ceb309b956ad88aca3a0d1371e303b5615fb34e7c416fef4d5->enter($__internal_71e1c9e5342ae9ceb309b956ad88aca3a0d1371e303b5615fb34e7c416fef4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_71e1c9e5342ae9ceb309b956ad88aca3a0d1371e303b5615fb34e7c416fef4d5->leave($__internal_71e1c9e5342ae9ceb309b956ad88aca3a0d1371e303b5615fb34e7c416fef4d5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
