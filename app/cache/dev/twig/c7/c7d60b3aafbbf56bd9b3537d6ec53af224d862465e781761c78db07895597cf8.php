<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_8be36f06cb16fc09f013efec21613440df2a3fc324c7650d03d45982543fd1bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d070ab2f995a282492c2d5b8d1f800ab85e0dce7d38d15ea1145efbda302b0b3 = $this->env->getExtension("native_profiler");
        $__internal_d070ab2f995a282492c2d5b8d1f800ab85e0dce7d38d15ea1145efbda302b0b3->enter($__internal_d070ab2f995a282492c2d5b8d1f800ab85e0dce7d38d15ea1145efbda302b0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('sonata_admin')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()));
        // line 17
        if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d070ab2f995a282492c2d5b8d1f800ab85e0dce7d38d15ea1145efbda302b0b3->leave($__internal_d070ab2f995a282492c2d5b8d1f800ab85e0dce7d38d15ea1145efbda302b0b3_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_d9299e94b3b90ae3adb2796f020c44495b858d0993fc3fa033050e20d9b58401 = $this->env->getExtension("native_profiler");
        $__internal_d9299e94b3b90ae3adb2796f020c44495b858d0993fc3fa033050e20d9b58401->enter($__internal_d9299e94b3b90ae3adb2796f020c44495b858d0993fc3fa033050e20d9b58401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
        
        $__internal_d9299e94b3b90ae3adb2796f020c44495b858d0993fc3fa033050e20d9b58401->leave($__internal_d9299e94b3b90ae3adb2796f020c44495b858d0993fc3fa033050e20d9b58401_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_77de270eb698d706a17bf232cb91a116eb1b532f49b33ea15a776a529c19a4c0 = $this->env->getExtension("native_profiler");
        $__internal_77de270eb698d706a17bf232cb91a116eb1b532f49b33ea15a776a529c19a4c0->enter($__internal_77de270eb698d706a17bf232cb91a116eb1b532f49b33ea15a776a529c19a4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 29
            echo "            <span class=\"label label-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
        ";
        } else {
            // line 31
            echo "            <span class=\"label label-danger\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
        ";
        }
        // line 33
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_77de270eb698d706a17bf232cb91a116eb1b532f49b33ea15a776a529c19a4c0->leave($__internal_77de270eb698d706a17bf232cb91a116eb1b532f49b33ea15a776a529c19a4c0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  88 => 31,  82 => 29,  79 => 28,  76 => 27,  70 => 26,  63 => 23,  56 => 21,  51 => 20,  48 => 19,  42 => 18,  35 => 12,  32 => 17,  30 => 15,  28 => 14,  19 => 12,);
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
/* {% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.isGranted('EDIT', object) %}*/
/* {% set xEditableType = field_description.type|sonata_xeditable_type %}*/
/* */
/* {% if isEditable and xEditableType %}*/
/*     {% block field_span_attributes %}*/
/*         {% spaceless %}*/
/*             {{ parent() }}*/
/*             data-source="[{value: 0, text: '{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}'},{value: 1, text: '{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}'}]"*/
/*         {% endspaceless %}*/
/*     {% endblock %}*/
/* {% endif %}*/
/* */
/* {% block field %}*/
/*     {% spaceless %}*/
/*         {% if value %}*/
/*             <span class="label label-success">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>*/
/*         {% else %}*/
/*             <span class="label label-danger">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
