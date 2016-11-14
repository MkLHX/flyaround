<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_fa1da9ac65724c036055e148ee36e4c93bc399b2e5109d0afd5572718e0a29db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b056d817526a0086efc7b5c2bd838cd124dad88fa301e1a9b3da5b34cea9e19f = $this->env->getExtension("native_profiler");
        $__internal_b056d817526a0086efc7b5c2bd838cd124dad88fa301e1a9b3da5b34cea9e19f->enter($__internal_b056d817526a0086efc7b5c2bd838cd124dad88fa301e1a9b3da5b34cea9e19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b056d817526a0086efc7b5c2bd838cd124dad88fa301e1a9b3da5b34cea9e19f->leave($__internal_b056d817526a0086efc7b5c2bd838cd124dad88fa301e1a9b3da5b34cea9e19f_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_431c3ad237f04da4e21b0f28fc8ee8d3ce12ee906c1efce18b71c68d2c113fa5 = $this->env->getExtension("native_profiler");
        $__internal_431c3ad237f04da4e21b0f28fc8ee8d3ce12ee906c1efce18b71c68d2c113fa5->enter($__internal_431c3ad237f04da4e21b0f28fc8ee8d3ce12ee906c1efce18b71c68d2c113fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_431c3ad237f04da4e21b0f28fc8ee8d3ce12ee906c1efce18b71c68d2c113fa5->leave($__internal_431c3ad237f04da4e21b0f28fc8ee8d3ce12ee906c1efce18b71c68d2c113fa5_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_b784be79a814cfe5de55f9b58ae77506064cf4e5e91c52498e8bb33c0d2929bf = $this->env->getExtension("native_profiler");
        $__internal_b784be79a814cfe5de55f9b58ae77506064cf4e5e91c52498e8bb33c0d2929bf->enter($__internal_b784be79a814cfe5de55f9b58ae77506064cf4e5e91c52498e8bb33c0d2929bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b784be79a814cfe5de55f9b58ae77506064cf4e5e91c52498e8bb33c0d2929bf->leave($__internal_b784be79a814cfe5de55f9b58ae77506064cf4e5e91c52498e8bb33c0d2929bf_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_71c04d53e5015aafa3dfe8866bed8d648509517c9b153928018b2ce85ad3c6ca = $this->env->getExtension("native_profiler");
        $__internal_71c04d53e5015aafa3dfe8866bed8d648509517c9b153928018b2ce85ad3c6ca->enter($__internal_71c04d53e5015aafa3dfe8866bed8d648509517c9b153928018b2ce85ad3c6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_71c04d53e5015aafa3dfe8866bed8d648509517c9b153928018b2ce85ad3c6ca->leave($__internal_71c04d53e5015aafa3dfe8866bed8d648509517c9b153928018b2ce85ad3c6ca_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_b82df0a60f1b9bc471d7b79a325b2c8a834d66cdca17814d707363e90025f4e9 = $this->env->getExtension("native_profiler");
        $__internal_b82df0a60f1b9bc471d7b79a325b2c8a834d66cdca17814d707363e90025f4e9->enter($__internal_b82df0a60f1b9bc471d7b79a325b2c8a834d66cdca17814d707363e90025f4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_b82df0a60f1b9bc471d7b79a325b2c8a834d66cdca17814d707363e90025f4e9->leave($__internal_b82df0a60f1b9bc471d7b79a325b2c8a834d66cdca17814d707363e90025f4e9_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_c52b1b14a1376ff9ef040f15261bd73a7d25b09b5f0f521bea3b5f4d6ccd6ac1 = $this->env->getExtension("native_profiler");
        $__internal_c52b1b14a1376ff9ef040f15261bd73a7d25b09b5f0f521bea3b5f4d6ccd6ac1->enter($__internal_c52b1b14a1376ff9ef040f15261bd73a7d25b09b5f0f521bea3b5f4d6ccd6ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_c52b1b14a1376ff9ef040f15261bd73a7d25b09b5f0f521bea3b5f4d6ccd6ac1->leave($__internal_c52b1b14a1376ff9ef040f15261bd73a7d25b09b5f0f521bea3b5f4d6ccd6ac1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 36,  125 => 35,  113 => 30,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 33,  40 => 12,  12 => 32,);
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
/* {% extends base_template %}*/
/* */
/* {% block title %}*/
/*     {% if admin.id(object) is not null %}*/
/*         {{ "title_edit"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}*/
/*     {% else %}*/
/*         {{ "title_create"|trans({}, 'SonataAdminBundle') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block navbar_title %}*/
/*     {{ block('title') }}*/
/* {% endblock %}*/
/* */
/* {%- block actions -%}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {%- endblock -%}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}*/
/* {% import "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig" as form_helper %}*/
/* */
/* {% block form %}*/
/*     {{ block('parentForm') }}*/
/* {% endblock %}*/
/* */
