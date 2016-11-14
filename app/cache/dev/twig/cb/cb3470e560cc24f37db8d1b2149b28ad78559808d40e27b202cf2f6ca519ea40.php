<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_46c33cc64227dd8b9f9c2994de9b11f16243636e16b344bbccb1a21ccbe8b74c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d25d5baad35057155114928845f859c8cd4ca53fff17f0c09e4049b69e628a83 = $this->env->getExtension("native_profiler");
        $__internal_d25d5baad35057155114928845f859c8cd4ca53fff17f0c09e4049b69e628a83->enter($__internal_d25d5baad35057155114928845f859c8cd4ca53fff17f0c09e4049b69e628a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_d25d5baad35057155114928845f859c8cd4ca53fff17f0c09e4049b69e628a83->leave($__internal_d25d5baad35057155114928845f859c8cd4ca53fff17f0c09e4049b69e628a83_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_a515c6855475fcfd38deae47a544f0ec1a3e99631873b2c3cd0526b16e83bb6e = $this->env->getExtension("native_profiler");
        $__internal_a515c6855475fcfd38deae47a544f0ec1a3e99631873b2c3cd0526b16e83bb6e->enter($__internal_a515c6855475fcfd38deae47a544f0ec1a3e99631873b2c3cd0526b16e83bb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_a515c6855475fcfd38deae47a544f0ec1a3e99631873b2c3cd0526b16e83bb6e->leave($__internal_a515c6855475fcfd38deae47a544f0ec1a3e99631873b2c3cd0526b16e83bb6e_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
