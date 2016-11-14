<?php

/* :user:new.html.twig */
class __TwigTemplate_f8b2d5a2ea9095c774af84e09a753296146caa29394e9ac798f8e18efda027d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f85446bdcecf48efcc75517e8ef8cd410c391361f982292774922b0ff6e6b53c = $this->env->getExtension("native_profiler");
        $__internal_f85446bdcecf48efcc75517e8ef8cd410c391361f982292774922b0ff6e6b53c->enter($__internal_f85446bdcecf48efcc75517e8ef8cd410c391361f982292774922b0ff6e6b53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f85446bdcecf48efcc75517e8ef8cd410c391361f982292774922b0ff6e6b53c->leave($__internal_f85446bdcecf48efcc75517e8ef8cd410c391361f982292774922b0ff6e6b53c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e129cb3fd47a7ff83ee668e8e13866b9712053d2c708df01cc5dc684f02d70e0 = $this->env->getExtension("native_profiler");
        $__internal_e129cb3fd47a7ff83ee668e8e13866b9712053d2c708df01cc5dc684f02d70e0->enter($__internal_e129cb3fd47a7ff83ee668e8e13866b9712053d2c708df01cc5dc684f02d70e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e129cb3fd47a7ff83ee668e8e13866b9712053d2c708df01cc5dc684f02d70e0->leave($__internal_e129cb3fd47a7ff83ee668e8e13866b9712053d2c708df01cc5dc684f02d70e0_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
