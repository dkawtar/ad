<?php

/* BackBundle::layout.html.twig */
class __TwigTemplate_0060517d136be14d90522cbad8d90269e3173d5e0a8962258306044887596f6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BackBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'back_body_header' => array($this, 'block_back_body_header'),
            'header_breadcrumb' => array($this, 'block_header_breadcrumb'),
            'action_toolbar' => array($this, 'block_action_toolbar'),
            'page_title' => array($this, 'block_page_title'),
            'page_sub_title' => array($this, 'block_page_sub_title'),
            'back_body' => array($this, 'block_back_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52d6ab718a2c4d4cc515e0cb4ac1eb1378c67b7ea488602bc26330c19fefcb7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d6ab718a2c4d4cc515e0cb4ac1eb1378c67b7ea488602bc26330c19fefcb7f->enter($__internal_52d6ab718a2c4d4cc515e0cb4ac1eb1378c67b7ea488602bc26330c19fefcb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle::layout.html.twig"));

        $__internal_067ffcab0e52516f964ba3336a13dd426089c8f0e0f3344b843e953f5e2ebd13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067ffcab0e52516f964ba3336a13dd426089c8f0e0f3344b843e953f5e2ebd13->enter($__internal_067ffcab0e52516f964ba3336a13dd426089c8f0e0f3344b843e953f5e2ebd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52d6ab718a2c4d4cc515e0cb4ac1eb1378c67b7ea488602bc26330c19fefcb7f->leave($__internal_52d6ab718a2c4d4cc515e0cb4ac1eb1378c67b7ea488602bc26330c19fefcb7f_prof);

        
        $__internal_067ffcab0e52516f964ba3336a13dd426089c8f0e0f3344b843e953f5e2ebd13->leave($__internal_067ffcab0e52516f964ba3336a13dd426089c8f0e0f3344b843e953f5e2ebd13_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_778d55aff34d57cbc81121d7198f97e89bf702a923bb7cde4314c9d1075a2765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778d55aff34d57cbc81121d7198f97e89bf702a923bb7cde4314c9d1075a2765->enter($__internal_778d55aff34d57cbc81121d7198f97e89bf702a923bb7cde4314c9d1075a2765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f566e48923a5c37d4933e7f831ccf91d3137d229920786da7d0546172ef182cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f566e48923a5c37d4933e7f831ccf91d3137d229920786da7d0546172ef182cd->enter($__internal_f566e48923a5c37d4933e7f831ccf91d3137d229920786da7d0546172ef182cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7293b1a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7293b1a_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7293b1a_bootstrap-switch.min_1.css");
            // line 14
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "7293b1a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7293b1a_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7293b1a_components.min_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "7293b1a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7293b1a_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7293b1a_plugins.min_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "7293b1a_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7293b1a_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7293b1a_layout.min_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "7293b1a_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7293b1a_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7293b1a_darkblue.min_5.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "7293b1a_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7293b1a_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7293b1a_custom.min_6.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "7293b1a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7293b1a") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7293b1a.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_f566e48923a5c37d4933e7f831ccf91d3137d229920786da7d0546172ef182cd->leave($__internal_f566e48923a5c37d4933e7f831ccf91d3137d229920786da7d0546172ef182cd_prof);

        
        $__internal_778d55aff34d57cbc81121d7198f97e89bf702a923bb7cde4314c9d1075a2765->leave($__internal_778d55aff34d57cbc81121d7198f97e89bf702a923bb7cde4314c9d1075a2765_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_86b63f16d083dbd2fc90d320770b4340b04a3b6727320f0b505784540319e09e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b63f16d083dbd2fc90d320770b4340b04a3b6727320f0b505784540319e09e->enter($__internal_86b63f16d083dbd2fc90d320770b4340b04a3b6727320f0b505784540319e09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1077f8fa3a01a3dbeecc514dfbf5348dc08f8941a3a492892f366e947edbfba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1077f8fa3a01a3dbeecc514dfbf5348dc08f8941a3a492892f366e947edbfba7->enter($__internal_1077f8fa3a01a3dbeecc514dfbf5348dc08f8941a3a492892f366e947edbfba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div class=\"page-wrapper\">
        <!-- BEGIN HEADER -->
        <div class=\"page-header navbar navbar-fixed-top\">
            <!-- BEGIN HEADER INNER -->
            <div class=\"page-header-inner \">
                <!-- BEGIN LOGO -->
                <div class=\"page-logo\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home");
        echo "\">
                        <h3 class=\"caption-subject bold logo_nabar\" style=\"margin-top:13px; margin-left: 10px;\">
                            <span class=\"font-white uppercase\">B</span><span
                                    class=\"font-red-mint uppercase\">2</span><span class=\"font-white uppercase\">B</span>
                        </h3>
                    </a>
                    ";
        // line 33
        echo "                    <div class=\"menu-toggler sidebar-toggler\">
                        <span></span>
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\"
                   data-target=\".navbar-collapse\">
                    <span></span>
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class=\"top-menu\">
                    <ul class=\"nav navbar-nav pull-right\">
                        <li class=\"dropdown dropdown-user\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"
                               data-close-others=\"true\">
                                <img alt=\"\" class=\"img-circle\"
                                     src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/theme/assets/layouts/layout/img/avatar.png"), "html", null, true);
        echo "\"/>
                                ";
        // line 52
        if (($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true) && $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()))) {
            // line 53
            echo "                                    <span class=\"username username-hide-on-mobile\"> ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
            echo " </span>
                                ";
        }
        // line 55
        echo "                                <i class=\"fa fa-angle-down\"></i>
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-default\">
                                <li>
                                    <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">
                                        <i class=\"icon-settings\"></i> Mon compte
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">
                                        <i class=\"icon-key\"></i> Mot de passe
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                                        <i class=\"icon-logout\"></i>
                                        Déconnexion </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                        <li class=\"dropdown dropdown-quick-sidebar-toggler\">
                            <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"dropdown-toggle\"
                               title=\"Se Déconnecter\">
                                <i class=\"icon-logout\"></i>
                            </a>
                        </li>
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->

        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class=\"clearfix\"></div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN SIDEBAR -->
            <div class=\"page-sidebar-wrapper\">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                <div class=\"page-sidebar navbar-collapse collapse\">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply \"page-sidebar-menu-light\" class right after \"page-sidebar-menu\" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply \"page-sidebar-menu-hover-submenu\" class right after \"page-sidebar-menu\" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply \"page-sidebar-menu-closed\" class right after \"page-sidebar-menu\" to collapse(\"page-sidebar-closed\" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand=\"true\" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                    <ul class=\"page-sidebar-menu  page-header-fixed \" data-keep-expanded=\"false\" data-auto-scroll=\"true\"
                        data-slide-speed=\"200\" style=\"padding-top: 20px\">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below \"sidebar-toggler-wrapper\" LI element -->
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        <li class=\"sidebar-toggler-wrapper hide\">
                            <div class=\"sidebar-toggler\">
                                <span></span>
                            </div>
                        </li>
                        <!-- END SIDEBAR TOGGLER BUTTON -->

                        ";
        // line 124
        $context["routeName"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method");
        // line 125
        echo "                        <li ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "requestUri", array()) == $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home"))) {
            echo " class=\"nav-item start active open\" ";
        } else {
            echo " class=\"nav-item start\" ";
        }
        echo ">
                            <a href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home");
        echo "\" class=\"nav-link nav-toggle\">
                                <i class=\"icon-home\"></i>
                                <span class=\"title\">Dashboard</span>
                                ";
        // line 129
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "requestUri", array()) == $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home"))) {
            // line 130
            echo "                                    <span class=\"selected\"></span>
                                ";
        }
        // line 132
        echo "                            </a>
                        </li>
                        <li class=\"heading\">
                            <h3 class=\"uppercase\">CONTENUS</h3>
                        </li>
                        ";
        // line 137
        $context["customerRoute"] = array(0 => "back_user_reset_password", 1 => "back_splashcreen_list");
        // line 138
        echo "                        <li ";
        if (twig_in_filter(($context["routeName"] ?? $this->getContext($context, "routeName")), ($context["customerRoute"] ?? $this->getContext($context, "customerRoute")))) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                <i class=\"icon-user \"></i>
                                <span class=\"title\">Client</span>
                                ";
        // line 142
        if (twig_in_filter(($context["routeName"] ?? $this->getContext($context, "routeName")), ($context["customerRoute"] ?? $this->getContext($context, "customerRoute")))) {
            // line 143
            echo "                                    <span class=\"selected\"></span>
                                    <span class=\"arrow open\"></span>
                                ";
        } else {
            // line 146
            echo "                                    <span class=\"arrow\"></span>
                                ";
        }
        // line 148
        echo "                            </a>
                            <ul class=\"sub-menu\">
                                ";
        // line 150
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_edit")) {
            // line 151
            echo "                                    <li class=\"nav-item active\">
                                        <a href=\"javascript:;\" class=\"nav-link \">
                                            <i class=\"icon-pencil\"></i>
                                            <span class=\"title\">Edition</span>
                                            <span class=\"selected\"></span>
                                        </a>
                                    </li>
                                ";
        }
        // line 159
        echo "                                <li ";
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_list")) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
                                    <a href=\"";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home");
        echo "\" class=\"nav-link \">
                                        <i class=\"icon-list\"></i>
                                        <span class=\"title\">Liste</span>
                                        ";
        // line 163
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_list")) {
            // line 164
            echo "                                            <span class=\"selected\"></span>
                                        ";
        }
        // line 166
        echo "                                    </a>
                                </li>
                                <li ";
        // line 168
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_add")) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
                                    <a href=\"";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home");
        echo "\" class=\"nav-link \">
                                        <i class=\"icon-plus\"></i>
                                        <span class=\"title\">Ajout</span>
                                        ";
        // line 172
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_add")) {
            // line 173
            echo "                                            <span class=\"selected\"></span>
                                        ";
        }
        // line 175
        echo "                                    </a>
                                </li>
                            </ul>
                        </li>

                        ";
        // line 180
        $context["customerRoute"] = array(0 => "back_user_reset_password", 1 => "back_splashcreen_list");
        // line 181
        echo "                        <li ";
        if (twig_in_filter(($context["routeName"] ?? $this->getContext($context, "routeName")), ($context["customerRoute"] ?? $this->getContext($context, "customerRoute")))) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                <i class=\"icon-earphones-alt\"></i>
                                <span class=\"title\">Commercial</span>
                                ";
        // line 185
        if (twig_in_filter(($context["routeName"] ?? $this->getContext($context, "routeName")), ($context["customerRoute"] ?? $this->getContext($context, "customerRoute")))) {
            // line 186
            echo "                                    <span class=\"selected\"></span>
                                    <span class=\"arrow open\"></span>
                                ";
        } else {
            // line 189
            echo "                                    <span class=\"arrow\"></span>
                                ";
        }
        // line 191
        echo "                            </a>
                            <ul class=\"sub-menu\">
                                ";
        // line 193
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_edit")) {
            // line 194
            echo "                                    <li class=\"nav-item active\">
                                        <a href=\"javascript:;\" class=\"nav-link \">
                                            <i class=\"icon-pencil\"></i>
                                            <span class=\"title\">Edition</span>
                                            <span class=\"selected\"></span>
                                        </a>
                                    </li>
                                ";
        }
        // line 202
        echo "                                <li ";
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_list")) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
                                    <a href=\"";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home");
        echo "\" class=\"nav-link \">
                                        <i class=\"icon-list\"></i>
                                        <span class=\"title\">Liste</span>
                                        ";
        // line 206
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_list")) {
            // line 207
            echo "                                            <span class=\"selected\"></span>
                                        ";
        }
        // line 209
        echo "                                    </a>
                                </li>
                                <li ";
        // line 211
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_add")) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
                                    <a href=\"";
        // line 212
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home");
        echo "\" class=\"nav-link \">
                                        <i class=\"icon-plus\"></i>
                                        <span class=\"title\">Ajout</span>
                                        ";
        // line 215
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_add")) {
            // line 216
            echo "                                            <span class=\"selected\"></span>
                                        ";
        }
        // line 218
        echo "                                    </a>
                                </li>
                            </ul>
                        </li>

                        ";
        // line 223
        $context["customerRoute"] = array(0 => "back_user_reset_password", 1 => "back_splashcreen_list");
        // line 224
        echo "                        <li ";
        if (twig_in_filter(($context["routeName"] ?? $this->getContext($context, "routeName")), ($context["customerRoute"] ?? $this->getContext($context, "customerRoute")))) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                <i class=\"icon-basket-loaded\"></i>
                                <span class=\"title\">Commande</span>
                                ";
        // line 228
        if (twig_in_filter(($context["routeName"] ?? $this->getContext($context, "routeName")), ($context["customerRoute"] ?? $this->getContext($context, "customerRoute")))) {
            // line 229
            echo "                                    <span class=\"selected\"></span>
                                    <span class=\"arrow open\"></span>
                                ";
        } else {
            // line 232
            echo "                                    <span class=\"arrow\"></span>
                                ";
        }
        // line 234
        echo "                            </a>
                            <ul class=\"sub-menu\">
                                ";
        // line 236
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_edit")) {
            // line 237
            echo "                                    <li class=\"nav-item active\">
                                        <a href=\"javascript:;\" class=\"nav-link \">
                                            <i class=\"icon-pencil\"></i>
                                            <span class=\"title\">Edition</span>
                                            <span class=\"selected\"></span>
                                        </a>
                                    </li>
                                ";
        }
        // line 245
        echo "                                <li ";
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_list")) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
                                    <a href=\"";
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home");
        echo "\" class=\"nav-link \">
                                        <i class=\"icon-list\"></i>
                                        <span class=\"title\">Liste</span>
                                        ";
        // line 249
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_list")) {
            // line 250
            echo "                                            <span class=\"selected\"></span>
                                        ";
        }
        // line 252
        echo "                                    </a>
                                </li>
                                <li ";
        // line 254
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_add")) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
                                    <a href=\"";
        // line 255
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home");
        echo "\" class=\"nav-link \">
                                        <i class=\"icon-plus\"></i>
                                        <span class=\"title\">Ajout</span>
                                        ";
        // line 258
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_add")) {
            // line 259
            echo "                                            <span class=\"selected\"></span>
                                        ";
        }
        // line 261
        echo "                                    </a>
                                </li>
                            </ul>
                        </li>
                        ";
        // line 265
        $context["customerRoute"] = array(0 => "back_user_reset_password", 1 => "back_splashcreen_list");
        // line 266
        echo "                        <li ";
        if (twig_in_filter(($context["routeName"] ?? $this->getContext($context, "routeName")), ($context["customerRoute"] ?? $this->getContext($context, "customerRoute")))) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                <i class=\"icon-layers\"></i>
                                <span class=\"title\">Catalogue</span>
                                ";
        // line 270
        if (twig_in_filter(($context["routeName"] ?? $this->getContext($context, "routeName")), ($context["customerRoute"] ?? $this->getContext($context, "customerRoute")))) {
            // line 271
            echo "                                    <span class=\"selected\"></span>
                                    <span class=\"arrow open\"></span>
                                ";
        } else {
            // line 274
            echo "                                    <span class=\"arrow\"></span>
                                ";
        }
        // line 276
        echo "                            </a>
                            <ul class=\"sub-menu\">
                                ";
        // line 278
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_edit")) {
            // line 279
            echo "                                    <li class=\"nav-item active\">
                                        <a href=\"javascript:;\" class=\"nav-link \">
                                            <i class=\"icon-pencil\"></i>
                                            <span class=\"title\">Edition</span>
                                            <span class=\"selected\"></span>
                                        </a>
                                    </li>
                                ";
        }
        // line 287
        echo "                                <li ";
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_list")) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
                                    <a href=\"";
        // line 288
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home");
        echo "\" class=\"nav-link \">
                                        <i class=\"icon-list\"></i>
                                        <span class=\"title\">Liste</span>
                                        ";
        // line 291
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_list")) {
            // line 292
            echo "                                            <span class=\"selected\"></span>
                                        ";
        }
        // line 294
        echo "                                    </a>
                                </li>
                                <li ";
        // line 296
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_add")) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
                                    <a href=\"";
        // line 297
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home");
        echo "\" class=\"nav-link \">
                                        <i class=\"icon-plus\"></i>
                                        <span class=\"title\">Ajout</span>
                                        ";
        // line 300
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_add")) {
            // line 301
            echo "                                            <span class=\"selected\"></span>
                                        ";
        }
        // line 303
        echo "                                    </a>
                                </li>
                            </ul>
                        </li>

                        ";
        // line 308
        $context["customerRoute"] = array(0 => "back_user_reset_password", 1 => "back_splashcreen_list");
        // line 309
        echo "                        <li ";
        if (twig_in_filter(($context["routeName"] ?? $this->getContext($context, "routeName")), ($context["customerRoute"] ?? $this->getContext($context, "customerRoute")))) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                <i class=\"icon-briefcase\"></i>
                                <span class=\"title\">Fiche société</span>
                                ";
        // line 313
        if (twig_in_filter(($context["routeName"] ?? $this->getContext($context, "routeName")), ($context["customerRoute"] ?? $this->getContext($context, "customerRoute")))) {
            // line 314
            echo "                                    <span class=\"selected\"></span>
                                    <span class=\"arrow open\"></span>
                                ";
        } else {
            // line 317
            echo "                                    <span class=\"arrow\"></span>
                                ";
        }
        // line 319
        echo "                            </a>
                            <ul class=\"sub-menu\">
                                ";
        // line 321
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_edit")) {
            // line 322
            echo "                                    <li class=\"nav-item active\">
                                        <a href=\"javascript:;\" class=\"nav-link \">
                                            <i class=\"icon-pencil\"></i>
                                            <span class=\"title\">Edition</span>
                                            <span class=\"selected\"></span>
                                        </a>
                                    </li>
                                ";
        }
        // line 330
        echo "                                <li ";
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_list")) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
                                    <a href=\"";
        // line 331
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home");
        echo "\" class=\"nav-link \">
                                        <i class=\"icon-list\"></i>
                                        <span class=\"title\">Liste</span>
                                        ";
        // line 334
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_list")) {
            // line 335
            echo "                                            <span class=\"selected\"></span>
                                        ";
        }
        // line 337
        echo "                                    </a>
                                </li>
                                <li ";
        // line 339
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_add")) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
                                    <a href=\"";
        // line 340
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home");
        echo "\" class=\"nav-link \">
                                        <i class=\"icon-plus\"></i>
                                        <span class=\"title\">Ajout</span>
                                        ";
        // line 343
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_splashcreen_add")) {
            // line 344
            echo "                                            <span class=\"selected\"></span>
                                        ";
        }
        // line 346
        echo "                                    </a>
                                </li>
                            </ul>
                        </li>
                        ";
        // line 350
        $context["customerRoute"] = array(0 => "back_user_reset_password", 1 => "back_splashcreen_list");
        // line 351
        echo "                        <li ";
        if (twig_in_filter(($context["routeName"] ?? $this->getContext($context, "routeName")), ($context["customerRoute"] ?? $this->getContext($context, "customerRoute")))) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                <i class=\"icon-doc\"></i>
                                <span class=\"title\">PDF de présentation</span>
                                ";
        // line 355
        if (twig_in_filter(($context["routeName"] ?? $this->getContext($context, "routeName")), ($context["customerRoute"] ?? $this->getContext($context, "customerRoute")))) {
            // line 356
            echo "                                    <span class=\"selected\"></span>

                                ";
        }
        // line 359
        echo "                            </a>
                        </li>
                        ";
        // line 361
        $context["customerRoute"] = array(0 => "back_groupes_list");
        // line 362
        echo "                        <li ";
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_groupes_list")) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                <i class=\"icon-users\"></i>
                                <span class=\"title\">Groupes</span>
                                ";
        // line 366
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "back_groupes_list")) {
            // line 367
            echo "                                    <span class=\"selected\"></span>

                                ";
        }
        // line 370
        echo "                            </a>
                        </li>
                        <li class=\"heading\">
                            <h3 class=\"uppercase\">Autres</h3>
                        </li>


                        ";
        // line 378
        echo "                        <li ";
        if ((($context["routeName"] ?? $this->getContext($context, "routeName")) == "nelmio_api_doc_index")) {
            echo " class=\"nav-item active\" ";
        } else {
            echo " class=\"nav-item\" ";
        }
        echo ">
                            <a href=\"\" ";
        // line 380
        echo "                               title=\"Documentation API\" class=\"nav-link nav-toggle\">
                                <i class=\"icon-book-open\"></i>
                                <span class=\"title\">API DOC</span>
                            </a>
                        </li>
                        ";
        // line 386
        echo "
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 388
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"
                               title=\"Se déconnecter\" class=\"nav-link nav-toggle\">
                                <i class=\"icon-logout\"></i>
                                <span class=\"title\">Déconnexion</span>
                            </a>
                        </li>

                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->

            <div class=\"page-content-wrapper\">
                <!-- BEGIN CONTENT BODY -->
                <div class=\"page-content\">
                    <!-- BEGIN PAGE HEADER-->

                    ";
        // line 409
        $this->displayBlock('back_body_header', $context, $blocks);
        // line 460
        echo "                    ";
        // line 461
        echo "                    <div class=\"row\">
                        ";
        // line 462
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 463
            echo "                            <div class=\"col-md-12 col-sm-12\">
                                ";
            // line 464
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 465
                echo "                                    <div class=\" alert ";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\"
                                                aria-hidden=\"true\"></button>
                                        ";
                // line 468
                echo $context["message"];
                echo "
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 471
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 473
        echo "                    </div>

                    <!-- END THEME PANEL -->
                    ";
        // line 476
        $this->displayBlock('back_body', $context, $blocks);
        // line 477
        echo "                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href=\"javascript:;\" class=\"page-quick-sidebar-toggler\">
                <i class=\"icon-login\"></i>
            </a>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class=\"page-footer\">
            <div class=\"page-footer-inner\">B2B ";
        // line 490
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " &copy; Tous droits réservés
            </div>
            <div class=\"scroll-to-top\">
                <i class=\"icon-arrow-up\"></i>
            </div>
        </div>
        <!-- END FOOTER -->
    </div>

