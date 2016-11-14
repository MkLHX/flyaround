<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d328895bdc18905d5f3c7d62d0b585a1d78ec7d3933f50de7350195cd2debdee extends Twig_Template
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
        $__internal_5e5ca9d5aafc1de26d3826bd002924bc498a6a45eeb6a26bc12556e621ba1e6a = $this->env->getExtension("native_profiler");
        $__internal_5e5ca9d5aafc1de26d3826bd002924bc498a6a45eeb6a26bc12556e621ba1e6a->enter($__internal_5e5ca9d5aafc1de26d3826bd002924bc498a6a45eeb6a26bc12556e621ba1e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5e5ca9d5aafc1de26d3826bd002924bc498a6a45eeb6a26bc12556e621ba1e6a->leave($__internal_5e5ca9d5aafc1de26d3826bd002924bc498a6a45eeb6a26bc12556e621ba1e6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
