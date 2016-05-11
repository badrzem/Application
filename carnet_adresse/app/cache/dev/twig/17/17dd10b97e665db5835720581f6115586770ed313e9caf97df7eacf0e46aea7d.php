<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9796f3ebbf0c1ede3fdcd82922b6ca86d89c1cd365edfbbc6a945af4acd5105a extends Twig_Template
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
        $__internal_ddfe3ba4305516cbeecc540bc68c4194b92e9567e72a49f7359bfc58f71277cd = $this->env->getExtension("native_profiler");
        $__internal_ddfe3ba4305516cbeecc540bc68c4194b92e9567e72a49f7359bfc58f71277cd->enter($__internal_ddfe3ba4305516cbeecc540bc68c4194b92e9567e72a49f7359bfc58f71277cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ddfe3ba4305516cbeecc540bc68c4194b92e9567e72a49f7359bfc58f71277cd->leave($__internal_ddfe3ba4305516cbeecc540bc68c4194b92e9567e72a49f7359bfc58f71277cd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