";
        
        $__internal_1077f8fa3a01a3dbeecc514dfbf5348dc08f8941a3a492892f366e947edbfba7->leave($__internal_1077f8fa3a01a3dbeecc514dfbf5348dc08f8941a3a492892f366e947edbfba7_prof);

        
        $__internal_86b63f16d083dbd2fc90d320770b4340b04a3b6727320f0b505784540319e09e->leave($__internal_86b63f16d083dbd2fc90d320770b4340b04a3b6727320f0b505784540319e09e_prof);

    }

    // line 409
    public function block_back_body_header($context, array $blocks = array())
    {
        $__internal_fbe9e903cf3e531b1099f59e35882c493538b2e697408b78a84a22debefffc50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe9e903cf3e531b1099f59e35882c493538b2e697408b78a84a22debefffc50->enter($__internal_fbe9e903cf3e531b1099f59e35882c493538b2e697408b78a84a22debefffc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "back_body_header"));

        $__internal_93088d7f914476e131840216e15e2324bde2b134f1b7b18119754a4a49e8bbd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93088d7f914476e131840216e15e2324bde2b134f1b7b18119754a4a49e8bbd3->enter($__internal_93088d7f914476e131840216e15e2324bde2b134f1b7b18119754a4a49e8bbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "back_body_header"));

        // line 410
        echo "                        <!-- BEGIN PAGE BAR -->
                        <div class=\"page-bar\">
                            <ul class=\"page-breadcrumb\">
                                <li>
                                    <a href=\"";
        // line 414
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home");
        echo "\"><i class=\"fa fa-home\"></i></a>
                                    <i class=\"fa fa-circle\"></i>
                                </li>
                                ";
        // line 417
        $this->displayBlock('header_breadcrumb', $context, $blocks);
        // line 422
        echo "                            </ul>
                            <div class=\"page-toolbar\">
                                ";
        // line 424
        $this->displayBlock('action_toolbar', $context, $blocks);
        // line 451
        echo "                            </div>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class=\"page-title\">";
        // line 455
        $this->displayBlock('page_title', $context, $blocks);
        // line 456
        echo "                            ";
        $this->displayBlock('page_sub_title', $context, $blocks);
        // line 458
        echo "                        </h1>
                    ";
        
        $__internal_93088d7f914476e131840216e15e2324bde2b134f1b7b18119754a4a49e8bbd3->leave($__internal_93088d7f914476e131840216e15e2324bde2b134f1b7b18119754a4a49e8bbd3_prof);

        
        $__internal_fbe9e903cf3e531b1099f59e35882c493538b2e697408b78a84a22debefffc50->leave($__internal_fbe9e903cf3e531b1099f59e35882c493538b2e697408b78a84a22debefffc50_prof);

    }

    // line 417
    public function block_header_breadcrumb($context, array $blocks = array())
    {
        $__internal_91e527852b2c5fe3d9f158d8b2f107b94a77a372c8ab11aa71697b6212ec3694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e527852b2c5fe3d9f158d8b2f107b94a77a372c8ab11aa71697b6212ec3694->enter($__internal_91e527852b2c5fe3d9f158d8b2f107b94a77a372c8ab11aa71697b6212ec3694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_breadcrumb"));

        $__internal_d065d0a5defffb73bbf0fefeabadf303ee69bff37691141284b932f5a8f65ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d065d0a5defffb73bbf0fefeabadf303ee69bff37691141284b932f5a8f65ac1->enter($__internal_d065d0a5defffb73bbf0fefeabadf303ee69bff37691141284b932f5a8f65ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_breadcrumb"));

        // line 418
        echo "                                    <li>
                                        <span>Liste</span>
                                    </li>
                                ";
        
        $__internal_d065d0a5defffb73bbf0fefeabadf303ee69bff37691141284b932f5a8f65ac1->leave($__internal_d065d0a5defffb73bbf0fefeabadf303ee69bff37691141284b932f5a8f65ac1_prof);

        
        $__internal_91e527852b2c5fe3d9f158d8b2f107b94a77a372c8ab11aa71697b6212ec3694->leave($__internal_91e527852b2c5fe3d9f158d8b2f107b94a77a372c8ab11aa71697b6212ec3694_prof);

    }

    // line 424
    public function block_action_toolbar($context, array $blocks = array())
    {
        $__internal_2fea02b8b61ad82cc8c44c9892bafe5eed5d18fe141dfa2d56cbc98713a6ef9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fea02b8b61ad82cc8c44c9892bafe5eed5d18fe141dfa2d56cbc98713a6ef9e->enter($__internal_2fea02b8b61ad82cc8c44c9892bafe5eed5d18fe141dfa2d56cbc98713a6ef9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "action_toolbar"));

        $__internal_f3a90f0ac728e34893966473245762fffa8772c4066e2ecc2d025c10b3f47a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a90f0ac728e34893966473245762fffa8772c4066e2ecc2d025c10b3f47a94->enter($__internal_f3a90f0ac728e34893966473245762fffa8772c4066e2ecc2d025c10b3f47a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "action_toolbar"));

        // line 425
        echo "                                    <div class=\"btn-group pull-right\">
                                        <button type=\"button\" class=\"btn green btn-sm btn-outline dropdown-toggle\"
                                                data-toggle=\"dropdown\"> Actions
                                            <i class=\"fa fa-angle-down\"></i>
                                        </button>
                                        <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"icon-bell\"></i> Vidéos</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"icon-shield\"></i> Catalogues</a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"icon-user\"></i> Rubric</a>
                                            </li>
                                            <li class=\"divider\"></li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"icon-bag\"></i> Abonnements</a>
                                            </li>
                                        </ul>
                                    </div>
                                ";
        
        $__internal_f3a90f0ac728e34893966473245762fffa8772c4066e2ecc2d025c10b3f47a94->leave($__internal_f3a90f0ac728e34893966473245762fffa8772c4066e2ecc2d025c10b3f47a94_prof);

        
        $__internal_2fea02b8b61ad82cc8c44c9892bafe5eed5d18fe141dfa2d56cbc98713a6ef9e->leave($__internal_2fea02b8b61ad82cc8c44c9892bafe5eed5d18fe141dfa2d56cbc98713a6ef9e_prof);

    }

    // line 455
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_789326a1a583556f948fb793d5bcd1814917cfdd6653f9fa9fefd40ca8c6a3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789326a1a583556f948fb793d5bcd1814917cfdd6653f9fa9fefd40ca8c6a3e5->enter($__internal_789326a1a583556f948fb793d5bcd1814917cfdd6653f9fa9fefd40ca8c6a3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_535b57c5a7131f11b7b241c4c25ff3e66cc2a0841b3b1af48ea18a7ccd6494cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535b57c5a7131f11b7b241c4c25ff3e66cc2a0841b3b1af48ea18a7ccd6494cd->enter($__internal_535b57c5a7131f11b7b241c4c25ff3e66cc2a0841b3b1af48ea18a7ccd6494cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_535b57c5a7131f11b7b241c4c25ff3e66cc2a0841b3b1af48ea18a7ccd6494cd->leave($__internal_535b57c5a7131f11b7b241c4c25ff3e66cc2a0841b3b1af48ea18a7ccd6494cd_prof);

        
        $__internal_789326a1a583556f948fb793d5bcd1814917cfdd6653f9fa9fefd40ca8c6a3e5->leave($__internal_789326a1a583556f948fb793d5bcd1814917cfdd6653f9fa9fefd40ca8c6a3e5_prof);

    }

    // line 456
    public function block_page_sub_title($context, array $blocks = array())
    {
        $__internal_5f2ebfb918115d81c50f53b519b823763de4c26ff20b571f88778ff37f9d4410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f2ebfb918115d81c50f53b519b823763de4c26ff20b571f88778ff37f9d4410->enter($__internal_5f2ebfb918115d81c50f53b519b823763de4c26ff20b571f88778ff37f9d4410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_sub_title"));

        $__internal_abf0e87d65aca41caff06436c1c758da46d0b00891ed93f5eab18601d57e1311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf0e87d65aca41caff06436c1c758da46d0b00891ed93f5eab18601d57e1311->enter($__internal_abf0e87d65aca41caff06436c1c758da46d0b00891ed93f5eab18601d57e1311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_sub_title"));

        // line 457
        echo "                                <small>Dashboard & Statisques</small>";
        
        $__internal_abf0e87d65aca41caff06436c1c758da46d0b00891ed93f5eab18601d57e1311->leave($__internal_abf0e87d65aca41caff06436c1c758da46d0b00891ed93f5eab18601d57e1311_prof);

        
        $__internal_5f2ebfb918115d81c50f53b519b823763de4c26ff20b571f88778ff37f9d4410->leave($__internal_5f2ebfb918115d81c50f53b519b823763de4c26ff20b571f88778ff37f9d4410_prof);

    }

    // line 476
    public function block_back_body($context, array $blocks = array())
    {
        $__internal_6db794de9602b3a8a290f3134f15e356b5602411cd2aa91de7394f5db03c7d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db794de9602b3a8a290f3134f15e356b5602411cd2aa91de7394f5db03c7d63->enter($__internal_6db794de9602b3a8a290f3134f15e356b5602411cd2aa91de7394f5db03c7d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "back_body"));

        $__internal_3a3db4cbdb524c02dc3f734c28fa0d3183a0f7a57fd3c64af0a773947f89bc52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3db4cbdb524c02dc3f734c28fa0d3183a0f7a57fd3c64af0a773947f89bc52->enter($__internal_3a3db4cbdb524c02dc3f734c28fa0d3183a0f7a57fd3c64af0a773947f89bc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "back_body"));

        
        $__internal_3a3db4cbdb524c02dc3f734c28fa0d3183a0f7a57fd3c64af0a773947f89bc52->leave($__internal_3a3db4cbdb524c02dc3f734c28fa0d3183a0f7a57fd3c64af0a773947f89bc52_prof);

        
        $__internal_6db794de9602b3a8a290f3134f15e356b5602411cd2aa91de7394f5db03c7d63->leave($__internal_6db794de9602b3a8a290f3134f15e356b5602411cd2aa91de7394f5db03c7d63_prof);

    }

    // line 501
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_084d71d94d24cb0bd7c020197145e46fba6f67660eae29d416b132c30c1c3b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084d71d94d24cb0bd7c020197145e46fba6f67660eae29d416b132c30c1c3b28->enter($__internal_084d71d94d24cb0bd7c020197145e46fba6f67660eae29d416b132c30c1c3b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_702a3eef16aeee405ea1c4dc896dbe18750d9aadf4eaabbdf604f60178b5c932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702a3eef16aeee405ea1c4dc896dbe18750d9aadf4eaabbdf604f60178b5c932->enter($__internal_702a3eef16aeee405ea1c4dc896dbe18750d9aadf4eaabbdf604f60178b5c932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 502
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

        ";
        // line 504
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5e72e9f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e72e9f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5e72e9f_app.min_1.js");
            // line 508
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "5e72e9f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e72e9f_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5e72e9f_jquery.slimscroll.min_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "5e72e9f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e72e9f_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5e72e9f_layout.min_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "5e72e9f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e72e9f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5e72e9f.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 510
        echo "
    ";
        
        $__internal_702a3eef16aeee405ea1c4dc896dbe18750d9aadf4eaabbdf604f60178b5c932->leave($__internal_702a3eef16aeee405ea1c4dc896dbe18750d9aadf4eaabbdf604f60178b5c932_prof);

        
        $__internal_084d71d94d24cb0bd7c020197145e46fba6f67660eae29d416b132c30c1c3b28->leave($__internal_084d71d94d24cb0bd7c020197145e46fba6f67660eae29d416b132c30c1c3b28_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1151 => 510,  1125 => 508,  1121 => 504,  1115 => 502,  1106 => 501,  1089 => 476,  1079 => 457,  1070 => 456,  1052 => 455,  1017 => 425,  1008 => 424,  995 => 418,  986 => 417,  975 => 458,  972 => 456,  970 => 455,  964 => 451,  962 => 424,  958 => 422,  956 => 417,  950 => 414,  944 => 410,  935 => 409,  915 => 490,  900 => 477,  898 => 476,  893 => 473,  886 => 471,  877 => 468,  870 => 465,  866 => 464,  863 => 463,  859 => 462,  856 => 461,  854 => 460,  852 => 409,  828 => 388,  824 => 386,  817 => 380,  808 => 378,  799 => 370,  794 => 367,  792 => 366,  780 => 362,  778 => 361,  774 => 359,  769 => 356,  767 => 355,  755 => 351,  753 => 350,  747 => 346,  743 => 344,  741 => 343,  735 => 340,  727 => 339,  723 => 337,  719 => 335,  717 => 334,  711 => 331,  702 => 330,  692 => 322,  690 => 321,  686 => 319,  682 => 317,  677 => 314,  675 => 313,  663 => 309,  661 => 308,  654 => 303,  650 => 301,  648 => 300,  642 => 297,  634 => 296,  630 => 294,  626 => 292,  624 => 291,  618 => 288,  609 => 287,  599 => 279,  597 => 278,  593 => 276,  589 => 274,  584 => 271,  582 => 270,  570 => 266,  568 => 265,  562 => 261,  558 => 259,  556 => 258,  550 => 255,  542 => 254,  538 => 252,  534 => 250,  532 => 249,  526 => 246,  517 => 245,  507 => 237,  505 => 236,  501 => 234,  497 => 232,  492 => 229,  490 => 228,  478 => 224,  476 => 223,  469 => 218,  465 => 216,  463 => 215,  457 => 212,  449 => 211,  445 => 209,  441 => 207,  439 => 206,  433 => 203,  424 => 202,  414 => 194,  412 => 193,  408 => 191,  404 => 189,  399 => 186,  397 => 185,  385 => 181,  383 => 180,  376 => 175,  372 => 173,  370 => 172,  364 => 169,  356 => 168,  352 => 166,  348 => 164,  346 => 163,  340 => 160,  331 => 159,  321 => 151,  319 => 150,  315 => 148,  311 => 146,  306 => 143,  304 => 142,  292 => 138,  290 => 137,  283 => 132,  279 => 130,  277 => 129,  271 => 126,  262 => 125,  260 => 124,  213 => 80,  200 => 70,  191 => 64,  183 => 59,  177 => 55,  171 => 53,  169 => 52,  165 => 51,  145 => 33,  136 => 26,  127 => 19,  118 => 18,  66 => 14,  62 => 5,  57 => 4,  48 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}{% block stylesheets %}    {{ parent() }}    {% stylesheets    \"bundles/back/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css\"    \"bundles/back/theme/assets/global/css/components.min.css\"    \"bundles/back/theme/assets/global/css/plugins.min.css\"    \"bundles/back/theme/assets/layouts/layout/css/layout.min.css\"    \"bundles/back/theme/assets/layouts/layout/css/themes/darkblue.min.css\"    \"bundles/back/theme/assets/layouts/layout/css/custom.min.css\"    filter='cssrewrite' %}    <link rel=\"stylesheet\" href=\"{{ asset_url }}\"/>    {% endstylesheets %}{% endblock stylesheets %}{% block body %}    <div class=\"page-wrapper\">        <!-- BEGIN HEADER -->        <div class=\"page-header navbar navbar-fixed-top\">            <!-- BEGIN HEADER INNER -->            <div class=\"page-header-inner \">                <!-- BEGIN LOGO -->                <div class=\"page-logo\">                    <a href=\"{{ path('back_home') }}\">                        <h3 class=\"caption-subject bold logo_nabar\" style=\"margin-top:13px; margin-left: 10px;\">                            <span class=\"font-white uppercase\">B</span><span                                    class=\"font-red-mint uppercase\">2</span><span class=\"font-white uppercase\">B</span>                        </h3>                    </a>                    {#<img src=\"../assets/layouts/layout/img/logo.png\" alt=\"logo\" class=\"logo-default\"/> #}                    <div class=\"menu-toggler sidebar-toggler\">                        <span></span>                    </div>                </div>                <!-- END LOGO -->                <!-- BEGIN RESPONSIVE MENU TOGGLER -->                <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\"                   data-target=\".navbar-collapse\">                    <span></span>                </a>                <!-- END RESPONSIVE MENU TOGGLER -->                <!-- BEGIN TOP NAVIGATION MENU -->                <div class=\"top-menu\">                    <ul class=\"nav navbar-nav pull-right\">                        <li class=\"dropdown dropdown-user\">                            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"                               data-close-others=\"true\">                                <img alt=\"\" class=\"img-circle\"                                     src=\"{{ asset('bundles/back/theme/assets/layouts/layout/img/avatar.png') }}\"/>                                {% if app.user is defined and app.user %}                                    <span class=\"username username-hide-on-mobile\"> {{ app.user.username | capitalize }} </span>                                {% endif %}                                <i class=\"fa fa-angle-down\"></i>                            </a>                            <ul class=\"dropdown-menu dropdown-menu-default\">                                <li>                                    <a href=\"{{ path('fos_user_change_password') }}\">                                        <i class=\"icon-settings\"></i> Mon compte                                    </a>                                </li>                                <li>                                    <a href=\"{{ path('fos_user_change_password') }}\">                                        <i class=\"icon-key\"></i> Mot de passe                                    </a>                                </li>                                <li class=\"divider\"></li>                                <li>                                    <a href=\"{{ path('fos_user_security_logout') }}\">                                        <i class=\"icon-logout\"></i>                                        Déconnexion </a>                                </li>                            </ul>                        </li>                        <!-- END USER LOGIN DROPDOWN -->                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->                        <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->                        <li class=\"dropdown dropdown-quick-sidebar-toggler\">                            <a href=\"{{ path('fos_user_security_logout') }}\" class=\"dropdown-toggle\"                               title=\"Se Déconnecter\">                                <i class=\"icon-logout\"></i>                            </a>                        </li>                        <!-- END QUICK SIDEBAR TOGGLER -->                    </ul>                </div>                <!-- END TOP NAVIGATION MENU -->            </div>            <!-- END HEADER INNER -->        </div>        <!-- END HEADER -->        <!-- END HEADER -->        <!-- BEGIN HEADER & CONTENT DIVIDER -->        <div class=\"clearfix\"></div>        <!-- END HEADER & CONTENT DIVIDER -->        <!-- BEGIN CONTAINER -->        <div class=\"page-container\">            <!-- BEGIN SIDEBAR -->            <div class=\"page-sidebar-wrapper\">                <!-- BEGIN SIDEBAR -->                <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->                <!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->                <div class=\"page-sidebar navbar-collapse collapse\">                    <!-- BEGIN SIDEBAR MENU -->                    <!-- DOC: Apply \"page-sidebar-menu-light\" class right after \"page-sidebar-menu\" to enable light sidebar menu style(without borders) -->                    <!-- DOC: Apply \"page-sidebar-menu-hover-submenu\" class right after \"page-sidebar-menu\" to enable hoverable(hover vs accordion) sub menu mode -->                    <!-- DOC: Apply \"page-sidebar-menu-closed\" class right after \"page-sidebar-menu\" to collapse(\"page-sidebar-closed\" class must be applied to the body element) the sidebar sub menu mode -->                    <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->                    <!-- DOC: Set data-keep-expand=\"true\" to keep the submenues expanded -->                    <!-- DOC: Set data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->                    <ul class=\"page-sidebar-menu  page-header-fixed \" data-keep-expanded=\"false\" data-auto-scroll=\"true\"                        data-slide-speed=\"200\" style=\"padding-top: 20px\">                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below \"sidebar-toggler-wrapper\" LI element -->                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->                        <li class=\"sidebar-toggler-wrapper hide\">                            <div class=\"sidebar-toggler\">                                <span></span>                            </div>                        </li>                        <!-- END SIDEBAR TOGGLER BUTTON -->                        {% set routeName = app.request.get('_route') %}                        <li {% if app.request.requestUri == path('back_home') %} class=\"nav-item start active open\" {% else %} class=\"nav-item start\" {% endif %}>                            <a href=\"{{ path('back_home') }}\" class=\"nav-link nav-toggle\">                                <i class=\"icon-home\"></i>                                <span class=\"title\">Dashboard</span>                                {% if app.request.requestUri == path('back_home') %}                                    <span class=\"selected\"></span>                                {% endif %}                            </a>                        </li>                        <li class=\"heading\">                            <h3 class=\"uppercase\">CONTENUS</h3>                        </li>                        {% set customerRoute = ['back_user_reset_password','back_splashcreen_list' ] %}                        <li {% if routeName in customerRoute %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">                                <i class=\"icon-user \"></i>                                <span class=\"title\">Client</span>                                {% if routeName in customerRoute %}                                    <span class=\"selected\"></span>                                    <span class=\"arrow open\"></span>                                {% else %}                                    <span class=\"arrow\"></span>                                {% endif %}                            </a>                            <ul class=\"sub-menu\">                                {% if routeName == 'back_splashcreen_edit' %}                                    <li class=\"nav-item active\">                                        <a href=\"javascript:;\" class=\"nav-link \">                                            <i class=\"icon-pencil\"></i>                                            <span class=\"title\">Edition</span>                                            <span class=\"selected\"></span>                                        </a>                                    </li>                                {% endif %}                                <li {% if routeName == 'back_splashcreen_list' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>                                    <a href=\"{{ path('back_home') }}\" class=\"nav-link \">                                        <i class=\"icon-list\"></i>                                        <span class=\"title\">Liste</span>                                        {% if routeName == 'back_splashcreen_list' %}                                            <span class=\"selected\"></span>                                        {% endif %}                                    </a>                                </li>                                <li {% if routeName == 'back_splashcreen_add' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>                                    <a href=\"{{ path('back_home') }}\" class=\"nav-link \">                                        <i class=\"icon-plus\"></i>                                        <span class=\"title\">Ajout</span>                                        {% if routeName == 'back_splashcreen_add' %}                                            <span class=\"selected\"></span>                                        {% endif %}                                    </a>                                </li>                            </ul>                        </li>                        {% set customerRoute = ['back_user_reset_password','back_splashcreen_list' ] %}                        <li {% if routeName in customerRoute %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">                                <i class=\"icon-earphones-alt\"></i>                                <span class=\"title\">Commercial</span>                                {% if routeName in customerRoute %}                                    <span class=\"selected\"></span>                                    <span class=\"arrow open\"></span>                                {% else %}                                    <span class=\"arrow\"></span>                                {% endif %}                            </a>                            <ul class=\"sub-menu\">                                {% if routeName == 'back_splashcreen_edit' %}                                    <li class=\"nav-item active\">                                        <a href=\"javascript:;\" class=\"nav-link \">                                            <i class=\"icon-pencil\"></i>                                            <span class=\"title\">Edition</span>                                            <span class=\"selected\"></span>                                        </a>                                    </li>                                {% endif %}                                <li {% if routeName == 'back_splashcreen_list' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>                                    <a href=\"{{ path('back_home') }}\" class=\"nav-link \">                                        <i class=\"icon-list\"></i>                                        <span class=\"title\">Liste</span>                                        {% if routeName == 'back_splashcreen_list' %}                                            <span class=\"selected\"></span>                                        {% endif %}                                    </a>                                </li>                                <li {% if routeName == 'back_splashcreen_add' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>                                    <a href=\"{{ path('back_home') }}\" class=\"nav-link \">                                        <i class=\"icon-plus\"></i>                                        <span class=\"title\">Ajout</span>                                        {% if routeName == 'back_splashcreen_add' %}                                            <span class=\"selected\"></span>                                        {% endif %}                                    </a>                                </li>                            </ul>                        </li>                        {% set customerRoute = ['back_user_reset_password','back_splashcreen_list' ] %}                        <li {% if routeName in customerRoute %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">                                <i class=\"icon-basket-loaded\"></i>                                <span class=\"title\">Commande</span>                                {% if routeName in customerRoute %}                                    <span class=\"selected\"></span>                                    <span class=\"arrow open\"></span>                                {% else %}                                    <span class=\"arrow\"></span>                                {% endif %}                            </a>                            <ul class=\"sub-menu\">                                {% if routeName == 'back_splashcreen_edit' %}                                    <li class=\"nav-item active\">                                        <a href=\"javascript:;\" class=\"nav-link \">                                            <i class=\"icon-pencil\"></i>                                            <span class=\"title\">Edition</span>                                            <span class=\"selected\"></span>                                        </a>                                    </li>                                {% endif %}                                <li {% if routeName == 'back_splashcreen_list' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>                                    <a href=\"{{ path('back_home') }}\" class=\"nav-link \">                                        <i class=\"icon-list\"></i>                                        <span class=\"title\">Liste</span>                                        {% if routeName == 'back_splashcreen_list' %}                                            <span class=\"selected\"></span>                                        {% endif %}                                    </a>                                </li>                                <li {% if routeName == 'back_splashcreen_add' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>                                    <a href=\"{{ path('back_home') }}\" class=\"nav-link \">                                        <i class=\"icon-plus\"></i>                                        <span class=\"title\">Ajout</span>                                        {% if routeName == 'back_splashcreen_add' %}                                            <span class=\"selected\"></span>                                        {% endif %}                                    </a>                                </li>                            </ul>                        </li>                        {% set customerRoute = ['back_user_reset_password','back_splashcreen_list' ] %}                        <li {% if routeName in customerRoute %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">                                <i class=\"icon-layers\"></i>                                <span class=\"title\">Catalogue</span>                                {% if routeName in customerRoute %}                                    <span class=\"selected\"></span>                                    <span class=\"arrow open\"></span>                                {% else %}                                    <span class=\"arrow\"></span>                                {% endif %}                            </a>                            <ul class=\"sub-menu\">                                {% if routeName == 'back_splashcreen_edit' %}                                    <li class=\"nav-item active\">                                        <a href=\"javascript:;\" class=\"nav-link \">                                            <i class=\"icon-pencil\"></i>                                            <span class=\"title\">Edition</span>                                            <span class=\"selected\"></span>                                        </a>                                    </li>                                {% endif %}                                <li {% if routeName == 'back_splashcreen_list' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>                                    <a href=\"{{ path('back_home') }}\" class=\"nav-link \">                                        <i class=\"icon-list\"></i>                                        <span class=\"title\">Liste</span>                                        {% if routeName == 'back_splashcreen_list' %}                                            <span class=\"selected\"></span>                                        {% endif %}                                    </a>                                </li>                                <li {% if routeName == 'back_splashcreen_add' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>                                    <a href=\"{{ path('back_home') }}\" class=\"nav-link \">                                        <i class=\"icon-plus\"></i>                                        <span class=\"title\">Ajout</span>                                        {% if routeName == 'back_splashcreen_add' %}                                            <span class=\"selected\"></span>                                        {% endif %}                                    </a>                                </li>                            </ul>                        </li>                        {% set customerRoute = ['back_user_reset_password','back_splashcreen_list' ] %}                        <li {% if routeName in customerRoute %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">                                <i class=\"icon-briefcase\"></i>                                <span class=\"title\">Fiche société</span>                                {% if routeName in customerRoute %}                                    <span class=\"selected\"></span>                                    <span class=\"arrow open\"></span>                                {% else %}                                    <span class=\"arrow\"></span>                                {% endif %}                            </a>                            <ul class=\"sub-menu\">                                {% if routeName == 'back_splashcreen_edit' %}                                    <li class=\"nav-item active\">                                        <a href=\"javascript:;\" class=\"nav-link \">                                            <i class=\"icon-pencil\"></i>                                            <span class=\"title\">Edition</span>                                            <span class=\"selected\"></span>                                        </a>                                    </li>                                {% endif %}                                <li {% if routeName == 'back_splashcreen_list' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>                                    <a href=\"{{ path('back_home') }}\" class=\"nav-link \">                                        <i class=\"icon-list\"></i>                                        <span class=\"title\">Liste</span>                                        {% if routeName == 'back_splashcreen_list' %}                                            <span class=\"selected\"></span>                                        {% endif %}                                    </a>                                </li>                                <li {% if routeName == 'back_splashcreen_add' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>                                    <a href=\"{{ path('back_home') }}\" class=\"nav-link \">                                        <i class=\"icon-plus\"></i>                                        <span class=\"title\">Ajout</span>                                        {% if routeName == 'back_splashcreen_add' %}                                            <span class=\"selected\"></span>                                        {% endif %}                                    </a>                                </li>                            </ul>                        </li>                        {% set customerRoute = ['back_user_reset_password','back_splashcreen_list' ] %}                        <li {% if routeName in customerRoute %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">                                <i class=\"icon-doc\"></i>                                <span class=\"title\">PDF de présentation</span>                                {% if routeName in customerRoute %}                                    <span class=\"selected\"></span>                                {% endif %}                            </a>                        </li>                        {% set customerRoute = ['back_groupes_list' ] %}                        <li {% if routeName == 'back_groupes_list' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>                            <a href=\"javascript:;\" class=\"nav-link nav-toggle\">                                <i class=\"icon-users\"></i>                                <span class=\"title\">Groupes</span>                                {% if routeName == 'back_groupes_list' %}                                    <span class=\"selected\"></span>                                {% endif %}                            </a>                        </li>                        <li class=\"heading\">                            <h3 class=\"uppercase\">Autres</h3>                        </li>                        {#{% if app.user and is_granted('ROLE_ADMIN') %}#}                        <li {% if routeName == \"nelmio_api_doc_index\" %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>                            <a href=\"\" {#  {{ path('nelmio_api_doc_index') }} #}                               title=\"Documentation API\" class=\"nav-link nav-toggle\">                                <i class=\"icon-book-open\"></i>                                <span class=\"title\">API DOC</span>                            </a>                        </li>                        {#{% endif %}#}                        <li class=\"nav-item\">                            <a href=\"{{ path('fos_user_security_logout') }}\"                               title=\"Se déconnecter\" class=\"nav-link nav-toggle\">                                <i class=\"icon-logout\"></i>                                <span class=\"title\">Déconnexion</span>                            </a>                        </li>                    </ul>                    <!-- END SIDEBAR MENU -->                    <!-- END SIDEBAR MENU -->                </div>                <!-- END SIDEBAR -->            </div>            <!-- END SIDEBAR -->            <!-- BEGIN CONTENT -->            <div class=\"page-content-wrapper\">                <!-- BEGIN CONTENT BODY -->                <div class=\"page-content\">                    <!-- BEGIN PAGE HEADER-->                    {% block back_body_header %}                        <!-- BEGIN PAGE BAR -->                        <div class=\"page-bar\">                            <ul class=\"page-breadcrumb\">                                <li>                                    <a href=\"{{ path('back_home') }}\"><i class=\"fa fa-home\"></i></a>                                    <i class=\"fa fa-circle\"></i>                                </li>                                {% block header_breadcrumb %}                                    <li>                                        <span>Liste</span>                                    </li>                                {% endblock header_breadcrumb %}                            </ul>                            <div class=\"page-toolbar\">                                {% block action_toolbar %}                                    <div class=\"btn-group pull-right\">                                        <button type=\"button\" class=\"btn green btn-sm btn-outline dropdown-toggle\"                                                data-toggle=\"dropdown\"> Actions                                            <i class=\"fa fa-angle-down\"></i>                                        </button>                                        <ul class=\"dropdown-menu pull-right\" role=\"menu\">                                            <li>                                                <a href=\"#\">                                                    <i class=\"icon-bell\"></i> Vidéos</a>                                            </li>                                            <li>                                                <a href=\"#\">                                                    <i class=\"icon-shield\"></i> Catalogues</a>                                            </li>                                            <li>                                                <a href=\"#\">                                                    <i class=\"icon-user\"></i> Rubric</a>                                            </li>                                            <li class=\"divider\"></li>                                            <li>                                                <a href=\"#\">                                                    <i class=\"icon-bag\"></i> Abonnements</a>                                            </li>                                        </ul>                                    </div>                                {% endblock action_toolbar %}                            </div>                        </div>                        <!-- END PAGE BAR -->                        <!-- BEGIN PAGE TITLE-->                        <h1 class=\"page-title\">{% block page_title %}Dashboard{% endblock page_title %}                            {% block page_sub_title %}                                <small>Dashboard & Statisques</small>{% endblock page_sub_title %}                        </h1>                    {% endblock back_body_header %}                    {#{{ dump(app.session.flashBag.all) }}#}                    <div class=\"row\">                        {% for type, messages in app.session.flashBag.all %}                            <div class=\"col-md-12 col-sm-12\">                                {% for message in messages %}                                    <div class=\" alert {{ type }}\">                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\"                                                aria-hidden=\"true\"></button>                                        {{ message | raw }}                                    </div>                                {% endfor %}                            </div>                        {% endfor %}                    </div>                    <!-- END THEME PANEL -->                    {% block back_body %}{% endblock back_body %}                </div>                <!-- END CONTENT BODY -->            </div>            <!-- END CONTENT -->            <!-- BEGIN QUICK SIDEBAR -->            <a href=\"javascript:;\" class=\"page-quick-sidebar-toggler\">                <i class=\"icon-login\"></i>            </a>            <!-- END QUICK SIDEBAR -->        </div>        <!-- END CONTAINER -->        <!-- BEGIN FOOTER -->        <div class=\"page-footer\">            <div class=\"page-footer-inner\">B2B {{ \"now\" | date (\"Y\") }} &copy; Tous droits réservés            </div>            <div class=\"scroll-to-top\">                <i class=\"icon-arrow-up\"></i>            </div>        </div>        <!-- END FOOTER -->    </div>{% endblock body %}    {% block javascripts %}        {{ parent() }}        {% javascripts        \"bundles/back/theme/assets/global/scripts/app.min.js\"        \"bundles/back/theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js\"        \"bundles/back/theme/assets/layouts/layout/scripts/layout.min.js\" %}        <script src=\"{{ asset_url }}\"></script>        {% endjavascripts %}    {% endblock javascripts %}   ", "BackBundle::layout.html.twig", "/Users/yann/Sites/B2B/var/cache/dev/../../../src/BackBundle/Resources/views/layout.html.twig");
    }
}
