<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_e74e6d87faf4e2b812feb7965d4a458dd65e658e268f73aff8b82be55034a160 extends Twig_Template
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
        $__internal_e9a3be3e0dbe3f80ec931a4fcf95436246fd62d6774966f0a3ebf2e567fb344d = $this->env->getExtension("native_profiler");
        $__internal_e9a3be3e0dbe3f80ec931a4fcf95436246fd62d6774966f0a3ebf2e567fb344d->enter($__internal_e9a3be3e0dbe3f80ec931a4fcf95436246fd62d6774966f0a3ebf2e567fb344d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_e9a3be3e0dbe3f80ec931a4fcf95436246fd62d6774966f0a3ebf2e567fb344d->leave($__internal_e9a3be3e0dbe3f80ec931a4fcf95436246fd62d6774966f0a3ebf2e567fb344d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
