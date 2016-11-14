<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5f6959eb72e4e34e2af2cedc229840346beadcc39111455facb03ce51f527196 extends Twig_Template
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
        $__internal_7183646314f16a521b1167ccba314b37933b488b0fef4dfb46382e3d2973947d = $this->env->getExtension("native_profiler");
        $__internal_7183646314f16a521b1167ccba314b37933b488b0fef4dfb46382e3d2973947d->enter($__internal_7183646314f16a521b1167ccba314b37933b488b0fef4dfb46382e3d2973947d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7183646314f16a521b1167ccba314b37933b488b0fef4dfb46382e3d2973947d->leave($__internal_7183646314f16a521b1167ccba314b37933b488b0fef4dfb46382e3d2973947d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
