<?php

/* SonataAdminBundle:Button:edit_button.html.twig */
class __TwigTemplate_a756a769574b0e4cd6c9f0ee3dd9e1d7a4f8dbd74d4415715353f1745705b178 extends Twig_Template
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
        $__internal_d4fb72fc371a1e57b30a0d12a7eb9dc7b5037cd79cd44880463063b704d560a3 = $this->env->getExtension("native_profiler");
        $__internal_d4fb72fc371a1e57b30a0d12a7eb9dc7b5037cd79cd44880463063b704d560a3->enter($__internal_d4fb72fc371a1e57b30a0d12a7eb9dc7b5037cd79cd44880463063b704d560a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:edit_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "canAccessObject", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_d4fb72fc371a1e57b30a0d12a7eb9dc7b5037cd79cd44880463063b704d560a3->leave($__internal_d4fb72fc371a1e57b30a0d12a7eb9dc7b5037cd79cd44880463063b704d560a3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:edit_button.html.twig";
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
/* {% if admin.canAccessObject('edit', object) and admin.hasRoute('edit') %}*/
/*     <a class="sonata-action-element" href="{{ admin.generateObjectUrl('edit', object) }}">*/
/*         <i class="fa fa-edit" aria-hidden="true"></i>*/
/*         {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>*/
/* {% endif %}*/
/* */
