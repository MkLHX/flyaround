<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_b8ed973dc0b9faffc23fba2aef5b8044c889ea395374086a53dc94d766e3363d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef570991b133af8952e08fd9d1ba98a6bb244c59ce53f39b2b905a4212f5161c = $this->env->getExtension("native_profiler");
        $__internal_ef570991b133af8952e08fd9d1ba98a6bb244c59ce53f39b2b905a4212f5161c->enter($__internal_ef570991b133af8952e08fd9d1ba98a6bb244c59ce53f39b2b905a4212f5161c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef570991b133af8952e08fd9d1ba98a6bb244c59ce53f39b2b905a4212f5161c->leave($__internal_ef570991b133af8952e08fd9d1ba98a6bb244c59ce53f39b2b905a4212f5161c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}*/
/* */
