<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d21d0bb2831090b53e09b5090761e13ac157d567625932539c11be891f8b1213 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_620a56f6024584f2e15b2c429da6bd9c3282ed5cacae0cab8869af15d8166130 = $this->env->getExtension("native_profiler");
        $__internal_620a56f6024584f2e15b2c429da6bd9c3282ed5cacae0cab8869af15d8166130->enter($__internal_620a56f6024584f2e15b2c429da6bd9c3282ed5cacae0cab8869af15d8166130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_620a56f6024584f2e15b2c429da6bd9c3282ed5cacae0cab8869af15d8166130->leave($__internal_620a56f6024584f2e15b2c429da6bd9c3282ed5cacae0cab8869af15d8166130_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2480d73c01bb0d87d62a6091618b3be97fb9fcd7c6b28f4325fa79d2aeebe5b7 = $this->env->getExtension("native_profiler");
        $__internal_2480d73c01bb0d87d62a6091618b3be97fb9fcd7c6b28f4325fa79d2aeebe5b7->enter($__internal_2480d73c01bb0d87d62a6091618b3be97fb9fcd7c6b28f4325fa79d2aeebe5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2480d73c01bb0d87d62a6091618b3be97fb9fcd7c6b28f4325fa79d2aeebe5b7->leave($__internal_2480d73c01bb0d87d62a6091618b3be97fb9fcd7c6b28f4325fa79d2aeebe5b7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9152b95120344f1d16612a283e772f2366d9faf03ddcd17547f8785f14e86aff = $this->env->getExtension("native_profiler");
        $__internal_9152b95120344f1d16612a283e772f2366d9faf03ddcd17547f8785f14e86aff->enter($__internal_9152b95120344f1d16612a283e772f2366d9faf03ddcd17547f8785f14e86aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9152b95120344f1d16612a283e772f2366d9faf03ddcd17547f8785f14e86aff->leave($__internal_9152b95120344f1d16612a283e772f2366d9faf03ddcd17547f8785f14e86aff_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
