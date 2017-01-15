<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_00b40b05765364ccff1b7cf55d9540b2d8a7e5dfcbe59bfd9235fbe920ee7b13 extends Twig_Template
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
        $__internal_50aac29533e650998af6bb23e6125607ddee359a4ff0fc3a3e157765be4eb49a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50aac29533e650998af6bb23e6125607ddee359a4ff0fc3a3e157765be4eb49a->enter($__internal_50aac29533e650998af6bb23e6125607ddee359a4ff0fc3a3e157765be4eb49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_3ae5235018f588c9be55505757dd424c8d9a8decf1cd6e54f2e3475509030aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae5235018f588c9be55505757dd424c8d9a8decf1cd6e54f2e3475509030aa2->enter($__internal_3ae5235018f588c9be55505757dd424c8d9a8decf1cd6e54f2e3475509030aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_50aac29533e650998af6bb23e6125607ddee359a4ff0fc3a3e157765be4eb49a->leave($__internal_50aac29533e650998af6bb23e6125607ddee359a4ff0fc3a3e157765be4eb49a_prof);

        
        $__internal_3ae5235018f588c9be55505757dd424c8d9a8decf1cd6e54f2e3475509030aa2->leave($__internal_3ae5235018f588c9be55505757dd424c8d9a8decf1cd6e54f2e3475509030aa2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
