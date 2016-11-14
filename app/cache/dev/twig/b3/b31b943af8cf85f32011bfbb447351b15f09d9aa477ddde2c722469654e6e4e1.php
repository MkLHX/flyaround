<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_4ad4d65162f7b2b25589814f6463877d002d4218c6c171a385205c2c362ceef3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8464436123f215f5d9b6dbb2830552ab99e6ee20523de3f267c4b6f321b2b3a3 = $this->env->getExtension("native_profiler");
        $__internal_8464436123f215f5d9b6dbb2830552ab99e6ee20523de3f267c4b6f321b2b3a3->enter($__internal_8464436123f215f5d9b6dbb2830552ab99e6ee20523de3f267c4b6f321b2b3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8464436123f215f5d9b6dbb2830552ab99e6ee20523de3f267c4b6f321b2b3a3->leave($__internal_8464436123f215f5d9b6dbb2830552ab99e6ee20523de3f267c4b6f321b2b3a3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2bfc867c87eb874438b9d155961446178a057d0a3c198b6ca9117a398843ce4b = $this->env->getExtension("native_profiler");
        $__internal_2bfc867c87eb874438b9d155961446178a057d0a3c198b6ca9117a398843ce4b->enter($__internal_2bfc867c87eb874438b9d155961446178a057d0a3c198b6ca9117a398843ce4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_2bfc867c87eb874438b9d155961446178a057d0a3c198b6ca9117a398843ce4b->leave($__internal_2bfc867c87eb874438b9d155961446178a057d0a3c198b6ca9117a398843ce4b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
