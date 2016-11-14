<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b077b0068d5f9c856679968c102ddbf9e123fb7a4786f7fb75afae5c2616b630 extends Twig_Template
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
        $__internal_1af8e0b3e709692fd20a751818c31f3bab637b942f03d6ce2df563209a8afc28 = $this->env->getExtension("native_profiler");
        $__internal_1af8e0b3e709692fd20a751818c31f3bab637b942f03d6ce2df563209a8afc28->enter($__internal_1af8e0b3e709692fd20a751818c31f3bab637b942f03d6ce2df563209a8afc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1af8e0b3e709692fd20a751818c31f3bab637b942f03d6ce2df563209a8afc28->leave($__internal_1af8e0b3e709692fd20a751818c31f3bab637b942f03d6ce2df563209a8afc28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
