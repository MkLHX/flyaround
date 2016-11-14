<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_909109da60d2e57c1318bc152efe7cbadc4218527c964904ba393a57d9eaaf9d extends Twig_Template
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
        $__internal_31aca1e562e9513665bdffae9d91cded4c947111faa2d0a6b5765e85536df80f = $this->env->getExtension("native_profiler");
        $__internal_31aca1e562e9513665bdffae9d91cded4c947111faa2d0a6b5765e85536df80f->enter($__internal_31aca1e562e9513665bdffae9d91cded4c947111faa2d0a6b5765e85536df80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_31aca1e562e9513665bdffae9d91cded4c947111faa2d0a6b5765e85536df80f->leave($__internal_31aca1e562e9513665bdffae9d91cded4c947111faa2d0a6b5765e85536df80f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
