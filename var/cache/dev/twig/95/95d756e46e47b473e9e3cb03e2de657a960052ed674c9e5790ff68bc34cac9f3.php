<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_ee0954ca05065292a39eec18903a111a4cff68f18620348b62e40146115efc9b extends Twig_Template
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
        $__internal_717e1a4ab40824982ba07f1c684ecc0d3992ba9c78f9342be254e1da4c134ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_717e1a4ab40824982ba07f1c684ecc0d3992ba9c78f9342be254e1da4c134ba7->enter($__internal_717e1a4ab40824982ba07f1c684ecc0d3992ba9c78f9342be254e1da4c134ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_ebc0ae76a294170ae6f0efafac7a4c138f6fb3e864c82711bab5470ce63b7be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc0ae76a294170ae6f0efafac7a4c138f6fb3e864c82711bab5470ce63b7be9->enter($__internal_ebc0ae76a294170ae6f0efafac7a4c138f6fb3e864c82711bab5470ce63b7be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_717e1a4ab40824982ba07f1c684ecc0d3992ba9c78f9342be254e1da4c134ba7->leave($__internal_717e1a4ab40824982ba07f1c684ecc0d3992ba9c78f9342be254e1da4c134ba7_prof);

        
        $__internal_ebc0ae76a294170ae6f0efafac7a4c138f6fb3e864c82711bab5470ce63b7be9->leave($__internal_ebc0ae76a294170ae6f0efafac7a4c138f6fb3e864c82711bab5470ce63b7be9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f448690ea06cf1eabb555e5ec9dbd895e5ad7af1bd1f0ff6504849f6dc62f1b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f448690ea06cf1eabb555e5ec9dbd895e5ad7af1bd1f0ff6504849f6dc62f1b7->enter($__internal_f448690ea06cf1eabb555e5ec9dbd895e5ad7af1bd1f0ff6504849f6dc62f1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_f43b358452cd9ad4921a36b00317a4c8c9ae4a225f32f63a578edec820074e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43b358452cd9ad4921a36b00317a4c8c9ae4a225f32f63a578edec820074e47->enter($__internal_f43b358452cd9ad4921a36b00317a4c8c9ae4a225f32f63a578edec820074e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_f43b358452cd9ad4921a36b00317a4c8c9ae4a225f32f63a578edec820074e47->leave($__internal_f43b358452cd9ad4921a36b00317a4c8c9ae4a225f32f63a578edec820074e47_prof);

        
        $__internal_f448690ea06cf1eabb555e5ec9dbd895e5ad7af1bd1f0ff6504849f6dc62f1b7->leave($__internal_f448690ea06cf1eabb555e5ec9dbd895e5ad7af1bd1f0ff6504849f6dc62f1b7_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0a1aed98244e36cce3ad9fea434d96271333f167e4eb6f962c08663a14aad33c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a1aed98244e36cce3ad9fea434d96271333f167e4eb6f962c08663a14aad33c->enter($__internal_0a1aed98244e36cce3ad9fea434d96271333f167e4eb6f962c08663a14aad33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b206f594e6fe1589a4dcc338004ec1220db23f23562b5ce030b36d74bedab00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b206f594e6fe1589a4dcc338004ec1220db23f23562b5ce030b36d74bedab00e->enter($__internal_b206f594e6fe1589a4dcc338004ec1220db23f23562b5ce030b36d74bedab00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b206f594e6fe1589a4dcc338004ec1220db23f23562b5ce030b36d74bedab00e->leave($__internal_b206f594e6fe1589a4dcc338004ec1220db23f23562b5ce030b36d74bedab00e_prof);

        
        $__internal_0a1aed98244e36cce3ad9fea434d96271333f167e4eb6f962c08663a14aad33c->leave($__internal_0a1aed98244e36cce3ad9fea434d96271333f167e4eb6f962c08663a14aad33c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_375b0bda706931dcc9dc4b3d6de46cb181eaa8c4748b51e39ede13970fe629ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_375b0bda706931dcc9dc4b3d6de46cb181eaa8c4748b51e39ede13970fe629ed->enter($__internal_375b0bda706931dcc9dc4b3d6de46cb181eaa8c4748b51e39ede13970fe629ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_eef25b7fbe45dd59968263d135f34555364f172947a0ba3998eef18b35d2f549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef25b7fbe45dd59968263d135f34555364f172947a0ba3998eef18b35d2f549->enter($__internal_eef25b7fbe45dd59968263d135f34555364f172947a0ba3998eef18b35d2f549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_eef25b7fbe45dd59968263d135f34555364f172947a0ba3998eef18b35d2f549->leave($__internal_eef25b7fbe45dd59968263d135f34555364f172947a0ba3998eef18b35d2f549_prof);

        
        $__internal_375b0bda706931dcc9dc4b3d6de46cb181eaa8c4748b51e39ede13970fe629ed->leave($__internal_375b0bda706931dcc9dc4b3d6de46cb181eaa8c4748b51e39ede13970fe629ed_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
