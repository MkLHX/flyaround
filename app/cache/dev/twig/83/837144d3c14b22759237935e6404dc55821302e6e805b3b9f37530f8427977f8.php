<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_18dd400d18065d4856c61c876e0cbc514e099f2a2a4bcaeb689f640078417675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_addb0b8be6500d4876343f776e159eb7c6a43a0dd43d5eaf5b5ca349bc03b99a = $this->env->getExtension("native_profiler");
        $__internal_addb0b8be6500d4876343f776e159eb7c6a43a0dd43d5eaf5b5ca349bc03b99a->enter($__internal_addb0b8be6500d4876343f776e159eb7c6a43a0dd43d5eaf5b5ca349bc03b99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_addb0b8be6500d4876343f776e159eb7c6a43a0dd43d5eaf5b5ca349bc03b99a->leave($__internal_addb0b8be6500d4876343f776e159eb7c6a43a0dd43d5eaf5b5ca349bc03b99a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
