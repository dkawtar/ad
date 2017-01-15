<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_cae797f15aaf630b467cfe3cc0b63c3799120d405a231f088836a8da0dfa9755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_ffb76105509658b8b10b949964bcb69ce5c4635d97ca867a60876adfaa29d77b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb76105509658b8b10b949964bcb69ce5c4635d97ca867a60876adfaa29d77b->enter($__internal_ffb76105509658b8b10b949964bcb69ce5c4635d97ca867a60876adfaa29d77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_0e2497f9832acf9879309999575fe40d9ad8bbfd2d4d473af7b736829d7362d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2497f9832acf9879309999575fe40d9ad8bbfd2d4d473af7b736829d7362d9->enter($__internal_0e2497f9832acf9879309999575fe40d9ad8bbfd2d4d473af7b736829d7362d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffb76105509658b8b10b949964bcb69ce5c4635d97ca867a60876adfaa29d77b->leave($__internal_ffb76105509658b8b10b949964bcb69ce5c4635d97ca867a60876adfaa29d77b_prof);

        
        $__internal_0e2497f9832acf9879309999575fe40d9ad8bbfd2d4d473af7b736829d7362d9->leave($__internal_0e2497f9832acf9879309999575fe40d9ad8bbfd2d4d473af7b736829d7362d9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8376b45be04b2320507d120022ec9730bd089119f7c5175e5cdb68c4d258eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8376b45be04b2320507d120022ec9730bd089119f7c5175e5cdb68c4d258eac->enter($__internal_c8376b45be04b2320507d120022ec9730bd089119f7c5175e5cdb68c4d258eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4bf5b108d9e1a325e5c853eeaac5e7f4b1280641f3e671ca35a300e25b5619b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf5b108d9e1a325e5c853eeaac5e7f4b1280641f3e671ca35a300e25b5619b2->enter($__internal_4bf5b108d9e1a325e5c853eeaac5e7f4b1280641f3e671ca35a300e25b5619b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_4bf5b108d9e1a325e5c853eeaac5e7f4b1280641f3e671ca35a300e25b5619b2->leave($__internal_4bf5b108d9e1a325e5c853eeaac5e7f4b1280641f3e671ca35a300e25b5619b2_prof);

        
        $__internal_c8376b45be04b2320507d120022ec9730bd089119f7c5175e5cdb68c4d258eac->leave($__internal_c8376b45be04b2320507d120022ec9730bd089119f7c5175e5cdb68c4d258eac_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
