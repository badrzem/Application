<?php

/* @TSContact/Default/deletecontact.html.twig */
class __TwigTemplate_ff6744020cef8c94d42157516d177b2438c4dfa522e0e0fcf0ec067fddc500fe extends Twig_Template
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
        $__internal_d077f890ea7ed25b4bb1aba5ebedf18e5a076f6c857a3ab9dbf2f7dc76904c61 = $this->env->getExtension("native_profiler");
        $__internal_d077f890ea7ed25b4bb1aba5ebedf18e5a076f6c857a3ab9dbf2f7dc76904c61->enter($__internal_d077f890ea7ed25b4bb1aba5ebedf18e5a076f6c857a3ab9dbf2f7dc76904c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSContact/Default/deletecontact.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_contact_supprimer_contact", array("id" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"submit\" value=\"Oui\" class=\"btn btn-danger pull-right\">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>";
        
        $__internal_d077f890ea7ed25b4bb1aba5ebedf18e5a076f6c857a3ab9dbf2f7dc76904c61->leave($__internal_d077f890ea7ed25b4bb1aba5ebedf18e5a076f6c857a3ab9dbf2f7dc76904c61_prof);

    }

    public function getTemplateName()
    {
        return "@TSContact/Default/deletecontact.html.twig";
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
/* <form action="{{ path('ts_contact_supprimer_contact', {'id': contact.id}) }}" method="post">*/
/*     <input type="submit" value="Oui" class="btn btn-danger pull-right">*/
/*     {{form_rest(form)}}*/
/* </form>*/
