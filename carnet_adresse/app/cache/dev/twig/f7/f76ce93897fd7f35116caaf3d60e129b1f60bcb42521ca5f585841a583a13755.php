<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_2c70960e153af7f5d314b6cdf284e983d935d1e989e5b5232c18ba9253f01ed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50c318e2763bba755782b9e1e2648901ddcacff063ca8e4ac5d8995d97384047 = $this->env->getExtension("native_profiler");
        $__internal_50c318e2763bba755782b9e1e2648901ddcacff063ca8e4ac5d8995d97384047->enter($__internal_50c318e2763bba755782b9e1e2648901ddcacff063ca8e4ac5d8995d97384047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50c318e2763bba755782b9e1e2648901ddcacff063ca8e4ac5d8995d97384047->leave($__internal_50c318e2763bba755782b9e1e2648901ddcacff063ca8e4ac5d8995d97384047_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb74f0681a72120a75e39e548d91e0ab815ba2a35ed0b8b8cee0e57988569af6 = $this->env->getExtension("native_profiler");
        $__internal_eb74f0681a72120a75e39e548d91e0ab815ba2a35ed0b8b8cee0e57988569af6->enter($__internal_eb74f0681a72120a75e39e548d91e0ab815ba2a35ed0b8b8cee0e57988569af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_eb74f0681a72120a75e39e548d91e0ab815ba2a35ed0b8b8cee0e57988569af6->leave($__internal_eb74f0681a72120a75e39e548d91e0ab815ba2a35ed0b8b8cee0e57988569af6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_815f56923ef71b78a42a6e03b07e9d4fa29fa7827cc20b60cbd35b6f345f4402 = $this->env->getExtension("native_profiler");
        $__internal_815f56923ef71b78a42a6e03b07e9d4fa29fa7827cc20b60cbd35b6f345f4402->enter($__internal_815f56923ef71b78a42a6e03b07e9d4fa29fa7827cc20b60cbd35b6f345f4402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_815f56923ef71b78a42a6e03b07e9d4fa29fa7827cc20b60cbd35b6f345f4402->leave($__internal_815f56923ef71b78a42a6e03b07e9d4fa29fa7827cc20b60cbd35b6f345f4402_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
