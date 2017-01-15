<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_448f1d3c802dc4a5f8c6772a9ebb815867f31598f22b7916dd6a8b4336c642d1 extends Twig_Template
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
        $__internal_65a7e3d06e0e84b4bb24f1effb45296fe42a275ff1dfe35dac52a70d1b96e1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a7e3d06e0e84b4bb24f1effb45296fe42a275ff1dfe35dac52a70d1b96e1c9->enter($__internal_65a7e3d06e0e84b4bb24f1effb45296fe42a275ff1dfe35dac52a70d1b96e1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_8e20c2ac40e58c9e6980c6e58f49a40a86fea67771e161097e159ca797d04863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e20c2ac40e58c9e6980c6e58f49a40a86fea67771e161097e159ca797d04863->enter($__internal_8e20c2ac40e58c9e6980c6e58f49a40a86fea67771e161097e159ca797d04863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_65a7e3d06e0e84b4bb24f1effb45296fe42a275ff1dfe35dac52a70d1b96e1c9->leave($__internal_65a7e3d06e0e84b4bb24f1effb45296fe42a275ff1dfe35dac52a70d1b96e1c9_prof);

        
        $__internal_8e20c2ac40e58c9e6980c6e58f49a40a86fea67771e161097e159ca797d04863->leave($__internal_8e20c2ac40e58c9e6980c6e58f49a40a86fea67771e161097e159ca797d04863_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
