<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f41c1b2bf01378bb770d9a62387e8626eee6a3228a5bfdb79e3386e409a62aeb extends Twig_Template
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
        $__internal_97752e311cbefb7e1d8c5353a3a0a90867285befa8412cb93d092f67fb24eb39 = $this->env->getExtension("native_profiler");
        $__internal_97752e311cbefb7e1d8c5353a3a0a90867285befa8412cb93d092f67fb24eb39->enter($__internal_97752e311cbefb7e1d8c5353a3a0a90867285befa8412cb93d092f67fb24eb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_97752e311cbefb7e1d8c5353a3a0a90867285befa8412cb93d092f67fb24eb39->leave($__internal_97752e311cbefb7e1d8c5353a3a0a90867285befa8412cb93d092f67fb24eb39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
