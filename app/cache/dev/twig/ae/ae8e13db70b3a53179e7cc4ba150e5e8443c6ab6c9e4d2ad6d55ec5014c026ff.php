<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_59ad623977b8294ccb2dceec2d96fc7ee4ce491433c7e0f2adb69bd4cceef8e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f82ae55d966f56f6409d1fe15f170ea81c2efa4c68acb39d68ca330a3de57c76 = $this->env->getExtension("native_profiler");
        $__internal_f82ae55d966f56f6409d1fe15f170ea81c2efa4c68acb39d68ca330a3de57c76->enter($__internal_f82ae55d966f56f6409d1fe15f170ea81c2efa4c68acb39d68ca330a3de57c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_f82ae55d966f56f6409d1fe15f170ea81c2efa4c68acb39d68ca330a3de57c76->leave($__internal_f82ae55d966f56f6409d1fe15f170ea81c2efa4c68acb39d68ca330a3de57c76_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_ab7c5ef01b354d3a2028647bd0f0c100c28da9622623e009966351e2c897b752 = $this->env->getExtension("native_profiler");
        $__internal_ab7c5ef01b354d3a2028647bd0f0c100c28da9622623e009966351e2c897b752->enter($__internal_ab7c5ef01b354d3a2028647bd0f0c100c28da9622623e009966351e2c897b752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_ab7c5ef01b354d3a2028647bd0f0c100c28da9622623e009966351e2c897b752->leave($__internal_ab7c5ef01b354d3a2028647bd0f0c100c28da9622623e009966351e2c897b752_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_1428b7f9e1e42105c54af2a38fbca3cc4947ceebbdc80381a8207f70bcd55308 = $this->env->getExtension("native_profiler");
        $__internal_1428b7f9e1e42105c54af2a38fbca3cc4947ceebbdc80381a8207f70bcd55308->enter($__internal_1428b7f9e1e42105c54af2a38fbca3cc4947ceebbdc80381a8207f70bcd55308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_1428b7f9e1e42105c54af2a38fbca3cc4947ceebbdc80381a8207f70bcd55308->leave($__internal_1428b7f9e1e42105c54af2a38fbca3cc4947ceebbdc80381a8207f70bcd55308_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
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
/* */
/* <div>*/
/*     {% block label %}*/
/*         {% if filter.fielddescription.options.name is defined %}*/
/*             {{ form_label(filter_form, filter.fielddescription.options.name) }}*/
/*         {% else %}*/
/*             {{ form_label(filter_form) }}*/
/*         {% endif %}*/
/*         <br>*/
/*     {% endblock %}*/
/* */
/*     <div class="sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(filter_form) }}{% endblock %}*/
/*     </div>*/
/* </div>*/
/* */
