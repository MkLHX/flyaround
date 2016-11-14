<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ee28e73b2515fa0178676d948fbed5c30dc2dcc046af3a086406eb6aaeb75056 extends Twig_Template
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
        $__internal_f3ea486ed37d37ca4ed0349bfae10ef89ecad93b7f97fea9f1f8ceacefd561fe = $this->env->getExtension("native_profiler");
        $__internal_f3ea486ed37d37ca4ed0349bfae10ef89ecad93b7f97fea9f1f8ceacefd561fe->enter($__internal_f3ea486ed37d37ca4ed0349bfae10ef89ecad93b7f97fea9f1f8ceacefd561fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f3ea486ed37d37ca4ed0349bfae10ef89ecad93b7f97fea9f1f8ceacefd561fe->leave($__internal_f3ea486ed37d37ca4ed0349bfae10ef89ecad93b7f97fea9f1f8ceacefd561fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
