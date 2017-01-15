<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_82594d97c7c35e521fe23a6c9f05915980cb5e8bb482bf27e6d8013b4da32dc1 extends Twig_Template
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
        $__internal_3f8ac07360f1b162574c1800854307b80ec08bd9eba248a6623164ceba59e0b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8ac07360f1b162574c1800854307b80ec08bd9eba248a6623164ceba59e0b2->enter($__internal_3f8ac07360f1b162574c1800854307b80ec08bd9eba248a6623164ceba59e0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_f611906510e161fc2ebf3d8b048f3a0749b10265f9741fc3a8eff4eb7cbcbe74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f611906510e161fc2ebf3d8b048f3a0749b10265f9741fc3a8eff4eb7cbcbe74->enter($__internal_f611906510e161fc2ebf3d8b048f3a0749b10265f9741fc3a8eff4eb7cbcbe74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_3f8ac07360f1b162574c1800854307b80ec08bd9eba248a6623164ceba59e0b2->leave($__internal_3f8ac07360f1b162574c1800854307b80ec08bd9eba248a6623164ceba59e0b2_prof);

        
        $__internal_f611906510e161fc2ebf3d8b048f3a0749b10265f9741fc3a8eff4eb7cbcbe74->leave($__internal_f611906510e161fc2ebf3d8b048f3a0749b10265f9741fc3a8eff4eb7cbcbe74_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
