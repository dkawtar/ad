<?php

/* @FOSUser/Group/new_content.html.twig */
class __TwigTemplate_35b71888190438e5be97a2963d20a2846e73f21a8f37856120a33d889876b41a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb536853e42ca89767255bc289df8dcd89f2713aa40151c9fa762fb8367ac7ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb536853e42ca89767255bc289df8dcd89f2713aa40151c9fa762fb8367ac7ec->enter($__internal_eb536853e42ca89767255bc289df8dcd89f2713aa40151c9fa762fb8367ac7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new_content.html.twig"));

        $__internal_90f817bc64e8020ef467ff4ba9eb5b38c65b3bba15dfc0220ef506df66384cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f817bc64e8020ef467ff4ba9eb5b38c65b3bba15dfc0220ef506df66384cd5->enter($__internal_90f817bc64e8020ef467ff4ba9eb5b38c65b3bba15dfc0220ef506df66384cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_eb536853e42ca89767255bc289df8dcd89f2713aa40151c9fa762fb8367ac7ec->leave($__internal_eb536853e42ca89767255bc289df8dcd89f2713aa40151c9fa762fb8367ac7ec_prof);

        
        $__internal_90f817bc64e8020ef467ff4ba9eb5b38c65b3bba15dfc0220ef506df66384cd5->leave($__internal_90f817bc64e8020ef467ff4ba9eb5b38c65b3bba15dfc0220ef506df66384cd5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Group/new_content.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Group/new_content.html.twig");
    }
}
