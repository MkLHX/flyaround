<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_3cc830488483cd19249ad973c19cc771fafa32116fd60d8252928ab45c0fec6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce2bbe542e785ab6f3345889f7b713c12aefb67b270debb4028283ed751464f5 = $this->env->getExtension("native_profiler");
        $__internal_ce2bbe542e785ab6f3345889f7b713c12aefb67b270debb4028283ed751464f5->enter($__internal_ce2bbe542e785ab6f3345889f7b713c12aefb67b270debb4028283ed751464f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_ce2bbe542e785ab6f3345889f7b713c12aefb67b270debb4028283ed751464f5->leave($__internal_ce2bbe542e785ab6f3345889f7b713c12aefb67b270debb4028283ed751464f5_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_97a78a9b966532984cc1703544a06493d1eac589c2109dd27be24f947412d42e = $this->env->getExtension("native_profiler");
        $__internal_97a78a9b966532984cc1703544a06493d1eac589c2109dd27be24f947412d42e->enter($__internal_97a78a9b966532984cc1703544a06493d1eac589c2109dd27be24f947412d42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_97a78a9b966532984cc1703544a06493d1eac589c2109dd27be24f947412d42e->leave($__internal_97a78a9b966532984cc1703544a06493d1eac589c2109dd27be24f947412d42e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
