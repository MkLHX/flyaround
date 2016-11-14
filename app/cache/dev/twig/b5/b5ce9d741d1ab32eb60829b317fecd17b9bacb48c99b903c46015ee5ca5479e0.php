<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_8537dc44759ab88031f01d7e448b3189479fb3611053627d3f1f9803ce368876 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73d89cf2103acadb1caab262d6676eb7945034875f07ab12f89aa9f64b8f0f17 = $this->env->getExtension("native_profiler");
        $__internal_73d89cf2103acadb1caab262d6676eb7945034875f07ab12f89aa9f64b8f0f17->enter($__internal_73d89cf2103acadb1caab262d6676eb7945034875f07ab12f89aa9f64b8f0f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73d89cf2103acadb1caab262d6676eb7945034875f07ab12f89aa9f64b8f0f17->leave($__internal_73d89cf2103acadb1caab262d6676eb7945034875f07ab12f89aa9f64b8f0f17_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cbfbc53244b2b54b2ff8ba49de7fc806ea54465cb0ed9ae6210496231ad37a45 = $this->env->getExtension("native_profiler");
        $__internal_cbfbc53244b2b54b2ff8ba49de7fc806ea54465cb0ed9ae6210496231ad37a45->enter($__internal_cbfbc53244b2b54b2ff8ba49de7fc806ea54465cb0ed9ae6210496231ad37a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_cbfbc53244b2b54b2ff8ba49de7fc806ea54465cb0ed9ae6210496231ad37a45->leave($__internal_cbfbc53244b2b54b2ff8ba49de7fc806ea54465cb0ed9ae6210496231ad37a45_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
