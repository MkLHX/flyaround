<?php

/* :planemodel:index.html.twig */
class __TwigTemplate_3e2852468720c059662dbd33e8098c6160baafc92214f0bace4671ecba6b915c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":planemodel:index.html.twig", 1);
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
        $__internal_de19de9755a9ed740726be040ea91b2258b0fd915b53eed06ab55614a954506b = $this->env->getExtension("native_profiler");
        $__internal_de19de9755a9ed740726be040ea91b2258b0fd915b53eed06ab55614a954506b->enter($__internal_de19de9755a9ed740726be040ea91b2258b0fd915b53eed06ab55614a954506b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de19de9755a9ed740726be040ea91b2258b0fd915b53eed06ab55614a954506b->leave($__internal_de19de9755a9ed740726be040ea91b2258b0fd915b53eed06ab55614a954506b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4deca122c240e16e0b705e40d1a5ec4311d08eaf5335f747c60de1fdfc51a8d = $this->env->getExtension("native_profiler");
        $__internal_e4deca122c240e16e0b705e40d1a5ec4311d08eaf5335f747c60de1fdfc51a8d->enter($__internal_e4deca122c240e16e0b705e40d1a5ec4311d08eaf5335f747c60de1fdfc51a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>PlaneModel list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Model</th>
                <th>Manufacturer</th>
                <th>Cruisespeed</th>
                <th>Nbseats</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["planeModels"]) ? $context["planeModels"] : $this->getContext($context, "planeModels")));
        foreach ($context['_seq'] as $context["_key"] => $context["planeModel"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("planemodel_show", array("id" => $this->getAttribute($context["planeModel"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["planeModel"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["planeModel"], "model", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["planeModel"], "manufacturer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["planeModel"], "cruiseSpeed", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["planeModel"], "nbSeats", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["planeModel"], "status", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("planemodel_show", array("id" => $this->getAttribute($context["planeModel"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("planemodel_edit", array("id" => $this->getAttribute($context["planeModel"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planeModel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("planemodel_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_e4deca122c240e16e0b705e40d1a5ec4311d08eaf5335f747c60de1fdfc51a8d->leave($__internal_e4deca122c240e16e0b705e40d1a5ec4311d08eaf5335f747c60de1fdfc51a8d_prof);

    }

    public function getTemplateName()
    {
        return ":planemodel:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 44,  111 => 39,  99 => 33,  93 => 30,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>PlaneModel list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Model</th>*/
/*                 <th>Manufacturer</th>*/
/*                 <th>Cruisespeed</th>*/
/*                 <th>Nbseats</th>*/
/*                 <th>Status</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for planeModel in planeModels %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('planemodel_show', { 'id': planeModel.id }) }}">{{ planeModel.id }}</a></td>*/
/*                 <td>{{ planeModel.model }}</td>*/
/*                 <td>{{ planeModel.manufacturer }}</td>*/
/*                 <td>{{ planeModel.cruiseSpeed }}</td>*/
/*                 <td>{{ planeModel.nbSeats }}</td>*/
/*                 <td>{{ planeModel.status }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('planemodel_show', { 'id': planeModel.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('planemodel_edit', { 'id': planeModel.id }) }}">edit</a>*/
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
/*             <a href="{{ path('planemodel_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
