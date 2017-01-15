<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_dc02989b02fbdbd61a95b036be6c00c4adab1b70df469b3e8d8ac5150724b9df extends Twig_Template
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
        $__internal_e28f4c7bd9b6f36c777c4bf17b27177785a3e68125d3fa0a65be2127a53a0547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28f4c7bd9b6f36c777c4bf17b27177785a3e68125d3fa0a65be2127a53a0547->enter($__internal_e28f4c7bd9b6f36c777c4bf17b27177785a3e68125d3fa0a65be2127a53a0547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_fe526bcfe6cf443dc35a791bc57b5a54d45c49a18808788a6f2aec144bc66c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe526bcfe6cf443dc35a791bc57b5a54d45c49a18808788a6f2aec144bc66c02->enter($__internal_fe526bcfe6cf443dc35a791bc57b5a54d45c49a18808788a6f2aec144bc66c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e28f4c7bd9b6f36c777c4bf17b27177785a3e68125d3fa0a65be2127a53a0547->leave($__internal_e28f4c7bd9b6f36c777c4bf17b27177785a3e68125d3fa0a65be2127a53a0547_prof);

        
        $__internal_fe526bcfe6cf443dc35a791bc57b5a54d45c49a18808788a6f2aec144bc66c02->leave($__internal_fe526bcfe6cf443dc35a791bc57b5a54d45c49a18808788a6f2aec144bc66c02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
