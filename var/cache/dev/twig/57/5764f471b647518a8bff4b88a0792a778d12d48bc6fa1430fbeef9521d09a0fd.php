<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_a4d5b7fcbf7f26741e35d6b36bf30a1cd376d22dfd9be7c4210e6959c1c0371a extends Twig_Template
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
        $__internal_2b39e844bcdd72c3e24b2ffce1cec81f865b34d057cfc8a7bff858c0019d09a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b39e844bcdd72c3e24b2ffce1cec81f865b34d057cfc8a7bff858c0019d09a7->enter($__internal_2b39e844bcdd72c3e24b2ffce1cec81f865b34d057cfc8a7bff858c0019d09a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_c7943e53249f9fd0ca77ae9be32ca7cf58ae29d743713fa23b0119def10fb926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7943e53249f9fd0ca77ae9be32ca7cf58ae29d743713fa23b0119def10fb926->enter($__internal_c7943e53249f9fd0ca77ae9be32ca7cf58ae29d743713fa23b0119def10fb926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

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
        // line 83
        echo "</body>
</html>
";
        
        $__internal_2b39e844bcdd72c3e24b2ffce1cec81f865b34d057cfc8a7bff858c0019d09a7->leave($__internal_2b39e844bcdd72c3e24b2ffce1cec81f865b34d057cfc8a7bff858c0019d09a7_prof);

        
        $__internal_c7943e53249f9fd0ca77ae9be32ca7cf58ae29d743713fa23b0119def10fb926->leave($__internal_c7943e53249f9fd0ca77ae9be32ca7cf58ae29d743713fa23b0119def10fb926_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e20b377786a0f37119a0ab579b29289bb418d9b46de3b3f95d4e1ed5e55eebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e20b377786a0f37119a0ab579b29289bb418d9b46de3b3f95d4e1ed5e55eebf->enter($__internal_7e20b377786a0f37119a0ab579b29289bb418d9b46de3b3f95d4e1ed5e55eebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b8d58b1f74907c8e25f6adb4463906fa0972a44efe72f94d22be85a02d27345c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d58b1f74907c8e25f6adb4463906fa0972a44efe72f94d22be85a02d27345c->enter($__internal_b8d58b1f74907c8e25f6adb4463906fa0972a44efe72f94d22be85a02d27345c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b8d58b1f74907c8e25f6adb4463906fa0972a44efe72f94d22be85a02d27345c->leave($__internal_b8d58b1f74907c8e25f6adb4463906fa0972a44efe72f94d22be85a02d27345c_prof);

        
        $__internal_7e20b377786a0f37119a0ab579b29289bb418d9b46de3b3f95d4e1ed5e55eebf->leave($__internal_7e20b377786a0f37119a0ab579b29289bb418d9b46de3b3f95d4e1ed5e55eebf_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ab2e583cba54ab93cf7e625da7ba8d982710be24545382515ae06f5fa485c5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ab2e583cba54ab93cf7e625da7ba8d982710be24545382515ae06f5fa485c5c->enter($__internal_4ab2e583cba54ab93cf7e625da7ba8d982710be24545382515ae06f5fa485c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b57d71b69cb9fef5bbbfca3ec792d98b95aaf3638774982791ac9b78fc2a7319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57d71b69cb9fef5bbbfca3ec792d98b95aaf3638774982791ac9b78fc2a7319->enter($__internal_b57d71b69cb9fef5bbbfca3ec792d98b95aaf3638774982791ac9b78fc2a7319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_b57d71b69cb9fef5bbbfca3ec792d98b95aaf3638774982791ac9b78fc2a7319->leave($__internal_b57d71b69cb9fef5bbbfca3ec792d98b95aaf3638774982791ac9b78fc2a7319_prof);

        
        $__internal_4ab2e583cba54ab93cf7e625da7ba8d982710be24545382515ae06f5fa485c5c->leave($__internal_4ab2e583cba54ab93cf7e625da7ba8d982710be24545382515ae06f5fa485c5c_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f8787f23ecb60d59604afdf767f322cb92672d7d5ff1e660de8852a4066e1db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f8787f23ecb60d59604afdf767f322cb92672d7d5ff1e660de8852a4066e1db->enter($__internal_9f8787f23ecb60d59604afdf767f322cb92672d7d5ff1e660de8852a4066e1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_29aa05ad5306af85922b747f894ecdd75722a5cd953be19326565405252d861a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29aa05ad5306af85922b747f894ecdd75722a5cd953be19326565405252d861a->enter($__internal_29aa05ad5306af85922b747f894ecdd75722a5cd953be19326565405252d861a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_29aa05ad5306af85922b747f894ecdd75722a5cd953be19326565405252d861a->leave($__internal_29aa05ad5306af85922b747f894ecdd75722a5cd953be19326565405252d861a_prof);

        
        $__internal_9f8787f23ecb60d59604afdf767f322cb92672d7d5ff1e660de8852a4066e1db->leave($__internal_9f8787f23ecb60d59604afdf767f322cb92672d7d5ff1e660de8852a4066e1db_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2a641f3036ce8c20a97ff61fd81a34137409c162af10909ad595fd74969487f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a641f3036ce8c20a97ff61fd81a34137409c162af10909ad595fd74969487f3->enter($__internal_2a641f3036ce8c20a97ff61fd81a34137409c162af10909ad595fd74969487f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e83a793c10b85707dcaed8591dd28a0b53c049ec747cada841aec085ae9b7f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e83a793c10b85707dcaed8591dd28a0b53c049ec747cada841aec085ae9b7f81->enter($__internal_e83a793c10b85707dcaed8591dd28a0b53c049ec747cada841aec085ae9b7f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2977f45_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2977f45_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2977f45_jquery.min_1.js");
            // line 78
            echo "    ";
            // line 79
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "2977f45_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2977f45_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2977f45_bootstrap.min_2.js");
            // line 78
            echo "    ";
            // line 79
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "2977f45_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2977f45_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2977f45_js.cookie.min_3.js");
            // line 78
            echo "    ";
            // line 79
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "2977f45_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2977f45_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2977f45_jquery.slimscroll.min_4.js");
            // line 78
            echo "    ";
            // line 79
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "2977f45_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2977f45_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2977f45_bootstrap-switch.min_5.js");
            // line 78
            echo "    ";
            // line 79
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "2977f45_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2977f45_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2977f45_jquery.validate.min_6.js");
            // line 78
            echo "    ";
            // line 79
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "2977f45_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2977f45_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2977f45_additional-methods.min_7.js");
            // line 78
            echo "    ";
            // line 79
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "2977f45_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2977f45_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2977f45_jquery.backstretch.min_8.js");
            // line 78
            echo "    ";
            // line 79
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "2977f45_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2977f45_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2977f45_app.min_9.js");
            // line 78
            echo "    ";
            // line 79
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "2977f45_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2977f45_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2977f45_login_10.js");
            // line 78
            echo "    ";
            // line 79
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "2977f45_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2977f45_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2977f45_router_11.js");
            // line 78
            echo "    ";
            // line 79
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        } else {
            // asset "2977f45"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2977f45") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2977f45.js");
            // line 78
            echo "    ";
            // line 79
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 81
        echo "    <script src=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
";
        
        $__internal_e83a793c10b85707dcaed8591dd28a0b53c049ec747cada841aec085ae9b7f81->leave($__internal_e83a793c10b85707dcaed8591dd28a0b53c049ec747cada841aec085ae9b7f81_prof);

        
        $__internal_2a641f3036ce8c20a97ff61fd81a34137409c162af10909ad595fd74969487f3->leave($__internal_2a641f3036ce8c20a97ff61fd81a34137409c162af10909ad595fd74969487f3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  378 => 81,  371 => 79,  369 => 78,  361 => 79,  359 => 78,  352 => 79,  350 => 78,  343 => 79,  341 => 78,  334 => 79,  332 => 78,  325 => 79,  323 => 78,  316 => 79,  314 => 78,  307 => 79,  305 => 78,  298 => 79,  296 => 78,  289 => 79,  287 => 78,  280 => 79,  278 => 78,  271 => 79,  269 => 78,  264 => 63,  255 => 62,  240 => 55,  234 => 52,  229 => 49,  227 => 48,  223 => 45,  205 => 44,  202 => 43,  193 => 42,  183 => 34,  177 => 32,  173 => 30,  166 => 32,  162 => 30,  156 => 32,  152 => 30,  146 => 32,  142 => 30,  136 => 32,  132 => 30,  126 => 32,  122 => 30,  116 => 32,  112 => 30,  106 => 32,  102 => 30,  96 => 32,  92 => 30,  87 => 17,  78 => 16,  66 => 83,  64 => 62,  61 => 61,  59 => 42,  56 => 41,  51 => 37,  48 => 35,  46 => 16,  34 => 6,  32 => 4,  29 => 2,);
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
    'bundles/back/theme/assets/pages/scripts/login.js'

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
