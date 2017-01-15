<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_04dd3cb0d6cc5aaa39c1cc0962c7631b79615a228a334b19bc133e476fe119ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_24c434acc256e5fc0ef1357410c1ce7ad19fe3d15654d4cd2f8b07c11545c381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c434acc256e5fc0ef1357410c1ce7ad19fe3d15654d4cd2f8b07c11545c381->enter($__internal_24c434acc256e5fc0ef1357410c1ce7ad19fe3d15654d4cd2f8b07c11545c381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_7d98c4df760b264f01945cc40ed3396ec427796b93589b86376a63909308f3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d98c4df760b264f01945cc40ed3396ec427796b93589b86376a63909308f3b6->enter($__internal_7d98c4df760b264f01945cc40ed3396ec427796b93589b86376a63909308f3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24c434acc256e5fc0ef1357410c1ce7ad19fe3d15654d4cd2f8b07c11545c381->leave($__internal_24c434acc256e5fc0ef1357410c1ce7ad19fe3d15654d4cd2f8b07c11545c381_prof);

        
        $__internal_7d98c4df760b264f01945cc40ed3396ec427796b93589b86376a63909308f3b6->leave($__internal_7d98c4df760b264f01945cc40ed3396ec427796b93589b86376a63909308f3b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea666c5a1bde74c5d86c2695f1ecec23fc2126dedf401385af60449b41d88b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea666c5a1bde74c5d86c2695f1ecec23fc2126dedf401385af60449b41d88b93->enter($__internal_ea666c5a1bde74c5d86c2695f1ecec23fc2126dedf401385af60449b41d88b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cb882faa24730fe92c20ff67ee650824c4c835c3018dc4c85df09cb1c64d51d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb882faa24730fe92c20ff67ee650824c4c835c3018dc4c85df09cb1c64d51d3->enter($__internal_cb882faa24730fe92c20ff67ee650824c4c835c3018dc4c85df09cb1c64d51d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_cb882faa24730fe92c20ff67ee650824c4c835c3018dc4c85df09cb1c64d51d3->leave($__internal_cb882faa24730fe92c20ff67ee650824c4c835c3018dc4c85df09cb1c64d51d3_prof);

        
        $__internal_ea666c5a1bde74c5d86c2695f1ecec23fc2126dedf401385af60449b41d88b93->leave($__internal_ea666c5a1bde74c5d86c2695f1ecec23fc2126dedf401385af60449b41d88b93_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
