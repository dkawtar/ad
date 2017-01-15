<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_3e4e0335594412dd6d5402f34e91baafb958c45fe8a9528d9b2003a743769cbf extends Twig_Template
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
        $__internal_a45d548d185238b647d6b3020e792292b472fe7a881d339adc5185914b49d693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45d548d185238b647d6b3020e792292b472fe7a881d339adc5185914b49d693->enter($__internal_a45d548d185238b647d6b3020e792292b472fe7a881d339adc5185914b49d693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_ac00ffcce1f90f027c672d89025b3c594b3bf12c057452479b96f85b34860df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac00ffcce1f90f027c672d89025b3c594b3bf12c057452479b96f85b34860df3->enter($__internal_ac00ffcce1f90f027c672d89025b3c594b3bf12c057452479b96f85b34860df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

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
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "</body>
</html>
";
        
        $__internal_a45d548d185238b647d6b3020e792292b472fe7a881d339adc5185914b49d693->leave($__internal_a45d548d185238b647d6b3020e792292b472fe7a881d339adc5185914b49d693_prof);

        
        $__internal_ac00ffcce1f90f027c672d89025b3c594b3bf12c057452479b96f85b34860df3->leave($__internal_ac00ffcce1f90f027c672d89025b3c594b3bf12c057452479b96f85b34860df3_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a860dfc58539478cdc8cc7bb72163e8c3091f428de586cfcfd9539703fea3ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a860dfc58539478cdc8cc7bb72163e8c3091f428de586cfcfd9539703fea3ec6->enter($__internal_a860dfc58539478cdc8cc7bb72163e8c3091f428de586cfcfd9539703fea3ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_05b5663f4de0a49993e19405514c7ac677a996fdea3200c8e26da40e3b32fa04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b5663f4de0a49993e19405514c7ac677a996fdea3200c8e26da40e3b32fa04->enter($__internal_05b5663f4de0a49993e19405514c7ac677a996fdea3200c8e26da40e3b32fa04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8519eb6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8519eb6_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8519eb6_css?family=Open+Sans:400,300,600,700&subset=all_1.css");
            // line 30
            echo "

        <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "8519eb6_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8519eb6_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8519eb6_font-awesome.min_2.css");
            // line 30
            echo "

        <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "8519eb6_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8519eb6_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8519eb6_simple-line-icons.min_4.css");
            // line 30
            echo "

        <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "8519eb6_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8519eb6_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8519eb6_bootstrap.min_5.css");
            // line 30
            echo "

        <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "8519eb6_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8519eb6_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8519eb6_bootstrap-switch.min_6.css");
            // line 30
            echo "

        <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "8519eb6_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8519eb6_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8519eb6_components.min_7.css");
            // line 30
            echo "

        <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "8519eb6_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8519eb6_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8519eb6_plugins.min_8.css");
            // line 30
            echo "

        <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "8519eb6_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8519eb6_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8519eb6_login-2_9.css");
            // line 30
            echo "

        <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        } else {
            // asset "8519eb6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8519eb6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8519eb6.css");
            // line 30
            echo "

        <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 34
        echo "    ";
        
        $__internal_05b5663f4de0a49993e19405514c7ac677a996fdea3200c8e26da40e3b32fa04->leave($__internal_05b5663f4de0a49993e19405514c7ac677a996fdea3200c8e26da40e3b32fa04_prof);

        
        $__internal_a860dfc58539478cdc8cc7bb72163e8c3091f428de586cfcfd9539703fea3ec6->leave($__internal_a860dfc58539478cdc8cc7bb72163e8c3091f428de586cfcfd9539703fea3ec6_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_b41993da6d06f72c460c13ab641ce65dadfd44932161a6b48719b7edceb7a42f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b41993da6d06f72c460c13ab641ce65dadfd44932161a6b48719b7edceb7a42f->enter($__internal_b41993da6d06f72c460c13ab641ce65dadfd44932161a6b48719b7edceb7a42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e016b0cfb8c8a556719c5738e1a9ed43a4afc9a95bb9f3a70d75169ec3898544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e016b0cfb8c8a556719c5738e1a9ed43a4afc9a95bb9f3a70d75169ec3898544->enter($__internal_e016b0cfb8c8a556719c5738e1a9ed43a4afc9a95bb9f3a70d75169ec3898544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_e016b0cfb8c8a556719c5738e1a9ed43a4afc9a95bb9f3a70d75169ec3898544->leave($__internal_e016b0cfb8c8a556719c5738e1a9ed43a4afc9a95bb9f3a70d75169ec3898544_prof);

        
        $__internal_b41993da6d06f72c460c13ab641ce65dadfd44932161a6b48719b7edceb7a42f->leave($__internal_b41993da6d06f72c460c13ab641ce65dadfd44932161a6b48719b7edceb7a42f_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a180400149209dbb5e12954b79fd3053a730f8ddf33b1119c4c5c25f64ceabc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a180400149209dbb5e12954b79fd3053a730f8ddf33b1119c4c5c25f64ceabc2->enter($__internal_a180400149209dbb5e12954b79fd3053a730f8ddf33b1119c4c5c25f64ceabc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_716992dcd004c27f4b45dd8cbda2018562ed1f0a347da3527524bb90090a886d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716992dcd004c27f4b45dd8cbda2018562ed1f0a347da3527524bb90090a886d->enter($__internal_716992dcd004c27f4b45dd8cbda2018562ed1f0a347da3527524bb90090a886d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        ";
        // line 52
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class=\"copyright\"><a href=\"\" class=\"font-white\">B2B</a> ";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " &copy;
            Tous droits réservés
        </div>

    ";
        
        $__internal_716992dcd004c27f4b45dd8cbda2018562ed1f0a347da3527524bb90090a886d->leave($__internal_716992dcd004c27f4b45dd8cbda2018562ed1f0a347da3527524bb90090a886d_prof);

        
        $__internal_a180400149209dbb5e12954b79fd3053a730f8ddf33b1119c4c5c25f64ceabc2->leave($__internal_a180400149209dbb5e12954b79fd3053a730f8ddf33b1119c4c5c25f64ceabc2_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3fca4af16d75e9ef76dcd41681ae0dd24aa4669a2c2c8b0189e7f4f87c3ca9dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fca4af16d75e9ef76dcd41681ae0dd24aa4669a2c2c8b0189e7f4f87c3ca9dc->enter($__internal_3fca4af16d75e9ef76dcd41681ae0dd24aa4669a2c2c8b0189e7f4f87c3ca9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6c0a25bfca7727f27129713d9c4d27d48c31a9047a048e7d5af0fb7756220230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0a25bfca7727f27129713d9c4d27d48c31a9047a048e7d5af0fb7756220230->enter($__internal_6c0a25bfca7727f27129713d9c4d27d48c31a9047a048e7d5af0fb7756220230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a925766_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a925766_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a925766_jquery.min_1.js");
            // line 76
            echo "    ";
            // line 77
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "a925766_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a925766_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a925766_bootstrap.min_2.js");
            // line 76
            echo "    ";
            // line 77
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "a925766_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a925766_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a925766_js.cookie.min_3.js");
            // line 76
            echo "    ";
            // line 77
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "a925766_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a925766_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a925766_jquery.slimscroll.min_4.js");
            // line 76
            echo "    ";
            // line 77
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "a925766_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a925766_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a925766_bootstrap-switch.min_5.js");
            // line 76
            echo "    ";
            // line 77
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "a925766_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a925766_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a925766_jquery.validate.min_6.js");
            // line 76
            echo "    ";
            // line 77
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "a925766_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a925766_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a925766_additional-methods.min_7.js");
            // line 76
            echo "    ";
            // line 77
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "a925766_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a925766_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a925766_jquery.backstretch.min_8.js");
            // line 76
            echo "    ";
            // line 77
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "a925766_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a925766_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a925766_app.min_9.js");
            // line 76
            echo "    ";
            // line 77
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "a925766_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a925766_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a925766_router_10.js");
            // line 76
            echo "    ";
            // line 77
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        } else {
            // asset "a925766"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a925766") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a925766.js");
            // line 76
            echo "    ";
            // line 77
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 79
        echo "    
    <script src=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
";
        
        $__internal_6c0a25bfca7727f27129713d9c4d27d48c31a9047a048e7d5af0fb7756220230->leave($__internal_6c0a25bfca7727f27129713d9c4d27d48c31a9047a048e7d5af0fb7756220230_prof);

        
        $__internal_3fca4af16d75e9ef76dcd41681ae0dd24aa4669a2c2c8b0189e7f4f87c3ca9dc->leave($__internal_3fca4af16d75e9ef76dcd41681ae0dd24aa4669a2c2c8b0189e7f4f87c3ca9dc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  372 => 80,  369 => 79,  362 => 77,  360 => 76,  352 => 77,  350 => 76,  343 => 77,  341 => 76,  334 => 77,  332 => 76,  325 => 77,  323 => 76,  316 => 77,  314 => 76,  307 => 77,  305 => 76,  298 => 77,  296 => 76,  289 => 77,  287 => 76,  280 => 77,  278 => 76,  271 => 77,  269 => 76,  264 => 63,  255 => 62,  240 => 55,  234 => 52,  229 => 49,  227 => 48,  223 => 45,  205 => 44,  202 => 43,  193 => 42,  183 => 34,  177 => 32,  173 => 30,  166 => 32,  162 => 30,  156 => 32,  152 => 30,  146 => 32,  142 => 30,  136 => 32,  132 => 30,  126 => 32,  122 => 30,  116 => 32,  112 => 30,  106 => 32,  102 => 30,  96 => 32,  92 => 30,  87 => 17,  78 => 16,  66 => 82,  64 => 62,  61 => 61,  59 => 42,  56 => 41,  51 => 37,  48 => 35,  46 => 16,  34 => 6,  32 => 4,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% extends \"@FOSUser/layout.html.twig\" %}#}

{#{% block fos_user_content %}#}
    {#{{ include('@FOSUser/Security/login_content.html.twig') }}#}
{#{% endblock fos_user_content %}#}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>HotVideo</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
    <meta content=\"\" name=\"B2B\"/>
    <meta content=\"\" name=\"YanNs\"/>
    {% block stylesheets %}
        {% stylesheets
        'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all'
        'bundles/back/theme/assets/global/plugins/font-awesome/css/font-awesome.min.css'
        'bundles/back/theme/assets/global/plugins/font-awesome/css/font-awesome.min.css'
        'bundles/back/theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css'
        'bundles/back/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css'
        'bundles/back/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'

        'bundles/back/theme/assets/global/css/components.min.css'
        'bundles/back/theme/assets/global/css/plugins.min.css'

        'bundles/back/theme/assets/pages/css/login-2.css'
        filter='cssrewrite' %}


        <link rel=\"stylesheet\" href=\"{{ asset_url }}\"/>
        {% endstylesheets %}
    {% endblock %}

    {#<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>#}
</head>
<body class=\" login\">

{% trans_default_domain 'FOSUserBundle' %}

{% block body %}

    {% block fos_user_content %}
        <div class=\"logo\">
            <h2 class=\"sbold font-white\">B2B</h2>
            {#<h2 class=\"sbold\"><span class=\"font-white\">B</span><span class=\"font-red-mint\">2</span><span class=\"font-white\">B</span></h2>#}
            {#<img src=\"{{ asset('bundles/back/theme/assets/pages/img/logo-big.png') }}\" alt=\"\"/>#}
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        {{ include('@FOSUser/Security/login_content.html.twig') }}
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class=\"copyright\"><a href=\"\" class=\"font-white\">B2B</a> {{ \"now\"|date(\"Y\") }} &copy;
            Tous droits réservés
        </div>

    {% endblock fos_user_content %}
{% endblock body %}

{% block javascripts %}
    {% javascripts
    'bundles/back/theme/assets/global/plugins/jquery.min.js'
    'bundles/back/theme/assets/global/plugins/bootstrap/js/bootstrap.min.js'
    'bundles/back/theme/assets/global/plugins/js.cookie.min.js'
    'bundles/back/theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'
    'bundles/back/theme/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'

    'bundles/back/theme/assets/global/plugins/jquery-validation/js/jquery.validate.min.js'
    'bundles/back/theme/assets/global/plugins/jquery-validation/js/additional-methods.min.js'
    'bundles/back/theme/assets/global/plugins/backstretch/jquery.backstretch.min.js'

    'bundles/back/theme/assets/global/scripts/app.min.js'
    \"bundles/fosjsrouting/js/router.js\" %}
    {#<!-- END CORE PLUGINS -->#}
    <script src=\"{{ asset_url }}\" type=\"text/javascript\"></script>
    {% endjavascripts %}
    
    <script src=\"{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}\"></script>
{% endblock %}
</body>
</html>
", "@FOSUser/Security/login.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
