<?php

/* :planemodel:show.html.twig */
class __TwigTemplate_f66a63f2705ff45f78a6d6250eeea0d4179a271f1d464dc193f046298367a867 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>PlaneModel</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planeModel"]) ? $context["planeModel"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planeModel"]) ? $context["planeModel"] : null), "model", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Manufacturer</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planeModel"]) ? $context["planeModel"] : null), "manufacturer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cruisespeed</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planeModel"]) ? $context["planeModel"] : null), "cruiseSpeed", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbseats</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planeModel"]) ? $context["planeModel"] : null), "nbSeats", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planeModel"]) ? $context["planeModel"] : null), "status", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("planemodel_edit", array("id" => $this->getAttribute((isset($context["planeModel"]) ? $context["planeModel"] : null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
        </li>
    </ul>
";
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
        return array (  101 => 45,  96 => 43,  90 => 40,  84 => 37,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
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
