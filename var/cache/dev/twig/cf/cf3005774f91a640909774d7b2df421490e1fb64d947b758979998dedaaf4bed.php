<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_32bea9ad3998c7aa45d2f7d9b749d34637d907657a40bbe8aeaa744b14ee1802 extends Twig_Template
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
        $__internal_e5fad5eae05fe2bfbfd66e6af947c4d613dd9b1e60e5958a2ca388778f656fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5fad5eae05fe2bfbfd66e6af947c4d613dd9b1e60e5958a2ca388778f656fa2->enter($__internal_e5fad5eae05fe2bfbfd66e6af947c4d613dd9b1e60e5958a2ca388778f656fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_922f20d2a175e6802c9241899a0ac278dbdce15ee9658a548245d7ae7d738f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922f20d2a175e6802c9241899a0ac278dbdce15ee9658a548245d7ae7d738f5f->enter($__internal_922f20d2a175e6802c9241899a0ac278dbdce15ee9658a548245d7ae7d738f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_e5fad5eae05fe2bfbfd66e6af947c4d613dd9b1e60e5958a2ca388778f656fa2->leave($__internal_e5fad5eae05fe2bfbfd66e6af947c4d613dd9b1e60e5958a2ca388778f656fa2_prof);

        
        $__internal_922f20d2a175e6802c9241899a0ac278dbdce15ee9658a548245d7ae7d738f5f->leave($__internal_922f20d2a175e6802c9241899a0ac278dbdce15ee9658a548245d7ae7d738f5f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
