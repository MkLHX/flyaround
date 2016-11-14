<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6a8d991f40b18f9b63a8f8fb5905a2590a906aa6f6b59a5e12ddd6698036a092 extends Twig_Template
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
        $__internal_bb484d39b6f2a917e9919181e24c816978ea70cfb9ff98f9b6562bf7d753d7d1 = $this->env->getExtension("native_profiler");
        $__internal_bb484d39b6f2a917e9919181e24c816978ea70cfb9ff98f9b6562bf7d753d7d1->enter($__internal_bb484d39b6f2a917e9919181e24c816978ea70cfb9ff98f9b6562bf7d753d7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_bb484d39b6f2a917e9919181e24c816978ea70cfb9ff98f9b6562bf7d753d7d1->leave($__internal_bb484d39b6f2a917e9919181e24c816978ea70cfb9ff98f9b6562bf7d753d7d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
