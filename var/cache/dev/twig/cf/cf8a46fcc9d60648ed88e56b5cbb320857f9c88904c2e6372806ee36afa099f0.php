<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3c9d5b020aed7fc1d288267dce71f498c817beeb801a6ba0cbb019395ba02550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8df37821adaf54030ac6dbe5c43f87a7476a8a543b9c2dc78e538ccf958df029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df37821adaf54030ac6dbe5c43f87a7476a8a543b9c2dc78e538ccf958df029->enter($__internal_8df37821adaf54030ac6dbe5c43f87a7476a8a543b9c2dc78e538ccf958df029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9506fe5bf7ce19d26c16790c2974d5307484c88959823aba1d6e0729a5b8c07b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9506fe5bf7ce19d26c16790c2974d5307484c88959823aba1d6e0729a5b8c07b->enter($__internal_9506fe5bf7ce19d26c16790c2974d5307484c88959823aba1d6e0729a5b8c07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8df37821adaf54030ac6dbe5c43f87a7476a8a543b9c2dc78e538ccf958df029->leave($__internal_8df37821adaf54030ac6dbe5c43f87a7476a8a543b9c2dc78e538ccf958df029_prof);

        
        $__internal_9506fe5bf7ce19d26c16790c2974d5307484c88959823aba1d6e0729a5b8c07b->leave($__internal_9506fe5bf7ce19d26c16790c2974d5307484c88959823aba1d6e0729a5b8c07b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_13d64b34a3321e73ec15a5eb659b5e39ab8f6629f681b7046653882661137d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13d64b34a3321e73ec15a5eb659b5e39ab8f6629f681b7046653882661137d13->enter($__internal_13d64b34a3321e73ec15a5eb659b5e39ab8f6629f681b7046653882661137d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_adebd896e9c1288b85be0f05904e45f20cea0602a7814b6c09f0832081db3da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adebd896e9c1288b85be0f05904e45f20cea0602a7814b6c09f0832081db3da4->enter($__internal_adebd896e9c1288b85be0f05904e45f20cea0602a7814b6c09f0832081db3da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_adebd896e9c1288b85be0f05904e45f20cea0602a7814b6c09f0832081db3da4->leave($__internal_adebd896e9c1288b85be0f05904e45f20cea0602a7814b6c09f0832081db3da4_prof);

        
        $__internal_13d64b34a3321e73ec15a5eb659b5e39ab8f6629f681b7046653882661137d13->leave($__internal_13d64b34a3321e73ec15a5eb659b5e39ab8f6629f681b7046653882661137d13_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc529d278c4451531f9233f2f144178127df9bf3a8ae1207e7d61e373b8dc9cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc529d278c4451531f9233f2f144178127df9bf3a8ae1207e7d61e373b8dc9cd->enter($__internal_fc529d278c4451531f9233f2f144178127df9bf3a8ae1207e7d61e373b8dc9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0a5e28218a279db2f52977d1cf45d3314083427f143b0b166f5351632df238b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a5e28218a279db2f52977d1cf45d3314083427f143b0b166f5351632df238b->enter($__internal_a0a5e28218a279db2f52977d1cf45d3314083427f143b0b166f5351632df238b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a0a5e28218a279db2f52977d1cf45d3314083427f143b0b166f5351632df238b->leave($__internal_a0a5e28218a279db2f52977d1cf45d3314083427f143b0b166f5351632df238b_prof);

        
        $__internal_fc529d278c4451531f9233f2f144178127df9bf3a8ae1207e7d61e373b8dc9cd->leave($__internal_fc529d278c4451531f9233f2f144178127df9bf3a8ae1207e7d61e373b8dc9cd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_856d922d0d4e99e1b3c4d232de01a0eb060d18ddca0fd642500cec79d5aa8927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_856d922d0d4e99e1b3c4d232de01a0eb060d18ddca0fd642500cec79d5aa8927->enter($__internal_856d922d0d4e99e1b3c4d232de01a0eb060d18ddca0fd642500cec79d5aa8927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73a9620bb004e9eb3d380beab49260f82d71af99b6b24c3283015ec321c1ac3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a9620bb004e9eb3d380beab49260f82d71af99b6b24c3283015ec321c1ac3d->enter($__internal_73a9620bb004e9eb3d380beab49260f82d71af99b6b24c3283015ec321c1ac3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_73a9620bb004e9eb3d380beab49260f82d71af99b6b24c3283015ec321c1ac3d->leave($__internal_73a9620bb004e9eb3d380beab49260f82d71af99b6b24c3283015ec321c1ac3d_prof);

        
        $__internal_856d922d0d4e99e1b3c4d232de01a0eb060d18ddca0fd642500cec79d5aa8927->leave($__internal_856d922d0d4e99e1b3c4d232de01a0eb060d18ddca0fd642500cec79d5aa8927_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
