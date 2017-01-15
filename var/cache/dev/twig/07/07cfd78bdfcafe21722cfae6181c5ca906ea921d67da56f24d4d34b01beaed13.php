<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_6ec1efc3be851eb5984cb13efb6b0cdd2feddd6c02b04d088ace2ad85f213c75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a90205e9c9e1b3393e9a827bb96dea6f1d3d06c834b7369b8400d4496132c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a90205e9c9e1b3393e9a827bb96dea6f1d3d06c834b7369b8400d4496132c2b->enter($__internal_0a90205e9c9e1b3393e9a827bb96dea6f1d3d06c834b7369b8400d4496132c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_3f240afa3149d6e4a91f45f011e34fb7e63b92bf30ff047b588e80920c2c1647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f240afa3149d6e4a91f45f011e34fb7e63b92bf30ff047b588e80920c2c1647->enter($__internal_3f240afa3149d6e4a91f45f011e34fb7e63b92bf30ff047b588e80920c2c1647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a90205e9c9e1b3393e9a827bb96dea6f1d3d06c834b7369b8400d4496132c2b->leave($__internal_0a90205e9c9e1b3393e9a827bb96dea6f1d3d06c834b7369b8400d4496132c2b_prof);

        
        $__internal_3f240afa3149d6e4a91f45f011e34fb7e63b92bf30ff047b588e80920c2c1647->leave($__internal_3f240afa3149d6e4a91f45f011e34fb7e63b92bf30ff047b588e80920c2c1647_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a653a57574a9b7f56da18cbb9790ceaddc334cff84e43494cd5caf0cd53ab154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a653a57574a9b7f56da18cbb9790ceaddc334cff84e43494cd5caf0cd53ab154->enter($__internal_a653a57574a9b7f56da18cbb9790ceaddc334cff84e43494cd5caf0cd53ab154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8deea9623441e8d77de9a1031f6864682afdc306629092057bc5de39997f1aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8deea9623441e8d77de9a1031f6864682afdc306629092057bc5de39997f1aaa->enter($__internal_8deea9623441e8d77de9a1031f6864682afdc306629092057bc5de39997f1aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8deea9623441e8d77de9a1031f6864682afdc306629092057bc5de39997f1aaa->leave($__internal_8deea9623441e8d77de9a1031f6864682afdc306629092057bc5de39997f1aaa_prof);

        
        $__internal_a653a57574a9b7f56da18cbb9790ceaddc334cff84e43494cd5caf0cd53ab154->leave($__internal_a653a57574a9b7f56da18cbb9790ceaddc334cff84e43494cd5caf0cd53ab154_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c0b6f75bdf3dcb80aba063f229b57bed7771c04a47ab0137310b7b1ff43a04a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c0b6f75bdf3dcb80aba063f229b57bed7771c04a47ab0137310b7b1ff43a04a->enter($__internal_4c0b6f75bdf3dcb80aba063f229b57bed7771c04a47ab0137310b7b1ff43a04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_323502fb4b3853e3ed81d51df3fb6d5cf58b38e1e555d3262d7fe432c81fcf20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323502fb4b3853e3ed81d51df3fb6d5cf58b38e1e555d3262d7fe432c81fcf20->enter($__internal_323502fb4b3853e3ed81d51df3fb6d5cf58b38e1e555d3262d7fe432c81fcf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_323502fb4b3853e3ed81d51df3fb6d5cf58b38e1e555d3262d7fe432c81fcf20->leave($__internal_323502fb4b3853e3ed81d51df3fb6d5cf58b38e1e555d3262d7fe432c81fcf20_prof);

        
        $__internal_4c0b6f75bdf3dcb80aba063f229b57bed7771c04a47ab0137310b7b1ff43a04a->leave($__internal_4c0b6f75bdf3dcb80aba063f229b57bed7771c04a47ab0137310b7b1ff43a04a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
