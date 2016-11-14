<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_c9dc9ea2ecc10ad7d263d4b3893fb149f8323cf6271ef1140385f340763b0d01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b26a9db6bd3ba4b56f3d30ced46210a4b1d25c580766f37c38ba847f80c4cabc = $this->env->getExtension("native_profiler");
        $__internal_b26a9db6bd3ba4b56f3d30ced46210a4b1d25c580766f37c38ba847f80c4cabc->enter($__internal_b26a9db6bd3ba4b56f3d30ced46210a4b1d25c580766f37c38ba847f80c4cabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b26a9db6bd3ba4b56f3d30ced46210a4b1d25c580766f37c38ba847f80c4cabc->leave($__internal_b26a9db6bd3ba4b56f3d30ced46210a4b1d25c580766f37c38ba847f80c4cabc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3bb1cd2c462d4ed190bc74484fe796667e94f68fb1fa56068d38655ac41a9ca8 = $this->env->getExtension("native_profiler");
        $__internal_3bb1cd2c462d4ed190bc74484fe796667e94f68fb1fa56068d38655ac41a9ca8->enter($__internal_3bb1cd2c462d4ed190bc74484fe796667e94f68fb1fa56068d38655ac41a9ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_3bb1cd2c462d4ed190bc74484fe796667e94f68fb1fa56068d38655ac41a9ca8->leave($__internal_3bb1cd2c462d4ed190bc74484fe796667e94f68fb1fa56068d38655ac41a9ca8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
