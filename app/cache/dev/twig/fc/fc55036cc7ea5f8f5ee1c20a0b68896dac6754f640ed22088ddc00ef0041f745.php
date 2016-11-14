<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3b6ad64d5113b8be478fcdaa91907b8e519ea48e0c97c382b484a8ff598ef249 extends Twig_Template
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
        $__internal_b2bf3a737231ed06159987392c3b8e7c8d7236b721803bd856c7958bb0ec0489 = $this->env->getExtension("native_profiler");
        $__internal_b2bf3a737231ed06159987392c3b8e7c8d7236b721803bd856c7958bb0ec0489->enter($__internal_b2bf3a737231ed06159987392c3b8e7c8d7236b721803bd856c7958bb0ec0489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b2bf3a737231ed06159987392c3b8e7c8d7236b721803bd856c7958bb0ec0489->leave($__internal_b2bf3a737231ed06159987392c3b8e7c8d7236b721803bd856c7958bb0ec0489_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
