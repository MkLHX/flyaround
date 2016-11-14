<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9ce00e4251463620ff76c6e93faa9340fb7df164e0d673fb7983ccc6386e8093 extends Twig_Template
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
        $__internal_e747d5ac54d7280f402b991d93135935d58e54cd82c9da5c72fae26c97b43f99 = $this->env->getExtension("native_profiler");
        $__internal_e747d5ac54d7280f402b991d93135935d58e54cd82c9da5c72fae26c97b43f99->enter($__internal_e747d5ac54d7280f402b991d93135935d58e54cd82c9da5c72fae26c97b43f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e747d5ac54d7280f402b991d93135935d58e54cd82c9da5c72fae26c97b43f99->leave($__internal_e747d5ac54d7280f402b991d93135935d58e54cd82c9da5c72fae26c97b43f99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
