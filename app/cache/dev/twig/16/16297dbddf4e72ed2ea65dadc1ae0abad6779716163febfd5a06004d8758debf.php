<?php

/* :planemodel:edit.html.twig */
class __TwigTemplate_844de1d0bfb5941a91ef32388baf69d3dda2bf1b6c45c17490bba9ff2e8a2220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":planemodel:edit.html.twig", 1);
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
        $__internal_573829423e3da08d3c88e156f27f49a092275388b98a0d7058f8c0ff8b79e4fa = $this->env->getExtension("native_profiler");
        $__internal_573829423e3da08d3c88e156f27f49a092275388b98a0d7058f8c0ff8b79e4fa->enter($__internal_573829423e3da08d3c88e156f27f49a092275388b98a0d7058f8c0ff8b79e4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_573829423e3da08d3c88e156f27f49a092275388b98a0d7058f8c0ff8b79e4fa->leave($__internal_573829423e3da08d3c88e156f27f49a092275388b98a0d7058f8c0ff8b79e4fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_90954f371edbf656f23be8d5fa1919d2ebb646eaa2e91b1ebaa2ef64f812a78d = $this->env->getExtension("native_profiler");
        $__internal_90954f371edbf656f23be8d5fa1919d2ebb646eaa2e91b1ebaa2ef64f812a78d->enter($__internal_90954f371edbf656f23be8d5fa1919d2ebb646eaa2e91b1ebaa2ef64f812a78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>PlaneModel edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("planemodel_index");
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
        
        $__internal_90954f371edbf656f23be8d5fa1919d2ebb646eaa2e91b1ebaa2ef64f812a78d->leave($__internal_90954f371edbf656f23be8d5fa1919d2ebb646eaa2e91b1ebaa2ef64f812a78d_prof);

    }

    public function getTemplateName()
    {
        return ":planemodel:edit.html.twig";
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
/*     <h1>PlaneModel edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('planemodel_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
