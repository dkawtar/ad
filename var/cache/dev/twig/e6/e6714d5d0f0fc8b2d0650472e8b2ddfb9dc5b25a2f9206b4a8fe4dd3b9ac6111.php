<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9b6f10931e2645bcddbbef18208012c5b617a37784ae6cdb4370e9d3626571f0 extends Twig_Template
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
        $__internal_b596d118ee754b07eef81404ec0eb4f6f928c21c927835d077913b9ceb92c6ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b596d118ee754b07eef81404ec0eb4f6f928c21c927835d077913b9ceb92c6ba->enter($__internal_b596d118ee754b07eef81404ec0eb4f6f928c21c927835d077913b9ceb92c6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_10801e4742d1e26a3b0f91566e7da663d80635eb0dc1da6d37d1f9f929386b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10801e4742d1e26a3b0f91566e7da663d80635eb0dc1da6d37d1f9f929386b55->enter($__internal_10801e4742d1e26a3b0f91566e7da663d80635eb0dc1da6d37d1f9f929386b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b596d118ee754b07eef81404ec0eb4f6f928c21c927835d077913b9ceb92c6ba->leave($__internal_b596d118ee754b07eef81404ec0eb4f6f928c21c927835d077913b9ceb92c6ba_prof);

        
        $__internal_10801e4742d1e26a3b0f91566e7da663d80635eb0dc1da6d37d1f9f929386b55->leave($__internal_10801e4742d1e26a3b0f91566e7da663d80635eb0dc1da6d37d1f9f929386b55_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_30d0111f020084e2ab7dbbe1e721926fa33719b8b93eacf8ae8a1753d04c9748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d0111f020084e2ab7dbbe1e721926fa33719b8b93eacf8ae8a1753d04c9748->enter($__internal_30d0111f020084e2ab7dbbe1e721926fa33719b8b93eacf8ae8a1753d04c9748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3b1f957908582ebcb2046e30f142f64d9dc04942898547f7ea86e20669291e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1f957908582ebcb2046e30f142f64d9dc04942898547f7ea86e20669291e75->enter($__internal_3b1f957908582ebcb2046e30f142f64d9dc04942898547f7ea86e20669291e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b1f957908582ebcb2046e30f142f64d9dc04942898547f7ea86e20669291e75->leave($__internal_3b1f957908582ebcb2046e30f142f64d9dc04942898547f7ea86e20669291e75_prof);

        
        $__internal_30d0111f020084e2ab7dbbe1e721926fa33719b8b93eacf8ae8a1753d04c9748->leave($__internal_30d0111f020084e2ab7dbbe1e721926fa33719b8b93eacf8ae8a1753d04c9748_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_009c22009053fd37df988af7b9b7daf36e2cebb6e33f9e5536ac8b098753a9a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_009c22009053fd37df988af7b9b7daf36e2cebb6e33f9e5536ac8b098753a9a2->enter($__internal_009c22009053fd37df988af7b9b7daf36e2cebb6e33f9e5536ac8b098753a9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_58f9ad6bdf51d2f9994abb8815574c8555a175bbfdb22dcea915ca921b289d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f9ad6bdf51d2f9994abb8815574c8555a175bbfdb22dcea915ca921b289d10->enter($__internal_58f9ad6bdf51d2f9994abb8815574c8555a175bbfdb22dcea915ca921b289d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_58f9ad6bdf51d2f9994abb8815574c8555a175bbfdb22dcea915ca921b289d10->leave($__internal_58f9ad6bdf51d2f9994abb8815574c8555a175bbfdb22dcea915ca921b289d10_prof);

        
        $__internal_009c22009053fd37df988af7b9b7daf36e2cebb6e33f9e5536ac8b098753a9a2->leave($__internal_009c22009053fd37df988af7b9b7daf36e2cebb6e33f9e5536ac8b098753a9a2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b7d4d484e355ada3dff79b4a964a35af0c3a15d9393b42543f039113bf35ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b7d4d484e355ada3dff79b4a964a35af0c3a15d9393b42543f039113bf35ed4->enter($__internal_7b7d4d484e355ada3dff79b4a964a35af0c3a15d9393b42543f039113bf35ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_09890f7256781bf27de9d4b6e15ff44cc2b078c31af1fabd7bbea9cd1d6aa92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09890f7256781bf27de9d4b6e15ff44cc2b078c31af1fabd7bbea9cd1d6aa92a->enter($__internal_09890f7256781bf27de9d4b6e15ff44cc2b078c31af1fabd7bbea9cd1d6aa92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_09890f7256781bf27de9d4b6e15ff44cc2b078c31af1fabd7bbea9cd1d6aa92a->leave($__internal_09890f7256781bf27de9d4b6e15ff44cc2b078c31af1fabd7bbea9cd1d6aa92a_prof);

        
        $__internal_7b7d4d484e355ada3dff79b4a964a35af0c3a15d9393b42543f039113bf35ed4->leave($__internal_7b7d4d484e355ada3dff79b4a964a35af0c3a15d9393b42543f039113bf35ed4_prof);

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
