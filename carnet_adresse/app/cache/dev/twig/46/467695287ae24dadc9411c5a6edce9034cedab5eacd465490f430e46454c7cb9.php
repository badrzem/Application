<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_69b43d86d2623dccfad772573254d1aa2a3998343c08d0234fabbe2aa682c5aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_571a1fdef89de4af7a3dd788ca08629c08a7906b5e8fdce9e7b549595e7a7fc3 = $this->env->getExtension("native_profiler");
        $__internal_571a1fdef89de4af7a3dd788ca08629c08a7906b5e8fdce9e7b549595e7a7fc3->enter($__internal_571a1fdef89de4af7a3dd788ca08629c08a7906b5e8fdce9e7b549595e7a7fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_571a1fdef89de4af7a3dd788ca08629c08a7906b5e8fdce9e7b549595e7a7fc3->leave($__internal_571a1fdef89de4af7a3dd788ca08629c08a7906b5e8fdce9e7b549595e7a7fc3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_64cd1c5f448b7580aad6cee27ea0dda561162ec8ae5d1358358ecd0e2d0e9b34 = $this->env->getExtension("native_profiler");
        $__internal_64cd1c5f448b7580aad6cee27ea0dda561162ec8ae5d1358358ecd0e2d0e9b34->enter($__internal_64cd1c5f448b7580aad6cee27ea0dda561162ec8ae5d1358358ecd0e2d0e9b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_64cd1c5f448b7580aad6cee27ea0dda561162ec8ae5d1358358ecd0e2d0e9b34->leave($__internal_64cd1c5f448b7580aad6cee27ea0dda561162ec8ae5d1358358ecd0e2d0e9b34_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_994e730d748a77a27366b7c2e70ffd88c9ce776bd76ece98288996ed0f9dda72 = $this->env->getExtension("native_profiler");
        $__internal_994e730d748a77a27366b7c2e70ffd88c9ce776bd76ece98288996ed0f9dda72->enter($__internal_994e730d748a77a27366b7c2e70ffd88c9ce776bd76ece98288996ed0f9dda72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_994e730d748a77a27366b7c2e70ffd88c9ce776bd76ece98288996ed0f9dda72->leave($__internal_994e730d748a77a27366b7c2e70ffd88c9ce776bd76ece98288996ed0f9dda72_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09d25094da092f868e78c9af37a5370de2509ad87c45bea062dc017f28d40e0f = $this->env->getExtension("native_profiler");
        $__internal_09d25094da092f868e78c9af37a5370de2509ad87c45bea062dc017f28d40e0f->enter($__internal_09d25094da092f868e78c9af37a5370de2509ad87c45bea062dc017f28d40e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_09d25094da092f868e78c9af37a5370de2509ad87c45bea062dc017f28d40e0f->leave($__internal_09d25094da092f868e78c9af37a5370de2509ad87c45bea062dc017f28d40e0f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
