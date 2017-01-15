<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_331ecd0069a6d65418a5b3b51ed16662a77a6dc7695a40f3d0efeea2ff0c298e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_4f8760866d0d819de73c0f3cf91dc70217ad6b55c61a2272dd70b19fb78172ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8760866d0d819de73c0f3cf91dc70217ad6b55c61a2272dd70b19fb78172ab->enter($__internal_4f8760866d0d819de73c0f3cf91dc70217ad6b55c61a2272dd70b19fb78172ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_b241d9ff28aa59f601a243f4d35a0ec29536c2d0f084fbfc08b8a3b03144b3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b241d9ff28aa59f601a243f4d35a0ec29536c2d0f084fbfc08b8a3b03144b3d6->enter($__internal_b241d9ff28aa59f601a243f4d35a0ec29536c2d0f084fbfc08b8a3b03144b3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f8760866d0d819de73c0f3cf91dc70217ad6b55c61a2272dd70b19fb78172ab->leave($__internal_4f8760866d0d819de73c0f3cf91dc70217ad6b55c61a2272dd70b19fb78172ab_prof);

        
        $__internal_b241d9ff28aa59f601a243f4d35a0ec29536c2d0f084fbfc08b8a3b03144b3d6->leave($__internal_b241d9ff28aa59f601a243f4d35a0ec29536c2d0f084fbfc08b8a3b03144b3d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f05f8a371830efe44ac26609431834943f719f735ed32bd4d9b57df1a5e2706b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f05f8a371830efe44ac26609431834943f719f735ed32bd4d9b57df1a5e2706b->enter($__internal_f05f8a371830efe44ac26609431834943f719f735ed32bd4d9b57df1a5e2706b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f879dd72941f484425ee6de13b3b4e203b3022bbb9c459797e2aba531832b0ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f879dd72941f484425ee6de13b3b4e203b3022bbb9c459797e2aba531832b0ae->enter($__internal_f879dd72941f484425ee6de13b3b4e203b3022bbb9c459797e2aba531832b0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_f879dd72941f484425ee6de13b3b4e203b3022bbb9c459797e2aba531832b0ae->leave($__internal_f879dd72941f484425ee6de13b3b4e203b3022bbb9c459797e2aba531832b0ae_prof);

        
        $__internal_f05f8a371830efe44ac26609431834943f719f735ed32bd4d9b57df1a5e2706b->leave($__internal_f05f8a371830efe44ac26609431834943f719f735ed32bd4d9b57df1a5e2706b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
