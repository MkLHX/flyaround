<?php

/* :flight:index.html.twig */
class __TwigTemplate_12e6c03673f8053bfe457f6ff9d7ea7df495b43fa73000510a2b5d6bd1d641bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":flight:index.html.twig", 1);
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
        $__internal_2ed16d039019aa99c4e664d7858024dc1271867b0cd4c924cb915112a6c88fbc = $this->env->getExtension("native_profiler");
        $__internal_2ed16d039019aa99c4e664d7858024dc1271867b0cd4c924cb915112a6c88fbc->enter($__internal_2ed16d039019aa99c4e664d7858024dc1271867b0cd4c924cb915112a6c88fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ed16d039019aa99c4e664d7858024dc1271867b0cd4c924cb915112a6c88fbc->leave($__internal_2ed16d039019aa99c4e664d7858024dc1271867b0cd4c924cb915112a6c88fbc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_928322eb24369aa7550f166c4aa935261e8c45f788c93eed9958b46f8726f02f = $this->env->getExtension("native_profiler");
        $__internal_928322eb24369aa7550f166c4aa935261e8c45f788c93eed9958b46f8726f02f->enter($__internal_928322eb24369aa7550f166c4aa935261e8c45f788c93eed9958b46f8726f02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flight list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Pilot</th>
                <th>Freeseats</th>
                <th>Takeoftime</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["flights"]) ? $context["flights"] : $this->getContext($context, "flights")));
        foreach ($context['_seq'] as $context["_key"] => $context["flight"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("flight_show", array("id" => $this->getAttribute($context["flight"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "departure", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "arrival", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "pilot", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "freeSeats", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["flight"], "takeofTime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["flight"], "takeofTime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("flight_show", array("id" => $this->getAttribute($context["flight"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("flight_edit", array("id" => $this->getAttribute($context["flight"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("flight_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_928322eb24369aa7550f166c4aa935261e8c45f788c93eed9958b46f8726f02f->leave($__internal_928322eb24369aa7550f166c4aa935261e8c45f788c93eed9958b46f8726f02f_prof);

    }

    public function getTemplateName()
    {
        return ":flight:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  113 => 39,  101 => 33,  95 => 30,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Flight list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Departure</th>*/
/*                 <th>Arrival</th>*/
/*                 <th>Pilot</th>*/
/*                 <th>Freeseats</th>*/
/*                 <th>Takeoftime</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for flight in flights %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('flight_show', { 'id': flight.id }) }}">{{ flight.id }}</a></td>*/
/*                 <td>{{ flight.departure }}</td>*/
/*                 <td>{{ flight.arrival }}</td>*/
/*                 <td>{{ flight.pilot }}</td>*/
/*                 <td>{{ flight.freeSeats }}</td>*/
/*                 <td>{% if flight.takeofTime %}{{ flight.takeofTime|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('flight_show', { 'id': flight.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('flight_edit', { 'id': flight.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('flight_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
