<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_0e08a2b6829f8c0b85ae56e0125a071ddcd2c9d35aff9789729362309978e27d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf742c35c8743e441a73aa64f450068ec634fc3d0c343e77d0d65d4e07df5bdb = $this->env->getExtension("native_profiler");
        $__internal_cf742c35c8743e441a73aa64f450068ec634fc3d0c343e77d0d65d4e07df5bdb->enter($__internal_cf742c35c8743e441a73aa64f450068ec634fc3d0c343e77d0d65d4e07df5bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf742c35c8743e441a73aa64f450068ec634fc3d0c343e77d0d65d4e07df5bdb->leave($__internal_cf742c35c8743e441a73aa64f450068ec634fc3d0c343e77d0d65d4e07df5bdb_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_90223118b60ab411db436e7f5500f4cc48bde7f893da7308dd8b8e600c37cce9 = $this->env->getExtension("native_profiler");
        $__internal_90223118b60ab411db436e7f5500f4cc48bde7f893da7308dd8b8e600c37cce9->enter($__internal_90223118b60ab411db436e7f5500f4cc48bde7f893da7308dd8b8e600c37cce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_90223118b60ab411db436e7f5500f4cc48bde7f893da7308dd8b8e600c37cce9->leave($__internal_90223118b60ab411db436e7f5500f4cc48bde7f893da7308dd8b8e600c37cce9_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
