<?php

/* @TSContact/Default/nouveaucontact.html.twig */
class __TwigTemplate_f5d593a6f67f732ad11712887b79e9189ad96a55a1d5aeacdd264e04e51f3838 extends Twig_Template
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
        $__internal_f7c2b586237a6704accf37607c00b784c886324bc5e1519c182d9e202e03cd33 = $this->env->getExtension("native_profiler");
        $__internal_f7c2b586237a6704accf37607c00b784c886324bc5e1519c182d9e202e03cd33->enter($__internal_f7c2b586237a6704accf37607c00b784c886324bc5e1519c182d9e202e03cd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSContact/Default/nouveaucontact.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Carnet Adresse | Dashboard</title>
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/iCheck/all.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
  </head>
  <body class=\"hold-transition skin-blue-light sidebar-mini fixed\">
     <!-- Wrapper -->
    <div class=\"wrapper\">
      ";
        // line 18
        $this->loadTemplate("TSContactBundle:Default:headermenu.html.twig", "@TSContact/Default/nouveaucontact.html.twig", 18)->display($context);
        // line 19
        echo "      <!-- Page content -->
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
            Nouveau Contact
          </h1>
        </section>

        <!-- Main content -->
        <section class=\"content\">
          <!-- Stats boxes -->
          <div class=\"row\">

          <div class=\"col-md-2\">
              
          </div>
              ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 37
            echo "                  <div class=\"alert alert-success col-md-offset-4 col-md-3\" style=\"text-align: center;\" role=\"alert\">
                      <strong> ";
            // line 38
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " </strong> 
                  </div> 
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "          <div class=\"col-md-8\">
            <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Nouveau Contact</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                ";
        // line 48
        echo twig_include($this->env, $context, "TSContactBundle:Default:form.html.twig");
        echo "
                ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div><!-- /.box -->
          </div>
          </div>
          <!-- ./ Stats boxes -->
        </section>
        <!-- /. Main content -->
      </div>
      <!-- /. Page content -->
      <!-- / Footer -->
      <footer class=\"main-footer\">
        <center>
          <strong>Copyright &copy; 2015-2016 <a href=\"#\">Zemmouri Badr</a>.</strong> All rights reserved.
        </center>
      </footer>
      <!-- /. Footer -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery 2.1.4 -->
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Select2 -->
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/select2/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <!-- InputMask -->
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/input-mask/jquery.inputmask.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/input-mask/jquery.inputmask.date.extensions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/input-mask/jquery.inputmask.extensions.js"), "html", null, true);
        echo "\"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck 1.0.1 -->
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck 1.0.1 -->
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\"></script>
        <script>
      \$(function () {
        //Initialize Select2 Elements
        \$(\".select2\").select2();
        //Datemask dd/mm/yyyy
        \$(\"#datemask\").inputmask(\"dd/mm/yyyy\", {\"placeholder\": \"dd/mm/yyyy\"});
        //Datemask2 mm/dd/yyyy
        \$(\"#datemask2\").inputmask(\"mm/dd/yyyy\", {\"placeholder\": \"mm/dd/yyyy\"});
        //Money Euro
        \$(\"[data-mask]\").inputmask();
        //iCheck for checkbox and radio inputs
        \$('input[type=\"checkbox\"].minimal, input[type=\"radio\"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        \$('input[type=\"checkbox\"].minimal-red, input[type=\"radio\"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        \$('input[type=\"checkbox\"].flat-red, input[type=\"radio\"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });
      });
    </script>
  </body>
</html>
";
        
        $__internal_f7c2b586237a6704accf37607c00b784c886324bc5e1519c182d9e202e03cd33->leave($__internal_f7c2b586237a6704accf37607c00b784c886324bc5e1519c182d9e202e03cd33_prof);

    }

    public function getTemplateName()
    {
        return "@TSContact/Default/nouveaucontact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 88,  182 => 86,  177 => 84,  172 => 82,  167 => 80,  162 => 78,  157 => 76,  153 => 75,  149 => 74,  144 => 72,  139 => 70,  134 => 68,  112 => 49,  108 => 48,  104 => 47,  96 => 41,  87 => 38,  84 => 37,  80 => 36,  61 => 19,  59 => 18,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>Carnet Adresse | Dashboard</title>*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*     <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset('plugins/ionicons/css/ionicons.min.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset('plugins/iCheck/all.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css')}}">*/
/*   </head>*/
/*   <body class="hold-transition skin-blue-light sidebar-mini fixed">*/
/*      <!-- Wrapper -->*/
/*     <div class="wrapper">*/
/*       {% include "TSContactBundle:Default:headermenu.html.twig" %}*/
/*       <!-- Page content -->*/
/*       <div class="content-wrapper">*/
/*         <!-- Content Header (Page header) -->*/
/*         <section class="content-header">*/
/*           <h1>*/
/*             Nouveau Contact*/
/*           </h1>*/
/*         </section>*/
/* */
/*         <!-- Main content -->*/
/*         <section class="content">*/
/*           <!-- Stats boxes -->*/
/*           <div class="row">*/
/* */
/*           <div class="col-md-2">*/
/*               */
/*           </div>*/
/*               {% for message in app.session.flashbag.get('notice') %}*/
/*                   <div class="alert alert-success col-md-offset-4 col-md-3" style="text-align: center;" role="alert">*/
/*                       <strong> {{ message }} </strong> */
/*                   </div> */
/*               {% endfor %}*/
/*           <div class="col-md-8">*/
/*             <div class="box box-info">*/
/*                 <div class="box-header with-border">*/
/*                   <h3 class="box-title">Nouveau Contact</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 {{ form_start(form,{'attr': {'class': 'form-horizontal'}})}}*/
/*                 {{ include("TSContactBundle:Default:form.html.twig")}}*/
/*                 {{ form_end(form)}}*/
/*             </div><!-- /.box -->*/
/*           </div>*/
/*           </div>*/
/*           <!-- ./ Stats boxes -->*/
/*         </section>*/
/*         <!-- /. Main content -->*/
/*       </div>*/
/*       <!-- /. Page content -->*/
/*       <!-- / Footer -->*/
/*       <footer class="main-footer">*/
/*         <center>*/
/*           <strong>Copyright &copy; 2015-2016 <a href="#">Zemmouri Badr</a>.</strong> All rights reserved.*/
/*         </center>*/
/*       </footer>*/
/*       <!-- /. Footer -->*/
/*     </div>*/
/*     <!-- ./wrapper -->*/
/*     <!-- jQuery 2.1.4 -->*/
/*     <script src="{{ asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>*/
/*     <!-- Select2 -->*/
/*     <script src="{{ asset('plugins/select2/select2.full.min.js')}}"></script>*/
/*     <!-- InputMask -->*/
/*     <script src="{{ asset('plugins/input-mask/jquery.inputmask.js')}}"></script>*/
/*     <script src="{{ asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>*/
/*     <script src="{{ asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>*/
/*     <!-- SlimScroll 1.3.0 -->*/
/*     <script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>*/
/*     <!-- iCheck 1.0.1 -->*/
/*     <script src="{{ asset('plugins/iCheck/icheck.min.js')}}"></script>*/
/*     <!-- FastClick -->*/
/*     <script src="{{ asset('plugins/fastclick/fastclick.min.js')}}"></script>*/
/*     <!-- iCheck 1.0.1 -->*/
/*     <script src="{{ asset('plugins/iCheck/icheck.min.js')}}"></script>*/
/*     <!-- AdminLTE App -->*/
/*     <script src="{{ asset('dist/js/app.min.js')}}"></script>*/
/*     <!-- AdminLTE for demo purposes -->*/
/*     <script src="{{ asset('dist/js/demo.js')}}"></script>*/
/*         <script>*/
/*       $(function () {*/
/*         //Initialize Select2 Elements*/
/*         $(".select2").select2();*/
/*         //Datemask dd/mm/yyyy*/
/*         $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});*/
/*         //Datemask2 mm/dd/yyyy*/
/*         $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});*/
/*         //Money Euro*/
/*         $("[data-mask]").inputmask();*/
/*         //iCheck for checkbox and radio inputs*/
/*         $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({*/
/*           checkboxClass: 'icheckbox_minimal-blue',*/
/*           radioClass: 'iradio_minimal-blue'*/
/*         });*/
/*         //Red color scheme for iCheck*/
/*         $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({*/
/*           checkboxClass: 'icheckbox_minimal-red',*/
/*           radioClass: 'iradio_minimal-red'*/
/*         });*/
/*         //Flat red color scheme for iCheck*/
/*         $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({*/
/*           checkboxClass: 'icheckbox_flat-green',*/
/*           radioClass: 'iradio_flat-green'*/
/*         });*/
/*       });*/
/*     </script>*/
/*   </body>*/
/* </html>*/
/* */
