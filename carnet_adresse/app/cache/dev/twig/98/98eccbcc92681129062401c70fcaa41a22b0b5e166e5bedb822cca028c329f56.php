<?php

/* @TSContact/Default/headermenu.html.twig */
class __TwigTemplate_752cee875f0604f304774263972867f90049a8294d0742063a5916ad3b162a50 extends Twig_Template
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
        $__internal_1d5e2c6b299b7bc0df93324493ef327aef825054fd51a79a5c018c9d22985148 = $this->env->getExtension("native_profiler");
        $__internal_1d5e2c6b299b7bc0df93324493ef327aef825054fd51a79a5c018c9d22985148->enter($__internal_1d5e2c6b299b7bc0df93324493ef327aef825054fd51a79a5c018c9d22985148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSContact/Default/headermenu.html.twig"));

        // line 1
        echo "<header class=\"main-header\">
        <a class=\"logo\">
          <span class=\"logo-mini\"><b>C</b>A</span>
          <span class=\"logo-lg\"><b>Carnet</b> Adresse</span>
        </a>
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
          <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
          </a>
          <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
              <li class=\"dropdown user user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                  <span class=\"hidden-xs\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"user-header\">
                      <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                    <p>
                      ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                    </p>
                  </li>
                  <li class=\"user-footer\">
                    <div class=\"pull-right\">
                      <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-flat\">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- /. Header -->
      <!-- Menu -->
      <aside class=\"main-sidebar\">
        <section class=\"sidebar\">
          <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
            <li class=\"active treeview\">
              <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("ts_contact_accueil");
        echo "\">
                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class=\"treeview\">
              <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("ts_contact_nouveau_contact");
        echo "\">
                <i class=\"fa fa-user\"></i>
                <span>Nouveau Contact</span>
              </a>
            </li>
            <li class=\"treeview\">
              <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("ts_contact_lister_contact");
        echo "\">
                <i class=\"fa fa-users\"></i>
                <span>Lister Contacts</span>
              </a>
            </li>
          </ul>
        </section>
      </aside>";
        
        $__internal_1d5e2c6b299b7bc0df93324493ef327aef825054fd51a79a5c018c9d22985148->leave($__internal_1d5e2c6b299b7bc0df93324493ef327aef825054fd51a79a5c018c9d22985148_prof);

    }

    public function getTemplateName()
    {
        return "@TSContact/Default/headermenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 53,  88 => 47,  80 => 42,  61 => 26,  53 => 21,  48 => 19,  41 => 15,  37 => 14,  22 => 1,);
    }
}
/* <header class="main-header">*/
/*         <a class="logo">*/
/*           <span class="logo-mini"><b>C</b>A</span>*/
/*           <span class="logo-lg"><b>Carnet</b> Adresse</span>*/
/*         </a>*/
/*         <nav class="navbar navbar-static-top" role="navigation">*/
/*           <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*           </a>*/
/*           <div class="navbar-custom-menu">*/
/*             <ul class="nav navbar-nav">*/
/*               <li class="dropdown user user-menu">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                   <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">*/
/*                   <span class="hidden-xs">{{app.user.username}}</span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li class="user-header">*/
/*                       <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">*/
/*                     <p>*/
/*                       {{app.user.username}}*/
/*                     </p>*/
/*                   </li>*/
/*                   <li class="user-footer">*/
/*                     <div class="pull-right">*/
/*                       <a href="{{ path('fos_user_security_logout') }}" class="btn btn-default btn-flat">Sign out</a>*/
/*                     </div>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/*             </ul>*/
/*           </div>*/
/*         </nav>*/
/*       </header>*/
/*       <!-- /. Header -->*/
/*       <!-- Menu -->*/
/*       <aside class="main-sidebar">*/
/*         <section class="sidebar">*/
/*           <ul class="sidebar-menu">*/
/*             <li class="header">MAIN NAVIGATION</li>*/
/*             <li class="active treeview">*/
/*               <a href="{{ path('ts_contact_accueil')}}">*/
/*                 <i class="fa fa-dashboard"></i> <span>Dashboard</span>*/
/*               </a>*/
/*             </li>*/
/*             <li class="treeview">*/
/*               <a href="{{ path('ts_contact_nouveau_contact')}}">*/
/*                 <i class="fa fa-user"></i>*/
/*                 <span>Nouveau Contact</span>*/
/*               </a>*/
/*             </li>*/
/*             <li class="treeview">*/
/*               <a href="{{ path('ts_contact_lister_contact')}}">*/
/*                 <i class="fa fa-users"></i>*/
/*                 <span>Lister Contacts</span>*/
/*               </a>*/
/*             </li>*/
/*           </ul>*/
/*         </section>*/
/*       </aside>*/
