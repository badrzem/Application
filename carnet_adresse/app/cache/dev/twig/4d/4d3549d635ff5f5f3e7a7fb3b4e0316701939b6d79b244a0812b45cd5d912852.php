<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c8ebc5bf0c2e60a9a0f09f90c58cf79a5fe19349379dbde95005ecc3a7f02ef2 extends Twig_Template
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
        $__internal_29f81383896e268fdbdcb529f66b776e069b96a5a8329ab521628ab79e9315a0 = $this->env->getExtension("native_profiler");
        $__internal_29f81383896e268fdbdcb529f66b776e069b96a5a8329ab521628ab79e9315a0->enter($__internal_29f81383896e268fdbdcb529f66b776e069b96a5a8329ab521628ab79e9315a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_29f81383896e268fdbdcb529f66b776e069b96a5a8329ab521628ab79e9315a0->leave($__internal_29f81383896e268fdbdcb529f66b776e069b96a5a8329ab521628ab79e9315a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
