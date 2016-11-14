<?php

/* :reservation:index.html.twig */
class __TwigTemplate_792cdea332d4240c6d4d49ded2f290a857ab01b7352aab361e6c79ff5a07e434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:index.html.twig", 1);
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
        $__internal_0102cb54e7406804986dc8b4159c1f616443414a5d3883c92bb5204cde05558c = $this->env->getExtension("native_profiler");
        $__internal_0102cb54e7406804986dc8b4159c1f616443414a5d3883c92bb5204cde05558c->enter($__internal_0102cb54e7406804986dc8b4159c1f616443414a5d3883c92bb5204cde05558c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0102cb54e7406804986dc8b4159c1f616443414a5d3883c92bb5204cde05558c->leave($__internal_0102cb54e7406804986dc8b4159c1f616443414a5d3883c92bb5204cde05558c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5a9f1f4dbe32b7ba25863c31ab913ffb429d07698133819808d6ddc5fa7bfd5 = $this->env->getExtension("native_profiler");
        $__internal_b5a9f1f4dbe32b7ba25863c31ab913ffb429d07698133819808d6ddc5fa7bfd5->enter($__internal_b5a9f1f4dbe32b7ba25863c31ab913ffb429d07698133819808d6ddc5fa7bfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Nbseats</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_show", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "nbSeats", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_show", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_edit", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("reservation_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_b5a9f1f4dbe32b7ba25863c31ab913ffb429d07698133819808d6ddc5fa7bfd5->leave($__internal_b5a9f1f4dbe32b7ba25863c31ab913ffb429d07698133819808d6ddc5fa7bfd5_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Reservation list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Nbseats</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for reservation in reservations %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('reservation_show', { 'id': reservation.id }) }}">{{ reservation.id }}</a></td>*/
/*                 <td>{{ reservation.name }}</td>*/
/*                 <td>{{ reservation.nbSeats }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('reservation_show', { 'id': reservation.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('reservation_edit', { 'id': reservation.id }) }}">edit</a>*/
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
/*             <a href="{{ path('reservation_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
