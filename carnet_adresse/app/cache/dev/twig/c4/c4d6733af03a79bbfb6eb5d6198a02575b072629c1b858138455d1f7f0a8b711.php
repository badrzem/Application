<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e13244448fc48993738e0c5490eba4e2eefab096acc03127f137340f60dd55c7 extends Twig_Template
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
        $__internal_963a11c3389d6d25a3a15772a43890a518bf3437b97d328e5fb3c75ba62c3860 = $this->env->getExtension("native_profiler");
        $__internal_963a11c3389d6d25a3a15772a43890a518bf3437b97d328e5fb3c75ba62c3860->enter($__internal_963a11c3389d6d25a3a15772a43890a518bf3437b97d328e5fb3c75ba62c3860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_963a11c3389d6d25a3a15772a43890a518bf3437b97d328e5fb3c75ba62c3860->leave($__internal_963a11c3389d6d25a3a15772a43890a518bf3437b97d328e5fb3c75ba62c3860_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
