<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_062f9914f27247d7da01f62a9e2ac27d36e18d42867f88d0c3b08c95549989d6 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c0503a6479cfcfc149c8a06617233fce837574b7da0e1710f66116e9b6cc350 = $this->env->getExtension("native_profiler");
        $__internal_4c0503a6479cfcfc149c8a06617233fce837574b7da0e1710f66116e9b6cc350->enter($__internal_4c0503a6479cfcfc149c8a06617233fce837574b7da0e1710f66116e9b6cc350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c0503a6479cfcfc149c8a06617233fce837574b7da0e1710f66116e9b6cc350->leave($__internal_4c0503a6479cfcfc149c8a06617233fce837574b7da0e1710f66116e9b6cc350_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ea15528f4ae410a15bcb34e2d91913f85160a6c3fe497699d5767a102cc689e2 = $this->env->getExtension("native_profiler");
        $__internal_ea15528f4ae410a15bcb34e2d91913f85160a6c3fe497699d5767a102cc689e2->enter($__internal_ea15528f4ae410a15bcb34e2d91913f85160a6c3fe497699d5767a102cc689e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_ea15528f4ae410a15bcb34e2d91913f85160a6c3fe497699d5767a102cc689e2->leave($__internal_ea15528f4ae410a15bcb34e2d91913f85160a6c3fe497699d5767a102cc689e2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
