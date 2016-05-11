<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_cdc8fefe3670043353d7fe134a82c30f6b22c617793f4b4a85d7fcf6c2f54164 extends Twig_Template
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
        $__internal_755d955cc91c37fbbec474b169014487528e15449cb32d6f49a8921f70415bf6 = $this->env->getExtension("native_profiler");
        $__internal_755d955cc91c37fbbec474b169014487528e15449cb32d6f49a8921f70415bf6->enter($__internal_755d955cc91c37fbbec474b169014487528e15449cb32d6f49a8921f70415bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_755d955cc91c37fbbec474b169014487528e15449cb32d6f49a8921f70415bf6->leave($__internal_755d955cc91c37fbbec474b169014487528e15449cb32d6f49a8921f70415bf6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
