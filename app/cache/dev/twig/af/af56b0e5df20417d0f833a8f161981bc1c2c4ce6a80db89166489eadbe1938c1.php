<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_0ffb5c1ae692321b62c57d618d7ef027ecdfed50300ab0032e65138dd3937c63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5eee13e5b560333624d72dda266a4e0a86d13f9eba1bacd438c40d49789668ae = $this->env->getExtension("native_profiler");
        $__internal_5eee13e5b560333624d72dda266a4e0a86d13f9eba1bacd438c40d49789668ae->enter($__internal_5eee13e5b560333624d72dda266a4e0a86d13f9eba1bacd438c40d49789668ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_5eee13e5b560333624d72dda266a4e0a86d13f9eba1bacd438c40d49789668ae->leave($__internal_5eee13e5b560333624d72dda266a4e0a86d13f9eba1bacd438c40d49789668ae_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
