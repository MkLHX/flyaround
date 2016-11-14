<?php

/* :flight:show.html.twig */
class __TwigTemplate_8f33a1effbf68d2216612e3c043ad33d357bed689a258ee44590a06d8795a041 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Flight</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flight"]) ? $context["flight"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Departure</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flight"]) ? $context["flight"] : null), "departure", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Arrival</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flight"]) ? $context["flight"] : null), "arrival", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pilot</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flight"]) ? $context["flight"] : null), "pilot", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Freeseats</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flight"]) ? $context["flight"] : null), "freeSeats", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Takeoftime</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["flight"]) ? $context["flight"] : null), "takeofTime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["flight"]) ? $context["flight"] : null), "takeofTime", array()), "Y-m-d H:i:s"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("flight_edit", array("id" => $this->getAttribute((isset($context["flight"]) ? $context["flight"] : null), "id", array()))), "html", null, true);
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
        return ":flight:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 45,  98 => 43,  92 => 40,  86 => 37,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
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
