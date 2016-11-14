<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_afe12d98490573945171e1951b6cecff4b31b1d097c83040a0e72a44543aba89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6d618261ebb7df6af95db5a64d2e719a22254207cd099b773e02be5972d8acf = $this->env->getExtension("native_profiler");
        $__internal_b6d618261ebb7df6af95db5a64d2e719a22254207cd099b773e02be5972d8acf->enter($__internal_b6d618261ebb7df6af95db5a64d2e719a22254207cd099b773e02be5972d8acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b6d618261ebb7df6af95db5a64d2e719a22254207cd099b773e02be5972d8acf->leave($__internal_b6d618261ebb7df6af95db5a64d2e719a22254207cd099b773e02be5972d8acf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f25e79077c2ebf42e6f1c59a11e26d9a6d8ad15a1ae0500e676027a0173d6d80 = $this->env->getExtension("native_profiler");
        $__internal_f25e79077c2ebf42e6f1c59a11e26d9a6d8ad15a1ae0500e676027a0173d6d80->enter($__internal_f25e79077c2ebf42e6f1c59a11e26d9a6d8ad15a1ae0500e676027a0173d6d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f25e79077c2ebf42e6f1c59a11e26d9a6d8ad15a1ae0500e676027a0173d6d80->leave($__internal_f25e79077c2ebf42e6f1c59a11e26d9a6d8ad15a1ae0500e676027a0173d6d80_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
