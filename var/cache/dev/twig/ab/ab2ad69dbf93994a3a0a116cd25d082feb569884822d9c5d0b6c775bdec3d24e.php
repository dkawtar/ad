<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9ec783e8be965252b569ee1f3e1670529eb03ccb06fd37dfb95d36a5ebeb1ef2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2e1dd30de089e318910ff7c597bc96b67bf6469761f1b43f2e7a2dc7aeeb7f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1dd30de089e318910ff7c597bc96b67bf6469761f1b43f2e7a2dc7aeeb7f13->enter($__internal_2e1dd30de089e318910ff7c597bc96b67bf6469761f1b43f2e7a2dc7aeeb7f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ca70a94050286bc0ceafde9f48a33517ac120cd73343de7df3feba77ae6f8093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca70a94050286bc0ceafde9f48a33517ac120cd73343de7df3feba77ae6f8093->enter($__internal_ca70a94050286bc0ceafde9f48a33517ac120cd73343de7df3feba77ae6f8093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e1dd30de089e318910ff7c597bc96b67bf6469761f1b43f2e7a2dc7aeeb7f13->leave($__internal_2e1dd30de089e318910ff7c597bc96b67bf6469761f1b43f2e7a2dc7aeeb7f13_prof);

        
        $__internal_ca70a94050286bc0ceafde9f48a33517ac120cd73343de7df3feba77ae6f8093->leave($__internal_ca70a94050286bc0ceafde9f48a33517ac120cd73343de7df3feba77ae6f8093_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_89ac9060749f81eeeb9887a9e76392df93b2e5dabe6af501e610634de71f4946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ac9060749f81eeeb9887a9e76392df93b2e5dabe6af501e610634de71f4946->enter($__internal_89ac9060749f81eeeb9887a9e76392df93b2e5dabe6af501e610634de71f4946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6c7797512d5225f4730adaaabed49adecad346c3b2b7be2d514331d05f5d3ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7797512d5225f4730adaaabed49adecad346c3b2b7be2d514331d05f5d3ff1->enter($__internal_6c7797512d5225f4730adaaabed49adecad346c3b2b7be2d514331d05f5d3ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6c7797512d5225f4730adaaabed49adecad346c3b2b7be2d514331d05f5d3ff1->leave($__internal_6c7797512d5225f4730adaaabed49adecad346c3b2b7be2d514331d05f5d3ff1_prof);

        
        $__internal_89ac9060749f81eeeb9887a9e76392df93b2e5dabe6af501e610634de71f4946->leave($__internal_89ac9060749f81eeeb9887a9e76392df93b2e5dabe6af501e610634de71f4946_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a3631ae6886c3ad9fbf10de606d3a7d0d84844e8f6d9491bc400a2604ce9227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3631ae6886c3ad9fbf10de606d3a7d0d84844e8f6d9491bc400a2604ce9227->enter($__internal_4a3631ae6886c3ad9fbf10de606d3a7d0d84844e8f6d9491bc400a2604ce9227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_25ffaeca1b8a68d9fccca2d0e6e3683c80c717a58b78f86bd12edaa41f493b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ffaeca1b8a68d9fccca2d0e6e3683c80c717a58b78f86bd12edaa41f493b56->enter($__internal_25ffaeca1b8a68d9fccca2d0e6e3683c80c717a58b78f86bd12edaa41f493b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_25ffaeca1b8a68d9fccca2d0e6e3683c80c717a58b78f86bd12edaa41f493b56->leave($__internal_25ffaeca1b8a68d9fccca2d0e6e3683c80c717a58b78f86bd12edaa41f493b56_prof);

        
        $__internal_4a3631ae6886c3ad9fbf10de606d3a7d0d84844e8f6d9491bc400a2604ce9227->leave($__internal_4a3631ae6886c3ad9fbf10de606d3a7d0d84844e8f6d9491bc400a2604ce9227_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c72d965bfd393a887a025505c1131a1642f4e7c96c0d02681ca821d99889f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c72d965bfd393a887a025505c1131a1642f4e7c96c0d02681ca821d99889f3d->enter($__internal_4c72d965bfd393a887a025505c1131a1642f4e7c96c0d02681ca821d99889f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4a71786497936199cac28c9533737595c53b7e479a8392516aba84eee1b619be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a71786497936199cac28c9533737595c53b7e479a8392516aba84eee1b619be->enter($__internal_4a71786497936199cac28c9533737595c53b7e479a8392516aba84eee1b619be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4a71786497936199cac28c9533737595c53b7e479a8392516aba84eee1b619be->leave($__internal_4a71786497936199cac28c9533737595c53b7e479a8392516aba84eee1b619be_prof);

        
        $__internal_4c72d965bfd393a887a025505c1131a1642f4e7c96c0d02681ca821d99889f3d->leave($__internal_4c72d965bfd393a887a025505c1131a1642f4e7c96c0d02681ca821d99889f3d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
