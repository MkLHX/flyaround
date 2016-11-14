<?php

/* :flight:new.html.twig */
class __TwigTemplate_cb21a27cd0dadf125926234722c45caa8ac1911fc2362cd947ad5c696d4f86f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":flight:new.html.twig", 1);
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
        $__internal_8882f49fea09bd0607fc03bca135e61347d68e7a2e5a50b0e92887fdb10307a7 = $this->env->getExtension("native_profiler");
        $__internal_8882f49fea09bd0607fc03bca135e61347d68e7a2e5a50b0e92887fdb10307a7->enter($__internal_8882f49fea09bd0607fc03bca135e61347d68e7a2e5a50b0e92887fdb10307a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8882f49fea09bd0607fc03bca135e61347d68e7a2e5a50b0e92887fdb10307a7->leave($__internal_8882f49fea09bd0607fc03bca135e61347d68e7a2e5a50b0e92887fdb10307a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27930d6dda963efb8a1e64c7fd8ee3cbf14c6e030b466c332476ede8e709b878 = $this->env->getExtension("native_profiler");
        $__internal_27930d6dda963efb8a1e64c7fd8ee3cbf14c6e030b466c332476ede8e709b878->enter($__internal_27930d6dda963efb8a1e64c7fd8ee3cbf14c6e030b466c332476ede8e709b878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flight creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("flight_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_27930d6dda963efb8a1e64c7fd8ee3cbf14c6e030b466c332476ede8e709b878->leave($__internal_27930d6dda963efb8a1e64c7fd8ee3cbf14c6e030b466c332476ede8e709b878_prof);

    }

    public function getTemplateName()
    {
        return ":flight:new.html.twig";
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
/*     <h1>Flight creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('flight_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
