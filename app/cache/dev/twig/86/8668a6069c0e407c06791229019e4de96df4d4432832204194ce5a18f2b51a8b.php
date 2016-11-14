<?php

/* terrain/index.html.twig */
class __TwigTemplate_b6d4c03629e741dd5cea6788bc4032a0c9d26cbd74adda213d026bda15fa2137 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "terrain/index.html.twig", 1);
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
        $__internal_e59071f2f152244ff80fc0e7de989fcc7ab11fdc61467e27669067da9cbeda61 = $this->env->getExtension("native_profiler");
        $__internal_e59071f2f152244ff80fc0e7de989fcc7ab11fdc61467e27669067da9cbeda61->enter($__internal_e59071f2f152244ff80fc0e7de989fcc7ab11fdc61467e27669067da9cbeda61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "terrain/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e59071f2f152244ff80fc0e7de989fcc7ab11fdc61467e27669067da9cbeda61->leave($__internal_e59071f2f152244ff80fc0e7de989fcc7ab11fdc61467e27669067da9cbeda61_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a7ab67995fee58566a799e97ddfbf0fe90f68a1f7d89383e4b3612e19b6e35d = $this->env->getExtension("native_profiler");
        $__internal_4a7ab67995fee58566a799e97ddfbf0fe90f68a1f7d89383e4b3612e19b6e35d->enter($__internal_4a7ab67995fee58566a799e97ddfbf0fe90f68a1f7d89383e4b3612e19b6e35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Terrain list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Icao</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>City</th>
                <th>Country</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["terrains"]) ? $context["terrains"] : $this->getContext($context, "terrains")));
        foreach ($context['_seq'] as $context["_key"] => $context["terrain"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("terrain_show", array("id" => $this->getAttribute($context["terrain"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "icao", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "latitude", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "longitude", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "city", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "country", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("terrain_show", array("id" => $this->getAttribute($context["terrain"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['terrain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    
";
        
        $__internal_4a7ab67995fee58566a799e97ddfbf0fe90f68a1f7d89383e4b3612e19b6e35d->leave($__internal_4a7ab67995fee58566a799e97ddfbf0fe90f68a1f7d89383e4b3612e19b6e35d_prof);

    }

    public function getTemplateName()
    {
        return "terrain/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  98 => 32,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Terrain list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Icao</th>*/
/*                 <th>Latitude</th>*/
/*                 <th>Longitude</th>*/
/*                 <th>City</th>*/
/*                 <th>Country</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for terrain in terrains %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('terrain_show', { 'id': terrain.id }) }}">{{ terrain.id }}</a></td>*/
/*                 <td>{{ terrain.name }}</td>*/
/*                 <td>{{ terrain.icao }}</td>*/
/*                 <td>{{ terrain.latitude }}</td>*/
/*                 <td>{{ terrain.longitude }}</td>*/
/*                 <td>{{ terrain.city }}</td>*/
/*                 <td>{{ terrain.country }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('terrain_show', { 'id': terrain.id }) }}">show</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
