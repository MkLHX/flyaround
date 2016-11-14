<?php

/* :planemodel:show.html.twig */
class __TwigTemplate_6761543ba4b5df17bc0397d65c2ee1753f92f8efcc2a5d86c6b19fc155a64482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":planemodel:show.html.twig", 1);
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
        $__internal_5962a42cb399b507570e6c6255962c7fd379c6611f87381f01c7599f9e70b218 = $this->env->getExtension("native_profiler");
        $__internal_5962a42cb399b507570e6c6255962c7fd379c6611f87381f01c7599f9e70b218->enter($__internal_5962a42cb399b507570e6c6255962c7fd379c6611f87381f01c7599f9e70b218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5962a42cb399b507570e6c6255962c7fd379c6611f87381f01c7599f9e70b218->leave($__internal_5962a42cb399b507570e6c6255962c7fd379c6611f87381f01c7599f9e70b218_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_35607818f9654ff03c5d5f32da8c58cdf2c7d91b02e5fe600e6b41eae538490f = $this->env->getExtension("native_profiler");
        $__internal_35607818f9654ff03c5d5f32da8c58cdf2c7d91b02e5fe600e6b41eae538490f->enter($__internal_35607818f9654ff03c5d5f32da8c58cdf2c7d91b02e5fe600e6b41eae538490f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>PlaneModel</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planeModel"]) ? $context["planeModel"] : $this->getContext($context, "planeModel")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planeModel"]) ? $context["planeModel"] : $this->getContext($context, "planeModel")), "model", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Manufacturer</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planeModel"]) ? $context["planeModel"] : $this->getContext($context, "planeModel")), "manufacturer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cruisespeed</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planeModel"]) ? $context["planeModel"] : $this->getContext($context, "planeModel")), "cruiseSpeed", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbseats</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planeModel"]) ? $context["planeModel"] : $this->getContext($context, "planeModel")), "nbSeats", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planeModel"]) ? $context["planeModel"] : $this->getContext($context, "planeModel")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("planemodel_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("planemodel_edit", array("id" => $this->getAttribute((isset($context["planeModel"]) ? $context["planeModel"] : $this->getContext($context, "planeModel")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_35607818f9654ff03c5d5f32da8c58cdf2c7d91b02e5fe600e6b41eae538490f->leave($__internal_35607818f9654ff03c5d5f32da8c58cdf2c7d91b02e5fe600e6b41eae538490f_prof);

    }

    public function getTemplateName()
    {
        return ":planemodel:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  105 => 43,  99 => 40,  93 => 37,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>PlaneModel</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ planeModel.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Model</th>*/
/*                 <td>{{ planeModel.model }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Manufacturer</th>*/
/*                 <td>{{ planeModel.manufacturer }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cruisespeed</th>*/
/*                 <td>{{ planeModel.cruiseSpeed }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nbseats</th>*/
/*                 <td>{{ planeModel.nbSeats }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Status</th>*/
/*                 <td>{{ planeModel.status }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('planemodel_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('planemodel_edit', { 'id': planeModel.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
