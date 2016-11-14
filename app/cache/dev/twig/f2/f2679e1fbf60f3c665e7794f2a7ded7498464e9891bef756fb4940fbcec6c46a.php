<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_b8635f6835ff2194e48ced6a6731b1b0db159817b68dbee1fc25405e7f391e30 extends Twig_Template
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
        $__internal_43a45bd6f0e6be514a799b352059bffd5133545758e476ec60ef77043f348455 = $this->env->getExtension("native_profiler");
        $__internal_43a45bd6f0e6be514a799b352059bffd5133545758e476ec60ef77043f348455->enter($__internal_43a45bd6f0e6be514a799b352059bffd5133545758e476ec60ef77043f348455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:list_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_43a45bd6f0e6be514a799b352059bffd5133545758e476ec60ef77043f348455->leave($__internal_43a45bd6f0e6be514a799b352059bffd5133545758e476ec60ef77043f348455_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
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
/* {% if admin.hasAccess('list') and admin.hasRoute('list') %}*/
/*     <a class="sonata-action-element" href="{{ admin.generateUrl('list') }}">*/
/*         <i class="fa fa-list" aria-hidden="true"></i>*/
/*         {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}</a>*/
/* {% endif %}*/
/* */
