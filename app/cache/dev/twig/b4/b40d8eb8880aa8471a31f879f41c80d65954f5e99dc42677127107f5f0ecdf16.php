<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_858e1100fdc21c1d10f19a11cfaf0acacd5265c9abb73419e93454129aa11b9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35bcd9d986e0b36730a53f9069ddb91aca1e1366b28b6cf5c16597c42553aa50 = $this->env->getExtension("native_profiler");
        $__internal_35bcd9d986e0b36730a53f9069ddb91aca1e1366b28b6cf5c16597c42553aa50->enter($__internal_35bcd9d986e0b36730a53f9069ddb91aca1e1366b28b6cf5c16597c42553aa50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35bcd9d986e0b36730a53f9069ddb91aca1e1366b28b6cf5c16597c42553aa50->leave($__internal_35bcd9d986e0b36730a53f9069ddb91aca1e1366b28b6cf5c16597c42553aa50_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_1f36c58da5c0a4454bf0c2b5741f7d1fd18acd2450d6db061dcb2792eb274e66 = $this->env->getExtension("native_profiler");
        $__internal_1f36c58da5c0a4454bf0c2b5741f7d1fd18acd2450d6db061dcb2792eb274e66->enter($__internal_1f36c58da5c0a4454bf0c2b5741f7d1fd18acd2450d6db061dcb2792eb274e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_1f36c58da5c0a4454bf0c2b5741f7d1fd18acd2450d6db061dcb2792eb274e66->leave($__internal_1f36c58da5c0a4454bf0c2b5741f7d1fd18acd2450d6db061dcb2792eb274e66_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <div class="cms-block-exception">*/
/*         <h2>{{ block.name }}</h2>*/
/*         <h3>{{ exception.message }}</h3>*/
/*     </div>*/
/* {% endblock %}*/
/* */
