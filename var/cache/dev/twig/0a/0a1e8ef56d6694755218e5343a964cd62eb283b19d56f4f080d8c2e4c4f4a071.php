<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_be509aa34d72d139c39ad87f42ea6e0711f78905d9d35466913c1688068a47a6 extends Twig_Template
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
        $__internal_b82ac5a40ed6356b4c99e930e021ec06e4e3603a4af5a05605bf6ad7f16876ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82ac5a40ed6356b4c99e930e021ec06e4e3603a4af5a05605bf6ad7f16876ec->enter($__internal_b82ac5a40ed6356b4c99e930e021ec06e4e3603a4af5a05605bf6ad7f16876ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_6e8c9a4bdc1df99add76402e2baef7376d7abff401fc336b1a5643c305514db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8c9a4bdc1df99add76402e2baef7376d7abff401fc336b1a5643c305514db5->enter($__internal_6e8c9a4bdc1df99add76402e2baef7376d7abff401fc336b1a5643c305514db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b82ac5a40ed6356b4c99e930e021ec06e4e3603a4af5a05605bf6ad7f16876ec->leave($__internal_b82ac5a40ed6356b4c99e930e021ec06e4e3603a4af5a05605bf6ad7f16876ec_prof);

        
        $__internal_6e8c9a4bdc1df99add76402e2baef7376d7abff401fc336b1a5643c305514db5->leave($__internal_6e8c9a4bdc1df99add76402e2baef7376d7abff401fc336b1a5643c305514db5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
