<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_43672cd7f61694d938a6f94c83b8e136006b200726d10ad5f449f403d4485624 extends Twig_Template
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
        $__internal_9c611bed3f7a77b3a92e3856bf0e972a07d62e67d844eb12e57b9441bc2be8de = $this->env->getExtension("native_profiler");
        $__internal_9c611bed3f7a77b3a92e3856bf0e972a07d62e67d844eb12e57b9441bc2be8de->enter($__internal_9c611bed3f7a77b3a92e3856bf0e972a07d62e67d844eb12e57b9441bc2be8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9c611bed3f7a77b3a92e3856bf0e972a07d62e67d844eb12e57b9441bc2be8de->leave($__internal_9c611bed3f7a77b3a92e3856bf0e972a07d62e67d844eb12e57b9441bc2be8de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
