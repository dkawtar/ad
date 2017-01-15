<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_818f9f8806137f0126ad58f505e00faf30ff3080d6ce6e154cf279a32a3dc68c extends Twig_Template
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
        $__internal_25aaa2edafe311c30a683a8292b07d9febd332b30b8320a1d8446d106ff85ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25aaa2edafe311c30a683a8292b07d9febd332b30b8320a1d8446d106ff85ed8->enter($__internal_25aaa2edafe311c30a683a8292b07d9febd332b30b8320a1d8446d106ff85ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_d73b165df56101042fccfbc52ea78aa7308acaaf3be18ffe45f16d299be96c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73b165df56101042fccfbc52ea78aa7308acaaf3be18ffe45f16d299be96c92->enter($__internal_d73b165df56101042fccfbc52ea78aa7308acaaf3be18ffe45f16d299be96c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_25aaa2edafe311c30a683a8292b07d9febd332b30b8320a1d8446d106ff85ed8->leave($__internal_25aaa2edafe311c30a683a8292b07d9febd332b30b8320a1d8446d106ff85ed8_prof);

        
        $__internal_d73b165df56101042fccfbc52ea78aa7308acaaf3be18ffe45f16d299be96c92->leave($__internal_d73b165df56101042fccfbc52ea78aa7308acaaf3be18ffe45f16d299be96c92_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
