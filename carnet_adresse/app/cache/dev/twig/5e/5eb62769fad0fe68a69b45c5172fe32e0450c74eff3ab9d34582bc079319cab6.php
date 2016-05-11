<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a68d719e35c8aac0710793201e010ccee812017f1c9ddcb9c0573f07a155fc6c extends Twig_Template
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
        $__internal_eaa8139255f91741efcba6c99dde49e773b7924890bb059abd8e99268a8aaa36 = $this->env->getExtension("native_profiler");
        $__internal_eaa8139255f91741efcba6c99dde49e773b7924890bb059abd8e99268a8aaa36->enter($__internal_eaa8139255f91741efcba6c99dde49e773b7924890bb059abd8e99268a8aaa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_eaa8139255f91741efcba6c99dde49e773b7924890bb059abd8e99268a8aaa36->leave($__internal_eaa8139255f91741efcba6c99dde49e773b7924890bb059abd8e99268a8aaa36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
