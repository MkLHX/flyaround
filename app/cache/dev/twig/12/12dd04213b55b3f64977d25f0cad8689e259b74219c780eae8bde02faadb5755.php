<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_76a864ffbb067f140906256be64f29f2dff4e98eb687f9f30698bd644f47c94d extends Twig_Template
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
        $__internal_daf6ab13ebeb1b42320d2eb34b30fe221baf63fe998781ff848300a7a0769315 = $this->env->getExtension("native_profiler");
        $__internal_daf6ab13ebeb1b42320d2eb34b30fe221baf63fe998781ff848300a7a0769315->enter($__internal_daf6ab13ebeb1b42320d2eb34b30fe221baf63fe998781ff848300a7a0769315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_daf6ab13ebeb1b42320d2eb34b30fe221baf63fe998781ff848300a7a0769315->leave($__internal_daf6ab13ebeb1b42320d2eb34b30fe221baf63fe998781ff848300a7a0769315_prof);

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
