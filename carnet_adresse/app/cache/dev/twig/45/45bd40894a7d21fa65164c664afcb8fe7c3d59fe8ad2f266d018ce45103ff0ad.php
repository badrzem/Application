<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_05bac74060fe4123f0bdda4a73c1f2ebf8260b7a56421feb809923a0f27c2798 extends Twig_Template
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
        $__internal_4f105d64ac9d9b79cf347f36530da684dbc252a329995f15ffb4777a24aff5b3 = $this->env->getExtension("native_profiler");
        $__internal_4f105d64ac9d9b79cf347f36530da684dbc252a329995f15ffb4777a24aff5b3->enter($__internal_4f105d64ac9d9b79cf347f36530da684dbc252a329995f15ffb4777a24aff5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "

    <div class=\"login-box\">
    <div class=\"login-logo\">
       <a><b>Carnet</b> Adresse</a>
    </div><!-- /.login-logo -->
    <div class=\"login-box-body\">
        <p class=\"login-box-msg\">Register </p>
        <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" method=\"post\" class=\"fos_user_registration_register\">
            
            <div class=\"form-group has-feedback\">
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Email"));
        echo "
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label" => "Nom & Prénom"));
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label" => "Mot de passe"));
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label" => "Vérification"));
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <span class=\"glyphicon glyphicon-log-in form-control-feedback\"></span>
            </div>

            
            <div class=\"row\">
                <div class=\"col-xs-8\">
              <div class=\"checkbox icheck\">
                <label>
                  <input type=\"checkbox\"> I agree to the <a href=\"\">terms</a>
                </label>
              </div>
            </div>
            <div class=\"col-xs-4\">
                <input type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div><!-- /.col -->
          </div>
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </form>
    </div>
</div>

";
        
        $__internal_4f105d64ac9d9b79cf347f36530da684dbc252a329995f15ffb4777a24aff5b3->leave($__internal_4f105d64ac9d9b79cf347f36530da684dbc252a329995f15ffb4777a24aff5b3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 50,  108 => 47,  91 => 33,  87 => 32,  83 => 31,  76 => 27,  72 => 26,  68 => 25,  61 => 21,  57 => 20,  53 => 19,  46 => 15,  42 => 14,  38 => 13,  32 => 10,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/*     <div class="login-box">*/
/*     <div class="login-logo">*/
/*        <a><b>Carnet</b> Adresse</a>*/
/*     </div><!-- /.login-logo -->*/
/*     <div class="login-box-body">*/
/*         <p class="login-box-msg">Register </p>*/
/*         <form action="{{ path("fos_user_registration_register") }}" method="post" class="fos_user_registration_register">*/
/*             */
/*             <div class="form-group has-feedback">*/
/*                 {{ form_label(form.email,"Email")}}*/
/*                 {{ form_errors(form.email)}}*/
/*                 {{ form_widget(form.email,{'attr': {'class': 'form-control'}})}}*/
/*                 <span class="glyphicon glyphicon-envelope form-control-feedback"></span>*/
/*             </div>*/
/*             <div class="form-group has-feedback">*/
/*                 {{ form_label(form.username,"Nom & Prénom")}}*/
/*                 {{ form_errors(form.username)}}*/
/*                 {{ form_widget(form.username,{'attr': {'class': 'form-control'}})}}*/
/*                 <span class="glyphicon glyphicon-user form-control-feedback"></span>*/
/*             </div>*/
/*             <div class="form-group has-feedback">*/
/*                 {{ form_label(form.plainPassword.first,"Mot de passe")}}*/
/*                 {{ form_errors(form.plainPassword.first)}}*/
/*                 {{ form_widget(form.plainPassword.first,{'attr': {'class': 'form-control'}})}}*/
/*                 <span class="glyphicon glyphicon-lock form-control-feedback"></span>*/
/*             </div>*/
/*             <div class="form-group has-feedback">*/
/*                 {{ form_label(form.plainPassword.second,"Vérification")}}*/
/*                 {{ form_errors(form.plainPassword.second)}}*/
/*                 {{ form_widget(form.plainPassword.second,{'attr': {'class': 'form-control'}})}}*/
/*                 <span class="glyphicon glyphicon-log-in form-control-feedback"></span>*/
/*             </div>*/
/* */
/*             */
/*             <div class="row">*/
/*                 <div class="col-xs-8">*/
/*               <div class="checkbox icheck">*/
/*                 <label>*/
/*                   <input type="checkbox"> I agree to the <a href="">terms</a>*/
/*                 </label>*/
/*               </div>*/
/*             </div>*/
/*             <div class="col-xs-4">*/
/*                 <input type="submit" class="btn btn-primary btn-block btn-flat" value="{{ 'registration.submit'|trans }}" />*/
/*             </div><!-- /.col -->*/
/*           </div>*/
/*             {{form_rest(form)}}*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* */
/* */
