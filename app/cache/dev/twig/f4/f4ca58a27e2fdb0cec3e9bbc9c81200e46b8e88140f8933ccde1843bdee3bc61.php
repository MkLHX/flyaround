<?php

/* :terrain:show.html.twig */
class __TwigTemplate_1714eb984fefe543767f1de13b7a69a4107a06428e848a6c3a70a36ca9567242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":terrain:show.html.twig", 1);
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
        $__internal_148256ce82ab446bf065cce506138d27e4d1b03835906b4910762f8bdba83486 = $this->env->getExtension("native_profiler");
        $__internal_148256ce82ab446bf065cce506138d27e4d1b03835906b4910762f8bdba83486->enter($__internal_148256ce82ab446bf065cce506138d27e4d1b03835906b4910762f8bdba83486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":terrain:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_148256ce82ab446bf065cce506138d27e4d1b03835906b4910762f8bdba83486->leave($__internal_148256ce82ab446bf065cce506138d27e4d1b03835906b4910762f8bdba83486_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44724a364159f48f673f0d1e1461cd54ae2169303d17c8efe739dc0741d90ed0 = $this->env->getExtension("native_profiler");
        $__internal_44724a364159f48f673f0d1e1461cd54ae2169303d17c8efe739dc0741d90ed0->enter($__internal_44724a364159f48f673f0d1e1461cd54ae2169303d17c8efe739dc0741d90ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Terrain</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Icao</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain")), "icao", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Latitude</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain")), "latitude", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Longitude</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain")), "longitude", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain")), "city", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["terrain"]) ? $context["terrain"] : $this->getContext($context, "terrain")), "country", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("terrain_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_44724a364159f48f673f0d1e1461cd54ae2169303d17c8efe739dc0741d90ed0->leave($__internal_44724a364159f48f673f0d1e1461cd54ae2169303d17c8efe739dc0741d90ed0_prof);

    }

    public function getTemplateName()
    {
        return ":terrain:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 41,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Terrain</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ terrain.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ terrain.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Icao</th>*/
/*                 <td>{{ terrain.icao }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Latitude</th>*/
/*                 <td>{{ terrain.latitude }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Longitude</th>*/
/*                 <td>{{ terrain.longitude }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>City</th>*/
/*                 <td>{{ terrain.city }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Country</th>*/
/*                 <td>{{ terrain.country }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('terrain_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
