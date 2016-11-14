<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_33252364cc2e2b1812ef12db790aca60f0588333a9161fbbde62245b0e357bc2 extends Twig_Template
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
        $__internal_26df72fca94d2e6f2e5b212017a08a96c480caf96061a9ac66abf84f17294a98 = $this->env->getExtension("native_profiler");
        $__internal_26df72fca94d2e6f2e5b212017a08a96c480caf96061a9ac66abf84f17294a98->enter($__internal_26df72fca94d2e6f2e5b212017a08a96c480caf96061a9ac66abf84f17294a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_26df72fca94d2e6f2e5b212017a08a96c480caf96061a9ac66abf84f17294a98->leave($__internal_26df72fca94d2e6f2e5b212017a08a96c480caf96061a9ac66abf84f17294a98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
