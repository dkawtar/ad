<?php

/* @FOSUser/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_19fbb47288a57f529351a916b272b00f24744f599af9963793043ff839312a98 extends Twig_Template
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
        $__internal_b73537c733376f6f694719113d23f80d6f10e8ef9f3f0b928cdb42e68e0f7f52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b73537c733376f6f694719113d23f80d6f10e8ef9f3f0b928cdb42e68e0f7f52->enter($__internal_b73537c733376f6f694719113d23f80d6f10e8ef9f3f0b928cdb42e68e0f7f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        $__internal_cdee1a267f77ece2abb0c5c9c8b01c9dbd0833c72a822df07a3992dc0a7c8b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdee1a267f77ece2abb0c5c9c8b01c9dbd0833c72a822df07a3992dc0a7c8b29->enter($__internal_cdee1a267f77ece2abb0c5c9c8b01c9dbd0833c72a822df07a3992dc0a7c8b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b73537c733376f6f694719113d23f80d6f10e8ef9f3f0b928cdb42e68e0f7f52->leave($__internal_b73537c733376f6f694719113d23f80d6f10e8ef9f3f0b928cdb42e68e0f7f52_prof);

        
        $__internal_cdee1a267f77ece2abb0c5c9c8b01c9dbd0833c72a822df07a3992dc0a7c8b29->leave($__internal_cdee1a267f77ece2abb0c5c9c8b01c9dbd0833c72a822df07a3992dc0a7c8b29_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/ChangePassword/change_password_content.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/ChangePassword/change_password_content.html.twig");
    }
}
