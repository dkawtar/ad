<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_26f86f29a6cc5fa7c7d820b7fbe3767c5f3d0d240e856571026380c93aa3a238 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_a5643af0cd736acfeeffe77fb6f65a8b3214766301a2ff8996b7d00f5b92f1b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5643af0cd736acfeeffe77fb6f65a8b3214766301a2ff8996b7d00f5b92f1b9->enter($__internal_a5643af0cd736acfeeffe77fb6f65a8b3214766301a2ff8996b7d00f5b92f1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_8962866e6bbc5b8f48f4fe0ac14ac366f75a0372af64d70235d4f829cb0690cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8962866e6bbc5b8f48f4fe0ac14ac366f75a0372af64d70235d4f829cb0690cc->enter($__internal_8962866e6bbc5b8f48f4fe0ac14ac366f75a0372af64d70235d4f829cb0690cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5643af0cd736acfeeffe77fb6f65a8b3214766301a2ff8996b7d00f5b92f1b9->leave($__internal_a5643af0cd736acfeeffe77fb6f65a8b3214766301a2ff8996b7d00f5b92f1b9_prof);

        
        $__internal_8962866e6bbc5b8f48f4fe0ac14ac366f75a0372af64d70235d4f829cb0690cc->leave($__internal_8962866e6bbc5b8f48f4fe0ac14ac366f75a0372af64d70235d4f829cb0690cc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0aa46f66605b162c4481904996350268e6ae302f970c64c37102aa7438fd5edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa46f66605b162c4481904996350268e6ae302f970c64c37102aa7438fd5edb->enter($__internal_0aa46f66605b162c4481904996350268e6ae302f970c64c37102aa7438fd5edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_887bede7ab106bffb64a7a17461a198476aef0ccabe4224ddd3fe9367beaf4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887bede7ab106bffb64a7a17461a198476aef0ccabe4224ddd3fe9367beaf4da->enter($__internal_887bede7ab106bffb64a7a17461a198476aef0ccabe4224ddd3fe9367beaf4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_887bede7ab106bffb64a7a17461a198476aef0ccabe4224ddd3fe9367beaf4da->leave($__internal_887bede7ab106bffb64a7a17461a198476aef0ccabe4224ddd3fe9367beaf4da_prof);

        
        $__internal_0aa46f66605b162c4481904996350268e6ae302f970c64c37102aa7438fd5edb->leave($__internal_0aa46f66605b162c4481904996350268e6ae302f970c64c37102aa7438fd5edb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
