<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_cc23f53ae66a435b8e0a143daa4ffca5addf292592fb4d9ea56806eb28a13e14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9067dd49a5f928b9284be56200bf26fbf2f46b97c6d12f67349a34306eb4cdb = $this->env->getExtension("native_profiler");
        $__internal_d9067dd49a5f928b9284be56200bf26fbf2f46b97c6d12f67349a34306eb4cdb->enter($__internal_d9067dd49a5f928b9284be56200bf26fbf2f46b97c6d12f67349a34306eb4cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9067dd49a5f928b9284be56200bf26fbf2f46b97c6d12f67349a34306eb4cdb->leave($__internal_d9067dd49a5f928b9284be56200bf26fbf2f46b97c6d12f67349a34306eb4cdb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a7ad7e985d97b644275540a00e5691b21f5f371eff5f07c670c7f32414170daa = $this->env->getExtension("native_profiler");
        $__internal_a7ad7e985d97b644275540a00e5691b21f5f371eff5f07c670c7f32414170daa->enter($__internal_a7ad7e985d97b644275540a00e5691b21f5f371eff5f07c670c7f32414170daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_a7ad7e985d97b644275540a00e5691b21f5f371eff5f07c670c7f32414170daa->leave($__internal_a7ad7e985d97b644275540a00e5691b21f5f371eff5f07c670c7f32414170daa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
