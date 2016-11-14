<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_cc29782c6f08611414c4ef03cc61b17438993128a4b36ded38af69f9f68994ee extends Twig_Template
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
        $__internal_80dd7c17ead1445e093e4aa449f749e1456df7d784c2f2b0bc2d970257ffeba1 = $this->env->getExtension("native_profiler");
        $__internal_80dd7c17ead1445e093e4aa449f749e1456df7d784c2f2b0bc2d970257ffeba1->enter($__internal_80dd7c17ead1445e093e4aa449f749e1456df7d784c2f2b0bc2d970257ffeba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_80dd7c17ead1445e093e4aa449f749e1456df7d784c2f2b0bc2d970257ffeba1->leave($__internal_80dd7c17ead1445e093e4aa449f749e1456df7d784c2f2b0bc2d970257ffeba1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
