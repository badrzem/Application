<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_38e7b2d4128b6d2d015fd681218616044871cb04179c561e9855b6013b819781 extends Twig_Template
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
        $__internal_5123ebceccc9aa28bd3853f9599b2dc564337e97b667f643c543468794b2c330 = $this->env->getExtension("native_profiler");
        $__internal_5123ebceccc9aa28bd3853f9599b2dc564337e97b667f643c543468794b2c330->enter($__internal_5123ebceccc9aa28bd3853f9599b2dc564337e97b667f643c543468794b2c330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5123ebceccc9aa28bd3853f9599b2dc564337e97b667f643c543468794b2c330->leave($__internal_5123ebceccc9aa28bd3853f9599b2dc564337e97b667f643c543468794b2c330_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
