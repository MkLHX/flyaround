<?php

/* SonataAdminBundle:Button:history_button.html.twig */
class __TwigTemplate_dbd07be8af3190b5385616294ffa18d05290989c88356d4e6953866e4f3ab30f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_159bc90416c91b807cc79032899f2dc4b271cee945a6efd5801ca1824fcec88d = $this->env->getExtension("native_profiler");
        $__internal_159bc90416c91b807cc79032899f2dc4b271cee945a6efd5801ca1824fcec88d->enter($__internal_159bc90416c91b807cc79032899f2dc4b271cee945a6efd5801ca1824fcec88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:history_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "canAccessObject", array(0 => "history", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "history"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_history", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_159bc90416c91b807cc79032899f2dc4b271cee945a6efd5801ca1824fcec88d->leave($__internal_159bc90416c91b807cc79032899f2dc4b271cee945a6efd5801ca1824fcec88d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:history_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  27 => 13,  25 => 12,  22 => 11,);
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
/* {% if admin.canAccessObject('history', object) and admin.hasRoute('history') %}*/
/*     <a class="sonata-action-element" href="{{ admin.generateObjectUrl('history', object) }}">*/
/*         <i class="fa fa-archive" aria-hidden="true"></i>*/
/*         {{ 'link_action_history'|trans({}, 'SonataAdminBundle') }}</a>*/
/* {% endif %}*/
/* */
