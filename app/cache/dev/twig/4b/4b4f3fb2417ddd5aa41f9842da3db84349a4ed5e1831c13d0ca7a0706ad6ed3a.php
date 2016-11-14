<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_8d52123fd1650ad4f41dca9168cb724a4ec5d851a8fd5ad22eb8ddcff433ebe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0304984fe3af225dd6ea57997a7e50b11cda2676b9f6633eb6fdbf49e55edec5 = $this->env->getExtension("native_profiler");
        $__internal_0304984fe3af225dd6ea57997a7e50b11cda2676b9f6633eb6fdbf49e55edec5->enter($__internal_0304984fe3af225dd6ea57997a7e50b11cda2676b9f6633eb6fdbf49e55edec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_0304984fe3af225dd6ea57997a7e50b11cda2676b9f6633eb6fdbf49e55edec5->leave($__internal_0304984fe3af225dd6ea57997a7e50b11cda2676b9f6633eb6fdbf49e55edec5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f85bed665ba81439b811fa50249e5b039ab7b6ca04f85fb952369521cffb69c5 = $this->env->getExtension("native_profiler");
        $__internal_f85bed665ba81439b811fa50249e5b039ab7b6ca04f85fb952369521cffb69c5->enter($__internal_f85bed665ba81439b811fa50249e5b039ab7b6ca04f85fb952369521cffb69c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_f85bed665ba81439b811fa50249e5b039ab7b6ca04f85fb952369521cffb69c5->leave($__internal_f85bed665ba81439b811fa50249e5b039ab7b6ca04f85fb952369521cffb69c5_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_5c8781a0e3bc64a8fa70bb6ad8df1096b968bd5189284231fea929e5b1a7e344 = $this->env->getExtension("native_profiler");
        $__internal_5c8781a0e3bc64a8fa70bb6ad8df1096b968bd5189284231fea929e5b1a7e344->enter($__internal_5c8781a0e3bc64a8fa70bb6ad8df1096b968bd5189284231fea929e5b1a7e344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_5c8781a0e3bc64a8fa70bb6ad8df1096b968bd5189284231fea929e5b1a7e344->leave($__internal_5c8781a0e3bc64a8fa70bb6ad8df1096b968bd5189284231fea929e5b1a7e344_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_4baff58e7419b945ac8595e2b6e5278230811c0b74e27aa70ad9ef0cfb180d96 = $this->env->getExtension("native_profiler");
        $__internal_4baff58e7419b945ac8595e2b6e5278230811c0b74e27aa70ad9ef0cfb180d96->enter($__internal_4baff58e7419b945ac8595e2b6e5278230811c0b74e27aa70ad9ef0cfb180d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_4baff58e7419b945ac8595e2b6e5278230811c0b74e27aa70ad9ef0cfb180d96->leave($__internal_4baff58e7419b945ac8595e2b6e5278230811c0b74e27aa70ad9ef0cfb180d96_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
/* <div>*/
/*     <div class="sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/*         {% block label %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endblock %}*/
/* */
/*         <div class="sonata-ba-field-error-messages">*/
/*             {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
