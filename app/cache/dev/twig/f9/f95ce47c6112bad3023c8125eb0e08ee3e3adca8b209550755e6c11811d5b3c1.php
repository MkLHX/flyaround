<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_43e9b1686afd2ef9b928e46feec22d93dfd95a07b201b9d9804d3884456b6ee9 extends Twig_Template
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
        $__internal_0cc8bf0019e4a0e58c24bf7f6e05a77d7fad768bb6083e4050b91d6b29388044 = $this->env->getExtension("native_profiler");
        $__internal_0cc8bf0019e4a0e58c24bf7f6e05a77d7fad768bb6083e4050b91d6b29388044->enter($__internal_0cc8bf0019e4a0e58c24bf7f6e05a77d7fad768bb6083e4050b91d6b29388044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0cc8bf0019e4a0e58c24bf7f6e05a77d7fad768bb6083e4050b91d6b29388044->leave($__internal_0cc8bf0019e4a0e58c24bf7f6e05a77d7fad768bb6083e4050b91d6b29388044_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
