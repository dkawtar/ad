<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_7278f2ecb52971dc0857f7c13e009488142d1b3196d5114b50f86bf2a8945eca extends Twig_Template
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
        $__internal_cfc5b895f353bc79b1d8b8ade295a325c1e36113e34c763d7c1d538a435f5d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc5b895f353bc79b1d8b8ade295a325c1e36113e34c763d7c1d538a435f5d1f->enter($__internal_cfc5b895f353bc79b1d8b8ade295a325c1e36113e34c763d7c1d538a435f5d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_581b7d98b09004008a34b76aa85b03295ddc6dc4c372eda2f661995919a427a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581b7d98b09004008a34b76aa85b03295ddc6dc4c372eda2f661995919a427a3->enter($__internal_581b7d98b09004008a34b76aa85b03295ddc6dc4c372eda2f661995919a427a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cfc5b895f353bc79b1d8b8ade295a325c1e36113e34c763d7c1d538a435f5d1f->leave($__internal_cfc5b895f353bc79b1d8b8ade295a325c1e36113e34c763d7c1d538a435f5d1f_prof);

        
        $__internal_581b7d98b09004008a34b76aa85b03295ddc6dc4c372eda2f661995919a427a3->leave($__internal_581b7d98b09004008a34b76aa85b03295ddc6dc4c372eda2f661995919a427a3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
