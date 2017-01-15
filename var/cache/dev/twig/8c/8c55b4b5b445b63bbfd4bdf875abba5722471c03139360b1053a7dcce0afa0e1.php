<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_490443b1c761949bd49113b5f5ad769e81b39695de29dbc44a059446140c0f2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e976610acb14c63e833276b5b011219bff60465110efcfbc68ab189a6fd184b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e976610acb14c63e833276b5b011219bff60465110efcfbc68ab189a6fd184b->enter($__internal_6e976610acb14c63e833276b5b011219bff60465110efcfbc68ab189a6fd184b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ca3e6662ee7c4f13f4a8092a3e091486489f87bd48eba4caac6a5a3be2f62d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3e6662ee7c4f13f4a8092a3e091486489f87bd48eba4caac6a5a3be2f62d5f->enter($__internal_ca3e6662ee7c4f13f4a8092a3e091486489f87bd48eba4caac6a5a3be2f62d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e976610acb14c63e833276b5b011219bff60465110efcfbc68ab189a6fd184b->leave($__internal_6e976610acb14c63e833276b5b011219bff60465110efcfbc68ab189a6fd184b_prof);

        
        $__internal_ca3e6662ee7c4f13f4a8092a3e091486489f87bd48eba4caac6a5a3be2f62d5f->leave($__internal_ca3e6662ee7c4f13f4a8092a3e091486489f87bd48eba4caac6a5a3be2f62d5f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e483408dfd846166735ec5e6112078e6d6afce0cfb0a0aa24e155f2343daf21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e483408dfd846166735ec5e6112078e6d6afce0cfb0a0aa24e155f2343daf21->enter($__internal_8e483408dfd846166735ec5e6112078e6d6afce0cfb0a0aa24e155f2343daf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7205f452709f2ffe6b3614d018d08066614aabf4ab8b23e9399892feb05e52ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7205f452709f2ffe6b3614d018d08066614aabf4ab8b23e9399892feb05e52ba->enter($__internal_7205f452709f2ffe6b3614d018d08066614aabf4ab8b23e9399892feb05e52ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_7205f452709f2ffe6b3614d018d08066614aabf4ab8b23e9399892feb05e52ba->leave($__internal_7205f452709f2ffe6b3614d018d08066614aabf4ab8b23e9399892feb05e52ba_prof);

        
        $__internal_8e483408dfd846166735ec5e6112078e6d6afce0cfb0a0aa24e155f2343daf21->leave($__internal_8e483408dfd846166735ec5e6112078e6d6afce0cfb0a0aa24e155f2343daf21_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
