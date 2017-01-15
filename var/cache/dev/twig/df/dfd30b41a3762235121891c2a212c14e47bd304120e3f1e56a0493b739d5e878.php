<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_7deca79c8d6987dad5d72636548cdfadcb2ef96718d3fc1486d36c217d7e9362 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d88e9b7983029c3107d8c890d7b9b07bcca045df34931df18021936805bb454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d88e9b7983029c3107d8c890d7b9b07bcca045df34931df18021936805bb454->enter($__internal_1d88e9b7983029c3107d8c890d7b9b07bcca045df34931df18021936805bb454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_bcfce38dbd98633789bc62786862934d8f4e5dbfb7417ce326fc84347f9e49a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcfce38dbd98633789bc62786862934d8f4e5dbfb7417ce326fc84347f9e49a8->enter($__internal_bcfce38dbd98633789bc62786862934d8f4e5dbfb7417ce326fc84347f9e49a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d88e9b7983029c3107d8c890d7b9b07bcca045df34931df18021936805bb454->leave($__internal_1d88e9b7983029c3107d8c890d7b9b07bcca045df34931df18021936805bb454_prof);

        
        $__internal_bcfce38dbd98633789bc62786862934d8f4e5dbfb7417ce326fc84347f9e49a8->leave($__internal_bcfce38dbd98633789bc62786862934d8f4e5dbfb7417ce326fc84347f9e49a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_155ba19003bb272f5a9606c1556c5d74d3257b185fa6ac3ba2fc42aab5c1d9e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155ba19003bb272f5a9606c1556c5d74d3257b185fa6ac3ba2fc42aab5c1d9e2->enter($__internal_155ba19003bb272f5a9606c1556c5d74d3257b185fa6ac3ba2fc42aab5c1d9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3184b8c12b559f34956167f8466115eb855c1b795408448f68ca513b2715891d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3184b8c12b559f34956167f8466115eb855c1b795408448f68ca513b2715891d->enter($__internal_3184b8c12b559f34956167f8466115eb855c1b795408448f68ca513b2715891d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_3184b8c12b559f34956167f8466115eb855c1b795408448f68ca513b2715891d->leave($__internal_3184b8c12b559f34956167f8466115eb855c1b795408448f68ca513b2715891d_prof);

        
        $__internal_155ba19003bb272f5a9606c1556c5d74d3257b185fa6ac3ba2fc42aab5c1d9e2->leave($__internal_155ba19003bb272f5a9606c1556c5d74d3257b185fa6ac3ba2fc42aab5c1d9e2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
