<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_033289d412820e45483d0e6f704889d931cf62f37e8947aa237c1d0753147de6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7261f2e133a9bf21148a5abd8be6c1c1f470add4bd1e071a4e3fa33bc37bc2f4 = $this->env->getExtension("native_profiler");
        $__internal_7261f2e133a9bf21148a5abd8be6c1c1f470add4bd1e071a4e3fa33bc37bc2f4->enter($__internal_7261f2e133a9bf21148a5abd8be6c1c1f470add4bd1e071a4e3fa33bc37bc2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7261f2e133a9bf21148a5abd8be6c1c1f470add4bd1e071a4e3fa33bc37bc2f4->leave($__internal_7261f2e133a9bf21148a5abd8be6c1c1f470add4bd1e071a4e3fa33bc37bc2f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_86bbc65682b46090ffa1e47bfd07cf3c28e47596e13f068b74bf576d54d28f78 = $this->env->getExtension("native_profiler");
        $__internal_86bbc65682b46090ffa1e47bfd07cf3c28e47596e13f068b74bf576d54d28f78->enter($__internal_86bbc65682b46090ffa1e47bfd07cf3c28e47596e13f068b74bf576d54d28f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_86bbc65682b46090ffa1e47bfd07cf3c28e47596e13f068b74bf576d54d28f78->leave($__internal_86bbc65682b46090ffa1e47bfd07cf3c28e47596e13f068b74bf576d54d28f78_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_22d25bffb5d24e9673c39046e66cc65676d81e1974c5cfed5d907f63b9e49e6c = $this->env->getExtension("native_profiler");
        $__internal_22d25bffb5d24e9673c39046e66cc65676d81e1974c5cfed5d907f63b9e49e6c->enter($__internal_22d25bffb5d24e9673c39046e66cc65676d81e1974c5cfed5d907f63b9e49e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_22d25bffb5d24e9673c39046e66cc65676d81e1974c5cfed5d907f63b9e49e6c->leave($__internal_22d25bffb5d24e9673c39046e66cc65676d81e1974c5cfed5d907f63b9e49e6c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1647dddd025188caa1d5c58ec9f4f5da08e7057e9464be0a9a200e4f6c284c5 = $this->env->getExtension("native_profiler");
        $__internal_a1647dddd025188caa1d5c58ec9f4f5da08e7057e9464be0a9a200e4f6c284c5->enter($__internal_a1647dddd025188caa1d5c58ec9f4f5da08e7057e9464be0a9a200e4f6c284c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a1647dddd025188caa1d5c58ec9f4f5da08e7057e9464be0a9a200e4f6c284c5->leave($__internal_a1647dddd025188caa1d5c58ec9f4f5da08e7057e9464be0a9a200e4f6c284c5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
