<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f29dd6e58fc1c442d711e7673cae43441f6369579a279083f626f7f934cfa6a2 extends Twig_Template
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
        $__internal_9dfe121f3bc176c4716f3e47662ffd75229c9c5f93603e9e3b111b6e7687077e = $this->env->getExtension("native_profiler");
        $__internal_9dfe121f3bc176c4716f3e47662ffd75229c9c5f93603e9e3b111b6e7687077e->enter($__internal_9dfe121f3bc176c4716f3e47662ffd75229c9c5f93603e9e3b111b6e7687077e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9dfe121f3bc176c4716f3e47662ffd75229c9c5f93603e9e3b111b6e7687077e->leave($__internal_9dfe121f3bc176c4716f3e47662ffd75229c9c5f93603e9e3b111b6e7687077e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
