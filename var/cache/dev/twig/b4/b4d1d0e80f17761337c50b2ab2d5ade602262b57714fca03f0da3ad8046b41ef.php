<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_4eca122ddf2206fb84a8ddbf1bf50d97797acb89cf66e84d298b8b60d323370b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_064f61825ad3f6b75eb6095a26764ed43f4505de2c9f8ddf334c3de5bdd2e908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_064f61825ad3f6b75eb6095a26764ed43f4505de2c9f8ddf334c3de5bdd2e908->enter($__internal_064f61825ad3f6b75eb6095a26764ed43f4505de2c9f8ddf334c3de5bdd2e908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_2a9997cbe013d70883dfa0980b4d490c7bce3466e9058c6fee8034ec237256c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9997cbe013d70883dfa0980b4d490c7bce3466e9058c6fee8034ec237256c9->enter($__internal_2a9997cbe013d70883dfa0980b4d490c7bce3466e9058c6fee8034ec237256c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_064f61825ad3f6b75eb6095a26764ed43f4505de2c9f8ddf334c3de5bdd2e908->leave($__internal_064f61825ad3f6b75eb6095a26764ed43f4505de2c9f8ddf334c3de5bdd2e908_prof);

        
        $__internal_2a9997cbe013d70883dfa0980b4d490c7bce3466e9058c6fee8034ec237256c9->leave($__internal_2a9997cbe013d70883dfa0980b4d490c7bce3466e9058c6fee8034ec237256c9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7494a7b83f6422bd7c081a54f014941c6b624983bc1b3addbf728fc404d2155e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7494a7b83f6422bd7c081a54f014941c6b624983bc1b3addbf728fc404d2155e->enter($__internal_7494a7b83f6422bd7c081a54f014941c6b624983bc1b3addbf728fc404d2155e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_79693f45a0e0b045247e4c25224161d3064a768b05334062fcae24348f687bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79693f45a0e0b045247e4c25224161d3064a768b05334062fcae24348f687bc3->enter($__internal_79693f45a0e0b045247e4c25224161d3064a768b05334062fcae24348f687bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_79693f45a0e0b045247e4c25224161d3064a768b05334062fcae24348f687bc3->leave($__internal_79693f45a0e0b045247e4c25224161d3064a768b05334062fcae24348f687bc3_prof);

        
        $__internal_7494a7b83f6422bd7c081a54f014941c6b624983bc1b3addbf728fc404d2155e->leave($__internal_7494a7b83f6422bd7c081a54f014941c6b624983bc1b3addbf728fc404d2155e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d761df2dac0d425aff7de6e57ccb468e79193b67448bb0c8980933e144bf52ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d761df2dac0d425aff7de6e57ccb468e79193b67448bb0c8980933e144bf52ad->enter($__internal_d761df2dac0d425aff7de6e57ccb468e79193b67448bb0c8980933e144bf52ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_bf129e4920567e54b480f9af1043cc8e3a632664a9bbdd01d2cf3f26dce9d937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf129e4920567e54b480f9af1043cc8e3a632664a9bbdd01d2cf3f26dce9d937->enter($__internal_bf129e4920567e54b480f9af1043cc8e3a632664a9bbdd01d2cf3f26dce9d937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bf129e4920567e54b480f9af1043cc8e3a632664a9bbdd01d2cf3f26dce9d937->leave($__internal_bf129e4920567e54b480f9af1043cc8e3a632664a9bbdd01d2cf3f26dce9d937_prof);

        
        $__internal_d761df2dac0d425aff7de6e57ccb468e79193b67448bb0c8980933e144bf52ad->leave($__internal_d761df2dac0d425aff7de6e57ccb468e79193b67448bb0c8980933e144bf52ad_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cfdd6ffad987c3d9bf97ab9fa83459ac7d1ab3393e805fb9c15876ffb311a01c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfdd6ffad987c3d9bf97ab9fa83459ac7d1ab3393e805fb9c15876ffb311a01c->enter($__internal_cfdd6ffad987c3d9bf97ab9fa83459ac7d1ab3393e805fb9c15876ffb311a01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2e72007a5d1d134654d7455083c5662c9ffde342062c468f7c1f593d4c78a2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e72007a5d1d134654d7455083c5662c9ffde342062c468f7c1f593d4c78a2e0->enter($__internal_2e72007a5d1d134654d7455083c5662c9ffde342062c468f7c1f593d4c78a2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2e72007a5d1d134654d7455083c5662c9ffde342062c468f7c1f593d4c78a2e0->leave($__internal_2e72007a5d1d134654d7455083c5662c9ffde342062c468f7c1f593d4c78a2e0_prof);

        
        $__internal_cfdd6ffad987c3d9bf97ab9fa83459ac7d1ab3393e805fb9c15876ffb311a01c->leave($__internal_cfdd6ffad987c3d9bf97ab9fa83459ac7d1ab3393e805fb9c15876ffb311a01c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
