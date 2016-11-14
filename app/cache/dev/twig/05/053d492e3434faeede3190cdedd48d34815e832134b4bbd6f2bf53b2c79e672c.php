<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3d3c27d76e4f6c1fa7b632ac75486e1891300ba9ccf2f691b837b4b830f13d06 extends Twig_Template
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
        $__internal_729d7bfd4dd08a3f090e0ae5e5e0c581c7f0f730fff5c6d0512e0f858b21d053 = $this->env->getExtension("native_profiler");
        $__internal_729d7bfd4dd08a3f090e0ae5e5e0c581c7f0f730fff5c6d0512e0f858b21d053->enter($__internal_729d7bfd4dd08a3f090e0ae5e5e0c581c7f0f730fff5c6d0512e0f858b21d053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_729d7bfd4dd08a3f090e0ae5e5e0c581c7f0f730fff5c6d0512e0f858b21d053->leave($__internal_729d7bfd4dd08a3f090e0ae5e5e0c581c7f0f730fff5c6d0512e0f858b21d053_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
