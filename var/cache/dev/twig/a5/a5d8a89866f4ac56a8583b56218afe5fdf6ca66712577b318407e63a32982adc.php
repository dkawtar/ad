<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_7a40d99f14d18847b1c57a5e8152325a9cfe702334869036a332d3df59da258f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_c3d9ac3f24cd68ba18dde741804c24109b0c1cbc444f76e89b984892db6b53da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3d9ac3f24cd68ba18dde741804c24109b0c1cbc444f76e89b984892db6b53da->enter($__internal_c3d9ac3f24cd68ba18dde741804c24109b0c1cbc444f76e89b984892db6b53da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_cdec32783dfdc6363fcec44bbb726d10a03d8e68eb2974de6658d3c97de942e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdec32783dfdc6363fcec44bbb726d10a03d8e68eb2974de6658d3c97de942e4->enter($__internal_cdec32783dfdc6363fcec44bbb726d10a03d8e68eb2974de6658d3c97de942e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3d9ac3f24cd68ba18dde741804c24109b0c1cbc444f76e89b984892db6b53da->leave($__internal_c3d9ac3f24cd68ba18dde741804c24109b0c1cbc444f76e89b984892db6b53da_prof);

        
        $__internal_cdec32783dfdc6363fcec44bbb726d10a03d8e68eb2974de6658d3c97de942e4->leave($__internal_cdec32783dfdc6363fcec44bbb726d10a03d8e68eb2974de6658d3c97de942e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd92fa57334cec93d6b4c65826b21457f269e255fb90a3878c168b0277fd7362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd92fa57334cec93d6b4c65826b21457f269e255fb90a3878c168b0277fd7362->enter($__internal_fd92fa57334cec93d6b4c65826b21457f269e255fb90a3878c168b0277fd7362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_691729c05fa4eacb05c655707dd8ed62ce3fe22c43b0e6ff342ce51fd0c7064a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691729c05fa4eacb05c655707dd8ed62ce3fe22c43b0e6ff342ce51fd0c7064a->enter($__internal_691729c05fa4eacb05c655707dd8ed62ce3fe22c43b0e6ff342ce51fd0c7064a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_691729c05fa4eacb05c655707dd8ed62ce3fe22c43b0e6ff342ce51fd0c7064a->leave($__internal_691729c05fa4eacb05c655707dd8ed62ce3fe22c43b0e6ff342ce51fd0c7064a_prof);

        
        $__internal_fd92fa57334cec93d6b4c65826b21457f269e255fb90a3878c168b0277fd7362->leave($__internal_fd92fa57334cec93d6b4c65826b21457f269e255fb90a3878c168b0277fd7362_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
