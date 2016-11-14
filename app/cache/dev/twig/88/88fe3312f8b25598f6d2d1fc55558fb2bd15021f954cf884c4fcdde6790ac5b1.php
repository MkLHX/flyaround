<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_31b07c14f5bd3bbbbdbb8a1f373b856e013166b33a37dcd71c1686b3b411d0c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5428f2b6478b376ab000eb3b93afee638d18f63fac06915031e4a6030bf8daf7 = $this->env->getExtension("native_profiler");
        $__internal_5428f2b6478b376ab000eb3b93afee638d18f63fac06915031e4a6030bf8daf7->enter($__internal_5428f2b6478b376ab000eb3b93afee638d18f63fac06915031e4a6030bf8daf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5428f2b6478b376ab000eb3b93afee638d18f63fac06915031e4a6030bf8daf7->leave($__internal_5428f2b6478b376ab000eb3b93afee638d18f63fac06915031e4a6030bf8daf7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7bee4fbc554d5146548e74890d68e873b1204e548105ad84147f2f42b9b82727 = $this->env->getExtension("native_profiler");
        $__internal_7bee4fbc554d5146548e74890d68e873b1204e548105ad84147f2f42b9b82727->enter($__internal_7bee4fbc554d5146548e74890d68e873b1204e548105ad84147f2f42b9b82727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7bee4fbc554d5146548e74890d68e873b1204e548105ad84147f2f42b9b82727->leave($__internal_7bee4fbc554d5146548e74890d68e873b1204e548105ad84147f2f42b9b82727_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_187e4ec2bffd61ef6063b3b4a73d21e9ea0bf722e7d74072495d936973bef2dc = $this->env->getExtension("native_profiler");
        $__internal_187e4ec2bffd61ef6063b3b4a73d21e9ea0bf722e7d74072495d936973bef2dc->enter($__internal_187e4ec2bffd61ef6063b3b4a73d21e9ea0bf722e7d74072495d936973bef2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_187e4ec2bffd61ef6063b3b4a73d21e9ea0bf722e7d74072495d936973bef2dc->leave($__internal_187e4ec2bffd61ef6063b3b4a73d21e9ea0bf722e7d74072495d936973bef2dc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d62453fcae7678a92c243a0d9979c2ebdf4df74a47d44d6026c33187269edae9 = $this->env->getExtension("native_profiler");
        $__internal_d62453fcae7678a92c243a0d9979c2ebdf4df74a47d44d6026c33187269edae9->enter($__internal_d62453fcae7678a92c243a0d9979c2ebdf4df74a47d44d6026c33187269edae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d62453fcae7678a92c243a0d9979c2ebdf4df74a47d44d6026c33187269edae9->leave($__internal_d62453fcae7678a92c243a0d9979c2ebdf4df74a47d44d6026c33187269edae9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
