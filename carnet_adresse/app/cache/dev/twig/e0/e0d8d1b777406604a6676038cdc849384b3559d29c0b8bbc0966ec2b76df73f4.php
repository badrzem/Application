<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_255d17512df66bd1c90c896c78c2fe45b8c0708b6707e2634e5fde5c684b745c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_2712f7605f56e25588248e91fc9b0d9e7ba91f0e237a1aa3752e17993fca0ab0 = $this->env->getExtension("native_profiler");
        $__internal_2712f7605f56e25588248e91fc9b0d9e7ba91f0e237a1aa3752e17993fca0ab0->enter($__internal_2712f7605f56e25588248e91fc9b0d9e7ba91f0e237a1aa3752e17993fca0ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2712f7605f56e25588248e91fc9b0d9e7ba91f0e237a1aa3752e17993fca0ab0->leave($__internal_2712f7605f56e25588248e91fc9b0d9e7ba91f0e237a1aa3752e17993fca0ab0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a6d32cdd99eb7885cec3424803324cad8ca5546afe5704d26cd7d24ad8522cd = $this->env->getExtension("native_profiler");
        $__internal_7a6d32cdd99eb7885cec3424803324cad8ca5546afe5704d26cd7d24ad8522cd->enter($__internal_7a6d32cdd99eb7885cec3424803324cad8ca5546afe5704d26cd7d24ad8522cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7a6d32cdd99eb7885cec3424803324cad8ca5546afe5704d26cd7d24ad8522cd->leave($__internal_7a6d32cdd99eb7885cec3424803324cad8ca5546afe5704d26cd7d24ad8522cd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d3949de2018b423c2bd370a0dce568ccb7e7722c5db2bc3cb5c9cf903f6e15d = $this->env->getExtension("native_profiler");
        $__internal_3d3949de2018b423c2bd370a0dce568ccb7e7722c5db2bc3cb5c9cf903f6e15d->enter($__internal_3d3949de2018b423c2bd370a0dce568ccb7e7722c5db2bc3cb5c9cf903f6e15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3d3949de2018b423c2bd370a0dce568ccb7e7722c5db2bc3cb5c9cf903f6e15d->leave($__internal_3d3949de2018b423c2bd370a0dce568ccb7e7722c5db2bc3cb5c9cf903f6e15d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b8a04428a0a9fc389e8667d5cee0f2b326c1675b6aeaa56a382b169003548cf = $this->env->getExtension("native_profiler");
        $__internal_4b8a04428a0a9fc389e8667d5cee0f2b326c1675b6aeaa56a382b169003548cf->enter($__internal_4b8a04428a0a9fc389e8667d5cee0f2b326c1675b6aeaa56a382b169003548cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4b8a04428a0a9fc389e8667d5cee0f2b326c1675b6aeaa56a382b169003548cf->leave($__internal_4b8a04428a0a9fc389e8667d5cee0f2b326c1675b6aeaa56a382b169003548cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
