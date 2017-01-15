<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_ab7a869e4e737c00a5d47a0417ca8ccf864476862a0d5211e47a71ad31ce4781 extends Twig_Template
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
        $__internal_55dacbc65b89abcac6fd8a263354b37a3b2d64ba519d77468948316c63104acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55dacbc65b89abcac6fd8a263354b37a3b2d64ba519d77468948316c63104acb->enter($__internal_55dacbc65b89abcac6fd8a263354b37a3b2d64ba519d77468948316c63104acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_f898be32965a61d924105f4949ca89d3aa57551bf808da4f1ca568a426f90600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f898be32965a61d924105f4949ca89d3aa57551bf808da4f1ca568a426f90600->enter($__internal_f898be32965a61d924105f4949ca89d3aa57551bf808da4f1ca568a426f90600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_55dacbc65b89abcac6fd8a263354b37a3b2d64ba519d77468948316c63104acb->leave($__internal_55dacbc65b89abcac6fd8a263354b37a3b2d64ba519d77468948316c63104acb_prof);

        
        $__internal_f898be32965a61d924105f4949ca89d3aa57551bf808da4f1ca568a426f90600->leave($__internal_f898be32965a61d924105f4949ca89d3aa57551bf808da4f1ca568a426f90600_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "@FOSUser/Resetting/request_content.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
