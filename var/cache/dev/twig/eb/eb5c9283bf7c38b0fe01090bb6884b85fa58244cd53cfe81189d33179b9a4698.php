<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_e5d4eafa920e041607ad575ec95606a8597c68b3f534916f245b7f0266a5e7d3 extends Twig_Template
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
        $__internal_97d71dadbe4a6dcb668c3802d4390fd7cccfd87486266f9d2d648751aa479623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d71dadbe4a6dcb668c3802d4390fd7cccfd87486266f9d2d648751aa479623->enter($__internal_97d71dadbe4a6dcb668c3802d4390fd7cccfd87486266f9d2d648751aa479623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_a2e66b791e553ed961552f7536932a62b5efa2fbc17ab6658ec5168d7a5b9b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e66b791e553ed961552f7536932a62b5efa2fbc17ab6658ec5168d7a5b9b0a->enter($__internal_a2e66b791e553ed961552f7536932a62b5efa2fbc17ab6658ec5168d7a5b9b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_97d71dadbe4a6dcb668c3802d4390fd7cccfd87486266f9d2d648751aa479623->leave($__internal_97d71dadbe4a6dcb668c3802d4390fd7cccfd87486266f9d2d648751aa479623_prof);

        
        $__internal_a2e66b791e553ed961552f7536932a62b5efa2fbc17ab6658ec5168d7a5b9b0a->leave($__internal_a2e66b791e553ed961552f7536932a62b5efa2fbc17ab6658ec5168d7a5b9b0a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
