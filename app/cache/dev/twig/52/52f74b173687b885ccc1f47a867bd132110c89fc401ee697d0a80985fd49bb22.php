<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_38d5f0cbc7d7b60dd44d6567a1696ef418485e0ac1e640fd0ad541c1292f8b70 extends Twig_Template
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
        $__internal_097e234602697f6dd16e93ea28a73ed266f01e7f537b4914fe373a2b0bfb0a41 = $this->env->getExtension("native_profiler");
        $__internal_097e234602697f6dd16e93ea28a73ed266f01e7f537b4914fe373a2b0bfb0a41->enter($__internal_097e234602697f6dd16e93ea28a73ed266f01e7f537b4914fe373a2b0bfb0a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_097e234602697f6dd16e93ea28a73ed266f01e7f537b4914fe373a2b0bfb0a41->leave($__internal_097e234602697f6dd16e93ea28a73ed266f01e7f537b4914fe373a2b0bfb0a41_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
