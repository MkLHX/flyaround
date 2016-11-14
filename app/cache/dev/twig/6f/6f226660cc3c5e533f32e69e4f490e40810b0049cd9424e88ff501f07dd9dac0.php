<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_374c7973dd1af6e887b04f15dcbc7387ad2555dcdfca48b52067d0d5af36e016 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09cae615467f9f2088471f0148ce056ffb5e4781e95138661a3519a17edd1cc8 = $this->env->getExtension("native_profiler");
        $__internal_09cae615467f9f2088471f0148ce056ffb5e4781e95138661a3519a17edd1cc8->enter($__internal_09cae615467f9f2088471f0148ce056ffb5e4781e95138661a3519a17edd1cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09cae615467f9f2088471f0148ce056ffb5e4781e95138661a3519a17edd1cc8->leave($__internal_09cae615467f9f2088471f0148ce056ffb5e4781e95138661a3519a17edd1cc8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
