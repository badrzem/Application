<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f2bf8e76aee24303007b1f9e52dc486fffe159e10af3873eb3332a5790a9a61d extends Twig_Template
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
        $__internal_3fa098d8caa084c795e54a30502ee4c2e3f74789dd804b8443fd0f1d452d378a = $this->env->getExtension("native_profiler");
        $__internal_3fa098d8caa084c795e54a30502ee4c2e3f74789dd804b8443fd0f1d452d378a->enter($__internal_3fa098d8caa084c795e54a30502ee4c2e3f74789dd804b8443fd0f1d452d378a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3fa098d8caa084c795e54a30502ee4c2e3f74789dd804b8443fd0f1d452d378a->leave($__internal_3fa098d8caa084c795e54a30502ee4c2e3f74789dd804b8443fd0f1d452d378a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
