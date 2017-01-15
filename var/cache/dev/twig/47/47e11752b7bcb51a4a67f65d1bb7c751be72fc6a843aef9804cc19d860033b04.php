<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_731bd7586fefe9c2a9260a6a5db8e53bb74050e4c86ca6edc484f5b2cd60bd0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_5faad81b1c7f40ba0abe1284fb66e595ef443d185ca085c0857e5324c1425778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5faad81b1c7f40ba0abe1284fb66e595ef443d185ca085c0857e5324c1425778->enter($__internal_5faad81b1c7f40ba0abe1284fb66e595ef443d185ca085c0857e5324c1425778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_080c454f1f0dfb3734e43c874af4cc06bf88d7030b3561d6f2ce292a09891a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080c454f1f0dfb3734e43c874af4cc06bf88d7030b3561d6f2ce292a09891a18->enter($__internal_080c454f1f0dfb3734e43c874af4cc06bf88d7030b3561d6f2ce292a09891a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5faad81b1c7f40ba0abe1284fb66e595ef443d185ca085c0857e5324c1425778->leave($__internal_5faad81b1c7f40ba0abe1284fb66e595ef443d185ca085c0857e5324c1425778_prof);

        
        $__internal_080c454f1f0dfb3734e43c874af4cc06bf88d7030b3561d6f2ce292a09891a18->leave($__internal_080c454f1f0dfb3734e43c874af4cc06bf88d7030b3561d6f2ce292a09891a18_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4f6508767f9498a93e3cda96e6d50740159c3a36ac0b670c8ce8dceaffbf6b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f6508767f9498a93e3cda96e6d50740159c3a36ac0b670c8ce8dceaffbf6b5->enter($__internal_a4f6508767f9498a93e3cda96e6d50740159c3a36ac0b670c8ce8dceaffbf6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1304588d3707d4cc1ac841c568b8c769b8411a91b987b506b13f46cbeee74f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1304588d3707d4cc1ac841c568b8c769b8411a91b987b506b13f46cbeee74f64->enter($__internal_1304588d3707d4cc1ac841c568b8c769b8411a91b987b506b13f46cbeee74f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1304588d3707d4cc1ac841c568b8c769b8411a91b987b506b13f46cbeee74f64->leave($__internal_1304588d3707d4cc1ac841c568b8c769b8411a91b987b506b13f46cbeee74f64_prof);

        
        $__internal_a4f6508767f9498a93e3cda96e6d50740159c3a36ac0b670c8ce8dceaffbf6b5->leave($__internal_a4f6508767f9498a93e3cda96e6d50740159c3a36ac0b670c8ce8dceaffbf6b5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
