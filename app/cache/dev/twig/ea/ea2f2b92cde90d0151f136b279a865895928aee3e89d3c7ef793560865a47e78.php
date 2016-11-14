<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_b15f0d4fa40a78f155bcdaf94f9030271f31e851934fe24e05ed93b2b3ddd7d4 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68127f313646695c5bf19a5374359ace89e8341ba168a3ab0e8622c940c15666 = $this->env->getExtension("native_profiler");
        $__internal_68127f313646695c5bf19a5374359ace89e8341ba168a3ab0e8622c940c15666->enter($__internal_68127f313646695c5bf19a5374359ace89e8341ba168a3ab0e8622c940c15666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68127f313646695c5bf19a5374359ace89e8341ba168a3ab0e8622c940c15666->leave($__internal_68127f313646695c5bf19a5374359ace89e8341ba168a3ab0e8622c940c15666_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ed3b06bf7a9b907039f324e6b781a98e3e1366e5a886c09bd3c38f93026d8475 = $this->env->getExtension("native_profiler");
        $__internal_ed3b06bf7a9b907039f324e6b781a98e3e1366e5a886c09bd3c38f93026d8475->enter($__internal_ed3b06bf7a9b907039f324e6b781a98e3e1366e5a886c09bd3c38f93026d8475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_ed3b06bf7a9b907039f324e6b781a98e3e1366e5a886c09bd3c38f93026d8475->leave($__internal_ed3b06bf7a9b907039f324e6b781a98e3e1366e5a886c09bd3c38f93026d8475_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
