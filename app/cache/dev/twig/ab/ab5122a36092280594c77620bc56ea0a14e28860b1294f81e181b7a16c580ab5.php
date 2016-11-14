<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f3298f1278cc03caa5d20ab20ca1508936af01ba63f855d23bfe9e8a72f190b2 extends Twig_Template
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
        $__internal_2848aa99e2f42661531313700638ce885088c7d9032c4ed9c12a9125d8f57ae8 = $this->env->getExtension("native_profiler");
        $__internal_2848aa99e2f42661531313700638ce885088c7d9032c4ed9c12a9125d8f57ae8->enter($__internal_2848aa99e2f42661531313700638ce885088c7d9032c4ed9c12a9125d8f57ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2848aa99e2f42661531313700638ce885088c7d9032c4ed9c12a9125d8f57ae8->leave($__internal_2848aa99e2f42661531313700638ce885088c7d9032c4ed9c12a9125d8f57ae8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
