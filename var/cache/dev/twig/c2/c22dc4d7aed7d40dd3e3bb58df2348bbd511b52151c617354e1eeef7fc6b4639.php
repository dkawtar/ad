<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_e30ac74557ce6e7a779649c10f651a20a00da8f579dd23a5471a4db0a7afafa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_37a64dcf04031211e1aa961dc09bdd51507f8c30ca22966dc4be5bf6f9fa8baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a64dcf04031211e1aa961dc09bdd51507f8c30ca22966dc4be5bf6f9fa8baa->enter($__internal_37a64dcf04031211e1aa961dc09bdd51507f8c30ca22966dc4be5bf6f9fa8baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_4559c9f561e37332ef2fc6ff10e17398b3cfe7f7de1c625db083b027eff216af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4559c9f561e37332ef2fc6ff10e17398b3cfe7f7de1c625db083b027eff216af->enter($__internal_4559c9f561e37332ef2fc6ff10e17398b3cfe7f7de1c625db083b027eff216af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37a64dcf04031211e1aa961dc09bdd51507f8c30ca22966dc4be5bf6f9fa8baa->leave($__internal_37a64dcf04031211e1aa961dc09bdd51507f8c30ca22966dc4be5bf6f9fa8baa_prof);

        
        $__internal_4559c9f561e37332ef2fc6ff10e17398b3cfe7f7de1c625db083b027eff216af->leave($__internal_4559c9f561e37332ef2fc6ff10e17398b3cfe7f7de1c625db083b027eff216af_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f393cea4b51d35f727969ee1e899034665000355b420f98883de62e2b82382fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f393cea4b51d35f727969ee1e899034665000355b420f98883de62e2b82382fc->enter($__internal_f393cea4b51d35f727969ee1e899034665000355b420f98883de62e2b82382fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_408158fab239f59dbbd3ae0ce976ead50a30c76f718f2642ffd2215bfb7ad4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408158fab239f59dbbd3ae0ce976ead50a30c76f718f2642ffd2215bfb7ad4de->enter($__internal_408158fab239f59dbbd3ae0ce976ead50a30c76f718f2642ffd2215bfb7ad4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_408158fab239f59dbbd3ae0ce976ead50a30c76f718f2642ffd2215bfb7ad4de->leave($__internal_408158fab239f59dbbd3ae0ce976ead50a30c76f718f2642ffd2215bfb7ad4de_prof);

        
        $__internal_f393cea4b51d35f727969ee1e899034665000355b420f98883de62e2b82382fc->leave($__internal_f393cea4b51d35f727969ee1e899034665000355b420f98883de62e2b82382fc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
