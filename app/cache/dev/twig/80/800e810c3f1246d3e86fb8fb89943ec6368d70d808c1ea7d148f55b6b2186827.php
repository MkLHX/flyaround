<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_4b9437d5f0a7694308f0ec4b17878e723f0c8a05acc145fb26d162c10938dfdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fdc862b40f5afe14c679bf4298519e66c75edd1eaa714949f11abe62443c011 = $this->env->getExtension("native_profiler");
        $__internal_7fdc862b40f5afe14c679bf4298519e66c75edd1eaa714949f11abe62443c011->enter($__internal_7fdc862b40f5afe14c679bf4298519e66c75edd1eaa714949f11abe62443c011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fdc862b40f5afe14c679bf4298519e66c75edd1eaa714949f11abe62443c011->leave($__internal_7fdc862b40f5afe14c679bf4298519e66c75edd1eaa714949f11abe62443c011_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_d7b1f7a85b18d22d5feabb367dbfe62313e623a232b4418b4c512b1679121c13 = $this->env->getExtension("native_profiler");
        $__internal_d7b1f7a85b18d22d5feabb367dbfe62313e623a232b4418b4c512b1679121c13->enter($__internal_d7b1f7a85b18d22d5feabb367dbfe62313e623a232b4418b4c512b1679121c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_d7b1f7a85b18d22d5feabb367dbfe62313e623a232b4418b4c512b1679121c13->leave($__internal_d7b1f7a85b18d22d5feabb367dbfe62313e623a232b4418b4c512b1679121c13_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
