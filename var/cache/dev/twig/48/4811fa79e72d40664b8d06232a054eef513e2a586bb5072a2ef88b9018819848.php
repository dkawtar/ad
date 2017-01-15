<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_53e0f5fc0c6009b30ba62750f4196a601cf785d37fe74b3701ae8638da6cadd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41e69a86fc843290ca7dda339b0f69412a34641baea5ba89d9c20a9553e0f530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e69a86fc843290ca7dda339b0f69412a34641baea5ba89d9c20a9553e0f530->enter($__internal_41e69a86fc843290ca7dda339b0f69412a34641baea5ba89d9c20a9553e0f530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_a1b7ec319221c42591e1d7ebe7b2290aafc6e1867a96fd6e45e44ed0ed3271ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b7ec319221c42591e1d7ebe7b2290aafc6e1867a96fd6e45e44ed0ed3271ad->enter($__internal_a1b7ec319221c42591e1d7ebe7b2290aafc6e1867a96fd6e45e44ed0ed3271ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41e69a86fc843290ca7dda339b0f69412a34641baea5ba89d9c20a9553e0f530->leave($__internal_41e69a86fc843290ca7dda339b0f69412a34641baea5ba89d9c20a9553e0f530_prof);

        
        $__internal_a1b7ec319221c42591e1d7ebe7b2290aafc6e1867a96fd6e45e44ed0ed3271ad->leave($__internal_a1b7ec319221c42591e1d7ebe7b2290aafc6e1867a96fd6e45e44ed0ed3271ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a2d1bf4be593d2d463a5a0d4a5e982905b25ea5fdea4101bbe0721e1b719f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2d1bf4be593d2d463a5a0d4a5e982905b25ea5fdea4101bbe0721e1b719f84->enter($__internal_5a2d1bf4be593d2d463a5a0d4a5e982905b25ea5fdea4101bbe0721e1b719f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eae99a3d21ac3e04e0bf0beca70e211a5a61372657289c24a85dbd9f105c1fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae99a3d21ac3e04e0bf0beca70e211a5a61372657289c24a85dbd9f105c1fce->enter($__internal_eae99a3d21ac3e04e0bf0beca70e211a5a61372657289c24a85dbd9f105c1fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_eae99a3d21ac3e04e0bf0beca70e211a5a61372657289c24a85dbd9f105c1fce->leave($__internal_eae99a3d21ac3e04e0bf0beca70e211a5a61372657289c24a85dbd9f105c1fce_prof);

        
        $__internal_5a2d1bf4be593d2d463a5a0d4a5e982905b25ea5fdea4101bbe0721e1b719f84->leave($__internal_5a2d1bf4be593d2d463a5a0d4a5e982905b25ea5fdea4101bbe0721e1b719f84_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a485ba9c4be424ca0bbadfa4b05ff4f2995e545b258bdcb4a0db6ebe3d4a59e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a485ba9c4be424ca0bbadfa4b05ff4f2995e545b258bdcb4a0db6ebe3d4a59e->enter($__internal_0a485ba9c4be424ca0bbadfa4b05ff4f2995e545b258bdcb4a0db6ebe3d4a59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e670bd6774e70c645730096cd90d90187bbd41edb57b8bc123fb0c80eb300ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e670bd6774e70c645730096cd90d90187bbd41edb57b8bc123fb0c80eb300ec->enter($__internal_8e670bd6774e70c645730096cd90d90187bbd41edb57b8bc123fb0c80eb300ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_8e670bd6774e70c645730096cd90d90187bbd41edb57b8bc123fb0c80eb300ec->leave($__internal_8e670bd6774e70c645730096cd90d90187bbd41edb57b8bc123fb0c80eb300ec_prof);

        
        $__internal_0a485ba9c4be424ca0bbadfa4b05ff4f2995e545b258bdcb4a0db6ebe3d4a59e->leave($__internal_0a485ba9c4be424ca0bbadfa4b05ff4f2995e545b258bdcb4a0db6ebe3d4a59e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
