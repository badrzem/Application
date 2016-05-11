<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_cb04384a15db09ad7be33873b7e34701f4f285a695308130db0b6c35a54f6129 extends Twig_Template
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
        $__internal_d6797a2b0b6209d6eab68e42636f09774ffbe153dbdcd411582ff1e80d68cd52 = $this->env->getExtension("native_profiler");
        $__internal_d6797a2b0b6209d6eab68e42636f09774ffbe153dbdcd411582ff1e80d68cd52->enter($__internal_d6797a2b0b6209d6eab68e42636f09774ffbe153dbdcd411582ff1e80d68cd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d6797a2b0b6209d6eab68e42636f09774ffbe153dbdcd411582ff1e80d68cd52->leave($__internal_d6797a2b0b6209d6eab68e42636f09774ffbe153dbdcd411582ff1e80d68cd52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
