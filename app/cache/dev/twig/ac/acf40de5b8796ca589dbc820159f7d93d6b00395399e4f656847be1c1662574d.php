<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_d85578a7f68945944c12526f72de630c60e9952eb04028a5beebef3ed4277bce extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f94410100a24cb52dfbe82ce2c69d02d69db2d99c1559d9a62edafe7fa7d0978 = $this->env->getExtension("native_profiler");
        $__internal_f94410100a24cb52dfbe82ce2c69d02d69db2d99c1559d9a62edafe7fa7d0978->enter($__internal_f94410100a24cb52dfbe82ce2c69d02d69db2d99c1559d9a62edafe7fa7d0978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f94410100a24cb52dfbe82ce2c69d02d69db2d99c1559d9a62edafe7fa7d0978->leave($__internal_f94410100a24cb52dfbe82ce2c69d02d69db2d99c1559d9a62edafe7fa7d0978_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_866f7701fab7e73e17d58410f41faf8e74b3cef2515c609bb4856c3eb5043a08 = $this->env->getExtension("native_profiler");
        $__internal_866f7701fab7e73e17d58410f41faf8e74b3cef2515c609bb4856c3eb5043a08->enter($__internal_866f7701fab7e73e17d58410f41faf8e74b3cef2515c609bb4856c3eb5043a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_866f7701fab7e73e17d58410f41faf8e74b3cef2515c609bb4856c3eb5043a08->leave($__internal_866f7701fab7e73e17d58410f41faf8e74b3cef2515c609bb4856c3eb5043a08_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
