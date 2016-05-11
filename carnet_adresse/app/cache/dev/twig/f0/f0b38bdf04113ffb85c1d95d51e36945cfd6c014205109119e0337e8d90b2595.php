<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_0d163d5d24e3ae39b7d55ae3571542c7d6689007cdf84120c7b3c7a83a64a51b extends Twig_Template
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
        $__internal_96539b22910b4d37e0cac8237a23ba96cf5c38ba18b0e149ee044a3272d0e75a = $this->env->getExtension("native_profiler");
        $__internal_96539b22910b4d37e0cac8237a23ba96cf5c38ba18b0e149ee044a3272d0e75a->enter($__internal_96539b22910b4d37e0cac8237a23ba96cf5c38ba18b0e149ee044a3272d0e75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_96539b22910b4d37e0cac8237a23ba96cf5c38ba18b0e149ee044a3272d0e75a->leave($__internal_96539b22910b4d37e0cac8237a23ba96cf5c38ba18b0e149ee044a3272d0e75a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
