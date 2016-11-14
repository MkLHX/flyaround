<?php

/* :planemodel:new.html.twig */
class __TwigTemplate_0466ebe7006ae8045b6450dfacc4a2283e5faed29ddc7a00cf39527115e9a44e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":planemodel:new.html.twig", 1);
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
        $__internal_24d3dd8595138f83da12b2635c0352995c75866ea550b4dbaeb6f38f305bc39e = $this->env->getExtension("native_profiler");
        $__internal_24d3dd8595138f83da12b2635c0352995c75866ea550b4dbaeb6f38f305bc39e->enter($__internal_24d3dd8595138f83da12b2635c0352995c75866ea550b4dbaeb6f38f305bc39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24d3dd8595138f83da12b2635c0352995c75866ea550b4dbaeb6f38f305bc39e->leave($__internal_24d3dd8595138f83da12b2635c0352995c75866ea550b4dbaeb6f38f305bc39e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78426c028294ca72cc25288a2c1a46a1d598a7599a98e6c0567c8a75fd8cc712 = $this->env->getExtension("native_profiler");
        $__internal_78426c028294ca72cc25288a2c1a46a1d598a7599a98e6c0567c8a75fd8cc712->enter($__internal_78426c028294ca72cc25288a2c1a46a1d598a7599a98e6c0567c8a75fd8cc712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>PlaneModel creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("planemodel_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_78426c028294ca72cc25288a2c1a46a1d598a7599a98e6c0567c8a75fd8cc712->leave($__internal_78426c028294ca72cc25288a2c1a46a1d598a7599a98e6c0567c8a75fd8cc712_prof);

    }

    public function getTemplateName()
    {
        return ":planemodel:new.html.twig";
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
/*     <h1>PlaneModel creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('planemodel_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
