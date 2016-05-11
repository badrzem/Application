<?php

/* TSContactBundle:Default:accueil.html.twig */
class __TwigTemplate_a4bd6b46495b5d4147fe228109f3bc8f2d4eba6f0d1d7485d1fd3b1678a56670 extends Twig_Template
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
        $__internal_ae1e24a10852e720d81dd71d17d708d56ab5dd4990cc00122b54ee9d22172bf6 = $this->env->getExtension("native_profiler");
        $__internal_ae1e24a10852e720d81dd71d17d708d56ab5dd4990cc00122b54ee9d22172bf6->enter($__internal_ae1e24a10852e720d81dd71d17d708d56ab5dd4990cc00122b54ee9d22172bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSContactBundle:Default:accueil.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
  </head>
  <body class=\"hold-transition skin-blue-light sidebar-mini fixed\">
     <!-- Wrapper -->
    <div class=\"wrapper\">
      <!-- Header -->
      ";
        // line 18
        $this->loadTemplate("TSContactBundle:Default:headermenu.html.twig", "TSContactBundle:Default:accueil.html.twig", 18)->display($context);
        // line 19
        echo "       <!-- /. Menu -->
      <!-- Page content -->
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
            Dashboard
          </h1>
        </section>

        <!-- Main content -->
        <section class=\"content\">
          <!-- Stats boxes -->
          <div class=\"row\">
            <div class=\"col-lg-4 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-green\">
                <div class=\"inner\">
                  <h3>";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["nbc"]) ? $context["nbc"] : $this->getContext($context, "nbc")), "html", null, true);
        echo "</h3>
                  <p>Contacts</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-ios-people\"></i>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-aqua\">
                <div class=\"inner\">
                  <h3>";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["nbh"]) ? $context["nbh"] : $this->getContext($context, "nbh")), "html", null, true);
        echo "</h3>
                  <p>Hommes</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-man\"></i>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-red\">
                <div class=\"inner\">
                  <h3>";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["nbf"]) ? $context["nbf"] : $this->getContext($context, "nbf")), "html", null, true);
        echo "</h3>
                  <p>Femmes</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-woman\"></i>
                </div>
              </div>
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
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_ae1e24a10852e720d81dd71d17d708d56ab5dd4990cc00122b54ee9d22172bf6->leave($__internal_ae1e24a10852e720d81dd71d17d708d56ab5dd4990cc00122b54ee9d22172bf6_prof);

    }

    public function getTemplateName()
    {
        return "TSContactBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 97,  160 => 95,  155 => 93,  150 => 91,  145 => 89,  140 => 87,  135 => 85,  108 => 61,  93 => 49,  78 => 37,  58 => 19,  56 => 18,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  22 => 1,);
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
/*     <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css')}}">*/
/*   </head>*/
/*   <body class="hold-transition skin-blue-light sidebar-mini fixed">*/
/*      <!-- Wrapper -->*/
/*     <div class="wrapper">*/
/*       <!-- Header -->*/
/*       {% include "TSContactBundle:Default:headermenu.html.twig" %}*/
/*        <!-- /. Menu -->*/
/*       <!-- Page content -->*/
/*       <div class="content-wrapper">*/
/*         <!-- Content Header (Page header) -->*/
/*         <section class="content-header">*/
/*           <h1>*/
/*             Dashboard*/
/*           </h1>*/
/*         </section>*/
/* */
/*         <!-- Main content -->*/
/*         <section class="content">*/
/*           <!-- Stats boxes -->*/
/*           <div class="row">*/
/*             <div class="col-lg-4 col-xs-6">*/
/*               <!-- small box -->*/
/*               <div class="small-box bg-green">*/
/*                 <div class="inner">*/
/*                   <h3>{{nbc}}</h3>*/
/*                   <p>Contacts</p>*/
/*                 </div>*/
/*                 <div class="icon">*/
/*                   <i class="ion ion-ios-people"></i>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="col-lg-4 col-xs-6">*/
/*               <!-- small box -->*/
/*               <div class="small-box bg-aqua">*/
/*                 <div class="inner">*/
/*                   <h3>{{nbh}}</h3>*/
/*                   <p>Hommes</p>*/
/*                 </div>*/
/*                 <div class="icon">*/
/*                   <i class="ion ion-man"></i>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="col-lg-4 col-xs-6">*/
/*               <!-- small box -->*/
/*               <div class="small-box bg-red">*/
/*                 <div class="inner">*/
/*                   <h3>{{nbf}}</h3>*/
/*                   <p>Femmes</p>*/
/*                 </div>*/
/*                 <div class="icon">*/
/*                   <i class="ion ion-woman"></i>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
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
/*     <!-- Slimscroll -->*/
/*     <script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>*/
/*     <!-- FastClick -->*/
/*     <script src="{{ asset('plugins/fastclick/fastclick.min.js')}}"></script>*/
/*     <!-- AdminLTE App -->*/
/*     <script src="{{ asset('dist/js/app.min.js')}}"></script>*/
/*     <!-- AdminLTE dashboard demo (This is only for demo purposes) -->*/
/*     <script src="{{ asset('dist/js/pages/dashboard.js')}}"></script>*/
/*     <!-- AdminLTE for demo purposes -->*/
/*     <script src="{{ asset('dist/js/demo.js')}}"></script>*/
/*   </body>*/
/* </html>*/
/* */
