<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_27ae27db5a8fc4b9a57606544716a78406703d683237700f16d23cb3f01dfaeb extends Twig_Template
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
        $__internal_ca109d6738706ab6505f6d164bcd83db76855a85136e53098e890ef19e632d80 = $this->env->getExtension("native_profiler");
        $__internal_ca109d6738706ab6505f6d164bcd83db76855a85136e53098e890ef19e632d80->enter($__internal_ca109d6738706ab6505f6d164bcd83db76855a85136e53098e890ef19e632d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ca109d6738706ab6505f6d164bcd83db76855a85136e53098e890ef19e632d80->leave($__internal_ca109d6738706ab6505f6d164bcd83db76855a85136e53098e890ef19e632d80_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
