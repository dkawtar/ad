<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_2b66eda8ed20536f01f96a5fe3147fae265c0fd100bf747144227aefd1da64da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_9347938d8905f040921284803e581a7c02f73beda63a2ba48c37c59770e1fe63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9347938d8905f040921284803e581a7c02f73beda63a2ba48c37c59770e1fe63->enter($__internal_9347938d8905f040921284803e581a7c02f73beda63a2ba48c37c59770e1fe63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_7780ca2b86099d89248727489989293a120cebd6ae7d69e7464990908c871c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7780ca2b86099d89248727489989293a120cebd6ae7d69e7464990908c871c56->enter($__internal_7780ca2b86099d89248727489989293a120cebd6ae7d69e7464990908c871c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9347938d8905f040921284803e581a7c02f73beda63a2ba48c37c59770e1fe63->leave($__internal_9347938d8905f040921284803e581a7c02f73beda63a2ba48c37c59770e1fe63_prof);

        
        $__internal_7780ca2b86099d89248727489989293a120cebd6ae7d69e7464990908c871c56->leave($__internal_7780ca2b86099d89248727489989293a120cebd6ae7d69e7464990908c871c56_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_092ac271672d65979e3263233e3c0ddd97f2a8172f488f9859103e7ae2f64275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_092ac271672d65979e3263233e3c0ddd97f2a8172f488f9859103e7ae2f64275->enter($__internal_092ac271672d65979e3263233e3c0ddd97f2a8172f488f9859103e7ae2f64275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a267433eff6af80330a57b4cb2aaab4418229fe1ef1da1c1a95ded8c5ccfc862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a267433eff6af80330a57b4cb2aaab4418229fe1ef1da1c1a95ded8c5ccfc862->enter($__internal_a267433eff6af80330a57b4cb2aaab4418229fe1ef1da1c1a95ded8c5ccfc862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_a267433eff6af80330a57b4cb2aaab4418229fe1ef1da1c1a95ded8c5ccfc862->leave($__internal_a267433eff6af80330a57b4cb2aaab4418229fe1ef1da1c1a95ded8c5ccfc862_prof);

        
        $__internal_092ac271672d65979e3263233e3c0ddd97f2a8172f488f9859103e7ae2f64275->leave($__internal_092ac271672d65979e3263233e3c0ddd97f2a8172f488f9859103e7ae2f64275_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
