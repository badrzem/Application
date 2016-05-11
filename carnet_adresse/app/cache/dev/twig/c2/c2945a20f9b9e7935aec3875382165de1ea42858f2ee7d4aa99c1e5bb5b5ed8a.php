<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f77243c785e60c16c81311b810e17c62b75c883327c90364a004db6765b99b10 extends Twig_Template
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
        $__internal_4953ab598d75478af71268cd789d93f763ee0d419b6a535292e51403894bb4d7 = $this->env->getExtension("native_profiler");
        $__internal_4953ab598d75478af71268cd789d93f763ee0d419b6a535292e51403894bb4d7->enter($__internal_4953ab598d75478af71268cd789d93f763ee0d419b6a535292e51403894bb4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4953ab598d75478af71268cd789d93f763ee0d419b6a535292e51403894bb4d7->leave($__internal_4953ab598d75478af71268cd789d93f763ee0d419b6a535292e51403894bb4d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
