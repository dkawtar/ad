<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_89b90f5130586789fb942482b7f0311cd09fa874cd4c3d7528d404b70e56f165 extends Twig_Template
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
        $__internal_ec1f3c3775e971218263baf8d79f230caed8702e0adcde3f9965cf1191fe405d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1f3c3775e971218263baf8d79f230caed8702e0adcde3f9965cf1191fe405d->enter($__internal_ec1f3c3775e971218263baf8d79f230caed8702e0adcde3f9965cf1191fe405d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_b42fb6c8a8b4abdfa8329e8b27b132616bb762415c00f5f062332ef36a91179a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42fb6c8a8b4abdfa8329e8b27b132616bb762415c00f5f062332ef36a91179a->enter($__internal_b42fb6c8a8b4abdfa8329e8b27b132616bb762415c00f5f062332ef36a91179a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ec1f3c3775e971218263baf8d79f230caed8702e0adcde3f9965cf1191fe405d->leave($__internal_ec1f3c3775e971218263baf8d79f230caed8702e0adcde3f9965cf1191fe405d_prof);

        
        $__internal_b42fb6c8a8b4abdfa8329e8b27b132616bb762415c00f5f062332ef36a91179a->leave($__internal_b42fb6c8a8b4abdfa8329e8b27b132616bb762415c00f5f062332ef36a91179a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
