<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_afc3a51d6ddce42332048b08a35b8bc95e202b116331db4faee37aae07fae10f extends Twig_Template
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
        $__internal_00c9e6ebb399131fe5f080028624c6b6facd07ca294e1f90018d899811627c91 = $this->env->getExtension("native_profiler");
        $__internal_00c9e6ebb399131fe5f080028624c6b6facd07ca294e1f90018d899811627c91->enter($__internal_00c9e6ebb399131fe5f080028624c6b6facd07ca294e1f90018d899811627c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_00c9e6ebb399131fe5f080028624c6b6facd07ca294e1f90018d899811627c91->leave($__internal_00c9e6ebb399131fe5f080028624c6b6facd07ca294e1f90018d899811627c91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
