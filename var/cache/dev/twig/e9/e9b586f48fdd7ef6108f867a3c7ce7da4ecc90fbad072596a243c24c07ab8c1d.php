<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_e46cf96c2f9f06cdf8a7851e068a481e17b595bf53466818d2502a86dcb7345d extends Twig_Template
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
        $__internal_59d4ecfa9a27c154f4015ea7b654549ba5b9c82d1cfe9fa3766244823234f140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d4ecfa9a27c154f4015ea7b654549ba5b9c82d1cfe9fa3766244823234f140->enter($__internal_59d4ecfa9a27c154f4015ea7b654549ba5b9c82d1cfe9fa3766244823234f140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_46e2fec9dee3a5386faaef11131c7931accd208392fe39c66b5a5bbf7b4befab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e2fec9dee3a5386faaef11131c7931accd208392fe39c66b5a5bbf7b4befab->enter($__internal_46e2fec9dee3a5386faaef11131c7931accd208392fe39c66b5a5bbf7b4befab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_59d4ecfa9a27c154f4015ea7b654549ba5b9c82d1cfe9fa3766244823234f140->leave($__internal_59d4ecfa9a27c154f4015ea7b654549ba5b9c82d1cfe9fa3766244823234f140_prof);

        
        $__internal_46e2fec9dee3a5386faaef11131c7931accd208392fe39c66b5a5bbf7b4befab->leave($__internal_46e2fec9dee3a5386faaef11131c7931accd208392fe39c66b5a5bbf7b4befab_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
