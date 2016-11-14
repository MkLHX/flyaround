<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_51df829935d131b0e68cca4b0a20c108e147ff4ce14e35d2a3d81f39fbf441e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_31c637e4ab3be933509f4fb1b15a9c25211db76dcf90e484160ecb4f56f94cdc = $this->env->getExtension("native_profiler");
        $__internal_31c637e4ab3be933509f4fb1b15a9c25211db76dcf90e484160ecb4f56f94cdc->enter($__internal_31c637e4ab3be933509f4fb1b15a9c25211db76dcf90e484160ecb4f56f94cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31c637e4ab3be933509f4fb1b15a9c25211db76dcf90e484160ecb4f56f94cdc->leave($__internal_31c637e4ab3be933509f4fb1b15a9c25211db76dcf90e484160ecb4f56f94cdc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9f505477daf6a6e7ca1f78cffa9fd62f4b01f29b00caea41333e741ffee1679a = $this->env->getExtension("native_profiler");
        $__internal_9f505477daf6a6e7ca1f78cffa9fd62f4b01f29b00caea41333e741ffee1679a->enter($__internal_9f505477daf6a6e7ca1f78cffa9fd62f4b01f29b00caea41333e741ffee1679a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_9f505477daf6a6e7ca1f78cffa9fd62f4b01f29b00caea41333e741ffee1679a->leave($__internal_9f505477daf6a6e7ca1f78cffa9fd62f4b01f29b00caea41333e741ffee1679a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
