<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_5479b8f32c095fb486fde62cb0f72b129a4802eef1b302df54470e083ab9ab7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8edc7a001681351a61e092019e33fc4be8e4cea36fff845a975df9e0c2bb8ee = $this->env->getExtension("native_profiler");
        $__internal_d8edc7a001681351a61e092019e33fc4be8e4cea36fff845a975df9e0c2bb8ee->enter($__internal_d8edc7a001681351a61e092019e33fc4be8e4cea36fff845a975df9e0c2bb8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8edc7a001681351a61e092019e33fc4be8e4cea36fff845a975df9e0c2bb8ee->leave($__internal_d8edc7a001681351a61e092019e33fc4be8e4cea36fff845a975df9e0c2bb8ee_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_857a147454d3d1fef9f14d709ef6b65912f76e5f8e0592e1b51bc32cdabd0774 = $this->env->getExtension("native_profiler");
        $__internal_857a147454d3d1fef9f14d709ef6b65912f76e5f8e0592e1b51bc32cdabd0774->enter($__internal_857a147454d3d1fef9f14d709ef6b65912f76e5f8e0592e1b51bc32cdabd0774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_857a147454d3d1fef9f14d709ef6b65912f76e5f8e0592e1b51bc32cdabd0774->leave($__internal_857a147454d3d1fef9f14d709ef6b65912f76e5f8e0592e1b51bc32cdabd0774_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_13a95b73f79f30b2f02ab9f9c3eb2674c20eda2a72fe2e65dca9b46a491477e8 = $this->env->getExtension("native_profiler");
        $__internal_13a95b73f79f30b2f02ab9f9c3eb2674c20eda2a72fe2e65dca9b46a491477e8->enter($__internal_13a95b73f79f30b2f02ab9f9c3eb2674c20eda2a72fe2e65dca9b46a491477e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_13a95b73f79f30b2f02ab9f9c3eb2674c20eda2a72fe2e65dca9b46a491477e8->leave($__internal_13a95b73f79f30b2f02ab9f9c3eb2674c20eda2a72fe2e65dca9b46a491477e8_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_1e25bf51627c234ce141501854a5c6cf5c01a61cdf74491b99e8cfb12d5d9500 = $this->env->getExtension("native_profiler");
        $__internal_1e25bf51627c234ce141501854a5c6cf5c01a61cdf74491b99e8cfb12d5d9500->enter($__internal_1e25bf51627c234ce141501854a5c6cf5c01a61cdf74491b99e8cfb12d5d9500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_1e25bf51627c234ce141501854a5c6cf5c01a61cdf74491b99e8cfb12d5d9500->leave($__internal_1e25bf51627c234ce141501854a5c6cf5c01a61cdf74491b99e8cfb12d5d9500_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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
/* {%- block actions -%}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {%- endblock -%}*/
/* */
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
