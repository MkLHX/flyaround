<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_1b98176309ed6c60e81771a69b3faf5e62eda4cd65b33c81faeefa3e575f93d1 extends Twig_Template
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
        $__internal_bf48a13d286d9b75c0387835364bfafa4bdef71d40afa232f5fe8847643bcbf2 = $this->env->getExtension("native_profiler");
        $__internal_bf48a13d286d9b75c0387835364bfafa4bdef71d40afa232f5fe8847643bcbf2->enter($__internal_bf48a13d286d9b75c0387835364bfafa4bdef71d40afa232f5fe8847643bcbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_bf48a13d286d9b75c0387835364bfafa4bdef71d40afa232f5fe8847643bcbf2->leave($__internal_bf48a13d286d9b75c0387835364bfafa4bdef71d40afa232f5fe8847643bcbf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
