<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_7a15d37f990221c60a82e2841c7f6891b3b6c70305b7b61ecf326d9fe25ee2d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_04bda454464fa6d5cac3b4bf80d58f6314aa45f5681c5803a28e6372dfbeccf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04bda454464fa6d5cac3b4bf80d58f6314aa45f5681c5803a28e6372dfbeccf9->enter($__internal_04bda454464fa6d5cac3b4bf80d58f6314aa45f5681c5803a28e6372dfbeccf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_bbe1fa2169e0af2579f713c9259a4b02a24680f60753c67c27bcc78a3dd38465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe1fa2169e0af2579f713c9259a4b02a24680f60753c67c27bcc78a3dd38465->enter($__internal_bbe1fa2169e0af2579f713c9259a4b02a24680f60753c67c27bcc78a3dd38465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04bda454464fa6d5cac3b4bf80d58f6314aa45f5681c5803a28e6372dfbeccf9->leave($__internal_04bda454464fa6d5cac3b4bf80d58f6314aa45f5681c5803a28e6372dfbeccf9_prof);

        
        $__internal_bbe1fa2169e0af2579f713c9259a4b02a24680f60753c67c27bcc78a3dd38465->leave($__internal_bbe1fa2169e0af2579f713c9259a4b02a24680f60753c67c27bcc78a3dd38465_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e67e12925d433c9e95ce6f48f9a6174392e6f4ed4e4cced166333bfa7dc2233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e67e12925d433c9e95ce6f48f9a6174392e6f4ed4e4cced166333bfa7dc2233->enter($__internal_2e67e12925d433c9e95ce6f48f9a6174392e6f4ed4e4cced166333bfa7dc2233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7029eba1e456a093ce80433a5e9822edc9707455a6291810c019b4839b2a0321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7029eba1e456a093ce80433a5e9822edc9707455a6291810c019b4839b2a0321->enter($__internal_7029eba1e456a093ce80433a5e9822edc9707455a6291810c019b4839b2a0321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_7029eba1e456a093ce80433a5e9822edc9707455a6291810c019b4839b2a0321->leave($__internal_7029eba1e456a093ce80433a5e9822edc9707455a6291810c019b4839b2a0321_prof);

        
        $__internal_2e67e12925d433c9e95ce6f48f9a6174392e6f4ed4e4cced166333bfa7dc2233->leave($__internal_2e67e12925d433c9e95ce6f48f9a6174392e6f4ed4e4cced166333bfa7dc2233_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
