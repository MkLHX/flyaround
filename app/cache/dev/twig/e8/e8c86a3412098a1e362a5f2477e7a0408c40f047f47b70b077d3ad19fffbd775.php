<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_326263ba98e1bdc8f25c09fbc187b390041c69ccf55a5238b2d1131577948854 extends Twig_Template
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
        $__internal_29282cf17dd492d2e5cfeff537361ea04559f059eac333f3b1169d838fcd1653 = $this->env->getExtension("native_profiler");
        $__internal_29282cf17dd492d2e5cfeff537361ea04559f059eac333f3b1169d838fcd1653->enter($__internal_29282cf17dd492d2e5cfeff537361ea04559f059eac333f3b1169d838fcd1653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_29282cf17dd492d2e5cfeff537361ea04559f059eac333f3b1169d838fcd1653->leave($__internal_29282cf17dd492d2e5cfeff537361ea04559f059eac333f3b1169d838fcd1653_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
