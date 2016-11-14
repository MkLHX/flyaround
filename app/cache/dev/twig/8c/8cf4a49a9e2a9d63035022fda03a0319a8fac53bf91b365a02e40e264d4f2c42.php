<?php

/* :reservation:edit.html.twig */
class __TwigTemplate_4e3675ba1cc7c7cdf6cd5b4166b2bcb149484ccfa0a6ccc3115f181858d638b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8ca6a8bf98661dd682a975ced404ce0720b78f9c7c4ce5b37bafe6d93197213 = $this->env->getExtension("native_profiler");
        $__internal_f8ca6a8bf98661dd682a975ced404ce0720b78f9c7c4ce5b37bafe6d93197213->enter($__internal_f8ca6a8bf98661dd682a975ced404ce0720b78f9c7c4ce5b37bafe6d93197213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8ca6a8bf98661dd682a975ced404ce0720b78f9c7c4ce5b37bafe6d93197213->leave($__internal_f8ca6a8bf98661dd682a975ced404ce0720b78f9c7c4ce5b37bafe6d93197213_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce1abd328a6868ebb8e3c085560db1532f803fca70a3382e518d415c8df55eeb = $this->env->getExtension("native_profiler");
        $__internal_ce1abd328a6868ebb8e3c085560db1532f803fca70a3382e518d415c8df55eeb->enter($__internal_ce1abd328a6868ebb8e3c085560db1532f803fca70a3382e518d415c8df55eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ce1abd328a6868ebb8e3c085560db1532f803fca70a3382e518d415c8df55eeb->leave($__internal_ce1abd328a6868ebb8e3c085560db1532f803fca70a3382e518d415c8df55eeb_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Reservation edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('reservation_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
