<?php

/* TSContactBundle:Default:deletecontact.html.twig */
class __TwigTemplate_6bf37eb98208a4e21987b1ff54ddc49726bd2421ad20205da644a5aacb718dde extends Twig_Template
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
        $__internal_add5f0b93920864045c881f200b0c8c58f0c69024f748d1834dfe46638144fe2 = $this->env->getExtension("native_profiler");
        $__internal_add5f0b93920864045c881f200b0c8c58f0c69024f748d1834dfe46638144fe2->enter($__internal_add5f0b93920864045c881f200b0c8c58f0c69024f748d1834dfe46638144fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSContactBundle:Default:deletecontact.html.twig"));

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
        
        $__internal_add5f0b93920864045c881f200b0c8c58f0c69024f748d1834dfe46638144fe2->leave($__internal_add5f0b93920864045c881f200b0c8c58f0c69024f748d1834dfe46638144fe2_prof);

    }

    public function getTemplateName()
    {
        return "TSContactBundle:Default:deletecontact.html.twig";
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
