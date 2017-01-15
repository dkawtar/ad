<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_6ced153baa60430da41ce45f0c89c65e4fd1d976d5fea3be98ac852c83f5af3a extends Twig_Template
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
        $__internal_1fdec59530dd847aac353d32dc05deb27550f7699d7251c1d9ccabb4d3378ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fdec59530dd847aac353d32dc05deb27550f7699d7251c1d9ccabb4d3378ce4->enter($__internal_1fdec59530dd847aac353d32dc05deb27550f7699d7251c1d9ccabb4d3378ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        $__internal_f8b4db25e38a3ac45392162b76f3c72be1c6f537ff92711bde4854ae4075689d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b4db25e38a3ac45392162b76f3c72be1c6f537ff92711bde4854ae4075689d->enter($__internal_f8b4db25e38a3ac45392162b76f3c72be1c6f537ff92711bde4854ae4075689d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_1fdec59530dd847aac353d32dc05deb27550f7699d7251c1d9ccabb4d3378ce4->leave($__internal_1fdec59530dd847aac353d32dc05deb27550f7699d7251c1d9ccabb4d3378ce4_prof);

        
        $__internal_f8b4db25e38a3ac45392162b76f3c72be1c6f537ff92711bde4854ae4075689d->leave($__internal_f8b4db25e38a3ac45392162b76f3c72be1c6f537ff92711bde4854ae4075689d_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "@KnpPaginator/Pagination/sortable_link.html.twig", "/Users/yann/Sites/B2B/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
