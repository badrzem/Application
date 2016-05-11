<?php

/* @TSContact/Default/listercontact.html.twig */
class __TwigTemplate_95481c3f068deecbe27fd5682fb5699b32bc71c9308d7c1d47df3d39d03dfa94 extends Twig_Template
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
        $__internal_caa7ac754894a6d61b5ccb343de7d48c8e052b99ec3793dbd8ba87a956b58568 = $this->env->getExtension("native_profiler");
        $__internal_caa7ac754894a6d61b5ccb343de7d48c8e052b99ec3793dbd8ba87a956b58568->enter($__internal_caa7ac754894a6d61b5ccb343de7d48c8e052b99ec3793dbd8ba87a956b58568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSContact/Default/listercontact.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Carnet Adresse | Lister Contacts</title>
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
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
  </head>
  <body class=\"hold-transition skin-blue-light sidebar-mini fixed\">
     <!-- Wrapper -->
    <div class=\"wrapper\">
      ";
        // line 18
        $this->loadTemplate("TSContactBundle:Default:headermenu.html.twig", "@TSContact/Default/listercontact.html.twig", 18)->display($context);
        // line 19
        echo "      <!-- Page content -->
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
            Lister Contacts
          </h1>
        </section>

        <!-- Main content -->
        <section class=\"content\">
          <!-- Datatables -->
          <div class=\"box\">
            <div class=\"box-header\">
              <h3 class=\"box-title\">Liste des contacts</h3>
            </div><!-- /.box-header -->
            <div class=\"box-body\">
              <table id=\"example1\" class=\"table table-bordered table-striped\">
                <thead>
                  <tr>
                    <th>Nom & Prénom</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 47
            echo "                  <tr>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "name", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "telephone", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "</td>
                    <td>
                         <a class=\"btn btn-info\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_contact_afficher_contact", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-book\"></i></a>
                         <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#delete";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\"></i></button>
                         <div class=\"modal fade\" id=\"delete";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\" role=\"dialog\">
                            <div class=\"modal-dialog\">

                              <!-- Modal content-->
                              <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                  <h4 class=\"modal-title\">Supprimer contact</h4>
                                </div>
                                <div class=\"modal-body\">
                                  <p>Etes vous sûr de supprimer ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "name", array()), "html", null, true);
            echo " ?</p>
                                </div>
                                <div class=\"modal-footer\">
                                  <button type=\"button\" class=\"btn btn-success pull-left\" data-dismiss=\"modal\">Non</button>
                                  ";
            // line 68
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("TSContactBundle:Default:supprimercontact", array("id" => $this->getAttribute($context["contact"], "id", array()))), array());
            // line 69
            echo "                                </div>
                              </div>

                            </div>
                          </div>
                    </td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                </tbody>
              </table>
            </div><!-- /.box-body -->
          </div>
          <!-- ./ Datatables -->
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
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
     <!-- DataTables -->
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\"></script>
        <script>
      \$(function () {
        \$(\"#example1\").DataTable();
      });
    </script>
  </body>
</html>
";
        
        $__internal_caa7ac754894a6d61b5ccb343de7d48c8e052b99ec3793dbd8ba87a956b58568->leave($__internal_caa7ac754894a6d61b5ccb343de7d48c8e052b99ec3793dbd8ba87a956b58568_prof);

    }

    public function getTemplateName()
    {
        return "@TSContact/Default/listercontact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 108,  199 => 106,  194 => 104,  189 => 102,  185 => 101,  180 => 99,  175 => 97,  153 => 77,  140 => 69,  138 => 68,  131 => 64,  118 => 54,  114 => 53,  110 => 52,  105 => 50,  101 => 49,  97 => 48,  94 => 47,  90 => 46,  61 => 19,  59 => 18,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>Carnet Adresse | Lister Contacts</title>*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*     <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset('plugins/ionicons/css/ionicons.min.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css')}}">*/
/*     <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css')}}">*/
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
/*             Lister Contacts*/
/*           </h1>*/
/*         </section>*/
/* */
/*         <!-- Main content -->*/
/*         <section class="content">*/
/*           <!-- Datatables -->*/
/*           <div class="box">*/
/*             <div class="box-header">*/
/*               <h3 class="box-title">Liste des contacts</h3>*/
/*             </div><!-- /.box-header -->*/
/*             <div class="box-body">*/
/*               <table id="example1" class="table table-bordered table-striped">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <th>Nom & Prénom</th>*/
/*                     <th>Téléphone</th>*/
/*                     <th>Email</th>*/
/*                     <th>Action</th>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for contact in contacts %}*/
/*                   <tr>*/
/*                     <td>{{ contact.name }} </td>*/
/*                     <td>{{ contact.telephone }}</td>*/
/*                     <td>{{ contact.email }}</td>*/
/*                     <td>*/
/*                          <a class="btn btn-info" href="{{path('ts_contact_afficher_contact',{'id' : contact.id})}}"><i class="fa fa-book"></i></a>*/
/*                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{contact.id}}"><i class="fa fa-trash"></i></button>*/
/*                          <div class="modal fade" id="delete{{contact.id}}" role="dialog">*/
/*                             <div class="modal-dialog">*/
/* */
/*                               <!-- Modal content-->*/
/*                               <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                   <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                                   <h4 class="modal-title">Supprimer contact</h4>*/
/*                                 </div>*/
/*                                 <div class="modal-body">*/
/*                                   <p>Etes vous sûr de supprimer {{contact.name}} ?</p>*/
/*                                 </div>*/
/*                                 <div class="modal-footer">*/
/*                                   <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Non</button>*/
/*                                   {% render(controller("TSContactBundle:Default:supprimercontact",{'id' : contact.id})) %}*/
/*                                 </div>*/
/*                               </div>*/
/* */
/*                             </div>*/
/*                           </div>*/
/*                     </td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                 </tbody>*/
/*               </table>*/
/*             </div><!-- /.box-body -->*/
/*           </div>*/
/*           <!-- ./ Datatables -->*/
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
/*           */
/*     <!-- ./wrapper -->*/
/*     <!-- jQuery 2.1.4 -->*/
/*     <script src="{{ asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>*/
/*      <!-- DataTables -->*/
/*     <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>*/
/*     <script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>*/
/*     <!-- Slimscroll -->*/
/*     <script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>*/
/*     <!-- AdminLTE App -->*/
/*     <script src="{{ asset('dist/js/app.min.js')}}"></script>*/
/*     <!-- AdminLTE for demo purposes -->*/
/*     <script src="{{ asset('dist/js/demo.js')}}"></script>*/
/*         <script>*/
/*       $(function () {*/
/*         $("#example1").DataTable();*/
/*       });*/
/*     </script>*/
/*   </body>*/
/* </html>*/
/* */
