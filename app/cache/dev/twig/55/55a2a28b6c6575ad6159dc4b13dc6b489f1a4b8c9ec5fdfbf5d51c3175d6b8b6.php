<?php

/* SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_3e222c4e118f58959ec6deba7b66ea627ed51cb3ec340fe9b693b260794fd798 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e504da248721d70abb398046ed617536868d5b40ed8b8abe512a7fa2af0bebda = $this->env->getExtension("native_profiler");
        $__internal_e504da248721d70abb398046ed617536868d5b40ed8b8abe512a7fa2af0bebda->enter($__internal_e504da248721d70abb398046ed617536868d5b40ed8b8abe512a7fa2af0bebda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e504da248721d70abb398046ed617536868d5b40ed8b8abe512a7fa2af0bebda->leave($__internal_e504da248721d70abb398046ed617536868d5b40ed8b8abe512a7fa2af0bebda_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig";
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
/* {% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}*/
/* */
