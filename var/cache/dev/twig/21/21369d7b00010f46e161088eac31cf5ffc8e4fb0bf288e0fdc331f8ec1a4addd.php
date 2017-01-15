<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c53e4547a29a5f059433e158045cf19a9932624b81ddb547e0bb97648ddaa7b9 extends Twig_Template
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
        $__internal_aaa68c06660ed1bdb56949b982cb7d1cb65301fdabe41fc858871cb725e0dfb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa68c06660ed1bdb56949b982cb7d1cb65301fdabe41fc858871cb725e0dfb0->enter($__internal_aaa68c06660ed1bdb56949b982cb7d1cb65301fdabe41fc858871cb725e0dfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_0a25fadf8cfa9ebdf7baa1d7b2c6988a13c525064c96fff40a581a3ab2ce0b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a25fadf8cfa9ebdf7baa1d7b2c6988a13c525064c96fff40a581a3ab2ce0b76->enter($__internal_0a25fadf8cfa9ebdf7baa1d7b2c6988a13c525064c96fff40a581a3ab2ce0b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_aaa68c06660ed1bdb56949b982cb7d1cb65301fdabe41fc858871cb725e0dfb0->leave($__internal_aaa68c06660ed1bdb56949b982cb7d1cb65301fdabe41fc858871cb725e0dfb0_prof);

        
        $__internal_0a25fadf8cfa9ebdf7baa1d7b2c6988a13c525064c96fff40a581a3ab2ce0b76->leave($__internal_0a25fadf8cfa9ebdf7baa1d7b2c6988a13c525064c96fff40a581a3ab2ce0b76_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
