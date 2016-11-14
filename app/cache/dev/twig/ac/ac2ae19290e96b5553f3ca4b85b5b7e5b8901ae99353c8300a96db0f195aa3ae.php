<?php

/* :reservation:show.html.twig */
class __TwigTemplate_9e50e85bbd8511f9c261d0b92052dc6501174296a5f9e2e1fd4d21452b079bc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:show.html.twig", 1);
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
        $__internal_4fea8c52070cebf08d123bc5a0b4554d1e1c70ce9eec2361b616b7435c487ee8 = $this->env->getExtension("native_profiler");
        $__internal_4fea8c52070cebf08d123bc5a0b4554d1e1c70ce9eec2361b616b7435c487ee8->enter($__internal_4fea8c52070cebf08d123bc5a0b4554d1e1c70ce9eec2361b616b7435c487ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fea8c52070cebf08d123bc5a0b4554d1e1c70ce9eec2361b616b7435c487ee8->leave($__internal_4fea8c52070cebf08d123bc5a0b4554d1e1c70ce9eec2361b616b7435c487ee8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0420fc6beb3b64356cd7f464e2e75d199de1d7bc193455ed0150c82e5541c5d = $this->env->getExtension("native_profiler");
        $__internal_c0420fc6beb3b64356cd7f464e2e75d199de1d7bc193455ed0150c82e5541c5d->enter($__internal_c0420fc6beb3b64356cd7f464e2e75d199de1d7bc193455ed0150c82e5541c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbseats</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "nbSeats", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_edit", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c0420fc6beb3b64356cd7f464e2e75d199de1d7bc193455ed0150c82e5541c5d->leave($__internal_c0420fc6beb3b64356cd7f464e2e75d199de1d7bc193455ed0150c82e5541c5d_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Reservation</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ reservation.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ reservation.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nbseats</th>*/
/*                 <td>{{ reservation.nbSeats }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('reservation_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('reservation_edit', { 'id': reservation.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
