<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_b4ecc6bdf70c9682a78d1868eeeefe37b87319a87e3444d99484e5adb35fa7f5 extends Twig_Template
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
        $__internal_350cd89486b2f8800712f1c87eabb54c46bf8a32e44495319f0cd99b4abe9b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_350cd89486b2f8800712f1c87eabb54c46bf8a32e44495319f0cd99b4abe9b4a->enter($__internal_350cd89486b2f8800712f1c87eabb54c46bf8a32e44495319f0cd99b4abe9b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_5afa93417bb1fd8da3a68f12883e7f72a2d054601a2da0a0c04b98128a880bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5afa93417bb1fd8da3a68f12883e7f72a2d054601a2da0a0c04b98128a880bab->enter($__internal_5afa93417bb1fd8da3a68f12883e7f72a2d054601a2da0a0c04b98128a880bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_350cd89486b2f8800712f1c87eabb54c46bf8a32e44495319f0cd99b4abe9b4a->leave($__internal_350cd89486b2f8800712f1c87eabb54c46bf8a32e44495319f0cd99b4abe9b4a_prof);

        
        $__internal_5afa93417bb1fd8da3a68f12883e7f72a2d054601a2da0a0c04b98128a880bab->leave($__internal_5afa93417bb1fd8da3a68f12883e7f72a2d054601a2da0a0c04b98128a880bab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
