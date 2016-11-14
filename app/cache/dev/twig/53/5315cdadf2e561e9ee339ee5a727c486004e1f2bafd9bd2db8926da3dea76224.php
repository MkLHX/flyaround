<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2b90aedd70d7c3df2ca0f116c03cbea32e5ff70c6e84a58d694d0f26909041fb extends Twig_Template
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
        $__internal_4a65413602a11b8448b76de91a150934734a57967ae22230d234113b3eaae355 = $this->env->getExtension("native_profiler");
        $__internal_4a65413602a11b8448b76de91a150934734a57967ae22230d234113b3eaae355->enter($__internal_4a65413602a11b8448b76de91a150934734a57967ae22230d234113b3eaae355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4a65413602a11b8448b76de91a150934734a57967ae22230d234113b3eaae355->leave($__internal_4a65413602a11b8448b76de91a150934734a57967ae22230d234113b3eaae355_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
