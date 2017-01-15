<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_9c517c51c8a10803e327aa121e32f5a9155a6f3277202ce007404e0c69a56dc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_bc19d76268bac4b135b014af31bee6699235d778033f4776d52486869b9953de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc19d76268bac4b135b014af31bee6699235d778033f4776d52486869b9953de->enter($__internal_bc19d76268bac4b135b014af31bee6699235d778033f4776d52486869b9953de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_3719c835c18ca60360bcc3f8952f6420d3c10f082ca28494b2997bb68ae4f54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3719c835c18ca60360bcc3f8952f6420d3c10f082ca28494b2997bb68ae4f54a->enter($__internal_3719c835c18ca60360bcc3f8952f6420d3c10f082ca28494b2997bb68ae4f54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc19d76268bac4b135b014af31bee6699235d778033f4776d52486869b9953de->leave($__internal_bc19d76268bac4b135b014af31bee6699235d778033f4776d52486869b9953de_prof);

        
        $__internal_3719c835c18ca60360bcc3f8952f6420d3c10f082ca28494b2997bb68ae4f54a->leave($__internal_3719c835c18ca60360bcc3f8952f6420d3c10f082ca28494b2997bb68ae4f54a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ef10832797f5d16dfbaf7e5a18c9dd139cba44a10dea9ce095bd76f32b6467c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef10832797f5d16dfbaf7e5a18c9dd139cba44a10dea9ce095bd76f32b6467c->enter($__internal_8ef10832797f5d16dfbaf7e5a18c9dd139cba44a10dea9ce095bd76f32b6467c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_163f07ef2445970fcc21dc242e724a7efba25536828901a98f254ed0fca4ef49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163f07ef2445970fcc21dc242e724a7efba25536828901a98f254ed0fca4ef49->enter($__internal_163f07ef2445970fcc21dc242e724a7efba25536828901a98f254ed0fca4ef49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_163f07ef2445970fcc21dc242e724a7efba25536828901a98f254ed0fca4ef49->leave($__internal_163f07ef2445970fcc21dc242e724a7efba25536828901a98f254ed0fca4ef49_prof);

        
        $__internal_8ef10832797f5d16dfbaf7e5a18c9dd139cba44a10dea9ce095bd76f32b6467c->leave($__internal_8ef10832797f5d16dfbaf7e5a18c9dd139cba44a10dea9ce095bd76f32b6467c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
