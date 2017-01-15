<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_f37d4c810c740620af396eb28bd15e737628ba173db3ab8fffc12315b2d6f3fc extends Twig_Template
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
        $__internal_a5798b0f16d6bf0507afd32969d617063373c5a7db313953c8284822ca6bb052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5798b0f16d6bf0507afd32969d617063373c5a7db313953c8284822ca6bb052->enter($__internal_a5798b0f16d6bf0507afd32969d617063373c5a7db313953c8284822ca6bb052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_ecd1541bfbb4c290b04a70c81b8179e1e49238184be242271053d44a9da711eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd1541bfbb4c290b04a70c81b8179e1e49238184be242271053d44a9da711eb->enter($__internal_ecd1541bfbb4c290b04a70c81b8179e1e49238184be242271053d44a9da711eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a5798b0f16d6bf0507afd32969d617063373c5a7db313953c8284822ca6bb052->leave($__internal_a5798b0f16d6bf0507afd32969d617063373c5a7db313953c8284822ca6bb052_prof);

        
        $__internal_ecd1541bfbb4c290b04a70c81b8179e1e49238184be242271053d44a9da711eb->leave($__internal_ecd1541bfbb4c290b04a70c81b8179e1e49238184be242271053d44a9da711eb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
