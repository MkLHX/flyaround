<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_65987811a03ae9c30e00fd3902f43f7955dd4b933b61cb41d16b022a78fd4769 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d999821eea250586af5a2cec0cdfef330c2169ed638854848fb4bcf70c87399 = $this->env->getExtension("native_profiler");
        $__internal_9d999821eea250586af5a2cec0cdfef330c2169ed638854848fb4bcf70c87399->enter($__internal_9d999821eea250586af5a2cec0cdfef330c2169ed638854848fb4bcf70c87399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_9d999821eea250586af5a2cec0cdfef330c2169ed638854848fb4bcf70c87399->leave($__internal_9d999821eea250586af5a2cec0cdfef330c2169ed638854848fb4bcf70c87399_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_bbff74dfe7bf370541a698d9183427592c96bc354ffbdee004897f7c306dd082 = $this->env->getExtension("native_profiler");
        $__internal_bbff74dfe7bf370541a698d9183427592c96bc354ffbdee004897f7c306dd082->enter($__internal_bbff74dfe7bf370541a698d9183427592c96bc354ffbdee004897f7c306dd082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_bbff74dfe7bf370541a698d9183427592c96bc354ffbdee004897f7c306dd082->leave($__internal_bbff74dfe7bf370541a698d9183427592c96bc354ffbdee004897f7c306dd082_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_a7226424faa7280c2b5bc7ba1577b380809058fd8cb35bc56f0d4b182a38aa76 = $this->env->getExtension("native_profiler");
        $__internal_a7226424faa7280c2b5bc7ba1577b380809058fd8cb35bc56f0d4b182a38aa76->enter($__internal_a7226424faa7280c2b5bc7ba1577b380809058fd8cb35bc56f0d4b182a38aa76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_a7226424faa7280c2b5bc7ba1577b380809058fd8cb35bc56f0d4b182a38aa76->leave($__internal_a7226424faa7280c2b5bc7ba1577b380809058fd8cb35bc56f0d4b182a38aa76_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_8b920d52c5fb0db2626370dfe00fec424c4f9989826b1fe4e15f1d80f7bc9a2d = $this->env->getExtension("native_profiler");
        $__internal_8b920d52c5fb0db2626370dfe00fec424c4f9989826b1fe4e15f1d80f7bc9a2d->enter($__internal_8b920d52c5fb0db2626370dfe00fec424c4f9989826b1fe4e15f1d80f7bc9a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_8b920d52c5fb0db2626370dfe00fec424c4f9989826b1fe4e15f1d80f7bc9a2d->leave($__internal_8b920d52c5fb0db2626370dfe00fec424c4f9989826b1fe4e15f1d80f7bc9a2d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
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
/* <th{% if(is_diff|default(false)) %} class="diff"{% endif %}>{% block name %}{{ field_description.label|trans({}, field_description.translationDomain ?: admin.translationDomain) }}{% endblock %}</th>*/
/* <td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>*/
/* */
/* {% block field_compare %}*/
/*     {% if(value_compare is defined) %}*/
/*         <td>*/
/*             {% set value = value_compare %}*/
/*             {{ block('field') }}*/
/*         </td>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
