<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_55d7513c03dd86c574196f580b60c4a97bf653080453b25741e0950eca2f37ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7e64038480d6c6b8c2740139ddcd72691ccd054fd4356afb23b21a406265d6c = $this->env->getExtension("native_profiler");
        $__internal_a7e64038480d6c6b8c2740139ddcd72691ccd054fd4356afb23b21a406265d6c->enter($__internal_a7e64038480d6c6b8c2740139ddcd72691ccd054fd4356afb23b21a406265d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7e64038480d6c6b8c2740139ddcd72691ccd054fd4356afb23b21a406265d6c->leave($__internal_a7e64038480d6c6b8c2740139ddcd72691ccd054fd4356afb23b21a406265d6c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
