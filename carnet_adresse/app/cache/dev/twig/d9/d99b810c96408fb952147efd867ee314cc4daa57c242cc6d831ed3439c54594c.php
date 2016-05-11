<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a9d644545ad2a110b45f1a3c8f451693d31f1276751e9309c6719c98ba3ac52c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f80c634067b40abff9f027c19a2d2d81f0edce84ae83968ca0111e380f96f1d4 = $this->env->getExtension("native_profiler");
        $__internal_f80c634067b40abff9f027c19a2d2d81f0edce84ae83968ca0111e380f96f1d4->enter($__internal_f80c634067b40abff9f027c19a2d2d81f0edce84ae83968ca0111e380f96f1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f80c634067b40abff9f027c19a2d2d81f0edce84ae83968ca0111e380f96f1d4->leave($__internal_f80c634067b40abff9f027c19a2d2d81f0edce84ae83968ca0111e380f96f1d4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d85e38fe11bda3230f5e1bed3a541e0ecde9c7ca4051a50e855df65c55d1604 = $this->env->getExtension("native_profiler");
        $__internal_4d85e38fe11bda3230f5e1bed3a541e0ecde9c7ca4051a50e855df65c55d1604->enter($__internal_4d85e38fe11bda3230f5e1bed3a541e0ecde9c7ca4051a50e855df65c55d1604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4d85e38fe11bda3230f5e1bed3a541e0ecde9c7ca4051a50e855df65c55d1604->leave($__internal_4d85e38fe11bda3230f5e1bed3a541e0ecde9c7ca4051a50e855df65c55d1604_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2041e2d377a31149c1b13d5e24645a4a7ac94e7ce6b2996f9c1b529dd83dba1a = $this->env->getExtension("native_profiler");
        $__internal_2041e2d377a31149c1b13d5e24645a4a7ac94e7ce6b2996f9c1b529dd83dba1a->enter($__internal_2041e2d377a31149c1b13d5e24645a4a7ac94e7ce6b2996f9c1b529dd83dba1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2041e2d377a31149c1b13d5e24645a4a7ac94e7ce6b2996f9c1b529dd83dba1a->leave($__internal_2041e2d377a31149c1b13d5e24645a4a7ac94e7ce6b2996f9c1b529dd83dba1a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3370d33fb1177f3a36d114dd9b0980b75390fc62d05388b0fec612b43cf504cc = $this->env->getExtension("native_profiler");
        $__internal_3370d33fb1177f3a36d114dd9b0980b75390fc62d05388b0fec612b43cf504cc->enter($__internal_3370d33fb1177f3a36d114dd9b0980b75390fc62d05388b0fec612b43cf504cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3370d33fb1177f3a36d114dd9b0980b75390fc62d05388b0fec612b43cf504cc->leave($__internal_3370d33fb1177f3a36d114dd9b0980b75390fc62d05388b0fec612b43cf504cc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
