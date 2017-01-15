<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3c049d40ef3f751cedbda0eeefd93f0c92bdfa8a0394f25cc8f0b3e691d26ea9 extends Twig_Template
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
        $__internal_fb609821800ebc53430a34684dbebbfd7957fa018844bd0432ac2ee2ffdf18be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb609821800ebc53430a34684dbebbfd7957fa018844bd0432ac2ee2ffdf18be->enter($__internal_fb609821800ebc53430a34684dbebbfd7957fa018844bd0432ac2ee2ffdf18be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7782a93d25a78bc6aea16fa95958901000a3dde9054b6e2211d99b6ebe176069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7782a93d25a78bc6aea16fa95958901000a3dde9054b6e2211d99b6ebe176069->enter($__internal_7782a93d25a78bc6aea16fa95958901000a3dde9054b6e2211d99b6ebe176069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb609821800ebc53430a34684dbebbfd7957fa018844bd0432ac2ee2ffdf18be->leave($__internal_fb609821800ebc53430a34684dbebbfd7957fa018844bd0432ac2ee2ffdf18be_prof);

        
        $__internal_7782a93d25a78bc6aea16fa95958901000a3dde9054b6e2211d99b6ebe176069->leave($__internal_7782a93d25a78bc6aea16fa95958901000a3dde9054b6e2211d99b6ebe176069_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc021b90167c3405ca1e990074ad8d29d321415c8b1356957018a37e52e81203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc021b90167c3405ca1e990074ad8d29d321415c8b1356957018a37e52e81203->enter($__internal_fc021b90167c3405ca1e990074ad8d29d321415c8b1356957018a37e52e81203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3fa30a39f421cfd0c200df1d6e0cc5ba1b30c4a664f6105b5e0130478779c6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa30a39f421cfd0c200df1d6e0cc5ba1b30c4a664f6105b5e0130478779c6cb->enter($__internal_3fa30a39f421cfd0c200df1d6e0cc5ba1b30c4a664f6105b5e0130478779c6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3fa30a39f421cfd0c200df1d6e0cc5ba1b30c4a664f6105b5e0130478779c6cb->leave($__internal_3fa30a39f421cfd0c200df1d6e0cc5ba1b30c4a664f6105b5e0130478779c6cb_prof);

        
        $__internal_fc021b90167c3405ca1e990074ad8d29d321415c8b1356957018a37e52e81203->leave($__internal_fc021b90167c3405ca1e990074ad8d29d321415c8b1356957018a37e52e81203_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_603c021cedd9691c8e452386172efd8115ff0907d57fff86486aeced7cfc964f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603c021cedd9691c8e452386172efd8115ff0907d57fff86486aeced7cfc964f->enter($__internal_603c021cedd9691c8e452386172efd8115ff0907d57fff86486aeced7cfc964f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fbc4cc9c4d1e59b60cf523d2dd2323e32e600852b4c83e427e3d7ff7003fbab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc4cc9c4d1e59b60cf523d2dd2323e32e600852b4c83e427e3d7ff7003fbab8->enter($__internal_fbc4cc9c4d1e59b60cf523d2dd2323e32e600852b4c83e427e3d7ff7003fbab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fbc4cc9c4d1e59b60cf523d2dd2323e32e600852b4c83e427e3d7ff7003fbab8->leave($__internal_fbc4cc9c4d1e59b60cf523d2dd2323e32e600852b4c83e427e3d7ff7003fbab8_prof);

        
        $__internal_603c021cedd9691c8e452386172efd8115ff0907d57fff86486aeced7cfc964f->leave($__internal_603c021cedd9691c8e452386172efd8115ff0907d57fff86486aeced7cfc964f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_660b189261f18585668f7964871b6a927a38524209ceba295fe67ab4f59e4e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660b189261f18585668f7964871b6a927a38524209ceba295fe67ab4f59e4e0d->enter($__internal_660b189261f18585668f7964871b6a927a38524209ceba295fe67ab4f59e4e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c8f50f65c1c7f3638b15490fbd13248c0dfb1535b5b7a38e61eb74a029e3edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c8f50f65c1c7f3638b15490fbd13248c0dfb1535b5b7a38e61eb74a029e3edb->enter($__internal_0c8f50f65c1c7f3638b15490fbd13248c0dfb1535b5b7a38e61eb74a029e3edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0c8f50f65c1c7f3638b15490fbd13248c0dfb1535b5b7a38e61eb74a029e3edb->leave($__internal_0c8f50f65c1c7f3638b15490fbd13248c0dfb1535b5b7a38e61eb74a029e3edb_prof);

        
        $__internal_660b189261f18585668f7964871b6a927a38524209ceba295fe67ab4f59e4e0d->leave($__internal_660b189261f18585668f7964871b6a927a38524209ceba295fe67ab4f59e4e0d_prof);

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
