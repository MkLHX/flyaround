<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_2b0ff8f7dfad21d3f8438f8208437aba2e5ee276c6f59625c05316d77da7e27f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1a5b931a594b25c06bfe77de327cc80406072b181de2c602e3690968d643689 = $this->env->getExtension("native_profiler");
        $__internal_c1a5b931a594b25c06bfe77de327cc80406072b181de2c602e3690968d643689->enter($__internal_c1a5b931a594b25c06bfe77de327cc80406072b181de2c602e3690968d643689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1a5b931a594b25c06bfe77de327cc80406072b181de2c602e3690968d643689->leave($__internal_c1a5b931a594b25c06bfe77de327cc80406072b181de2c602e3690968d643689_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_7d348e579e79c50e52474b768b93d774cf4a2e4914048a9b2b025205930fab79 = $this->env->getExtension("native_profiler");
        $__internal_7d348e579e79c50e52474b768b93d774cf4a2e4914048a9b2b025205930fab79->enter($__internal_7d348e579e79c50e52474b768b93d774cf4a2e4914048a9b2b025205930fab79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_7d348e579e79c50e52474b768b93d774cf4a2e4914048a9b2b025205930fab79->leave($__internal_7d348e579e79c50e52474b768b93d774cf4a2e4914048a9b2b025205930fab79_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_4671e35ab105fd3ec752663a6732910077207099a48c79c8e2480029695296a7 = $this->env->getExtension("native_profiler");
        $__internal_4671e35ab105fd3ec752663a6732910077207099a48c79c8e2480029695296a7->enter($__internal_4671e35ab105fd3ec752663a6732910077207099a48c79c8e2480029695296a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_4671e35ab105fd3ec752663a6732910077207099a48c79c8e2480029695296a7->leave($__internal_4671e35ab105fd3ec752663a6732910077207099a48c79c8e2480029695296a7_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_6f5c57f4b6dd79dbaf503c2960f0aee30fb111e7d1bcf1268837515d39a0fc25 = $this->env->getExtension("native_profiler");
        $__internal_6f5c57f4b6dd79dbaf503c2960f0aee30fb111e7d1bcf1268837515d39a0fc25->enter($__internal_6f5c57f4b6dd79dbaf503c2960f0aee30fb111e7d1bcf1268837515d39a0fc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_6f5c57f4b6dd79dbaf503c2960f0aee30fb111e7d1bcf1268837515d39a0fc25->leave($__internal_6f5c57f4b6dd79dbaf503c2960f0aee30fb111e7d1bcf1268837515d39a0fc25_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_4ed7f18caa2451a4074453fb1da2456b8da38db29847d70706e601efe44c08af = $this->env->getExtension("native_profiler");
        $__internal_4ed7f18caa2451a4074453fb1da2456b8da38db29847d70706e601efe44c08af->enter($__internal_4ed7f18caa2451a4074453fb1da2456b8da38db29847d70706e601efe44c08af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["name"], array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_4ed7f18caa2451a4074453fb1da2456b8da38db29847d70706e601efe44c08af->leave($__internal_4ed7f18caa2451a4074453fb1da2456b8da38db29847d70706e601efe44c08af_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_7f225eeaee08d848ddf0d7a31d5d35b7b947cd3acb3a6138785f9cf6bd6ed41f = $this->env->getExtension("native_profiler");
        $__internal_7f225eeaee08d848ddf0d7a31d5d35b7b947cd3acb3a6138785f9cf6bd6ed41f->enter($__internal_7f225eeaee08d848ddf0d7a31d5d35b7b947cd3acb3a6138785f9cf6bd6ed41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_7f225eeaee08d848ddf0d7a31d5d35b7b947cd3acb3a6138785f9cf6bd6ed41f->leave($__internal_7f225eeaee08d848ddf0d7a31d5d35b7b947cd3acb3a6138785f9cf6bd6ed41f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  162 => 56,  156 => 55,  148 => 52,  141 => 50,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  119 => 43,  116 => 42,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  96 => 33,  93 => 32,  87 => 31,  77 => 27,  70 => 23,  66 => 21,  60 => 20,  49 => 17,  38 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}*/
/* */
/* {% block actions %}*/
/* {% endblock %}*/
/* */
/* {% block side_menu %}*/
/* {% endblock %}*/
/* */
/* {% block formactions %}*/
/*     <button class="btn btn-success" type="submit" name="btn_preview_approve">*/
/*         <i class="fa fa-check" aria-hidden="true"></i>*/
/*         {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}*/
/*     </button>*/
/*     <button class="btn btn-danger" type="submit" name="btn_preview_decline">*/
/*         <i class="fa fa-times" aria-hidden="true"></i>*/
/*         {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}*/
/*     </button>*/
/* {% endblock %}*/
/* */
/* {% block preview %}*/
/*     <div class="sonata-ba-view">*/
/*         {% for name, view_group in admin.showgroups %}*/
/*             <table class="table table-bordered">*/
/*                 {% if name %}*/
/*                     <tr class="sonata-ba-view-title">*/
/*                         <td colspan="2">*/
/*                             {{ name|trans({}, admin.translationdomain) }}*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endif %}*/
/* */
/*                 {% for field_name in view_group.fields %}*/
/*                     <tr class="sonata-ba-view-container">*/
/*                         {% if admin.show[field_name] is defined %}*/
/*                             {{ admin.show[field_name]|render_view_element(object) }}*/
/*                         {% endif %}*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </table>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form %}*/
/*     <div class="sonata-preview-form-container">*/
/*         {{ parent() }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
