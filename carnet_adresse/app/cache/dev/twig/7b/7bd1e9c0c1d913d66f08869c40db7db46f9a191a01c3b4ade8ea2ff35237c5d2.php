<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_931d4b12701424511ac1cb8a7340dda36511cb2f880f9c518ba99e357a63d1a3 extends Twig_Template
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
        $__internal_9debb9dee2d28c12bcaa405342693f1f09aa27fa83c7f55e8c44bfb48815ef29 = $this->env->getExtension("native_profiler");
        $__internal_9debb9dee2d28c12bcaa405342693f1f09aa27fa83c7f55e8c44bfb48815ef29->enter($__internal_9debb9dee2d28c12bcaa405342693f1f09aa27fa83c7f55e8c44bfb48815ef29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9debb9dee2d28c12bcaa405342693f1f09aa27fa83c7f55e8c44bfb48815ef29->leave($__internal_9debb9dee2d28c12bcaa405342693f1f09aa27fa83c7f55e8c44bfb48815ef29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
