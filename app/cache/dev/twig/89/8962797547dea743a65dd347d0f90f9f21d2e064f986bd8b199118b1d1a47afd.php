<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_bf0ce053faa2f05b0dccd4ccf88392a1654d0ee6c45928e9834c9c0f555fd14b extends Twig_Template
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
        $__internal_417d16d76adda016d51908394a395d11e6dc2dee739c46c870f09dbe43cd012e = $this->env->getExtension("native_profiler");
        $__internal_417d16d76adda016d51908394a395d11e6dc2dee739c46c870f09dbe43cd012e->enter($__internal_417d16d76adda016d51908394a395d11e6dc2dee739c46c870f09dbe43cd012e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_417d16d76adda016d51908394a395d11e6dc2dee739c46c870f09dbe43cd012e->leave($__internal_417d16d76adda016d51908394a395d11e6dc2dee739c46c870f09dbe43cd012e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
