<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0ec83d3df3c84243cd1c2f9eaca48316133ffb0a0837472cd0a014e6b8e61416 extends Twig_Template
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
        $__internal_6d110e047c9594addcccd1f25c4bf5cf2d03964b48f028255a9fa036af134cf1 = $this->env->getExtension("native_profiler");
        $__internal_6d110e047c9594addcccd1f25c4bf5cf2d03964b48f028255a9fa036af134cf1->enter($__internal_6d110e047c9594addcccd1f25c4bf5cf2d03964b48f028255a9fa036af134cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6d110e047c9594addcccd1f25c4bf5cf2d03964b48f028255a9fa036af134cf1->leave($__internal_6d110e047c9594addcccd1f25c4bf5cf2d03964b48f028255a9fa036af134cf1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
