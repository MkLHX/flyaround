<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_60c128319b440fc678f2ac79e5bd736c7a595b95826626128505906c8a7a58d6 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35ddd5f4e7963c16e4b51011319501626299438797dc55f69f09a996d6643774 = $this->env->getExtension("native_profiler");
        $__internal_35ddd5f4e7963c16e4b51011319501626299438797dc55f69f09a996d6643774->enter($__internal_35ddd5f4e7963c16e4b51011319501626299438797dc55f69f09a996d6643774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35ddd5f4e7963c16e4b51011319501626299438797dc55f69f09a996d6643774->leave($__internal_35ddd5f4e7963c16e4b51011319501626299438797dc55f69f09a996d6643774_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ba8ef985346ee6dce124957d17a46ab08523fa696faa33e4d26910f18f05dd71 = $this->env->getExtension("native_profiler");
        $__internal_ba8ef985346ee6dce124957d17a46ab08523fa696faa33e4d26910f18f05dd71->enter($__internal_ba8ef985346ee6dce124957d17a46ab08523fa696faa33e4d26910f18f05dd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_ba8ef985346ee6dce124957d17a46ab08523fa696faa33e4d26910f18f05dd71->leave($__internal_ba8ef985346ee6dce124957d17a46ab08523fa696faa33e4d26910f18f05dd71_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
