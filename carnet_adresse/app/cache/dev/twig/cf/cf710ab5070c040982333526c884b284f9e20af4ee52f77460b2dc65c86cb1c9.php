<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7c2c8f6506a1eae54230fdab9f2db67a32abe52fe3a4dcb8c17596835da319a2 extends Twig_Template
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
        $__internal_bb445a8d780804d9be40689bda4bfc7cc9b7e278deaa000150d7c220a8a9272c = $this->env->getExtension("native_profiler");
        $__internal_bb445a8d780804d9be40689bda4bfc7cc9b7e278deaa000150d7c220a8a9272c->enter($__internal_bb445a8d780804d9be40689bda4bfc7cc9b7e278deaa000150d7c220a8a9272c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_bb445a8d780804d9be40689bda4bfc7cc9b7e278deaa000150d7c220a8a9272c->leave($__internal_bb445a8d780804d9be40689bda4bfc7cc9b7e278deaa000150d7c220a8a9272c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
