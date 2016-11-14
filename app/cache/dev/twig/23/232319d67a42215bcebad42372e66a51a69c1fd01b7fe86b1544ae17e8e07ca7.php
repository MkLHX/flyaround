<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_be9ebc069d33f1e27ad2e8ff48c78e51ba72f14bb57cebae6308a320aed8ef7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42070c293ccd55c4651c77ea03d4e8aaf8e0b35fe4a60b5ab97fe82239039e2f = $this->env->getExtension("native_profiler");
        $__internal_42070c293ccd55c4651c77ea03d4e8aaf8e0b35fe4a60b5ab97fe82239039e2f->enter($__internal_42070c293ccd55c4651c77ea03d4e8aaf8e0b35fe4a60b5ab97fe82239039e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42070c293ccd55c4651c77ea03d4e8aaf8e0b35fe4a60b5ab97fe82239039e2f->leave($__internal_42070c293ccd55c4651c77ea03d4e8aaf8e0b35fe4a60b5ab97fe82239039e2f_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1e8633122d44337b2922944b1f90ea9b90472045f631baa8ea736169222b6a88 = $this->env->getExtension("native_profiler");
        $__internal_1e8633122d44337b2922944b1f90ea9b90472045f631baa8ea736169222b6a88->enter($__internal_1e8633122d44337b2922944b1f90ea9b90472045f631baa8ea736169222b6a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_1e8633122d44337b2922944b1f90ea9b90472045f631baa8ea736169222b6a88->leave($__internal_1e8633122d44337b2922944b1f90ea9b90472045f631baa8ea736169222b6a88_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_41d3c61336cb7ba21ee7de2096bf8ae145a266909f070b9ea96e98f89859ffd6 = $this->env->getExtension("native_profiler");
        $__internal_41d3c61336cb7ba21ee7de2096bf8ae145a266909f070b9ea96e98f89859ffd6->enter($__internal_41d3c61336cb7ba21ee7de2096bf8ae145a266909f070b9ea96e98f89859ffd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_41d3c61336cb7ba21ee7de2096bf8ae145a266909f070b9ea96e98f89859ffd6->leave($__internal_41d3c61336cb7ba21ee7de2096bf8ae145a266909f070b9ea96e98f89859ffd6_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_38faa047ca5cb515bc0e27793214f9b7ccde73072f74f00ee855bd419b1c7a81 = $this->env->getExtension("native_profiler");
        $__internal_38faa047ca5cb515bc0e27793214f9b7ccde73072f74f00ee855bd419b1c7a81->enter($__internal_38faa047ca5cb515bc0e27793214f9b7ccde73072f74f00ee855bd419b1c7a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_38faa047ca5cb515bc0e27793214f9b7ccde73072f74f00ee855bd419b1c7a81->leave($__internal_38faa047ca5cb515bc0e27793214f9b7ccde73072f74f00ee855bd419b1c7a81_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_dfd7c84132ba3137723a76fd97577386a12cba0589ae78cdf190b893b2f92a69 = $this->env->getExtension("native_profiler");
        $__internal_dfd7c84132ba3137723a76fd97577386a12cba0589ae78cdf190b893b2f92a69->enter($__internal_dfd7c84132ba3137723a76fd97577386a12cba0589ae78cdf190b893b2f92a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_dfd7c84132ba3137723a76fd97577386a12cba0589ae78cdf190b893b2f92a69->leave($__internal_dfd7c84132ba3137723a76fd97577386a12cba0589ae78cdf190b893b2f92a69_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 24,  75 => 22,  69 => 21,  61 => 24,  58 => 21,  52 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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
/* {% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}*/
/* */
/* {% block form %}*/
/*     {% block form_acl_roles %}*/
/*         {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/*     {% block form_acl_users %}*/
/*         {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
