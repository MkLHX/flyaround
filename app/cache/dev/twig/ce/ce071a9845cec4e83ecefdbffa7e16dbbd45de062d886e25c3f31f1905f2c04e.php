<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_22f01c3f7c2485816874db169ece4089fc42eacfa1b5dd81f4bfbd3ad37ab981 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_859b2adf74b5e87a88b576ed5cb7f960ef78afd10f6c1dbce7c002ac8399cadf = $this->env->getExtension("native_profiler");
        $__internal_859b2adf74b5e87a88b576ed5cb7f960ef78afd10f6c1dbce7c002ac8399cadf->enter($__internal_859b2adf74b5e87a88b576ed5cb7f960ef78afd10f6c1dbce7c002ac8399cadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_859b2adf74b5e87a88b576ed5cb7f960ef78afd10f6c1dbce7c002ac8399cadf->leave($__internal_859b2adf74b5e87a88b576ed5cb7f960ef78afd10f6c1dbce7c002ac8399cadf_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_1bc260705bb1145e91539fe214786dafa10205979757f62d0dae226333e579d5 = $this->env->getExtension("native_profiler");
        $__internal_1bc260705bb1145e91539fe214786dafa10205979757f62d0dae226333e579d5->enter($__internal_1bc260705bb1145e91539fe214786dafa10205979757f62d0dae226333e579d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
        echo "
";
        
        $__internal_1bc260705bb1145e91539fe214786dafa10205979757f62d0dae226333e579d5->leave($__internal_1bc260705bb1145e91539fe214786dafa10205979757f62d0dae226333e579d5_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_a9ce94a73f110e871cb1f0de67c6b8469e079867f1deaf2895731edca29d1cad = $this->env->getExtension("native_profiler");
        $__internal_a9ce94a73f110e871cb1f0de67c6b8469e079867f1deaf2895731edca29d1cad->enter($__internal_a9ce94a73f110e871cb1f0de67c6b8469e079867f1deaf2895731edca29d1cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 19
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 20
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('sonata_admin')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 23
        echo "    </tr>
";
        
        $__internal_a9ce94a73f110e871cb1f0de67c6b8469e079867f1deaf2895731edca29d1cad->leave($__internal_a9ce94a73f110e871cb1f0de67c6b8469e079867f1deaf2895731edca29d1cad_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 21,  60 => 20,  57 => 19,  51 => 18,  41 => 15,  35 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
/* {% block show_title %}*/
/*     {{ name|trans({}, admin.translationdomain) }}*/
/* {% endblock %}*/
/* */
/* {% block show_field %}*/
/*     <tr class="sonata-ba-view-container history-audit-compare">*/
/*         {% if elements[field_name] is defined %}*/
/*             {{ elements[field_name]|render_view_element_compare(object, object_compare) }}*/
/*         {% endif %}*/
/*     </tr>*/
/* {% endblock %}*/
/* */
