<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4c373a49597eec6c387787e09d569c4f31ebe76b40c6b05906a4361c27ba8468 extends Twig_Template
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
        $__internal_6acdb38d10f4c21a377a5926dd593ad220a774acc8fda02ecfc23437a4144ad5 = $this->env->getExtension("native_profiler");
        $__internal_6acdb38d10f4c21a377a5926dd593ad220a774acc8fda02ecfc23437a4144ad5->enter($__internal_6acdb38d10f4c21a377a5926dd593ad220a774acc8fda02ecfc23437a4144ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6acdb38d10f4c21a377a5926dd593ad220a774acc8fda02ecfc23437a4144ad5->leave($__internal_6acdb38d10f4c21a377a5926dd593ad220a774acc8fda02ecfc23437a4144ad5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
