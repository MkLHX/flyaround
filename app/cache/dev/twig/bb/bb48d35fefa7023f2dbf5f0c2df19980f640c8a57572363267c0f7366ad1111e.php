<?php

/* :flight:show.html.twig */
class __TwigTemplate_7abb5cbba2ba409e16f5fa1b050c58e7d6d9b5ac251599a7421b61db97125960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":flight:show.html.twig", 1);
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
        $__internal_2bba209ce55286fd781be7fd11dee0374002c71382b195661119f8b4d3f2b8d1 = $this->env->getExtension("native_profiler");
        $__internal_2bba209ce55286fd781be7fd11dee0374002c71382b195661119f8b4d3f2b8d1->enter($__internal_2bba209ce55286fd781be7fd11dee0374002c71382b195661119f8b4d3f2b8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bba209ce55286fd781be7fd11dee0374002c71382b195661119f8b4d3f2b8d1->leave($__internal_2bba209ce55286fd781be7fd11dee0374002c71382b195661119f8b4d3f2b8d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5687220794dddc78b663d6c6d451d297aa2b3126fd8300faa315b557a9753922 = $this->env->getExtension("native_profiler");
        $__internal_5687220794dddc78b663d6c6d451d297aa2b3126fd8300faa315b557a9753922->enter($__internal_5687220794dddc78b663d6c6d451d297aa2b3126fd8300faa315b557a9753922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flight</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flight"]) ? $context["flight"] : $this->getContext($context, "flight")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Departure</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flight"]) ? $context["flight"] : $this->getContext($context, "flight")), "departure", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Arrival</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flight"]) ? $context["flight"] : $this->getContext($context, "flight")), "arrival", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pilot</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flight"]) ? $context["flight"] : $this->getContext($context, "flight")), "pilot", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Freeseats</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flight"]) ? $context["flight"] : $this->getContext($context, "flight")), "freeSeats", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Takeoftime</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["flight"]) ? $context["flight"] : $this->getContext($context, "flight")), "takeofTime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["flight"]) ? $context["flight"] : $this->getContext($context, "flight")), "takeofTime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("flight_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("flight_edit", array("id" => $this->getAttribute((isset($context["flight"]) ? $context["flight"] : $this->getContext($context, "flight")), "id", array()))), "html", null, true);
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
        
        $__internal_5687220794dddc78b663d6c6d451d297aa2b3126fd8300faa315b557a9753922->leave($__internal_5687220794dddc78b663d6c6d451d297aa2b3126fd8300faa315b557a9753922_prof);

    }

    public function getTemplateName()
    {
        return ":flight:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 45,  107 => 43,  101 => 40,  95 => 37,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Flight</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ flight.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Departure</th>*/
/*                 <td>{{ flight.departure }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Arrival</th>*/
/*                 <td>{{ flight.arrival }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Pilot</th>*/
/*                 <td>{{ flight.pilot }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Freeseats</th>*/
/*                 <td>{{ flight.freeSeats }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Takeoftime</th>*/
/*                 <td>{% if flight.takeofTime %}{{ flight.takeofTime|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('flight_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('flight_edit', { 'id': flight.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
