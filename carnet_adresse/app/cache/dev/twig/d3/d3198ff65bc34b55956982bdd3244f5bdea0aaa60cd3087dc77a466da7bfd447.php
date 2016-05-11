<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1da440269532d3f968488678d9a0fa63063adbad52545c06ba1ca03a143f5d0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_56536858c444bdb73e29ebdeddd7584dc6464ee548ff8b2bb02f90ae85ad314c = $this->env->getExtension("native_profiler");
        $__internal_56536858c444bdb73e29ebdeddd7584dc6464ee548ff8b2bb02f90ae85ad314c->enter($__internal_56536858c444bdb73e29ebdeddd7584dc6464ee548ff8b2bb02f90ae85ad314c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56536858c444bdb73e29ebdeddd7584dc6464ee548ff8b2bb02f90ae85ad314c->leave($__internal_56536858c444bdb73e29ebdeddd7584dc6464ee548ff8b2bb02f90ae85ad314c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1edb59a66bd3104fb8816d7d7905cfa9559b7cb903263d9d0d6d563bd4b0592a = $this->env->getExtension("native_profiler");
        $__internal_1edb59a66bd3104fb8816d7d7905cfa9559b7cb903263d9d0d6d563bd4b0592a->enter($__internal_1edb59a66bd3104fb8816d7d7905cfa9559b7cb903263d9d0d6d563bd4b0592a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1edb59a66bd3104fb8816d7d7905cfa9559b7cb903263d9d0d6d563bd4b0592a->leave($__internal_1edb59a66bd3104fb8816d7d7905cfa9559b7cb903263d9d0d6d563bd4b0592a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e571486ccfa32f94a5b02bd0d4eb2d387b02facf92b413bb734c75613a9b0ff8 = $this->env->getExtension("native_profiler");
        $__internal_e571486ccfa32f94a5b02bd0d4eb2d387b02facf92b413bb734c75613a9b0ff8->enter($__internal_e571486ccfa32f94a5b02bd0d4eb2d387b02facf92b413bb734c75613a9b0ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e571486ccfa32f94a5b02bd0d4eb2d387b02facf92b413bb734c75613a9b0ff8->leave($__internal_e571486ccfa32f94a5b02bd0d4eb2d387b02facf92b413bb734c75613a9b0ff8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1886e51e742d91faca551a6ecbde6b7999959cd96bd3eec56216b88c7a44dc1e = $this->env->getExtension("native_profiler");
        $__internal_1886e51e742d91faca551a6ecbde6b7999959cd96bd3eec56216b88c7a44dc1e->enter($__internal_1886e51e742d91faca551a6ecbde6b7999959cd96bd3eec56216b88c7a44dc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1886e51e742d91faca551a6ecbde6b7999959cd96bd3eec56216b88c7a44dc1e->leave($__internal_1886e51e742d91faca551a6ecbde6b7999959cd96bd3eec56216b88c7a44dc1e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
