<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_fda28a82b638e41731ba96fc566f8c866fddba70a93420c27f54f287a34a4ad8 extends Twig_Template
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
        $__internal_eaace72495d0f44d8f6bd1f1080577b00b34cf43a6ab1840be44be6847b814dc = $this->env->getExtension("native_profiler");
        $__internal_eaace72495d0f44d8f6bd1f1080577b00b34cf43a6ab1840be44be6847b814dc->enter($__internal_eaace72495d0f44d8f6bd1f1080577b00b34cf43a6ab1840be44be6847b814dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_eaace72495d0f44d8f6bd1f1080577b00b34cf43a6ab1840be44be6847b814dc->leave($__internal_eaace72495d0f44d8f6bd1f1080577b00b34cf43a6ab1840be44be6847b814dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
