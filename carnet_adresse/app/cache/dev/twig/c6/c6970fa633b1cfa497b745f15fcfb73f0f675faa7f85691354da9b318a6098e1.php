<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c4845eebd3bccff473eca0b628c39d6f1a49807bf6dd615942b3e37c275807fe extends Twig_Template
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
        $__internal_d37cfa04e4acc217474333261c95ac43e13838136f682969edf540ed8421eb0d = $this->env->getExtension("native_profiler");
        $__internal_d37cfa04e4acc217474333261c95ac43e13838136f682969edf540ed8421eb0d->enter($__internal_d37cfa04e4acc217474333261c95ac43e13838136f682969edf540ed8421eb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d37cfa04e4acc217474333261c95ac43e13838136f682969edf540ed8421eb0d->leave($__internal_d37cfa04e4acc217474333261c95ac43e13838136f682969edf540ed8421eb0d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
