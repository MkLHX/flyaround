<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_caa494ce1722461ebc40a7a16645e4a9b2c4c2bed6cb4d448b574266170ba76d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_303b66f00b33b35a93d7e02c9df0fe2b29664997196ff312b0c34e481f22a0e9 = $this->env->getExtension("native_profiler");
        $__internal_303b66f00b33b35a93d7e02c9df0fe2b29664997196ff312b0c34e481f22a0e9->enter($__internal_303b66f00b33b35a93d7e02c9df0fe2b29664997196ff312b0c34e481f22a0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_303b66f00b33b35a93d7e02c9df0fe2b29664997196ff312b0c34e481f22a0e9->leave($__internal_303b66f00b33b35a93d7e02c9df0fe2b29664997196ff312b0c34e481f22a0e9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
