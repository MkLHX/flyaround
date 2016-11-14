<?php

/* SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig */
class __TwigTemplate_e3866087410a64fc5cec868c109de382afd68f9ca3a6bf3a6d54393f157fb018 extends Twig_Template
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
        $__internal_601c371041c54397540880bfbcd157f753c0186d75c8161614a57f35742f11ee = $this->env->getExtension("native_profiler");
        $__internal_601c371041c54397540880bfbcd157f753c0186d75c8161614a57f35742f11ee->enter($__internal_601c371041c54397540880bfbcd157f753c0186d75c8161614a57f35742f11ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 2
            echo "    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_601c371041c54397540880bfbcd157f753c0186d75c8161614a57f35742f11ee->leave($__internal_601c371041c54397540880bfbcd157f753c0186d75c8161614a57f35742f11ee_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 2,  22 => 1,);
    }
}
/* {% for error in form.vars.errors %}*/
/*     <div class="alert alert-danger alert-dismissable">*/
/*         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*         {{ error.message }}*/
/*     </div>*/
/* {% endfor %}*/
/* */
