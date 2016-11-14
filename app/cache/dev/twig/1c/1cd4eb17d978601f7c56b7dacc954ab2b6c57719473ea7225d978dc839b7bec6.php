<?php

/* :reservation:new.html.twig */
class __TwigTemplate_10e9ae1c024aad67ea74f2147f9ae3cdefb24acdcc5d147664241e5745825c9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:new.html.twig", 1);
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
        $__internal_7bdb9fca9b59b16cbaff782bd0ea6b84a1dd03d48c3d31d10aff994aa6892417 = $this->env->getExtension("native_profiler");
        $__internal_7bdb9fca9b59b16cbaff782bd0ea6b84a1dd03d48c3d31d10aff994aa6892417->enter($__internal_7bdb9fca9b59b16cbaff782bd0ea6b84a1dd03d48c3d31d10aff994aa6892417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bdb9fca9b59b16cbaff782bd0ea6b84a1dd03d48c3d31d10aff994aa6892417->leave($__internal_7bdb9fca9b59b16cbaff782bd0ea6b84a1dd03d48c3d31d10aff994aa6892417_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_15f51021d66cbe8bff5060d15f50338228b26f905f2396c9fe545c4e0ca24cf4 = $this->env->getExtension("native_profiler");
        $__internal_15f51021d66cbe8bff5060d15f50338228b26f905f2396c9fe545c4e0ca24cf4->enter($__internal_15f51021d66cbe8bff5060d15f50338228b26f905f2396c9fe545c4e0ca24cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_15f51021d66cbe8bff5060d15f50338228b26f905f2396c9fe545c4e0ca24cf4->leave($__internal_15f51021d66cbe8bff5060d15f50338228b26f905f2396c9fe545c4e0ca24cf4_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Reservation creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('reservation_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
