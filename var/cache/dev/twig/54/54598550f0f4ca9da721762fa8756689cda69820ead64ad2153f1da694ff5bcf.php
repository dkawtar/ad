<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_9ce2140ae307535857548dcaa605b8690c89c888a6dddc5779d12a0e989162cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_1579c57425882b8aea4820edc91a005e0b4359fe818bef5664092fb16774d04e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1579c57425882b8aea4820edc91a005e0b4359fe818bef5664092fb16774d04e->enter($__internal_1579c57425882b8aea4820edc91a005e0b4359fe818bef5664092fb16774d04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_3ed8b76e1fef504614a70390441442a81b6eef44deffbeaeeaf327d745827437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed8b76e1fef504614a70390441442a81b6eef44deffbeaeeaf327d745827437->enter($__internal_3ed8b76e1fef504614a70390441442a81b6eef44deffbeaeeaf327d745827437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1579c57425882b8aea4820edc91a005e0b4359fe818bef5664092fb16774d04e->leave($__internal_1579c57425882b8aea4820edc91a005e0b4359fe818bef5664092fb16774d04e_prof);

        
        $__internal_3ed8b76e1fef504614a70390441442a81b6eef44deffbeaeeaf327d745827437->leave($__internal_3ed8b76e1fef504614a70390441442a81b6eef44deffbeaeeaf327d745827437_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0576c70f2ea1746ca561684cb126c3cfe3bfe83adbcb999549f2e9130fd99ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0576c70f2ea1746ca561684cb126c3cfe3bfe83adbcb999549f2e9130fd99ed->enter($__internal_f0576c70f2ea1746ca561684cb126c3cfe3bfe83adbcb999549f2e9130fd99ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_129be40ee397e81c182ddf3cd5fbd6359ed7d4f6fff6ed460fa376758d74673f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129be40ee397e81c182ddf3cd5fbd6359ed7d4f6fff6ed460fa376758d74673f->enter($__internal_129be40ee397e81c182ddf3cd5fbd6359ed7d4f6fff6ed460fa376758d74673f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_129be40ee397e81c182ddf3cd5fbd6359ed7d4f6fff6ed460fa376758d74673f->leave($__internal_129be40ee397e81c182ddf3cd5fbd6359ed7d4f6fff6ed460fa376758d74673f_prof);

        
        $__internal_f0576c70f2ea1746ca561684cb126c3cfe3bfe83adbcb999549f2e9130fd99ed->leave($__internal_f0576c70f2ea1746ca561684cb126c3cfe3bfe83adbcb999549f2e9130fd99ed_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
