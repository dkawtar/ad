<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d2b9bcec7cc7bcc1ada3ffb9cc2e35d453ccb5122fbe111d64e0203226c6b0ee extends Twig_Template
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
        $__internal_faa86f06e4a67bedd0926928228b7d4ba046f7a023693c1afa48cfeb89044c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa86f06e4a67bedd0926928228b7d4ba046f7a023693c1afa48cfeb89044c6c->enter($__internal_faa86f06e4a67bedd0926928228b7d4ba046f7a023693c1afa48cfeb89044c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f9f6554da2639b05f1c75ced64b12f4c94f68e1e7c9a035750ccc2ae61f988e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f6554da2639b05f1c75ced64b12f4c94f68e1e7c9a035750ccc2ae61f988e3->enter($__internal_f9f6554da2639b05f1c75ced64b12f4c94f68e1e7c9a035750ccc2ae61f988e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faa86f06e4a67bedd0926928228b7d4ba046f7a023693c1afa48cfeb89044c6c->leave($__internal_faa86f06e4a67bedd0926928228b7d4ba046f7a023693c1afa48cfeb89044c6c_prof);

        
        $__internal_f9f6554da2639b05f1c75ced64b12f4c94f68e1e7c9a035750ccc2ae61f988e3->leave($__internal_f9f6554da2639b05f1c75ced64b12f4c94f68e1e7c9a035750ccc2ae61f988e3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eadf480d353edaacdb13651769e6947f197aac66aa8c8a0b5a5f374ab99a9d19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eadf480d353edaacdb13651769e6947f197aac66aa8c8a0b5a5f374ab99a9d19->enter($__internal_eadf480d353edaacdb13651769e6947f197aac66aa8c8a0b5a5f374ab99a9d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_43143501ea0236079145cfb30a442cf052e7e79da43df4720b98bc36cfdcfd85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43143501ea0236079145cfb30a442cf052e7e79da43df4720b98bc36cfdcfd85->enter($__internal_43143501ea0236079145cfb30a442cf052e7e79da43df4720b98bc36cfdcfd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_43143501ea0236079145cfb30a442cf052e7e79da43df4720b98bc36cfdcfd85->leave($__internal_43143501ea0236079145cfb30a442cf052e7e79da43df4720b98bc36cfdcfd85_prof);

        
        $__internal_eadf480d353edaacdb13651769e6947f197aac66aa8c8a0b5a5f374ab99a9d19->leave($__internal_eadf480d353edaacdb13651769e6947f197aac66aa8c8a0b5a5f374ab99a9d19_prof);

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
