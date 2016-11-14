<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_a27926f3b9a7f624ea89e7b9b53895e06d10dd93fa76e45686ceae410067185a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_529a78bdee169907c19c420255ecded34017510ff9c5816db5855dcc315bbba7 = $this->env->getExtension("native_profiler");
        $__internal_529a78bdee169907c19c420255ecded34017510ff9c5816db5855dcc315bbba7->enter($__internal_529a78bdee169907c19c420255ecded34017510ff9c5816db5855dcc315bbba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_529a78bdee169907c19c420255ecded34017510ff9c5816db5855dcc315bbba7->leave($__internal_529a78bdee169907c19c420255ecded34017510ff9c5816db5855dcc315bbba7_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_ad375aa7646bb0ddb8c805c4cc0bade315f4f0f8683a5e9e094875feef485be0 = $this->env->getExtension("native_profiler");
        $__internal_ad375aa7646bb0ddb8c805c4cc0bade315f4f0f8683a5e9e094875feef485be0->enter($__internal_ad375aa7646bb0ddb8c805c4cc0bade315f4f0f8683a5e9e094875feef485be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_ad375aa7646bb0ddb8c805c4cc0bade315f4f0f8683a5e9e094875feef485be0->leave($__internal_ad375aa7646bb0ddb8c805c4cc0bade315f4f0f8683a5e9e094875feef485be0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
