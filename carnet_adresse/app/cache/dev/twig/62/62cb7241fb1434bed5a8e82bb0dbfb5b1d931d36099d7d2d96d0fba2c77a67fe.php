<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_854a8c3a0f7240d4767f9f2aefafa992a3a1eb81a7eeeb1758c8a938076b8ee7 extends Twig_Template
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
        $__internal_4451ed29019fdaa9b7cc04b6f044b3c8a1d3f981f64a4e8a36b0cb92724a4578 = $this->env->getExtension("native_profiler");
        $__internal_4451ed29019fdaa9b7cc04b6f044b3c8a1d3f981f64a4e8a36b0cb92724a4578->enter($__internal_4451ed29019fdaa9b7cc04b6f044b3c8a1d3f981f64a4e8a36b0cb92724a4578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4451ed29019fdaa9b7cc04b6f044b3c8a1d3f981f64a4e8a36b0cb92724a4578->leave($__internal_4451ed29019fdaa9b7cc04b6f044b3c8a1d3f981f64a4e8a36b0cb92724a4578_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
