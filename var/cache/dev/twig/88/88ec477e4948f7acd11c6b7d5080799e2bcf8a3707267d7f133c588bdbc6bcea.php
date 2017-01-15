<?php

/* @Back/Pages/index.html.twig */
class __TwigTemplate_a2f95622b3fa5da227fcfed743ade27c4878355de91d914dd49b963a8f7a7d4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::layout.html.twig", "@Back/Pages/index.html.twig", 1);
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
        $__internal_1f6c409f8ec13ac9982b49a37699714fe0f5d451d32a438fcdf37f98af4918e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f6c409f8ec13ac9982b49a37699714fe0f5d451d32a438fcdf37f98af4918e1->enter($__internal_1f6c409f8ec13ac9982b49a37699714fe0f5d451d32a438fcdf37f98af4918e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Back/Pages/index.html.twig"));

        $__internal_fbc9175d5f6aef0fb81acf8a400c9d1212fa593897b98a3341b484f8917c8d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc9175d5f6aef0fb81acf8a400c9d1212fa593897b98a3341b484f8917c8d8a->enter($__internal_fbc9175d5f6aef0fb81acf8a400c9d1212fa593897b98a3341b484f8917c8d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Back/Pages/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f6c409f8ec13ac9982b49a37699714fe0f5d451d32a438fcdf37f98af4918e1->leave($__internal_1f6c409f8ec13ac9982b49a37699714fe0f5d451d32a438fcdf37f98af4918e1_prof);

        
        $__internal_fbc9175d5f6aef0fb81acf8a400c9d1212fa593897b98a3341b484f8917c8d8a->leave($__internal_fbc9175d5f6aef0fb81acf8a400c9d1212fa593897b98a3341b484f8917c8d8a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_600bc581409f55606409a59014945571cac5783e00a64f9796f3658eabbbcd01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_600bc581409f55606409a59014945571cac5783e00a64f9796f3658eabbbcd01->enter($__internal_600bc581409f55606409a59014945571cac5783e00a64f9796f3658eabbbcd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e501853554931a616b2769a1a4c75ea59a2d5e2ad45de291f3af72d15b98ed79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e501853554931a616b2769a1a4c75ea59a2d5e2ad45de291f3af72d15b98ed79->enter($__internal_e501853554931a616b2769a1a4c75ea59a2d5e2ad45de291f3af72d15b98ed79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
      ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "  ";
        
        $__internal_e501853554931a616b2769a1a4c75ea59a2d5e2ad45de291f3af72d15b98ed79->leave($__internal_e501853554931a616b2769a1a4c75ea59a2d5e2ad45de291f3af72d15b98ed79_prof);

        
        $__internal_600bc581409f55606409a59014945571cac5783e00a64f9796f3658eabbbcd01->leave($__internal_600bc581409f55606409a59014945571cac5783e00a64f9796f3658eabbbcd01_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_b51016f50658400aec1b7a7462b08b0b555367eacaee84e264a853ec4822b5bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51016f50658400aec1b7a7462b08b0b555367eacaee84e264a853ec4822b5bb->enter($__internal_b51016f50658400aec1b7a7462b08b0b555367eacaee84e264a853ec4822b5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bfd1a35b8f2908dd129977817accdad20081ab7fc24ec2500642b133b4d81d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd1a35b8f2908dd129977817accdad20081ab7fc24ec2500642b133b4d81d20->enter($__internal_bfd1a35b8f2908dd129977817accdad20081ab7fc24ec2500642b133b4d81d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "  |  Dashboard
";
        
        $__internal_bfd1a35b8f2908dd129977817accdad20081ab7fc24ec2500642b133b4d81d20->leave($__internal_bfd1a35b8f2908dd129977817accdad20081ab7fc24ec2500642b133b4d81d20_prof);

        
        $__internal_b51016f50658400aec1b7a7462b08b0b555367eacaee84e264a853ec4822b5bb->leave($__internal_b51016f50658400aec1b7a7462b08b0b555367eacaee84e264a853ec4822b5bb_prof);

    }

    // line 17
    public function block_back_body($context, array $blocks = array())
    {
        $__internal_38943f5de299617512b9253eba2486536914679683d0bf58bb25c9c6ed52d0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38943f5de299617512b9253eba2486536914679683d0bf58bb25c9c6ed52d0c4->enter($__internal_38943f5de299617512b9253eba2486536914679683d0bf58bb25c9c6ed52d0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "back_body"));

        $__internal_19439c835cb76815f20e1f2f3266345f47ddf16d8a421ed8ca661882f121904b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19439c835cb76815f20e1f2f3266345f47ddf16d8a421ed8ca661882f121904b->enter($__internal_19439c835cb76815f20e1f2f3266345f47ddf16d8a421ed8ca661882f121904b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "back_body"));

        // line 18
        echo "
    <p style=\"text-align: center\">Hello B2B!</p>

";
        
        $__internal_19439c835cb76815f20e1f2f3266345f47ddf16d8a421ed8ca661882f121904b->leave($__internal_19439c835cb76815f20e1f2f3266345f47ddf16d8a421ed8ca661882f121904b_prof);

        
        $__internal_38943f5de299617512b9253eba2486536914679683d0bf58bb25c9c6ed52d0c4->leave($__internal_38943f5de299617512b9253eba2486536914679683d0bf58bb25c9c6ed52d0c4_prof);

    }

    public function getTemplateName()
    {
        return "@Back/Pages/index.html.twig";
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
        return new Twig_Source("{% extends \"BackBundle::layout.html.twig\" %}{#Include CSS#}  {% block stylesheets %}      {{ parent() }}      {% stylesheets      filter='cssrewrite' %}      <link rel=\"stylesheet\" href=\"{{ asset_url }}\"/>      {% endstylesheets %}  {% endblock stylesheets %}{% block title %}    {{ parent() }}  |  Dashboard{% endblock %}{% block back_body %}    <p style=\"text-align: center\">Hello B2B!</p>{% endblock back_body%}", "@Back/Pages/index.html.twig", "/Users/yann/Sites/B2B/src/BackBundle/Resources/views/Pages/index.html.twig");
    }
}
