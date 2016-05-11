<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_96b32e9305c359ec3a1b75f990c7e24bc9aad4188e74fc5f17604070e818f0ad extends Twig_Template
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
        $__internal_da4bbef151232ad30235fdb58ea6af52d0c678cef56c4e6bd5400a4a5e0c6cd6 = $this->env->getExtension("native_profiler");
        $__internal_da4bbef151232ad30235fdb58ea6af52d0c678cef56c4e6bd5400a4a5e0c6cd6->enter($__internal_da4bbef151232ad30235fdb58ea6af52d0c678cef56c4e6bd5400a4a5e0c6cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_da4bbef151232ad30235fdb58ea6af52d0c678cef56c4e6bd5400a4a5e0c6cd6->leave($__internal_da4bbef151232ad30235fdb58ea6af52d0c678cef56c4e6bd5400a4a5e0c6cd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
