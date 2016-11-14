<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_4d8dd6b9367f10b70258e89a10ffb978d5a7c2fcb712288a7001dcb33780b1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f1bd86d899ff1fb54254578fb80d3000f647b6c9c303cd93f6ebf531fea7b99 = $this->env->getExtension("native_profiler");
        $__internal_0f1bd86d899ff1fb54254578fb80d3000f647b6c9c303cd93f6ebf531fea7b99->enter($__internal_0f1bd86d899ff1fb54254578fb80d3000f647b6c9c303cd93f6ebf531fea7b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f1bd86d899ff1fb54254578fb80d3000f647b6c9c303cd93f6ebf531fea7b99->leave($__internal_0f1bd86d899ff1fb54254578fb80d3000f647b6c9c303cd93f6ebf531fea7b99_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_fa36ef5d23609939e5982b753ca00984deff60c5843d6b8ead76ab5f13a8e193 = $this->env->getExtension("native_profiler");
        $__internal_fa36ef5d23609939e5982b753ca00984deff60c5843d6b8ead76ab5f13a8e193->enter($__internal_fa36ef5d23609939e5982b753ca00984deff60c5843d6b8ead76ab5f13a8e193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_fa36ef5d23609939e5982b753ca00984deff60c5843d6b8ead76ab5f13a8e193->leave($__internal_fa36ef5d23609939e5982b753ca00984deff60c5843d6b8ead76ab5f13a8e193_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_4ee7daef7acdea5f0bde7a90fdf1ead9c885d6f568603537b6af70eb42b60d42 = $this->env->getExtension("native_profiler");
        $__internal_4ee7daef7acdea5f0bde7a90fdf1ead9c885d6f568603537b6af70eb42b60d42->enter($__internal_4ee7daef7acdea5f0bde7a90fdf1ead9c885d6f568603537b6af70eb42b60d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_4ee7daef7acdea5f0bde7a90fdf1ead9c885d6f568603537b6af70eb42b60d42->leave($__internal_4ee7daef7acdea5f0bde7a90fdf1ead9c885d6f568603537b6af70eb42b60d42_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_d9175e7819e759dead4b8ed61c0682112b398e31c9f2750319fbe98d565d3ec6 = $this->env->getExtension("native_profiler");
        $__internal_d9175e7819e759dead4b8ed61c0682112b398e31c9f2750319fbe98d565d3ec6->enter($__internal_d9175e7819e759dead4b8ed61c0682112b398e31c9f2750319fbe98d565d3ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_d9175e7819e759dead4b8ed61c0682112b398e31c9f2750319fbe98d565d3ec6->leave($__internal_d9175e7819e759dead4b8ed61c0682112b398e31c9f2750319fbe98d565d3ec6_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_b0a421c2a6e9f3d83ea5662a07d3b8d7bc8c0e365bd8c10557d83179db62dbef = $this->env->getExtension("native_profiler");
        $__internal_b0a421c2a6e9f3d83ea5662a07d3b8d7bc8c0e365bd8c10557d83179db62dbef->enter($__internal_b0a421c2a6e9f3d83ea5662a07d3b8d7bc8c0e365bd8c10557d83179db62dbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_b0a421c2a6e9f3d83ea5662a07d3b8d7bc8c0e365bd8c10557d83179db62dbef->leave($__internal_b0a421c2a6e9f3d83ea5662a07d3b8d7bc8c0e365bd8c10557d83179db62dbef_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee21697ff6ae5d32c49086d0469d0de676fb10c14ce7d7582e1ba8f4a96eda3c = $this->env->getExtension("native_profiler");
        $__internal_ee21697ff6ae5d32c49086d0469d0de676fb10c14ce7d7582e1ba8f4a96eda3c->enter($__internal_ee21697ff6ae5d32c49086d0469d0de676fb10c14ce7d7582e1ba8f4a96eda3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_ee21697ff6ae5d32c49086d0469d0de676fb10c14ce7d7582e1ba8f4a96eda3c->leave($__internal_ee21697ff6ae5d32c49086d0469d0de676fb10c14ce7d7582e1ba8f4a96eda3c_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_b7ea0d29ac3ac75115f141b6b5687c26cb962bfa7fc40b1c36a5604b4fb56cf0 = $this->env->getExtension("native_profiler");
        $__internal_b7ea0d29ac3ac75115f141b6b5687c26cb962bfa7fc40b1c36a5604b4fb56cf0->enter($__internal_b7ea0d29ac3ac75115f141b6b5687c26cb962bfa7fc40b1c36a5604b4fb56cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_b7ea0d29ac3ac75115f141b6b5687c26cb962bfa7fc40b1c36a5604b4fb56cf0->leave($__internal_b7ea0d29ac3ac75115f141b6b5687c26cb962bfa7fc40b1c36a5604b4fb56cf0_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_ba56f92124f66a71cd35c01ba43febd0f3ffcdce6b8cb2cb5396ab71f2a7223e = $this->env->getExtension("native_profiler");
        $__internal_ba56f92124f66a71cd35c01ba43febd0f3ffcdce6b8cb2cb5396ab71f2a7223e->enter($__internal_ba56f92124f66a71cd35c01ba43febd0f3ffcdce6b8cb2cb5396ab71f2a7223e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_ba56f92124f66a71cd35c01ba43febd0f3ffcdce6b8cb2cb5396ab71f2a7223e->leave($__internal_ba56f92124f66a71cd35c01ba43febd0f3ffcdce6b8cb2cb5396ab71f2a7223e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends admin_pool.getTemplate('layout') %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
