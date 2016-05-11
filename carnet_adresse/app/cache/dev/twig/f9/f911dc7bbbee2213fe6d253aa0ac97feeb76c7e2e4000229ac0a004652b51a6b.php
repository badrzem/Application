<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0c7c2056487cb4e1a81db4bce29c0795305956591cbdcaad62cbac6353a747ff extends Twig_Template
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
        $__internal_bd7505d29951bec45faaad568bec97f1bd4d79db8ea8a82e146697c0b0d88fe3 = $this->env->getExtension("native_profiler");
        $__internal_bd7505d29951bec45faaad568bec97f1bd4d79db8ea8a82e146697c0b0d88fe3->enter($__internal_bd7505d29951bec45faaad568bec97f1bd4d79db8ea8a82e146697c0b0d88fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bd7505d29951bec45faaad568bec97f1bd4d79db8ea8a82e146697c0b0d88fe3->leave($__internal_bd7505d29951bec45faaad568bec97f1bd4d79db8ea8a82e146697c0b0d88fe3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
