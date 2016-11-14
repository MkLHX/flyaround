<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_6c7d204cf9cb5d199deb3a86244b75da89c069d20aa83db7f3577e23c4d2d4aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_8583f36c7d63e49911e3818b6ccc11b7b49843f7db40af20a5d804741d95783b = $this->env->getExtension("native_profiler");
        $__internal_8583f36c7d63e49911e3818b6ccc11b7b49843f7db40af20a5d804741d95783b->enter($__internal_8583f36c7d63e49911e3818b6ccc11b7b49843f7db40af20a5d804741d95783b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8583f36c7d63e49911e3818b6ccc11b7b49843f7db40af20a5d804741d95783b->leave($__internal_8583f36c7d63e49911e3818b6ccc11b7b49843f7db40af20a5d804741d95783b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_de2a4db7785068cf53c8097d9adc1c18cc68a7b17c3a59fc95957b2f39280c2d = $this->env->getExtension("native_profiler");
        $__internal_de2a4db7785068cf53c8097d9adc1c18cc68a7b17c3a59fc95957b2f39280c2d->enter($__internal_de2a4db7785068cf53c8097d9adc1c18cc68a7b17c3a59fc95957b2f39280c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_de2a4db7785068cf53c8097d9adc1c18cc68a7b17c3a59fc95957b2f39280c2d->leave($__internal_de2a4db7785068cf53c8097d9adc1c18cc68a7b17c3a59fc95957b2f39280c2d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
