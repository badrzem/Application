<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_5a58dc8809732c57fc708296bc2d3b5168376a36b8338af786a58a1d7c810b1c extends Twig_Template
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
        $__internal_d583bdfdad4a370636fa5eefcabb18baacac9f8d0a5b743651efdf41ffd3f575 = $this->env->getExtension("native_profiler");
        $__internal_d583bdfdad4a370636fa5eefcabb18baacac9f8d0a5b743651efdf41ffd3f575->enter($__internal_d583bdfdad4a370636fa5eefcabb18baacac9f8d0a5b743651efdf41ffd3f575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_d583bdfdad4a370636fa5eefcabb18baacac9f8d0a5b743651efdf41ffd3f575->leave($__internal_d583bdfdad4a370636fa5eefcabb18baacac9f8d0a5b743651efdf41ffd3f575_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
