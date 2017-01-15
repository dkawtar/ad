<?php

/* base.html.twig */
class __TwigTemplate_adfa02fd20715ae1a8ad0142d7efcdcb5cbf0c95a61e83bb0287f28882c95850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6e0daac30749c84627ded3932b0c032561506eb06e78fc64de8a42e0cd96c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e0daac30749c84627ded3932b0c032561506eb06e78fc64de8a42e0cd96c4d->enter($__internal_a6e0daac30749c84627ded3932b0c032561506eb06e78fc64de8a42e0cd96c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3bea5430e579018892697b52567eb2bb8440cf8732c9fb3753038ab5df76ee4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bea5430e579018892697b52567eb2bb8440cf8732c9fb3753038ab5df76ee4f->enter($__internal_3bea5430e579018892697b52567eb2bb8440cf8732c9fb3753038ab5df76ee4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"\"/>
    <meta content=\"\" name=\"B2B\"/>
    <meta content=\"\" name=\"YanNs\"/>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
    ";
        // line 25
        echo "</head>
<body class=\"page-header-fixed page-sidebar-closed-hide-logo page-content-white\">
";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "</body>
</html>
";
        
        $__internal_a6e0daac30749c84627ded3932b0c032561506eb06e78fc64de8a42e0cd96c4d->leave($__internal_a6e0daac30749c84627ded3932b0c032561506eb06e78fc64de8a42e0cd96c4d_prof);

        
        $__internal_3bea5430e579018892697b52567eb2bb8440cf8732c9fb3753038ab5df76ee4f->leave($__internal_3bea5430e579018892697b52567eb2bb8440cf8732c9fb3753038ab5df76ee4f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_70169614ef79313fe22cbba25d30c385aa73ab8e2f04f24e953b05c035f7178b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70169614ef79313fe22cbba25d30c385aa73ab8e2f04f24e953b05c035f7178b->enter($__internal_70169614ef79313fe22cbba25d30c385aa73ab8e2f04f24e953b05c035f7178b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd037bd2ebc08e810f2c8aaf434be68169b6aab27251edf1981ec15bb4695135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd037bd2ebc08e810f2c8aaf434be68169b6aab27251edf1981ec15bb4695135->enter($__internal_cd037bd2ebc08e810f2c8aaf434be68169b6aab27251edf1981ec15bb4695135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " B2B ";
        
        $__internal_cd037bd2ebc08e810f2c8aaf434be68169b6aab27251edf1981ec15bb4695135->leave($__internal_cd037bd2ebc08e810f2c8aaf434be68169b6aab27251edf1981ec15bb4695135_prof);

        
        $__internal_70169614ef79313fe22cbba25d30c385aa73ab8e2f04f24e953b05c035f7178b->leave($__internal_70169614ef79313fe22cbba25d30c385aa73ab8e2f04f24e953b05c035f7178b_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e38dc6c42aa7544e523605006ec12802cef8d6cbe92d0d05ce7192203477465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e38dc6c42aa7544e523605006ec12802cef8d6cbe92d0d05ce7192203477465->enter($__internal_0e38dc6c42aa7544e523605006ec12802cef8d6cbe92d0d05ce7192203477465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_043b697d5c5b6bd2d58e9980a2fdd5038c227ac2271eadabd72f786ad597bfcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043b697d5c5b6bd2d58e9980a2fdd5038c227ac2271eadabd72f786ad597bfcd->enter($__internal_043b697d5c5b6bd2d58e9980a2fdd5038c227ac2271eadabd72f786ad597bfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "35402b4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_35402b4_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/35402b4_font-awesome.min_1.css");
            // line 19
            echo "        ";
            // line 20
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "35402b4_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_35402b4_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/35402b4_simple-line-icons.min_2.css");
            // line 19
            echo "        ";
            // line 20
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "35402b4_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_35402b4_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/35402b4_bootstrap.min_3.css");
            // line 19
            echo "        ";
            // line 20
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "35402b4_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_35402b4_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/35402b4_jquery-ui.min_4.css");
            // line 19
            echo "        ";
            // line 20
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        } else {
            // asset "35402b4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_35402b4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/35402b4.css");
            // line 19
            echo "        ";
            // line 20
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "    ";
        
        $__internal_043b697d5c5b6bd2d58e9980a2fdd5038c227ac2271eadabd72f786ad597bfcd->leave($__internal_043b697d5c5b6bd2d58e9980a2fdd5038c227ac2271eadabd72f786ad597bfcd_prof);

        
        $__internal_0e38dc6c42aa7544e523605006ec12802cef8d6cbe92d0d05ce7192203477465->leave($__internal_0e38dc6c42aa7544e523605006ec12802cef8d6cbe92d0d05ce7192203477465_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_5643af84a07030b306d3fa519f8f211ead4f18e4d5ac5d9a46b311f6e0e86b1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5643af84a07030b306d3fa519f8f211ead4f18e4d5ac5d9a46b311f6e0e86b1a->enter($__internal_5643af84a07030b306d3fa519f8f211ead4f18e4d5ac5d9a46b311f6e0e86b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c45dc486122be825c699febe020c3e3b4cfe2056c667230d2791e2c873c436b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c45dc486122be825c699febe020c3e3b4cfe2056c667230d2791e2c873c436b->enter($__internal_5c45dc486122be825c699febe020c3e3b4cfe2056c667230d2791e2c873c436b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5c45dc486122be825c699febe020c3e3b4cfe2056c667230d2791e2c873c436b->leave($__internal_5c45dc486122be825c699febe020c3e3b4cfe2056c667230d2791e2c873c436b_prof);

        
        $__internal_5643af84a07030b306d3fa519f8f211ead4f18e4d5ac5d9a46b311f6e0e86b1a->leave($__internal_5643af84a07030b306d3fa519f8f211ead4f18e4d5ac5d9a46b311f6e0e86b1a_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5fc7949bfc684d0c998a2a7a7bf37b3b4ac315a6d3cbced339a5481d9c104fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc7949bfc684d0c998a2a7a7bf37b3b4ac315a6d3cbced339a5481d9c104fa4->enter($__internal_5fc7949bfc684d0c998a2a7a7bf37b3b4ac315a6d3cbced339a5481d9c104fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3eeb0541d1891a291209997ed3b94799394d53fb65da21696ca40e98f274b6c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eeb0541d1891a291209997ed3b94799394d53fb65da21696ca40e98f274b6c6->enter($__internal_3eeb0541d1891a291209997ed3b94799394d53fb65da21696ca40e98f274b6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    ";
        // line 30
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "48b4921_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_48b4921_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/48b4921_jquery.min_1.js");
            // line 36
            echo "    ";
            // line 37
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "48b4921_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_48b4921_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/48b4921_jquery-ui.min_2.js");
            // line 36
            echo "    ";
            // line 37
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "48b4921_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_48b4921_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/48b4921_bootstrap.min_3.js");
            // line 36
            echo "    ";
            // line 37
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "48b4921_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_48b4921_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/48b4921_js.cookie.min_4.js");
            // line 36
            echo "    ";
            // line 37
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "48b4921_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_48b4921_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/48b4921_router_5.js");
            // line 36
            echo "    ";
            // line 37
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        } else {
            // asset "48b4921"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_48b4921") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/48b4921.js");
            // line 36
            echo "    ";
            // line 37
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 39
        echo "    <script src=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>


";
        
        $__internal_3eeb0541d1891a291209997ed3b94799394d53fb65da21696ca40e98f274b6c6->leave($__internal_3eeb0541d1891a291209997ed3b94799394d53fb65da21696ca40e98f274b6c6_prof);

        
        $__internal_5fc7949bfc684d0c998a2a7a7bf37b3b4ac315a6d3cbced339a5481d9c104fa4->leave($__internal_5fc7949bfc684d0c998a2a7a7bf37b3b4ac315a6d3cbced339a5481d9c104fa4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  247 => 39,  240 => 37,  238 => 36,  230 => 37,  228 => 36,  221 => 37,  219 => 36,  212 => 37,  210 => 36,  203 => 37,  201 => 36,  194 => 37,  192 => 36,  187 => 30,  185 => 29,  176 => 28,  159 => 27,  149 => 22,  142 => 20,  140 => 19,  132 => 20,  130 => 19,  123 => 20,  121 => 19,  114 => 20,  112 => 19,  105 => 20,  103 => 19,  98 => 13,  96 => 12,  87 => 11,  69 => 5,  57 => 42,  55 => 28,  53 => 27,  49 => 25,  46 => 23,  44 => 11,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %} B2B {% endblock %}</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"\"/>
    <meta content=\"\" name=\"B2B\"/>
    <meta content=\"\" name=\"YanNs\"/>

    {% block stylesheets %}
        {#<!-- BEGIN GLOBAL MANDATORY STYLES -->#}
        {% stylesheets
        \"bundles/back/theme/assets/global/plugins/font-awesome/css/font-awesome.min.css\"
        \"bundles/back/theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css\"
        \"bundles/back/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css\"
        \"bundles/back/theme/assets/global/plugins/jquery-ui/jquery-ui.min.css\"
        filter='cssrewrite' %}
        {#<!-- END GLOBAL MANDATORY STYLES -->#}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\"/>
        {% endstylesheets %}
    {% endblock %}

    {#<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>#}
</head>
<body class=\"page-header-fixed page-sidebar-closed-hide-logo page-content-white\">
{% block body %}{% endblock %}
{% block javascripts %}
    {#<!-- BEGIN CORE PLUGINS -->#}
    {% javascripts
    \"bundles/back/theme/assets/global/plugins/jquery.min.js\"
    \"bundles/back/theme/assets/global/plugins/jquery-ui/jquery-ui.min.js\"
    \"bundles/back/theme/assets/global/plugins/bootstrap/js/bootstrap.min.js\"
    \"bundles/back/theme/assets/global/plugins/js.cookie.min.js\"
    \"bundles/fosjsrouting/js/router.js\" %}
    {#<!-- END CORE PLUGINS -->#}
    <script src=\"{{ asset_url }}\" type=\"text/javascript\"></script>
    {% endjavascripts %}
    <script src=\"{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}\"></script>


{% endblock %}</body>
</html>
", "base.html.twig", "/Users/yann/Sites/B2B/app/Resources/views/base.html.twig");
    }
}
