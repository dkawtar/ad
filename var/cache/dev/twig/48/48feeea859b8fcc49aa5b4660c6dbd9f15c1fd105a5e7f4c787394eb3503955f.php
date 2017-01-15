<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_a82efa9912d66b9312869a6570aea3eb6410c27c02733423c4ed0801f09d232b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_62d0dc23319cc7e2c44c8195d7af3f6656a79a0cee4790750a5664bf88e3996e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d0dc23319cc7e2c44c8195d7af3f6656a79a0cee4790750a5664bf88e3996e->enter($__internal_62d0dc23319cc7e2c44c8195d7af3f6656a79a0cee4790750a5664bf88e3996e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_9a14aca7552cbd5ee93d8324207e574d34fbb7bfa3300d54f99b0cc2f45bea61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a14aca7552cbd5ee93d8324207e574d34fbb7bfa3300d54f99b0cc2f45bea61->enter($__internal_9a14aca7552cbd5ee93d8324207e574d34fbb7bfa3300d54f99b0cc2f45bea61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62d0dc23319cc7e2c44c8195d7af3f6656a79a0cee4790750a5664bf88e3996e->leave($__internal_62d0dc23319cc7e2c44c8195d7af3f6656a79a0cee4790750a5664bf88e3996e_prof);

        
        $__internal_9a14aca7552cbd5ee93d8324207e574d34fbb7bfa3300d54f99b0cc2f45bea61->leave($__internal_9a14aca7552cbd5ee93d8324207e574d34fbb7bfa3300d54f99b0cc2f45bea61_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e10f5660c989c4dafb11bfab285676c23b59612b95dee0545dde3129069ec1cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10f5660c989c4dafb11bfab285676c23b59612b95dee0545dde3129069ec1cf->enter($__internal_e10f5660c989c4dafb11bfab285676c23b59612b95dee0545dde3129069ec1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5be5ff70ff05e432a4aad8001c2e02a7a22b121357c2bec7f737bfabd405d625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be5ff70ff05e432a4aad8001c2e02a7a22b121357c2bec7f737bfabd405d625->enter($__internal_5be5ff70ff05e432a4aad8001c2e02a7a22b121357c2bec7f737bfabd405d625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_5be5ff70ff05e432a4aad8001c2e02a7a22b121357c2bec7f737bfabd405d625->leave($__internal_5be5ff70ff05e432a4aad8001c2e02a7a22b121357c2bec7f737bfabd405d625_prof);

        
        $__internal_e10f5660c989c4dafb11bfab285676c23b59612b95dee0545dde3129069ec1cf->leave($__internal_e10f5660c989c4dafb11bfab285676c23b59612b95dee0545dde3129069ec1cf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
