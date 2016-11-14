<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_df73a26e97c784a606aecb7b509d87f333505764fe7cdebde6933b14bddc5e5d extends Twig_Template
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
        $__internal_1294914dc44e652bccfa24d8c5030cd754dd6ea289a96286d0f876c5aa3ab317 = $this->env->getExtension("native_profiler");
        $__internal_1294914dc44e652bccfa24d8c5030cd754dd6ea289a96286d0f876c5aa3ab317->enter($__internal_1294914dc44e652bccfa24d8c5030cd754dd6ea289a96286d0f876c5aa3ab317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_1294914dc44e652bccfa24d8c5030cd754dd6ea289a96286d0f876c5aa3ab317->leave($__internal_1294914dc44e652bccfa24d8c5030cd754dd6ea289a96286d0f876c5aa3ab317_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
