<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_3dbff87967b5a666758c613a68cdd672cbefc1b987ac4f0a622a62745fad998f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8acfdbc71c2a288e82f6b3e555270f0cb7283294b39f0077f6707801f14ad5a = $this->env->getExtension("native_profiler");
        $__internal_e8acfdbc71c2a288e82f6b3e555270f0cb7283294b39f0077f6707801f14ad5a->enter($__internal_e8acfdbc71c2a288e82f6b3e555270f0cb7283294b39f0077f6707801f14ad5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8acfdbc71c2a288e82f6b3e555270f0cb7283294b39f0077f6707801f14ad5a->leave($__internal_e8acfdbc71c2a288e82f6b3e555270f0cb7283294b39f0077f6707801f14ad5a_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_043df7be67eb82b1e382c862b79ace3ff6e3ec6e5e23506a00493ae8e6a6c2ae = $this->env->getExtension("native_profiler");
        $__internal_043df7be67eb82b1e382c862b79ace3ff6e3ec6e5e23506a00493ae8e6a6c2ae->enter($__internal_043df7be67eb82b1e382c862b79ace3ff6e3ec6e5e23506a00493ae8e6a6c2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_043df7be67eb82b1e382c862b79ace3ff6e3ec6e5e23506a00493ae8e6a6c2ae->leave($__internal_043df7be67eb82b1e382c862b79ace3ff6e3ec6e5e23506a00493ae8e6a6c2ae_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
