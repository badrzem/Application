<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_1d96374834003ec0b7d4e78bfe64c250f0d0ff3342aa30aba0b0b2620c6d9e3d extends Twig_Template
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
        $__internal_602976e7d97e0d9baef872268569041b4fdea37339838065c282f3c8e8b2c68b = $this->env->getExtension("native_profiler");
        $__internal_602976e7d97e0d9baef872268569041b4fdea37339838065c282f3c8e8b2c68b->enter($__internal_602976e7d97e0d9baef872268569041b4fdea37339838065c282f3c8e8b2c68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_602976e7d97e0d9baef872268569041b4fdea37339838065c282f3c8e8b2c68b->leave($__internal_602976e7d97e0d9baef872268569041b4fdea37339838065c282f3c8e8b2c68b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
