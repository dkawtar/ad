<?php

/* BackBundle:Pages:index.html.twig */
class __TwigTemplate_7b9e315e6300deeecd600387941fe1a4e4edf71d240046aee487e0e380e20b9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::layout.html.twig", "BackBundle:Pages:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'back_body' => array($this, 'block_back_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17fc3124d320470583797a6170dcb653cd3fad862c5b8766cea4e940c3852e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fc3124d320470583797a6170dcb653cd3fad862c5b8766cea4e940c3852e03->enter($__internal_17fc3124d320470583797a6170dcb653cd3fad862c5b8766cea4e940c3852e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Pages:index.html.twig"));

        $__internal_907c4526c330afde7e976873646a2038eb3dd1cf3c1388c9f3a222fe8e6b7b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907c4526c330afde7e976873646a2038eb3dd1cf3c1388c9f3a222fe8e6b7b0c->enter($__internal_907c4526c330afde7e976873646a2038eb3dd1cf3c1388c9f3a222fe8e6b7b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Pages:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc3124d320470583797a6170dcb653cd3fad862c5b8766cea4e940c3852e03->leave($__internal_17fc3124d320470583797a6170dcb653cd3fad862c5b8766cea4e940c3852e03_prof);

        
        $__internal_907c4526c330afde7e976873646a2038eb3dd1cf3c1388c9f3a222fe8e6b7b0c->leave($__internal_907c4526c330afde7e976873646a2038eb3dd1cf3c1388c9f3a222fe8e6b7b0c_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_25f20553baf31e8fb125be683287df2b5a5383fd308da1b1ea5947f9ea659a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f20553baf31e8fb125be683287df2b5a5383fd308da1b1ea5947f9ea659a4c->enter($__internal_25f20553baf31e8fb125be683287df2b5a5383fd308da1b1ea5947f9ea659a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6122766a115a715bc907a880cef27939e62c2ff864b7b927b69b6984e2891488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6122766a115a715bc907a880cef27939e62c2ff864b7b927b69b6984e2891488->enter($__internal_6122766a115a715bc907a880cef27939e62c2ff864b7b927b69b6984e2891488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "      ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
      ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "8ed61eb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8ed61eb") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8ed61eb.css");
            // line 8
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
      ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "  ";
        
        $__internal_6122766a115a715bc907a880cef27939e62c2ff864b7b927b69b6984e2891488->leave($__internal_6122766a115a715bc907a880cef27939e62c2ff864b7b927b69b6984e2891488_prof);

        
        $__internal_25f20553baf31e8fb125be683287df2b5a5383fd308da1b1ea5947f9ea659a4c->leave($__internal_25f20553baf31e8fb125be683287df2b5a5383fd308da1b1ea5947f9ea659a4c_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a66c06ed755868e6eb90e3f82d0d119cd9b9c284d3902ff76115e7108017aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a66c06ed755868e6eb90e3f82d0d119cd9b9c284d3902ff76115e7108017aff->enter($__internal_7a66c06ed755868e6eb90e3f82d0d119cd9b9c284d3902ff76115e7108017aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c51cf02093e94de6fe46595d5323bba4f33fe9f59b3931e7bdfee5de32241ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c51cf02093e94de6fe46595d5323bba4f33fe9f59b3931e7bdfee5de32241ef->enter($__internal_1c51cf02093e94de6fe46595d5323bba4f33fe9f59b3931e7bdfee5de32241ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "  |  Dashboard
";
        
        $__internal_1c51cf02093e94de6fe46595d5323bba4f33fe9f59b3931e7bdfee5de32241ef->leave($__internal_1c51cf02093e94de6fe46595d5323bba4f33fe9f59b3931e7bdfee5de32241ef_prof);

        
        $__internal_7a66c06ed755868e6eb90e3f82d0d119cd9b9c284d3902ff76115e7108017aff->leave($__internal_7a66c06ed755868e6eb90e3f82d0d119cd9b9c284d3902ff76115e7108017aff_prof);

    }

    // line 17
    public function block_back_body($context, array $blocks = array())
    {
        $__internal_238c6ca1004b62abf0e029d2bb388db5d3aa7b83ded3205e261021ff14d2de01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_238c6ca1004b62abf0e029d2bb388db5d3aa7b83ded3205e261021ff14d2de01->enter($__internal_238c6ca1004b62abf0e029d2bb388db5d3aa7b83ded3205e261021ff14d2de01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "back_body"));

        $__internal_74a7c642746fb80d40072849bb960e8027ab1ca51703272c05921f41b914ba5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a7c642746fb80d40072849bb960e8027ab1ca51703272c05921f41b914ba5c->enter($__internal_74a7c642746fb80d40072849bb960e8027ab1ca51703272c05921f41b914ba5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "back_body"));

        // line 18
        echo "
    <p style=\"text-align: center\">Hello B2B!</p>

";
        
        $__internal_74a7c642746fb80d40072849bb960e8027ab1ca51703272c05921f41b914ba5c->leave($__internal_74a7c642746fb80d40072849bb960e8027ab1ca51703272c05921f41b914ba5c_prof);

        
        $__internal_238c6ca1004b62abf0e029d2bb388db5d3aa7b83ded3205e261021ff14d2de01->leave($__internal_238c6ca1004b62abf0e029d2bb388db5d3aa7b83ded3205e261021ff14d2de01_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Pages:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 18,  100 => 17,  87 => 14,  78 => 13,  68 => 10,  61 => 8,  56 => 6,  51 => 5,  42 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BackBundle::layout.html.twig\" %}{#Include CSS#}  {% block stylesheets %}      {{ parent() }}      {% stylesheets      filter='cssrewrite' %}      <link rel=\"stylesheet\" href=\"{{ asset_url }}\"/>      {% endstylesheets %}  {% endblock stylesheets %}{% block title %}    {{ parent() }}  |  Dashboard{% endblock %}{% block back_body %}    <p style=\"text-align: center\">Hello B2B!</p>{% endblock back_body%}", "BackBundle:Pages:index.html.twig", "/Users/yann/Sites/B2B/var/cache/dev/../../../src/BackBundle/Resources/views/Pages/index.html.twig");
    }
}
