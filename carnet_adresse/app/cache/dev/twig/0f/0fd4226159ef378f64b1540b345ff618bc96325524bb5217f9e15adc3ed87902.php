<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c6f2e611e2a96a18c28fc082802eb808e1eff5a3b539c23ab92969e8b78dfc4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_aa2958e604a91ccdd040f6eb6df46894ef2039df8d3c4754f7c2f40f478a062d = $this->env->getExtension("native_profiler");
        $__internal_aa2958e604a91ccdd040f6eb6df46894ef2039df8d3c4754f7c2f40f478a062d->enter($__internal_aa2958e604a91ccdd040f6eb6df46894ef2039df8d3c4754f7c2f40f478a062d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa2958e604a91ccdd040f6eb6df46894ef2039df8d3c4754f7c2f40f478a062d->leave($__internal_aa2958e604a91ccdd040f6eb6df46894ef2039df8d3c4754f7c2f40f478a062d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_66631beb6f2ae7cb03c7c93e437fb3b9bcf2f6de9763abc7059000920d76f32c = $this->env->getExtension("native_profiler");
        $__internal_66631beb6f2ae7cb03c7c93e437fb3b9bcf2f6de9763abc7059000920d76f32c->enter($__internal_66631beb6f2ae7cb03c7c93e437fb3b9bcf2f6de9763abc7059000920d76f32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_66631beb6f2ae7cb03c7c93e437fb3b9bcf2f6de9763abc7059000920d76f32c->leave($__internal_66631beb6f2ae7cb03c7c93e437fb3b9bcf2f6de9763abc7059000920d76f32c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_01c75a174535d4a3c156fd12dd3baf17256874c5306cf72939eec03859597894 = $this->env->getExtension("native_profiler");
        $__internal_01c75a174535d4a3c156fd12dd3baf17256874c5306cf72939eec03859597894->enter($__internal_01c75a174535d4a3c156fd12dd3baf17256874c5306cf72939eec03859597894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_01c75a174535d4a3c156fd12dd3baf17256874c5306cf72939eec03859597894->leave($__internal_01c75a174535d4a3c156fd12dd3baf17256874c5306cf72939eec03859597894_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
