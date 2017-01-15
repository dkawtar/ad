<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d8b30f01a03af6e6d2c9f8e059ca54bd6fa5ec1345aed326b4121eb6acf9c2fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6661275b012c806cfa8786220c811068fbeba608d3809923e1e2c17764c4de78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6661275b012c806cfa8786220c811068fbeba608d3809923e1e2c17764c4de78->enter($__internal_6661275b012c806cfa8786220c811068fbeba608d3809923e1e2c17764c4de78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_40bf72bc7e2398e48c75425d99b10af8d5779896eae51f8630235fa3344c7d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bf72bc7e2398e48c75425d99b10af8d5779896eae51f8630235fa3344c7d99->enter($__internal_40bf72bc7e2398e48c75425d99b10af8d5779896eae51f8630235fa3344c7d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6661275b012c806cfa8786220c811068fbeba608d3809923e1e2c17764c4de78->leave($__internal_6661275b012c806cfa8786220c811068fbeba608d3809923e1e2c17764c4de78_prof);

        
        $__internal_40bf72bc7e2398e48c75425d99b10af8d5779896eae51f8630235fa3344c7d99->leave($__internal_40bf72bc7e2398e48c75425d99b10af8d5779896eae51f8630235fa3344c7d99_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c510da3455d60d7f3165aed7566ff18b59ff7cf44fe3b1d9605102112cb443c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c510da3455d60d7f3165aed7566ff18b59ff7cf44fe3b1d9605102112cb443c7->enter($__internal_c510da3455d60d7f3165aed7566ff18b59ff7cf44fe3b1d9605102112cb443c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_935a86fc7a9b1a5bd7dcee1048f0366b56ad9ea46880a4d530715cb83ae87dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935a86fc7a9b1a5bd7dcee1048f0366b56ad9ea46880a4d530715cb83ae87dc6->enter($__internal_935a86fc7a9b1a5bd7dcee1048f0366b56ad9ea46880a4d530715cb83ae87dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_935a86fc7a9b1a5bd7dcee1048f0366b56ad9ea46880a4d530715cb83ae87dc6->leave($__internal_935a86fc7a9b1a5bd7dcee1048f0366b56ad9ea46880a4d530715cb83ae87dc6_prof);

        
        $__internal_c510da3455d60d7f3165aed7566ff18b59ff7cf44fe3b1d9605102112cb443c7->leave($__internal_c510da3455d60d7f3165aed7566ff18b59ff7cf44fe3b1d9605102112cb443c7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c9bf24473e68a87093d49be85c872c130f582d4a62d70550183a3ebc5e52f07b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9bf24473e68a87093d49be85c872c130f582d4a62d70550183a3ebc5e52f07b->enter($__internal_c9bf24473e68a87093d49be85c872c130f582d4a62d70550183a3ebc5e52f07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_24d7ce8a4b407b23de2eabcd5e3640a7011ab9c01ec52a73ec0cd27728470985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d7ce8a4b407b23de2eabcd5e3640a7011ab9c01ec52a73ec0cd27728470985->enter($__internal_24d7ce8a4b407b23de2eabcd5e3640a7011ab9c01ec52a73ec0cd27728470985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_24d7ce8a4b407b23de2eabcd5e3640a7011ab9c01ec52a73ec0cd27728470985->leave($__internal_24d7ce8a4b407b23de2eabcd5e3640a7011ab9c01ec52a73ec0cd27728470985_prof);

        
        $__internal_c9bf24473e68a87093d49be85c872c130f582d4a62d70550183a3ebc5e52f07b->leave($__internal_c9bf24473e68a87093d49be85c872c130f582d4a62d70550183a3ebc5e52f07b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c92392ba115bdcdc31f1720a649ea34ecf2ae1fad144a0ca2728098f4f4675a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c92392ba115bdcdc31f1720a649ea34ecf2ae1fad144a0ca2728098f4f4675a->enter($__internal_7c92392ba115bdcdc31f1720a649ea34ecf2ae1fad144a0ca2728098f4f4675a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0b21ed344b45f295bb38939c408788515f9c7b1357f936db6dcca6360ac31c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b21ed344b45f295bb38939c408788515f9c7b1357f936db6dcca6360ac31c93->enter($__internal_0b21ed344b45f295bb38939c408788515f9c7b1357f936db6dcca6360ac31c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0b21ed344b45f295bb38939c408788515f9c7b1357f936db6dcca6360ac31c93->leave($__internal_0b21ed344b45f295bb38939c408788515f9c7b1357f936db6dcca6360ac31c93_prof);

        
        $__internal_7c92392ba115bdcdc31f1720a649ea34ecf2ae1fad144a0ca2728098f4f4675a->leave($__internal_7c92392ba115bdcdc31f1720a649ea34ecf2ae1fad144a0ca2728098f4f4675a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
