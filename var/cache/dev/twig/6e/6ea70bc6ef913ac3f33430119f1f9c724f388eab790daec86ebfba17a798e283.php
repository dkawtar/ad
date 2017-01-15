<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_322bee97f6aa4bc71e8ad6cec2fafb82aa9184cd239e61b09fbef632ee1aea34 extends Twig_Template
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
        $__internal_4cb832b6c8feeb8d030603344be9ebffbd71797d739947fe0487d98fae8a3972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb832b6c8feeb8d030603344be9ebffbd71797d739947fe0487d98fae8a3972->enter($__internal_4cb832b6c8feeb8d030603344be9ebffbd71797d739947fe0487d98fae8a3972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_be3df4f157c0fea668a2feb0a6775eb25bdb22c0a551a1f63714e12515dd20ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3df4f157c0fea668a2feb0a6775eb25bdb22c0a551a1f63714e12515dd20ba->enter($__internal_be3df4f157c0fea668a2feb0a6775eb25bdb22c0a551a1f63714e12515dd20ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_4cb832b6c8feeb8d030603344be9ebffbd71797d739947fe0487d98fae8a3972->leave($__internal_4cb832b6c8feeb8d030603344be9ebffbd71797d739947fe0487d98fae8a3972_prof);

        
        $__internal_be3df4f157c0fea668a2feb0a6775eb25bdb22c0a551a1f63714e12515dd20ba->leave($__internal_be3df4f157c0fea668a2feb0a6775eb25bdb22c0a551a1f63714e12515dd20ba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/Users/yann/Sites/B2B/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
