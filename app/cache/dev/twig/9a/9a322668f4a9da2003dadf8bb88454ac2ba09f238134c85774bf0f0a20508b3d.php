<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_de2ba726b04b4e39b9061cb6016feb81efc3368f48f9c4a31e2d2e50a112d605 extends Twig_Template
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
        $__internal_6862c5eaf9064faa0e4c1d4b8a614cc1139db35635a1633ff28100a83d6eaced = $this->env->getExtension("native_profiler");
        $__internal_6862c5eaf9064faa0e4c1d4b8a614cc1139db35635a1633ff28100a83d6eaced->enter($__internal_6862c5eaf9064faa0e4c1d4b8a614cc1139db35635a1633ff28100a83d6eaced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6862c5eaf9064faa0e4c1d4b8a614cc1139db35635a1633ff28100a83d6eaced->leave($__internal_6862c5eaf9064faa0e4c1d4b8a614cc1139db35635a1633ff28100a83d6eaced_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
