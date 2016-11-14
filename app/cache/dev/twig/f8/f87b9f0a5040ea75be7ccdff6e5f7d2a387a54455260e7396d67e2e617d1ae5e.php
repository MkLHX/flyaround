<?php

/* base.html.twig */
class __TwigTemplate_f38222071caa71990bc27c5d1a93983af632da8c3f440f96937cd14d176ab684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9ad269e495f632f40e79c9c2975c32c7cb4a6ae996bf8f8ea875f8da5f9bd06 = $this->env->getExtension("native_profiler");
        $__internal_f9ad269e495f632f40e79c9c2975c32c7cb4a6ae996bf8f8ea875f8da5f9bd06->enter($__internal_f9ad269e495f632f40e79c9c2975c32c7cb4a6ae996bf8f8ea875f8da5f9bd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f9ad269e495f632f40e79c9c2975c32c7cb4a6ae996bf8f8ea875f8da5f9bd06->leave($__internal_f9ad269e495f632f40e79c9c2975c32c7cb4a6ae996bf8f8ea875f8da5f9bd06_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cab2db282ac502066e9519a9a6f54242105f21f8cbba295c2f50467f4de8bacf = $this->env->getExtension("native_profiler");
        $__internal_cab2db282ac502066e9519a9a6f54242105f21f8cbba295c2f50467f4de8bacf->enter($__internal_cab2db282ac502066e9519a9a6f54242105f21f8cbba295c2f50467f4de8bacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cab2db282ac502066e9519a9a6f54242105f21f8cbba295c2f50467f4de8bacf->leave($__internal_cab2db282ac502066e9519a9a6f54242105f21f8cbba295c2f50467f4de8bacf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b22c39df6f8ab8ed0d44c5d9f5332b046a88b5910497d5d5eb06c98a52af66e8 = $this->env->getExtension("native_profiler");
        $__internal_b22c39df6f8ab8ed0d44c5d9f5332b046a88b5910497d5d5eb06c98a52af66e8->enter($__internal_b22c39df6f8ab8ed0d44c5d9f5332b046a88b5910497d5d5eb06c98a52af66e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b22c39df6f8ab8ed0d44c5d9f5332b046a88b5910497d5d5eb06c98a52af66e8->leave($__internal_b22c39df6f8ab8ed0d44c5d9f5332b046a88b5910497d5d5eb06c98a52af66e8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_26ac228ad29853d109d64f28bb7670edf29abd82f2946f737549448e68807e98 = $this->env->getExtension("native_profiler");
        $__internal_26ac228ad29853d109d64f28bb7670edf29abd82f2946f737549448e68807e98->enter($__internal_26ac228ad29853d109d64f28bb7670edf29abd82f2946f737549448e68807e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_26ac228ad29853d109d64f28bb7670edf29abd82f2946f737549448e68807e98->leave($__internal_26ac228ad29853d109d64f28bb7670edf29abd82f2946f737549448e68807e98_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_07c725d8f7c99750e9689cf41baa611fcdf824067e5d3ec031f76fbb0095cb0a = $this->env->getExtension("native_profiler");
        $__internal_07c725d8f7c99750e9689cf41baa611fcdf824067e5d3ec031f76fbb0095cb0a->enter($__internal_07c725d8f7c99750e9689cf41baa611fcdf824067e5d3ec031f76fbb0095cb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_07c725d8f7c99750e9689cf41baa611fcdf824067e5d3ec031f76fbb0095cb0a->leave($__internal_07c725d8f7c99750e9689cf41baa611fcdf824067e5d3ec031f76fbb0095cb0a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
