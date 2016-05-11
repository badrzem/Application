<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c410b248e69cc790f1a3c7e8aba3739e89cca1ed7617b337301764fe273bb03e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d29938b620584135f2495fa817d2ef5250498dd1f3f6dff54bcce97934d2654f = $this->env->getExtension("native_profiler");
        $__internal_d29938b620584135f2495fa817d2ef5250498dd1f3f6dff54bcce97934d2654f->enter($__internal_d29938b620584135f2495fa817d2ef5250498dd1f3f6dff54bcce97934d2654f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Carnet Adresse | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.5 -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/iCheck/square/blue.css"), "html", null, true);
        echo "\">
    </head>
    <body  class=\"hold-transition login-page\">
        <div>
            ";
        // line 20
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
          
            ";
        }
        // line 27
        echo "        </div>

        ";
        // line 29
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 30
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 31
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 32
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 33
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        ";
        }
        // line 38
        echo "
        <div>
            ";
        // line 40
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 42
        echo "        </div>
    </body>
        <!-- jQuery 2.1.4 -->
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <script>
      \$(function () {
        \$('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
</html>
";
        
        $__internal_d29938b620584135f2495fa817d2ef5250498dd1f3f6dff54bcce97934d2654f->leave($__internal_d29938b620584135f2495fa817d2ef5250498dd1f3f6dff54bcce97934d2654f_prof);

    }

    // line 40
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2d3b62e362afdfdfd021431c53c24b35edd3cd68dd6a12b63ce6146f247fc32 = $this->env->getExtension("native_profiler");
        $__internal_e2d3b62e362afdfdfd021431c53c24b35edd3cd68dd6a12b63ce6146f247fc32->enter($__internal_e2d3b62e362afdfdfd021431c53c24b35edd3cd68dd6a12b63ce6146f247fc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 41
        echo "            ";
        
        $__internal_e2d3b62e362afdfdfd021431c53c24b35edd3cd68dd6a12b63ce6146f247fc32->leave($__internal_e2d3b62e362afdfdfd021431c53c24b35edd3cd68dd6a12b63ce6146f247fc32_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 41,  159 => 40,  140 => 49,  135 => 47,  130 => 45,  125 => 42,  123 => 40,  119 => 38,  116 => 37,  110 => 36,  101 => 33,  96 => 32,  91 => 31,  86 => 30,  84 => 29,  80 => 27,  73 => 23,  69 => 22,  64 => 21,  62 => 20,  55 => 16,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  34 => 10,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>Carnet Adresse | Login</title>*/
/*     <!-- Tell the browser to be responsive to screen width -->*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset('plugins/ionicons/css/ionicons.min.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css')}}">*/
/*     <!-- iCheck -->*/
/*     <link rel="stylesheet" href="{{ asset('plugins/iCheck/square/blue.css')}}">*/
/*     </head>*/
/*     <body  class="hold-transition login-page">*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*           */
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </body>*/
/*         <!-- jQuery 2.1.4 -->*/
/*     <script src="{{ asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>*/
/*     <!-- iCheck -->*/
/*     <script src="{{ asset('plugins/iCheck/icheck.min.js')}}"></script>*/
/*     <script>*/
/*       $(function () {*/
/*         $('input').iCheck({*/
/*           checkboxClass: 'icheckbox_square-blue',*/
/*           radioClass: 'iradio_square-blue',*/
/*           increaseArea: '20%' // optional*/
/*         });*/
/*       });*/
/*     </script>*/
/* </html>*/
/* */
