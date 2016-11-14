<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_9cbca2269d0c4b0dc28bbd9bf2d9629ec8d3ea300eafa781a001416836963618 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c608e79caa1f9dcebb2e23342c0ef07344609a3b736711b7d6957de4a2bb4ba2 = $this->env->getExtension("native_profiler");
        $__internal_c608e79caa1f9dcebb2e23342c0ef07344609a3b736711b7d6957de4a2bb4ba2->enter($__internal_c608e79caa1f9dcebb2e23342c0ef07344609a3b736711b7d6957de4a2bb4ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c608e79caa1f9dcebb2e23342c0ef07344609a3b736711b7d6957de4a2bb4ba2->leave($__internal_c608e79caa1f9dcebb2e23342c0ef07344609a3b736711b7d6957de4a2bb4ba2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
