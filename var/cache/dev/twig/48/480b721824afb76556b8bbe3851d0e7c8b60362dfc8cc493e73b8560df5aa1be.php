<?php

/* BackBundle:User:email.html.twig */
class __TwigTemplate_a54a2e67c4bf43c76d2102e6bc67ceefe84a6c82a1633cdcccc0f58719e7a7d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b59cd1197b9980a754ac6001738f1beb9a5b43b52bb78cfebddc9a54b26f8a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59cd1197b9980a754ac6001738f1beb9a5b43b52bb78cfebddc9a54b26f8a5d->enter($__internal_b59cd1197b9980a754ac6001738f1beb9a5b43b52bb78cfebddc9a54b26f8a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:User:email.html.twig"));

        $__internal_ae0f6d5e407c07d2f93a73fe2367736cde0bf1a745a279f55c52ba436ae04937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0f6d5e407c07d2f93a73fe2367736cde0bf1a745a279f55c52ba436ae04937->enter($__internal_ae0f6d5e407c07d2f93a73fe2367736cde0bf1a745a279f55c52ba436ae04937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:User:email.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "    ";
        // line 6
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>HotVideo</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
    <meta content=\"\" name=\"B2B\"/>
    <meta content=\"\" name=\"YanNs\"/>
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "
    ";
        // line 37
        echo "</head>
<body class=\" login\">

";
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "</body>
</html>
";
        
        $__internal_b59cd1197b9980a754ac6001738f1beb9a5b43b52bb78cfebddc9a54b26f8a5d->leave($__internal_b59cd1197b9980a754ac6001738f1beb9a5b43b52bb78cfebddc9a54b26f8a5d_prof);

        
        $__internal_ae0f6d5e407c07d2f93a73fe2367736cde0bf1a745a279f55c52ba436ae04937->leave($__internal_ae0f6d5e407c07d2f93a73fe2367736cde0bf1a745a279f55c52ba436ae04937_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8148fdd32e771484456d1d83d5f7db746198fc3ec58585dfcece6f9aecb57560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8148fdd32e771484456d1d83d5f7db746198fc3ec58585dfcece6f9aecb57560->enter($__internal_8148fdd32e771484456d1d83d5f7db746198fc3ec58585dfcece6f9aecb57560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_46f190771339bc03d693a9bdaa416789607e216a919b4f9f58e95236cc1d9633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f190771339bc03d693a9bdaa416789607e216a919b4f9f58e95236cc1d9633->enter($__internal_46f190771339bc03d693a9bdaa416789607e216a919b4f9f58e95236cc1d9633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8519eb6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8519eb6_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8519eb6_css?family=Open+Sans:400,300,600,700&subset=all_1.css");
            // line 30
            echo "

        <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "8519eb6_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8519eb6_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8519eb6_font-awesome.min_2.css");
            // line 30
            echo "

        <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "8519eb6_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8519eb6_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8519eb6_simple-line-icons.min_4.css");
            // line 30
            echo "

        <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "8519eb6_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8519eb6_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8519eb6_bootstrap.min_5.css");
            // line 30
            echo "

        <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "8519eb6_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8519eb6_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8519eb6_bootstrap-switch.min_6.css");
            // line 30
            echo "

        <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "8519eb6_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8519eb6_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8519eb6_components.min_7.css");
            // line 30
            echo "

        <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "8519eb6_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8519eb6_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8519eb6_plugins.min_8.css");
            // line 30
            echo "

        <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "8519eb6_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8519eb6_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8519eb6_login-2_9.css");
            // line 30
            echo "

        <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        } else {
            // asset "8519eb6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8519eb6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8519eb6.css");
            // line 30
            echo "

        <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 34
        echo "    ";
        
        $__internal_46f190771339bc03d693a9bdaa416789607e216a919b4f9f58e95236cc1d9633->leave($__internal_46f190771339bc03d693a9bdaa416789607e216a919b4f9f58e95236cc1d9633_prof);

        
        $__internal_8148fdd32e771484456d1d83d5f7db746198fc3ec58585dfcece6f9aecb57560->leave($__internal_8148fdd32e771484456d1d83d5f7db746198fc3ec58585dfcece6f9aecb57560_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f4730671902c4c756fb3f8a7789598c90c30e93160b7dce15ba9db7850c19a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f4730671902c4c756fb3f8a7789598c90c30e93160b7dce15ba9db7850c19a5->enter($__internal_9f4730671902c4c756fb3f8a7789598c90c30e93160b7dce15ba9db7850c19a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_03c053fafcc72c725cb83702bf1dcf430940b25c49895a7445cea588c23bc390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c053fafcc72c725cb83702bf1dcf430940b25c49895a7445cea588c23bc390->enter($__internal_03c053fafcc72c725cb83702bf1dcf430940b25c49895a7445cea588c23bc390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_03c053fafcc72c725cb83702bf1dcf430940b25c49895a7445cea588c23bc390->leave($__internal_03c053fafcc72c725cb83702bf1dcf430940b25c49895a7445cea588c23bc390_prof);

        
        $__internal_9f4730671902c4c756fb3f8a7789598c90c30e93160b7dce15ba9db7850c19a5->leave($__internal_9f4730671902c4c756fb3f8a7789598c90c30e93160b7dce15ba9db7850c19a5_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd5a069e79b9e0cd13f0bd153e5ce21353d8373c5ca63e8960d90d8c5561176c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5a069e79b9e0cd13f0bd153e5ce21353d8373c5ca63e8960d90d8c5561176c->enter($__internal_cd5a069e79b9e0cd13f0bd153e5ce21353d8373c5ca63e8960d90d8c5561176c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7e864442e2f97390bd2183a78b11a55eecd8c92bb400fe5bb2d2a37d758fd208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e864442e2f97390bd2183a78b11a55eecd8c92bb400fe5bb2d2a37d758fd208->enter($__internal_7e864442e2f97390bd2183a78b11a55eecd8c92bb400fe5bb2d2a37d758fd208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 45
        echo "        <div class=\"logo\">
            <h2 class=\"sbold font-white\">B2B</h2>
            ";
        // line 48
        echo "            ";
        // line 49
        echo "        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class=\"content\">
            <h3 class=\"font-white\">E-mail de confiramtion.</h3>
            <p class=\"font-white lead\">Veuillez vérifier votre boîte de réception pour un courriel de confirmation,
                cliquez sur le lien pour réinitialiser votre mot de passe.</p>
        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class=\"copyright\"><a href=\"\" class=\"font-white\">B2B</a> ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " &copy;
            Tous droits réservés
        </div>

    ";
        
        $__internal_7e864442e2f97390bd2183a78b11a55eecd8c92bb400fe5bb2d2a37d758fd208->leave($__internal_7e864442e2f97390bd2183a78b11a55eecd8c92bb400fe5bb2d2a37d758fd208_prof);

        
        $__internal_cd5a069e79b9e0cd13f0bd153e5ce21353d8373c5ca63e8960d90d8c5561176c->leave($__internal_cd5a069e79b9e0cd13f0bd153e5ce21353d8373c5ca63e8960d90d8c5561176c_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3af13945eb867e2b177c6c044038189ba4ead3e80f3b685a0557d710003a5384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af13945eb867e2b177c6c044038189ba4ead3e80f3b685a0557d710003a5384->enter($__internal_3af13945eb867e2b177c6c044038189ba4ead3e80f3b685a0557d710003a5384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bccf8a9a314b7ed3af1ac2ad9c3e65d33c8ac9b9c33f2d72053faad696988618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bccf8a9a314b7ed3af1ac2ad9c3e65d33c8ac9b9c33f2d72053faad696988618->enter($__internal_bccf8a9a314b7ed3af1ac2ad9c3e65d33c8ac9b9c33f2d72053faad696988618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "797a084_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_797a084_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/797a084_jquery.min_1.js");
            // line 73
            echo "    ";
            // line 74
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "797a084_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_797a084_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/797a084_bootstrap.min_2.js");
            // line 73
            echo "    ";
            // line 74
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "797a084_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_797a084_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/797a084_js.cookie.min_3.js");
            // line 73
            echo "    ";
            // line 74
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "797a084_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_797a084_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/797a084_jquery.slimscroll.min_4.js");
            // line 73
            echo "    ";
            // line 74
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "797a084_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_797a084_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/797a084_app.min_5.js");
            // line 73
            echo "    ";
            // line 74
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        } else {
            // asset "797a084"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_797a084") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/797a084.js");
            // line 73
            echo "    ";
            // line 74
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_bccf8a9a314b7ed3af1ac2ad9c3e65d33c8ac9b9c33f2d72053faad696988618->leave($__internal_bccf8a9a314b7ed3af1ac2ad9c3e65d33c8ac9b9c33f2d72053faad696988618_prof);

        
        $__internal_3af13945eb867e2b177c6c044038189ba4ead3e80f3b685a0557d710003a5384->leave($__internal_3af13945eb867e2b177c6c044038189ba4ead3e80f3b685a0557d710003a5384_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:User:email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  318 => 74,  316 => 73,  308 => 74,  306 => 73,  299 => 74,  297 => 73,  290 => 74,  288 => 73,  281 => 74,  279 => 73,  272 => 74,  270 => 73,  265 => 67,  256 => 66,  241 => 59,  229 => 49,  227 => 48,  223 => 45,  205 => 44,  202 => 43,  193 => 42,  183 => 34,  177 => 32,  173 => 30,  166 => 32,  162 => 30,  156 => 32,  152 => 30,  146 => 32,  142 => 30,  136 => 32,  132 => 30,  126 => 32,  122 => 30,  116 => 32,  112 => 30,  106 => 32,  102 => 30,  96 => 32,  92 => 30,  87 => 17,  78 => 16,  66 => 77,  64 => 66,  61 => 65,  59 => 42,  56 => 41,  51 => 37,  48 => 35,  46 => 16,  34 => 6,  32 => 4,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% extends \"@FOSUser/layout.html.twig\" %}#}{#{% block fos_user_content %}#}    {#{{ include('@FOSUser/Security/login_content.html.twig') }}#}{#{% endblock fos_user_content %}#}<!DOCTYPE html><html><head>    <meta charset=\"UTF-8\"/>    <title>HotVideo</title>    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>    <meta content=\"\" name=\"B2B\"/>    <meta content=\"\" name=\"YanNs\"/>    {% block stylesheets %}        {% stylesheets        'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all'        'bundles/back/theme/assets/global/plugins/font-awesome/css/font-awesome.min.css'        'bundles/back/theme/assets/global/plugins/font-awesome/css/font-awesome.min.css'        'bundles/back/theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css'        'bundles/back/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css'        'bundles/back/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'        'bundles/back/theme/assets/global/css/components.min.css'        'bundles/back/theme/assets/global/css/plugins.min.css'        'bundles/back/theme/assets/pages/css/login-2.css'        filter='cssrewrite' %}        <link rel=\"stylesheet\" href=\"{{ asset_url }}\"/>        {% endstylesheets %}    {% endblock %}    {#<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>#}</head><body class=\" login\">{% trans_default_domain 'FOSUserBundle' %}{% block body %}    {% block fos_user_content %}        <div class=\"logo\">            <h2 class=\"sbold font-white\">B2B</h2>            {#<h2 class=\"sbold\"><span class=\"font-white\">B</span><span class=\"font-red-mint\">2</span><span class=\"font-white\">B</span></h2>#}            {#<img src=\"{{ asset('bundles/back/theme/assets/pages/img/logo-big.png') }}\" alt=\"\"/>#}        </div>        <!-- END LOGO -->        <!-- BEGIN LOGIN -->        <div class=\"content\">            <h3 class=\"font-white\">E-mail de confiramtion.</h3>            <p class=\"font-white lead\">Veuillez vérifier votre boîte de réception pour un courriel de confirmation,                cliquez sur le lien pour réinitialiser votre mot de passe.</p>        </div>        <!-- END LOGIN -->        <!-- BEGIN COPYRIGHT -->        <div class=\"copyright\"><a href=\"\" class=\"font-white\">B2B</a> {{ \"now\"|date(\"Y\") }} &copy;            Tous droits réservés        </div>    {% endblock fos_user_content %}{% endblock body %}{% block javascripts %}    {% javascripts    'bundles/back/theme/assets/global/plugins/jquery.min.js'    'bundles/back/theme/assets/global/plugins/bootstrap/js/bootstrap.min.js'    'bundles/back/theme/assets/global/plugins/js.cookie.min.js'    'bundles/back/theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'    'bundles/back/theme/assets/global/scripts/app.min.js' %}    {#<!-- END CORE PLUGINS -->#}    <script src=\"{{ asset_url }}\" type=\"text/javascript\"></script>    {% endjavascripts %}{% endblock %}</body></html>", "BackBundle:User:email.html.twig", "/Users/yann/Sites/B2B/src/BackBundle/Resources/views/User/email.html.twig");
    }
}
