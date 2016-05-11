<?php

/* @TSContact/Default/form.html.twig */
class __TwigTemplate_81450f3037406d805df5644d3c15faabaa7e2e8c6dc0990ed8a7607a2a007115 extends Twig_Template
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
        $__internal_041c3d96e30cd058e6a123f977ecc2a2197b15d2a82985a93bdc17ac57036f59 = $this->env->getExtension("native_profiler");
        $__internal_041c3d96e30cd058e6a123f977ecc2a2197b15d2a82985a93bdc17ac57036f59->enter($__internal_041c3d96e30cd058e6a123f977ecc2a2197b15d2a82985a93bdc17ac57036f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSContact/Default/form.html.twig"));

        // line 1
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "


                <div class=\"box-body\">
                    <div class=\"form-group\">
                       ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom & Prénom"));
        echo "
                        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
                      <div class=\"col-sm-5\">
                          ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                      </div>
                    </div>
                    <div class=\"form-group\">
                     ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Sexe"));
        echo "
                        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'errors');
        echo "
                      <div class=\"col-sm-5\">
                          ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["sexe"]) {
            // line 17
            echo "                          <div class=\"radio\">
                            <label>
                                ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["sexe"], 'widget', array("attr" => array("class" => "flat-red")));
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["sexe"], 'label');
            echo "
                            </label>
                          </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sexe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                      </div>
                    </div>
                    <div class=\"form-group\">
                       ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Téléphone"));
        echo "
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "
                      <div class=\"col-sm-4\">
                          ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                      </div>
                    </div>
                    <div class=\"form-group\">
                         ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Email"));
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                      <div class=\"col-sm-5\">
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                      </div>
                    </div>
                    <div class=\"form-group\">
                     ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Adresse"));
        echo "
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
                      <div class=\"col-sm-6\">
                       ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                      </div>
                    </div>
                    <div class=\"form-group\">
                     ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteweb", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Site Web"));
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteweb", array()), 'errors');
        echo "
                      <div class=\"col-sm-5\">
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteweb", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                      </div>
                    </div>
                  </div>
                <div class=\"box-footer\">
                    <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("ts_contact_accueil");
        echo "\" class=\"btn btn-danger\">Cancel</a>
                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-info pull-right")));
        echo "
                  </div>
\t
";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        
        $__internal_041c3d96e30cd058e6a123f977ecc2a2197b15d2a82985a93bdc17ac57036f59->leave($__internal_041c3d96e30cd058e6a123f977ecc2a2197b15d2a82985a93bdc17ac57036f59_prof);

    }

    public function getTemplateName()
    {
        return "@TSContact/Default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 59,  148 => 56,  144 => 55,  136 => 50,  131 => 48,  127 => 47,  120 => 43,  115 => 41,  111 => 40,  104 => 36,  99 => 34,  95 => 33,  88 => 29,  83 => 27,  79 => 26,  74 => 23,  63 => 19,  59 => 17,  55 => 16,  50 => 14,  46 => 13,  39 => 9,  34 => 7,  30 => 6,  22 => 1,);
    }
}
/* {{ form_errors(form) }}*/
/* */
/* */
/*                 <div class="box-body">*/
/*                     <div class="form-group">*/
/*                        {{ form_label(form.name, "Nom & Prénom", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(form.name) }}*/
/*                       <div class="col-sm-5">*/
/*                           {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                      {{ form_label(form.sexe, "Sexe", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(form.sexe) }}*/
/*                       <div class="col-sm-5">*/
/*                           {% for sexe in form.sexe %}*/
/*                           <div class="radio">*/
/*                             <label>*/
/*                                 {{ form_widget(sexe, {'attr': {'class': 'flat-red'}})}}{{form_label(sexe)}}*/
/*                             </label>*/
/*                           </div>*/
/*                             {% endfor %}*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                        {{ form_label(form.telephone, "Téléphone", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(form.telephone) }}*/
/*                       <div class="col-sm-4">*/
/*                           {{ form_widget(form.telephone, {'attr': {'class': 'form-control'}}) }}*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                          {{ form_label(form.email, "Email", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(form.email) }}*/
/*                       <div class="col-sm-5">*/
/*                         {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                      {{ form_label(form.adresse, "Adresse", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(form.adresse) }}*/
/*                       <div class="col-sm-6">*/
/*                        {{ form_widget(form.adresse, {'attr': {'class': 'form-control'}}) }}*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                      {{ form_label(form.siteweb, "Site Web", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(form.siteweb) }}*/
/*                       <div class="col-sm-5">*/
/*                         {{ form_widget(form.siteweb, {'attr': {'class': 'form-control'}}) }}*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 <div class="box-footer">*/
/*                     <a href="{{ path('ts_contact_accueil')}}" class="btn btn-danger">Cancel</a>*/
/*                     {{ form_widget(form.enregistrer, {'attr': {'class': 'btn btn-info pull-right'}}) }}*/
/*                   </div>*/
/* 	*/
/* {{ form_rest(form) }}*/
