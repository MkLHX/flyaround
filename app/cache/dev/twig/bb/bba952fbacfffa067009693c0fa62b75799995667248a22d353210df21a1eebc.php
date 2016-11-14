<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fcb0cf8e76b49a231f2800b2bb2947a94effc3919c83bee783ddf02465b7ac19 extends Twig_Template
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
        $__internal_6ccb504acf6ead6c20085622a2c5c355b350735c7d1fc06959fb60e80dd6d1db = $this->env->getExtension("native_profiler");
        $__internal_6ccb504acf6ead6c20085622a2c5c355b350735c7d1fc06959fb60e80dd6d1db->enter($__internal_6ccb504acf6ead6c20085622a2c5c355b350735c7d1fc06959fb60e80dd6d1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6ccb504acf6ead6c20085622a2c5c355b350735c7d1fc06959fb60e80dd6d1db->leave($__internal_6ccb504acf6ead6c20085622a2c5c355b350735c7d1fc06959fb60e80dd6d1db_prof);

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
