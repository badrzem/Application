<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_77707465e8765f106e4d39ca467906808c6c1d9811b5ec998f51127993b6f19a extends Twig_Template
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
        $__internal_aa5ffd52c46d3beb2b8a8c878a4ebbc28d97cec56ea28f6604ee192f3e2728e2 = $this->env->getExtension("native_profiler");
        $__internal_aa5ffd52c46d3beb2b8a8c878a4ebbc28d97cec56ea28f6604ee192f3e2728e2->enter($__internal_aa5ffd52c46d3beb2b8a8c878a4ebbc28d97cec56ea28f6604ee192f3e2728e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_aa5ffd52c46d3beb2b8a8c878a4ebbc28d97cec56ea28f6604ee192f3e2728e2->leave($__internal_aa5ffd52c46d3beb2b8a8c878a4ebbc28d97cec56ea28f6604ee192f3e2728e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
