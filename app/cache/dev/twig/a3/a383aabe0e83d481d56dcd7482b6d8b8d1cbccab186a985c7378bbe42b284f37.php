<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_61ed9b1232c7422748ed391abf52096a4abb938d71baddb57d6864445cd9bf57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b6c6071440c9efcc388e05d41ea30cdc0c4ae75cc0924fad3b38efb71a46f85 = $this->env->getExtension("native_profiler");
        $__internal_0b6c6071440c9efcc388e05d41ea30cdc0c4ae75cc0924fad3b38efb71a46f85->enter($__internal_0b6c6071440c9efcc388e05d41ea30cdc0c4ae75cc0924fad3b38efb71a46f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b6c6071440c9efcc388e05d41ea30cdc0c4ae75cc0924fad3b38efb71a46f85->leave($__internal_0b6c6071440c9efcc388e05d41ea30cdc0c4ae75cc0924fad3b38efb71a46f85_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
