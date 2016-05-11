<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_083b1117386fd31ffb69643bcef64f196c28cc9933e0367b61b612f8bcf43bb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da1422bc5eb160620a22206657870526914c663c6e6ba76bc9f2ff91061932b7 = $this->env->getExtension("native_profiler");
        $__internal_da1422bc5eb160620a22206657870526914c663c6e6ba76bc9f2ff91061932b7->enter($__internal_da1422bc5eb160620a22206657870526914c663c6e6ba76bc9f2ff91061932b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da1422bc5eb160620a22206657870526914c663c6e6ba76bc9f2ff91061932b7->leave($__internal_da1422bc5eb160620a22206657870526914c663c6e6ba76bc9f2ff91061932b7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_372a8b61fdc7b80abfd7b1c9eb777082c43ca66654833eae4af44758a62e2914 = $this->env->getExtension("native_profiler");
        $__internal_372a8b61fdc7b80abfd7b1c9eb777082c43ca66654833eae4af44758a62e2914->enter($__internal_372a8b61fdc7b80abfd7b1c9eb777082c43ca66654833eae4af44758a62e2914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<div class=\"login-box\">
    <div class=\"login-logo\">
       <a><b>Carnet</b> Adresse</a>
    </div><!-- /.login-logo -->
    <div class=\"login-box-body\">
        <p class=\"login-box-msg\">Sign in </p>
        <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
            
            <div class=\"form-group has-feedback\">
                <label for=\"username\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
            </div>
            
          <div class=\"form-group has-feedback\">
            <label for=\"password\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
            <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
          </div>
            
            <div class=\"row\">
            <div class=\"col-xs-8\">
              <div class=\"checkbox icheck\">
                <label>
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                </label>
              </div>
            </div><!-- /.col -->
            <div class=\"col-xs-4\">
                <input type=\"submit\" id=\"_submit\" class=\"btn btn-primary btn-block btn-flat\" name=\"_submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div><!-- /.col -->
          </div>
        </form>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">I forgot my password</a><br>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"text-center\">Register a new membership</a>
    </div>
</div>
";
        
        $__internal_372a8b61fdc7b80abfd7b1c9eb777082c43ca66654833eae4af44758a62e2914->leave($__internal_372a8b61fdc7b80abfd7b1c9eb777082c43ca66654833eae4af44758a62e2914_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  106 => 44,  99 => 40,  91 => 35,  78 => 25,  70 => 20,  66 => 19,  60 => 16,  56 => 15,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* <div class="login-box">*/
/*     <div class="login-logo">*/
/*        <a><b>Carnet</b> Adresse</a>*/
/*     </div><!-- /.login-logo -->*/
/*     <div class="login-box-body">*/
/*         <p class="login-box-msg">Sign in </p>*/
/*         <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*             */
/*             <div class="form-group has-feedback">*/
/*                 <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*                 <input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*                 <span class="glyphicon glyphicon-envelope form-control-feedback"></span>*/
/*             </div>*/
/*             */
/*           <div class="form-group has-feedback">*/
/*             <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*             <input type="password" class="form-control" id="password" name="_password" required="required" />*/
/*             <span class="glyphicon glyphicon-lock form-control-feedback"></span>*/
/*           </div>*/
/*             */
/*             <div class="row">*/
/*             <div class="col-xs-8">*/
/*               <div class="checkbox icheck">*/
/*                 <label>*/
/*                     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*                 </label>*/
/*               </div>*/
/*             </div><!-- /.col -->*/
/*             <div class="col-xs-4">*/
/*                 <input type="submit" id="_submit" class="btn btn-primary btn-block btn-flat" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*             </div><!-- /.col -->*/
/*           </div>*/
/*         </form>*/
/*             <a href="{{ path('fos_user_resetting_request') }}">I forgot my password</a><br>*/
/*             <a href="{{ path('fos_user_registration_register') }}" class="text-center">Register a new membership</a>*/
/*     </div>*/
/* </div>*/
/* {% endblock fos_user_content %}*/
/* */
/* */
/* */
/* */
