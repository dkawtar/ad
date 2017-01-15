<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_55fb49f2185b5454f6d6b748b923fdc92be80911f05df785d21ca3ef17bc1b1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c909324de636d0b2938f3aa101791a8c5d45e8d475bd05b81b98f9f5aa489be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c909324de636d0b2938f3aa101791a8c5d45e8d475bd05b81b98f9f5aa489be0->enter($__internal_c909324de636d0b2938f3aa101791a8c5d45e8d475bd05b81b98f9f5aa489be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_6c437e25bd00c21c01e2938ed1836ec255e56ab0a560a2d1c88bab98b4ca48aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c437e25bd00c21c01e2938ed1836ec255e56ab0a560a2d1c88bab98b4ca48aa->enter($__internal_6c437e25bd00c21c01e2938ed1836ec255e56ab0a560a2d1c88bab98b4ca48aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c909324de636d0b2938f3aa101791a8c5d45e8d475bd05b81b98f9f5aa489be0->leave($__internal_c909324de636d0b2938f3aa101791a8c5d45e8d475bd05b81b98f9f5aa489be0_prof);

        
        $__internal_6c437e25bd00c21c01e2938ed1836ec255e56ab0a560a2d1c88bab98b4ca48aa->leave($__internal_6c437e25bd00c21c01e2938ed1836ec255e56ab0a560a2d1c88bab98b4ca48aa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cb2a5ab59af0726eb334805407f133d299ff9786457ed1dcba0b849533cf2bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb2a5ab59af0726eb334805407f133d299ff9786457ed1dcba0b849533cf2bee->enter($__internal_cb2a5ab59af0726eb334805407f133d299ff9786457ed1dcba0b849533cf2bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3444e94b5b0d2518c13cfce32a9509e76122f67065683dc61c5834dfb16146ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3444e94b5b0d2518c13cfce32a9509e76122f67065683dc61c5834dfb16146ef->enter($__internal_3444e94b5b0d2518c13cfce32a9509e76122f67065683dc61c5834dfb16146ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3444e94b5b0d2518c13cfce32a9509e76122f67065683dc61c5834dfb16146ef->leave($__internal_3444e94b5b0d2518c13cfce32a9509e76122f67065683dc61c5834dfb16146ef_prof);

        
        $__internal_cb2a5ab59af0726eb334805407f133d299ff9786457ed1dcba0b849533cf2bee->leave($__internal_cb2a5ab59af0726eb334805407f133d299ff9786457ed1dcba0b849533cf2bee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
