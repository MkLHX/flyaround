<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0374e485c04abc2228c402983106365f1ea80dea3e5c5e8a82e025e8b5117c49 extends Twig_Template
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
        $__internal_3782b29952ef9425f8fe8f32cd8ee3b6f6d308533af9f3dcf9c639eb9a6de2f0 = $this->env->getExtension("native_profiler");
        $__internal_3782b29952ef9425f8fe8f32cd8ee3b6f6d308533af9f3dcf9c639eb9a6de2f0->enter($__internal_3782b29952ef9425f8fe8f32cd8ee3b6f6d308533af9f3dcf9c639eb9a6de2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3782b29952ef9425f8fe8f32cd8ee3b6f6d308533af9f3dcf9c639eb9a6de2f0->leave($__internal_3782b29952ef9425f8fe8f32cd8ee3b6f6d308533af9f3dcf9c639eb9a6de2f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
