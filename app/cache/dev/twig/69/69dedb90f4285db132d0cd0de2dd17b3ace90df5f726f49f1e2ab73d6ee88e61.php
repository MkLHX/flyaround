<?php

/* :user:edit.html.twig */
class __TwigTemplate_58b0196b9d0a6f9a1f61bcaeffb416071c40ccd902b89722179f67bfc919ea6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:edit.html.twig", 1);
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
        $__internal_2c391e1ef009fb9ba9c6b6f727039690c0cf50c426dadff9d671e2cb07eb41a1 = $this->env->getExtension("native_profiler");
        $__internal_2c391e1ef009fb9ba9c6b6f727039690c0cf50c426dadff9d671e2cb07eb41a1->enter($__internal_2c391e1ef009fb9ba9c6b6f727039690c0cf50c426dadff9d671e2cb07eb41a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c391e1ef009fb9ba9c6b6f727039690c0cf50c426dadff9d671e2cb07eb41a1->leave($__internal_2c391e1ef009fb9ba9c6b6f727039690c0cf50c426dadff9d671e2cb07eb41a1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bd0c369c00164d3d3323890bf65284e6ec456de0173a74d8841ee81770505e2 = $this->env->getExtension("native_profiler");
        $__internal_4bd0c369c00164d3d3323890bf65284e6ec456de0173a74d8841ee81770505e2->enter($__internal_4bd0c369c00164d3d3323890bf65284e6ec456de0173a74d8841ee81770505e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4bd0c369c00164d3d3323890bf65284e6ec456de0173a74d8841ee81770505e2->leave($__internal_4bd0c369c00164d3d3323890bf65284e6ec456de0173a74d8841ee81770505e2_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
