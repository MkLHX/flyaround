<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ab7121868a92ccaa7405363baa3363478cd10239c55ac8ad466e40754f164da6 extends Twig_Template
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
        $__internal_7ee7ccdd96afeef19dd15fa29636a5a54a41fc890e5c405645c7d670f5fdb3de = $this->env->getExtension("native_profiler");
        $__internal_7ee7ccdd96afeef19dd15fa29636a5a54a41fc890e5c405645c7d670f5fdb3de->enter($__internal_7ee7ccdd96afeef19dd15fa29636a5a54a41fc890e5c405645c7d670f5fdb3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7ee7ccdd96afeef19dd15fa29636a5a54a41fc890e5c405645c7d670f5fdb3de->leave($__internal_7ee7ccdd96afeef19dd15fa29636a5a54a41fc890e5c405645c7d670f5fdb3de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
