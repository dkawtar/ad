<?php

/* @Back/layout.html.twig */
class __TwigTemplate_70d6d74f19d129aaccf9ceaed7cf164e276563d6fd5b8af5d61e216a32d73aaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Back/layout.html.twig", 1);
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
        $__internal_d99051297e7043ce1300e191d5376a702da93e12ff2cb0aaa8d39a52c6d118e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99051297e7043ce1300e191d5376a702da93e12ff2cb0aaa8d39a52c6d118e3->enter($__internal_d99051297e7043ce1300e191d5376a702da93e12ff2cb0aaa8d39a52c6d118e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Back/layout.html.twig"));

        $__internal_47c1d9d6499294334e42f26a123bcc5c2fadd3be1911213dd86ca80f8a1eb38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c1d9d6499294334e42f26a123bcc5c2fadd3be1911213dd86ca80f8a1eb38e->enter($__internal_47c1d9d6499294334e42f26a123bcc5c2fadd3be1911213dd86ca80f8a1eb38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Back/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d99051297e7043ce1300e191d5376a702da93e12ff2cb0aaa8d39a52c6d118e3->leave($__internal_d99051297e7043ce1300e191d5376a702da93e12ff2cb0aaa8d39a52c6d118e3_prof);

        
        $__internal_47c1d9d6499294334e42f26a123bcc5c2fadd3be1911213dd86ca80f8a1eb38e->leave($__internal_47c1d9d6499294334e42f26a123bcc5c2fadd3be1911213dd86ca80f8a1eb38e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d019af6725d6a6b6b4570884604a241acbd72b2de1587182865dbaf573f0649e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d019af6725d6a6b6b4570884604a241acbd72b2de1587182865dbaf573f0649e->enter($__internal_d019af6725d6a6b6b4570884604a241acbd72b2de1587182865dbaf573f0649e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4cc2ad9f3282d401f6305556212728e192b439ce92518cdf2303164b70c731fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc2ad9f3282d401f6305556212728e192b439ce92518cdf2303164b70c731fe->enter($__internal_4cc2ad9f3282d401f6305556212728e192b439ce92518cdf2303164b70c731fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "7293b1a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7293b1a_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7293b1a_components.min_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "7293b1a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7293b1a_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7293b1a_plugins.min_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "7293b1a_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7293b1a_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7293b1a_layout.min_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "7293b1a_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7293b1a_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7293b1a_darkblue.min_5.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "7293b1a_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7293b1a_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7293b1a_custom.min_6.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "7293b1a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7293b1a") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/7293b1a.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_4cc2ad9f3282d401f6305556212728e192b439ce92518cdf2303164b70c731fe->leave($__internal_4cc2ad9f3282d401f6305556212728e192b439ce92518cdf2303164b70c731fe_prof);

        
        $__internal_d019af6725d6a6b6b4570884604a241acbd72b2de1587182865dbaf573f0649e->leave($__internal_d019af6725d6a6b6b4570884604a241acbd72b2de1587182865dbaf573f0649e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e3f76dcb2c56676d298ff8bf44c5c22990d7de4ca838c72faf5bebd7a14d5c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3f76dcb2c56676d298ff8bf44c5c22990d7de4ca838c72faf5bebd7a14d5c8->enter($__internal_8e3f76dcb2c56676d298ff8bf44c5c22990d7de4ca838c72faf5bebd7a14d5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4b8a2733926b9f67b9d034078a7a2f7bc8efe0d6d80d8b67a47932b3ebffd24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b8a2733926b9f67b9d034078a7a2f7bc8efe0d6d80d8b67a47932b3ebffd24->enter($__internal_d4b8a2733926b9f67b9d034078a7a2f7bc8efe0d6d80d8b67a47932b3ebffd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true) && $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 53
            echo "                                    <span class=\"username username-hide-on-mobile\"> ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
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
                                        <i class=\"icon-key\"></i> Mot de passe
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"icon-logout\"></i>
                                        Déconnexion </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                        <li class=\"dropdown dropdown-quick-sidebar-toggler\">
                            <a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"dropdown-toggle\" title=\"Se Déconnecter\">
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
        // line 117
        $context["routeName"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method");
        // line 118
        echo "                        <li ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()) == $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home"))) {
            echo " class=\"nav-item start active open\" ";
        } else {
            echo " class=\"nav-item start\" ";
        }
        echo ">
                            <a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home");
        echo "\" class=\"nav-link nav-toggle\">
                                <i class=\"icon-home\"></i>
                                <span class=\"title\">Dashboard</span>
                                ";
        // line 122
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()) == $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home"))) {
            // line 123
            echo "                                    <span class=\"selected\"></span>
                                ";
        }
        // line 125
        echo "                            </a>
                        </li>
                        <li class=\"heading\">
                            <h3 class=\"uppercase\">CONTENUS</h3>
                        </li>
                        ";
        // line 131
        echo "                        ";
        // line 132
        echo "                        ";
        // line 133
        echo "                        ";
        // line 134
        echo "                        ";
        // line 135
        echo "                        ";
        // line 136
        echo "                        ";
        // line 137
        echo "                        ";
        // line 138
        echo "                        ";
        // line 139
        echo "                        ";
        // line 140
        echo "                        ";
        // line 141
        echo "                        ";
        // line 142
        echo "                        ";
        // line 143
        echo "                        ";
        // line 144
        echo "                        ";
        // line 145
        echo "                        ";
        // line 146
        echo "                        ";
        // line 147
        echo "                        ";
        // line 148
        echo "                        ";
        // line 149
        echo "                        ";
        // line 150
        echo "                        ";
        // line 151
        echo "                        ";
        // line 152
        echo "                        ";
        // line 153
        echo "                        ";
        // line 154
        echo "                        ";
        // line 155
        echo "                        ";
        // line 156
        echo "                        ";
        // line 157
        echo "                        ";
        // line 158
        echo "                        ";
        // line 159
        echo "                        ";
        // line 160
        echo "                        ";
        // line 161
        echo "                        ";
        // line 162
        echo "                        ";
        // line 163
        echo "                        ";
        // line 164
        echo "                        ";
        // line 165
        echo "                        ";
        // line 166
        echo "                        ";
        // line 167
        echo "                        ";
        // line 168
        echo "                        ";
        // line 169
        echo "
                        ";
        // line 171
        echo "                        ";
        // line 172
        echo "                        ";
        // line 173
        echo "                        ";
        // line 174
        echo "                        ";
        // line 175
        echo "                        ";
        // line 176
        echo "                        ";
        // line 177
        echo "                        ";
        // line 178
        echo "                        ";
        // line 179
        echo "                        ";
        // line 180
        echo "                        ";
        // line 181
        echo "                        ";
        // line 182
        echo "                        ";
        // line 183
        echo "                        ";
        // line 184
        echo "                        ";
        // line 185
        echo "                        ";
        // line 186
        echo "                        ";
        // line 187
        echo "                        ";
        // line 188
        echo "                        ";
        // line 189
        echo "                        ";
        // line 190
        echo "                        ";
        // line 191
        echo "                        ";
        // line 192
        echo "                        ";
        // line 193
        echo "                        ";
        // line 194
        echo "                        ";
        // line 195
        echo "                        ";
        // line 196
        echo "                        ";
        // line 197
        echo "                        ";
        // line 198
        echo "                        ";
        // line 199
        echo "                        ";
        // line 200
        echo "                        ";
        // line 201
        echo "                        ";
        // line 202
        echo "                        ";
        // line 203
        echo "                        ";
        // line 204
        echo "                        ";
        // line 205
        echo "                        ";
        // line 206
        echo "                        ";
        // line 207
        echo "                        ";
        // line 208
        echo "                        ";
        // line 209
        echo "                        ";
        // line 210
        echo "                        ";
        // line 211
        echo "                        ";
        // line 212
        echo "                        ";
        // line 213
        echo "                        ";
        // line 214
        echo "                        ";
        // line 215
        echo "                        ";
        // line 216
        echo "                        ";
        // line 217
        echo "                        ";
        // line 218
        echo "
                        ";
        // line 220
        echo "                        ";
        // line 221
        echo "                        ";
        // line 222
        echo "                        ";
        // line 223
        echo "                        ";
        // line 224
        echo "                        ";
        // line 225
        echo "                        ";
        // line 226
        echo "                        ";
        // line 227
        echo "                        ";
        // line 228
        echo "                        ";
        // line 229
        echo "                        ";
        // line 230
        echo "                        ";
        // line 231
        echo "                        ";
        // line 232
        echo "                        ";
        // line 233
        echo "                        ";
        // line 234
        echo "                        ";
        // line 235
        echo "                        ";
        // line 236
        echo "                        ";
        // line 237
        echo "                        ";
        // line 238
        echo "                        ";
        // line 239
        echo "                        ";
        // line 240
        echo "                        ";
        // line 241
        echo "                        ";
        // line 242
        echo "                        ";
        // line 243
        echo "                        ";
        // line 244
        echo "                        ";
        // line 245
        echo "                        ";
        // line 246
        echo "                        ";
        // line 247
        echo "                        ";
        // line 248
        echo "                        ";
        // line 249
        echo "                        ";
        // line 250
        echo "                        ";
        // line 251
        echo "                        ";
        // line 252
        echo "                        ";
        // line 253
        echo "                        ";
        // line 254
        echo "                        ";
        // line 255
        echo "                        ";
        // line 256
        echo "                        ";
        // line 257
        echo "                        ";
        // line 258
        echo "                        ";
        // line 259
        echo "                        ";
        // line 260
        echo "                        ";
        // line 261
        echo "                        ";
        // line 262
        echo "                        ";
        // line 263
        echo "                        ";
        // line 264
        echo "                        ";
        // line 265
        echo "                        ";
        // line 266
        echo "                        ";
        // line 267
        echo "                        ";
        // line 268
        echo "                        ";
        // line 269
        echo "                        ";
        // line 270
        echo "                        ";
        // line 271
        echo "                        ";
        // line 272
        echo "                        ";
        // line 273
        echo "                        ";
        // line 274
        echo "                        ";
        // line 275
        echo "                        ";
        // line 276
        echo "                        ";
        // line 277
        echo "                        ";
        // line 278
        echo "                        ";
        // line 279
        echo "                        ";
        // line 280
        echo "                        ";
        // line 281
        echo "                        ";
        // line 282
        echo "                        ";
        // line 283
        echo "                        ";
        // line 284
        echo "                        ";
        // line 285
        echo "                        ";
        // line 286
        echo "                        ";
        // line 287
        echo "                        ";
        // line 288
        echo "
                        ";
        // line 290
        echo "                        ";
        // line 291
        echo "                        ";
        // line 292
        echo "                        ";
        // line 293
        echo "                        ";
        // line 294
        echo "                        ";
        // line 295
        echo "                        ";
        // line 296
        echo "                        ";
        // line 297
        echo "                        ";
        // line 298
        echo "                        ";
        // line 299
        echo "                        ";
        // line 300
        echo "                        ";
        // line 301
        echo "                        ";
        // line 302
        echo "                        ";
        // line 303
        echo "                        ";
        // line 304
        echo "                        ";
        // line 305
        echo "                        ";
        // line 306
        echo "                        ";
        // line 307
        echo "                        ";
        // line 308
        echo "                        ";
        // line 309
        echo "                        ";
        // line 310
        echo "                        ";
        // line 311
        echo "                        ";
        // line 312
        echo "                        ";
        // line 313
        echo "                        ";
        // line 314
        echo "                        ";
        // line 315
        echo "                        ";
        // line 316
        echo "                        ";
        // line 317
        echo "                        ";
        // line 318
        echo "                        ";
        // line 319
        echo "                        ";
        // line 320
        echo "                        ";
        // line 321
        echo "                        ";
        // line 322
        echo "                        ";
        // line 323
        echo "                        ";
        // line 324
        echo "                        ";
        // line 325
        echo "                        ";
        // line 326
        echo "                        ";
        // line 327
        echo "                        ";
        // line 328
        echo "                        ";
        // line 329
        echo "                        ";
        // line 330
        echo "                        ";
        // line 331
        echo "                        ";
        // line 332
        echo "                        ";
        // line 333
        echo "                        ";
        // line 334
        echo "                        ";
        // line 335
        echo "                        ";
        // line 336
        echo "                        ";
        // line 337
        echo "                        ";
        // line 338
        echo "                        ";
        // line 339
        echo "                        ";
        // line 340
        echo "                        ";
        // line 341
        echo "                        ";
        // line 342
        echo "                        ";
        // line 343
        echo "                        ";
        // line 344
        echo "                        ";
        // line 345
        echo "                        ";
        // line 346
        echo "                        ";
        // line 347
        echo "                        ";
        // line 348
        echo "                        ";
        // line 349
        echo "                        ";
        // line 350
        echo "                        ";
        // line 351
        echo "                        ";
        // line 352
        echo "                        ";
        // line 353
        echo "                        ";
        // line 354
        echo "
                        ";
        // line 356
        echo "                        ";
        // line 357
        echo "                        ";
        // line 358
        echo "                        ";
        // line 359
        echo "                        ";
        // line 360
        echo "                        ";
        // line 361
        echo "                        ";
        // line 362
        echo "                        ";
        // line 363
        echo "                        ";
        // line 364
        echo "                        ";
        // line 365
        echo "                        ";
        // line 366
        echo "                        ";
        // line 367
        echo "                        ";
        // line 368
        echo "                        ";
        // line 369
        echo "                        ";
        // line 370
        echo "                        ";
        // line 371
        echo "                        ";
        // line 372
        echo "                        ";
        // line 373
        echo "                        ";
        // line 374
        echo "                        ";
        // line 375
        echo "                        ";
        // line 376
        echo "                        ";
        // line 377
        echo "                        ";
        // line 378
        echo "                        ";
        // line 379
        echo "                        ";
        // line 380
        echo "                        ";
        // line 381
        echo "                        ";
        // line 382
        echo "                        ";
        // line 383
        echo "                        ";
        // line 384
        echo "                        ";
        // line 385
        echo "                        ";
        // line 386
        echo "                        ";
        // line 387
        echo "                        ";
        // line 388
        echo "                        ";
        // line 389
        echo "
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 391
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
        // line 412
        $this->displayBlock('back_body_header', $context, $blocks);
        // line 463
        echo "                    ";
        // line 464
        echo "                    <div class=\"row\">
                        ";
        // line 465
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 466
            echo "                            <div class=\"col-md-12 col-sm-12\">
                                ";
            // line 467
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 468
                echo "                                    <div class=\" alert ";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\"
                                                aria-hidden=\"true\"></button>
                                        ";
                // line 471
                echo $context["message"];
                echo "
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 474
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 476
        echo "                    </div>

                    <!-- END THEME PANEL -->
                    ";
        // line 479
        $this->displayBlock('back_body', $context, $blocks);
        // line 480
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
        // line 493
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
        
        $__internal_d4b8a2733926b9f67b9d034078a7a2f7bc8efe0d6d80d8b67a47932b3ebffd24->leave($__internal_d4b8a2733926b9f67b9d034078a7a2f7bc8efe0d6d80d8b67a47932b3ebffd24_prof);

        
        $__internal_8e3f76dcb2c56676d298ff8bf44c5c22990d7de4ca838c72faf5bebd7a14d5c8->leave($__internal_8e3f76dcb2c56676d298ff8bf44c5c22990d7de4ca838c72faf5bebd7a14d5c8_prof);

    }

    // line 412
    public function block_back_body_header($context, array $blocks = array())
    {
        $__internal_3b2ede1cf4bf66fd4cd1277592c5d1cea06eafa9b000e3c86740fc1f4aacae86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b2ede1cf4bf66fd4cd1277592c5d1cea06eafa9b000e3c86740fc1f4aacae86->enter($__internal_3b2ede1cf4bf66fd4cd1277592c5d1cea06eafa9b000e3c86740fc1f4aacae86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "back_body_header"));

        $__internal_804a73c1ed9cb840524900277b8e9852b9b06f11467d3861b7b96b7a2326099e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804a73c1ed9cb840524900277b8e9852b9b06f11467d3861b7b96b7a2326099e->enter($__internal_804a73c1ed9cb840524900277b8e9852b9b06f11467d3861b7b96b7a2326099e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "back_body_header"));

        // line 413
        echo "                        <!-- BEGIN PAGE BAR -->
                        <div class=\"page-bar\">
                            <ul class=\"page-breadcrumb\">
                                <li>
                                    <a href=\"";
        // line 417
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home");
        echo "\"><i class=\"fa fa-home\"></i></a>
                                    <i class=\"fa fa-circle\"></i>
                                </li>
                                ";
        // line 420
        $this->displayBlock('header_breadcrumb', $context, $blocks);
        // line 425
        echo "                            </ul>
                            <div class=\"page-toolbar\">
                                ";
        // line 427
        $this->displayBlock('action_toolbar', $context, $blocks);
        // line 454
        echo "                            </div>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class=\"page-title\">";
        // line 458
        $this->displayBlock('page_title', $context, $blocks);
        // line 459
        echo "                            ";
        $this->displayBlock('page_sub_title', $context, $blocks);
        // line 461
        echo "                        </h1>
                    ";
        
        $__internal_804a73c1ed9cb840524900277b8e9852b9b06f11467d3861b7b96b7a2326099e->leave($__internal_804a73c1ed9cb840524900277b8e9852b9b06f11467d3861b7b96b7a2326099e_prof);

        
        $__internal_3b2ede1cf4bf66fd4cd1277592c5d1cea06eafa9b000e3c86740fc1f4aacae86->leave($__internal_3b2ede1cf4bf66fd4cd1277592c5d1cea06eafa9b000e3c86740fc1f4aacae86_prof);

    }

    // line 420
    public function block_header_breadcrumb($context, array $blocks = array())
    {
        $__internal_67c582b1b2dedea0d26c55c8165b208adba75f0a329cafd2173b7274047d4517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c582b1b2dedea0d26c55c8165b208adba75f0a329cafd2173b7274047d4517->enter($__internal_67c582b1b2dedea0d26c55c8165b208adba75f0a329cafd2173b7274047d4517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_breadcrumb"));

        $__internal_03b38dfa90955eb69f2c1b7c48b8ee3074c65c07ce33f41da441e1c7c0458405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b38dfa90955eb69f2c1b7c48b8ee3074c65c07ce33f41da441e1c7c0458405->enter($__internal_03b38dfa90955eb69f2c1b7c48b8ee3074c65c07ce33f41da441e1c7c0458405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_breadcrumb"));

        // line 421
        echo "                                    <li>
                                        <span>Liste</span>
                                    </li>
                                ";
        
        $__internal_03b38dfa90955eb69f2c1b7c48b8ee3074c65c07ce33f41da441e1c7c0458405->leave($__internal_03b38dfa90955eb69f2c1b7c48b8ee3074c65c07ce33f41da441e1c7c0458405_prof);

        
        $__internal_67c582b1b2dedea0d26c55c8165b208adba75f0a329cafd2173b7274047d4517->leave($__internal_67c582b1b2dedea0d26c55c8165b208adba75f0a329cafd2173b7274047d4517_prof);

    }

    // line 427
    public function block_action_toolbar($context, array $blocks = array())
    {
        $__internal_400f88dca18b08f299f47d83c63b5267ccf041bc5c29592ac6a7841135715fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400f88dca18b08f299f47d83c63b5267ccf041bc5c29592ac6a7841135715fa2->enter($__internal_400f88dca18b08f299f47d83c63b5267ccf041bc5c29592ac6a7841135715fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "action_toolbar"));

        $__internal_d7207d750195dbad1f88439d90c32c84b4e13cbbb304db47d989d1fd46ad2a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7207d750195dbad1f88439d90c32c84b4e13cbbb304db47d989d1fd46ad2a61->enter($__internal_d7207d750195dbad1f88439d90c32c84b4e13cbbb304db47d989d1fd46ad2a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "action_toolbar"));

        // line 428
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
        
        $__internal_d7207d750195dbad1f88439d90c32c84b4e13cbbb304db47d989d1fd46ad2a61->leave($__internal_d7207d750195dbad1f88439d90c32c84b4e13cbbb304db47d989d1fd46ad2a61_prof);

        
        $__internal_400f88dca18b08f299f47d83c63b5267ccf041bc5c29592ac6a7841135715fa2->leave($__internal_400f88dca18b08f299f47d83c63b5267ccf041bc5c29592ac6a7841135715fa2_prof);

    }

    // line 458
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_33ef12ac62da57e493d6047f6d07eaf9153850d1a9346717600f00ee0d89661d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ef12ac62da57e493d6047f6d07eaf9153850d1a9346717600f00ee0d89661d->enter($__internal_33ef12ac62da57e493d6047f6d07eaf9153850d1a9346717600f00ee0d89661d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_99d03e60ebfe41bde6a1d78471ec10dcbf285e8380a145b3a4f23ffa77ff57ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d03e60ebfe41bde6a1d78471ec10dcbf285e8380a145b3a4f23ffa77ff57ca->enter($__internal_99d03e60ebfe41bde6a1d78471ec10dcbf285e8380a145b3a4f23ffa77ff57ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_99d03e60ebfe41bde6a1d78471ec10dcbf285e8380a145b3a4f23ffa77ff57ca->leave($__internal_99d03e60ebfe41bde6a1d78471ec10dcbf285e8380a145b3a4f23ffa77ff57ca_prof);

        
        $__internal_33ef12ac62da57e493d6047f6d07eaf9153850d1a9346717600f00ee0d89661d->leave($__internal_33ef12ac62da57e493d6047f6d07eaf9153850d1a9346717600f00ee0d89661d_prof);

    }

    // line 459
    public function block_page_sub_title($context, array $blocks = array())
    {
        $__internal_1aa0878af91457e0d494133ef438445395db548c8af3751b62926d907dc62698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aa0878af91457e0d494133ef438445395db548c8af3751b62926d907dc62698->enter($__internal_1aa0878af91457e0d494133ef438445395db548c8af3751b62926d907dc62698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_sub_title"));

        $__internal_a16ac74dc60a7ec068ea3da197f57cc9d1eb2d40d2dea3c76c90f9eb40be586d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16ac74dc60a7ec068ea3da197f57cc9d1eb2d40d2dea3c76c90f9eb40be586d->enter($__internal_a16ac74dc60a7ec068ea3da197f57cc9d1eb2d40d2dea3c76c90f9eb40be586d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_sub_title"));

        // line 460
        echo "                                <small>Dashboard & Statisques</small>";
        
        $__internal_a16ac74dc60a7ec068ea3da197f57cc9d1eb2d40d2dea3c76c90f9eb40be586d->leave($__internal_a16ac74dc60a7ec068ea3da197f57cc9d1eb2d40d2dea3c76c90f9eb40be586d_prof);

        
        $__internal_1aa0878af91457e0d494133ef438445395db548c8af3751b62926d907dc62698->leave($__internal_1aa0878af91457e0d494133ef438445395db548c8af3751b62926d907dc62698_prof);

    }

    // line 479
    public function block_back_body($context, array $blocks = array())
    {
        $__internal_2db291010e68f7eeb7ab380ebf392943a2aa694672758c544e0c7ae01b9d8353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db291010e68f7eeb7ab380ebf392943a2aa694672758c544e0c7ae01b9d8353->enter($__internal_2db291010e68f7eeb7ab380ebf392943a2aa694672758c544e0c7ae01b9d8353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "back_body"));

        $__internal_de712a7ee2a88a80a6cbadd8a0933470245dfd30338bb610663f019817a7e28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de712a7ee2a88a80a6cbadd8a0933470245dfd30338bb610663f019817a7e28c->enter($__internal_de712a7ee2a88a80a6cbadd8a0933470245dfd30338bb610663f019817a7e28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "back_body"));

        
        $__internal_de712a7ee2a88a80a6cbadd8a0933470245dfd30338bb610663f019817a7e28c->leave($__internal_de712a7ee2a88a80a6cbadd8a0933470245dfd30338bb610663f019817a7e28c_prof);

        
        $__internal_2db291010e68f7eeb7ab380ebf392943a2aa694672758c544e0c7ae01b9d8353->leave($__internal_2db291010e68f7eeb7ab380ebf392943a2aa694672758c544e0c7ae01b9d8353_prof);

    }

    // line 504
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0de2c00534b3fa3b01e5b81bd1ab0690ec3cfcdffaecf59475b359b97a582c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de2c00534b3fa3b01e5b81bd1ab0690ec3cfcdffaecf59475b359b97a582c98->enter($__internal_0de2c00534b3fa3b01e5b81bd1ab0690ec3cfcdffaecf59475b359b97a582c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_712e4c05b3783f1cc49ed7fca0f6e1bb42373e9a29891922b979c9500cce5b38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712e4c05b3783f1cc49ed7fca0f6e1bb42373e9a29891922b979c9500cce5b38->enter($__internal_712e4c05b3783f1cc49ed7fca0f6e1bb42373e9a29891922b979c9500cce5b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 505
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

        ";
        // line 507
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5e72e9f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e72e9f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5e72e9f_app.min_1.js");
            // line 511
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "5e72e9f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e72e9f_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5e72e9f_jquery.slimscroll.min_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "5e72e9f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e72e9f_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5e72e9f_layout.min_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "5e72e9f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5e72e9f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5e72e9f.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 513
        echo "
    ";
        
        $__internal_712e4c05b3783f1cc49ed7fca0f6e1bb42373e9a29891922b979c9500cce5b38->leave($__internal_712e4c05b3783f1cc49ed7fca0f6e1bb42373e9a29891922b979c9500cce5b38_prof);

        
        $__internal_0de2c00534b3fa3b01e5b81bd1ab0690ec3cfcdffaecf59475b359b97a582c98->leave($__internal_0de2c00534b3fa3b01e5b81bd1ab0690ec3cfcdffaecf59475b359b97a582c98_prof);

    }

    public function getTemplateName()
    {
        return "@Back/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1119 => 513,  1093 => 511,  1089 => 507,  1083 => 505,  1074 => 504,  1057 => 479,  1047 => 460,  1038 => 459,  1020 => 458,  985 => 428,  976 => 427,  963 => 421,  954 => 420,  943 => 461,  940 => 459,  938 => 458,  932 => 454,  930 => 427,  926 => 425,  924 => 420,  918 => 417,  912 => 413,  903 => 412,  883 => 493,  868 => 480,  866 => 479,  861 => 476,  854 => 474,  845 => 471,  838 => 468,  834 => 467,  831 => 466,  827 => 465,  824 => 464,  822 => 463,  820 => 412,  796 => 391,  792 => 389,  790 => 388,  788 => 387,  786 => 386,  784 => 385,  782 => 384,  780 => 383,  778 => 382,  776 => 381,  774 => 380,  772 => 379,  770 => 378,  768 => 377,  766 => 376,  764 => 375,  762 => 374,  760 => 373,  758 => 372,  756 => 371,  754 => 370,  752 => 369,  750 => 368,  748 => 367,  746 => 366,  744 => 365,  742 => 364,  740 => 363,  738 => 362,  736 => 361,  734 => 360,  732 => 359,  730 => 358,  728 => 357,  726 => 356,  723 => 354,  721 => 353,  719 => 352,  717 => 351,  715 => 350,  713 => 349,  711 => 348,  709 => 347,  707 => 346,  705 => 345,  703 => 344,  701 => 343,  699 => 342,  697 => 341,  695 => 340,  693 => 339,  691 => 338,  689 => 337,  687 => 336,  685 => 335,  683 => 334,  681 => 333,  679 => 332,  677 => 331,  675 => 330,  673 => 329,  671 => 328,  669 => 327,  667 => 326,  665 => 325,  663 => 324,  661 => 323,  659 => 322,  657 => 321,  655 => 320,  653 => 319,  651 => 318,  649 => 317,  647 => 316,  645 => 315,  643 => 314,  641 => 313,  639 => 312,  637 => 311,  635 => 310,  633 => 309,  631 => 308,  629 => 307,  627 => 306,  625 => 305,  623 => 304,  621 => 303,  619 => 302,  617 => 301,  615 => 300,  613 => 299,  611 => 298,  609 => 297,  607 => 296,  605 => 295,  603 => 294,  601 => 293,  599 => 292,  597 => 291,  595 => 290,  592 => 288,  590 => 287,  588 => 286,  586 => 285,  584 => 284,  582 => 283,  580 => 282,  578 => 281,  576 => 280,  574 => 279,  572 => 278,  570 => 277,  568 => 276,  566 => 275,  564 => 274,  562 => 273,  560 => 272,  558 => 271,  556 => 270,  554 => 269,  552 => 268,  550 => 267,  548 => 266,  546 => 265,  544 => 264,  542 => 263,  540 => 262,  538 => 261,  536 => 260,  534 => 259,  532 => 258,  530 => 257,  528 => 256,  526 => 255,  524 => 254,  522 => 253,  520 => 252,  518 => 251,  516 => 250,  514 => 249,  512 => 248,  510 => 247,  508 => 246,  506 => 245,  504 => 244,  502 => 243,  500 => 242,  498 => 241,  496 => 240,  494 => 239,  492 => 238,  490 => 237,  488 => 236,  486 => 235,  484 => 234,  482 => 233,  480 => 232,  478 => 231,  476 => 230,  474 => 229,  472 => 228,  470 => 227,  468 => 226,  466 => 225,  464 => 224,  462 => 223,  460 => 222,  458 => 221,  456 => 220,  453 => 218,  451 => 217,  449 => 216,  447 => 215,  445 => 214,  443 => 213,  441 => 212,  439 => 211,  437 => 210,  435 => 209,  433 => 208,  431 => 207,  429 => 206,  427 => 205,  425 => 204,  423 => 203,  421 => 202,  419 => 201,  417 => 200,  415 => 199,  413 => 198,  411 => 197,  409 => 196,  407 => 195,  405 => 194,  403 => 193,  401 => 192,  399 => 191,  397 => 190,  395 => 189,  393 => 188,  391 => 187,  389 => 186,  387 => 185,  385 => 184,  383 => 183,  381 => 182,  379 => 181,  377 => 180,  375 => 179,  373 => 178,  371 => 177,  369 => 176,  367 => 175,  365 => 174,  363 => 173,  361 => 172,  359 => 171,  356 => 169,  354 => 168,  352 => 167,  350 => 166,  348 => 165,  346 => 164,  344 => 163,  342 => 162,  340 => 161,  338 => 160,  336 => 159,  334 => 158,  332 => 157,  330 => 156,  328 => 155,  326 => 154,  324 => 153,  322 => 152,  320 => 151,  318 => 150,  316 => 149,  314 => 148,  312 => 147,  310 => 146,  308 => 145,  306 => 144,  304 => 143,  302 => 142,  300 => 141,  298 => 140,  296 => 139,  294 => 138,  292 => 137,  290 => 136,  288 => 135,  286 => 134,  284 => 133,  282 => 132,  280 => 131,  273 => 125,  269 => 123,  267 => 122,  261 => 119,  252 => 118,  250 => 117,  204 => 74,  192 => 65,  183 => 59,  177 => 55,  171 => 53,  169 => 52,  165 => 51,  145 => 33,  136 => 26,  127 => 19,  118 => 18,  66 => 14,  62 => 5,  57 => 4,  48 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}{% block stylesheets %}    {{ parent() }}    {% stylesheets    \"bundles/back/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css\"    \"bundles/back/theme/assets/global/css/components.min.css\"    \"bundles/back/theme/assets/global/css/plugins.min.css\"    \"bundles/back/theme/assets/layouts/layout/css/layout.min.css\"    \"bundles/back/theme/assets/layouts/layout/css/themes/darkblue.min.css\"    \"bundles/back/theme/assets/layouts/layout/css/custom.min.css\"    filter='cssrewrite' %}    <link rel=\"stylesheet\" href=\"{{ asset_url }}\"/>    {% endstylesheets %}{% endblock stylesheets %}{% block body %}    <div class=\"page-wrapper\">        <!-- BEGIN HEADER -->        <div class=\"page-header navbar navbar-fixed-top\">            <!-- BEGIN HEADER INNER -->            <div class=\"page-header-inner \">                <!-- BEGIN LOGO -->                <div class=\"page-logo\">                    <a href=\"{{ path('back_home') }}\">                        <h3 class=\"caption-subject bold logo_nabar\" style=\"margin-top:13px; margin-left: 10px;\">                            <span class=\"font-white uppercase\">B</span><span                                    class=\"font-red-mint uppercase\">2</span><span class=\"font-white uppercase\">B</span>                        </h3>                    </a>                    {#<img src=\"../assets/layouts/layout/img/logo.png\" alt=\"logo\" class=\"logo-default\"/> #}                    <div class=\"menu-toggler sidebar-toggler\">                        <span></span>                    </div>                </div>                <!-- END LOGO -->                <!-- BEGIN RESPONSIVE MENU TOGGLER -->                <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\"                   data-target=\".navbar-collapse\">                    <span></span>                </a>                <!-- END RESPONSIVE MENU TOGGLER -->                <!-- BEGIN TOP NAVIGATION MENU -->                <div class=\"top-menu\">                    <ul class=\"nav navbar-nav pull-right\">                        <li class=\"dropdown dropdown-user\">                            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"                               data-close-others=\"true\">                                <img alt=\"\" class=\"img-circle\"                                     src=\"{{ asset('bundles/back/theme/assets/layouts/layout/img/avatar.png') }}\"/>                                {% if app.user is defined and app.user %}                                    <span class=\"username username-hide-on-mobile\"> {{ app.user.username | capitalize }} </span>                                {% endif %}                                <i class=\"fa fa-angle-down\"></i>                            </a>                            <ul class=\"dropdown-menu dropdown-menu-default\">                                <li>                                    <a href=\"{{ path('fos_user_change_password') }}\">                                        <i class=\"icon-key\"></i> Mot de passe                                    </a>                                </li>                                <li class=\"divider\"></li>                                <li>                                    <a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"icon-logout\"></i>                                        Déconnexion </a>                                </li>                            </ul>                        </li>                        <!-- END USER LOGIN DROPDOWN -->                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->                        <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->                        <li class=\"dropdown dropdown-quick-sidebar-toggler\">                            <a href=\"{{ path('fos_user_security_logout') }}\" class=\"dropdown-toggle\" title=\"Se Déconnecter\">                                <i class=\"icon-logout\"></i>                            </a>                        </li>                        <!-- END QUICK SIDEBAR TOGGLER -->                    </ul>                </div>                <!-- END TOP NAVIGATION MENU -->            </div>            <!-- END HEADER INNER -->        </div>        <!-- END HEADER -->        <!-- END HEADER -->        <!-- BEGIN HEADER & CONTENT DIVIDER -->        <div class=\"clearfix\"></div>        <!-- END HEADER & CONTENT DIVIDER -->        <!-- BEGIN CONTAINER -->        <div class=\"page-container\">            <!-- BEGIN SIDEBAR -->            <div class=\"page-sidebar-wrapper\">                <!-- BEGIN SIDEBAR -->                <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->                <!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->                <div class=\"page-sidebar navbar-collapse collapse\">                    <!-- BEGIN SIDEBAR MENU -->                    <!-- DOC: Apply \"page-sidebar-menu-light\" class right after \"page-sidebar-menu\" to enable light sidebar menu style(without borders) -->                    <!-- DOC: Apply \"page-sidebar-menu-hover-submenu\" class right after \"page-sidebar-menu\" to enable hoverable(hover vs accordion) sub menu mode -->                    <!-- DOC: Apply \"page-sidebar-menu-closed\" class right after \"page-sidebar-menu\" to collapse(\"page-sidebar-closed\" class must be applied to the body element) the sidebar sub menu mode -->                    <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->                    <!-- DOC: Set data-keep-expand=\"true\" to keep the submenues expanded -->                    <!-- DOC: Set data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->                    <ul class=\"page-sidebar-menu  page-header-fixed \" data-keep-expanded=\"false\" data-auto-scroll=\"true\"                        data-slide-speed=\"200\" style=\"padding-top: 20px\">                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below \"sidebar-toggler-wrapper\" LI element -->                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->                        <li class=\"sidebar-toggler-wrapper hide\">                            <div class=\"sidebar-toggler\">                                <span></span>                            </div>                        </li>                        <!-- END SIDEBAR TOGGLER BUTTON -->                        {% set routeName = app.request.get('_route') %}                        <li {% if app.request.requestUri == path('back_home') %} class=\"nav-item start active open\" {% else %} class=\"nav-item start\" {% endif %}>                            <a href=\"{{ path('back_home') }}\" class=\"nav-link nav-toggle\">                                <i class=\"icon-home\"></i>                                <span class=\"title\">Dashboard</span>                                {% if app.request.requestUri == path('back_home') %}                                    <span class=\"selected\"></span>                                {% endif %}                            </a>                        </li>                        <li class=\"heading\">                            <h3 class=\"uppercase\">CONTENUS</h3>                        </li>                        {#{% set splashRoute = ['back_splashcreen_list','back_splashcreen_add','back_splashcreen_edit' ] %}#}                        {#<li {% if routeName in splashRoute %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>#}                        {#<a href=\"javascript:;\" class=\"nav-link nav-toggle\">#}                        {#<i class=\"fa fa-picture-o\"></i>#}                        {#<span class=\"title\">SplashScreen</span>#}                        {#{% if routeName in splashRoute %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#<ul class=\"sub-menu\">#}                        {#{% if routeName == 'back_splashcreen_edit' %}#}                        {#<li class=\"nav-item active\">#}                        {#<a href=\"javascript:;\" class=\"nav-link \">#}                        {#<i class=\"icon-pencil\"></i>#}                        {#<span class=\"title\">Edition</span>#}                        {#<span class=\"selected\"></span>#}                        {#</a>#}                        {#</li>#}                        {#{% endif %}#}                        {#<li {% if routeName == 'back_splashcreen_list' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>#}                        {#<a href=\"{{ path('back_splashcreen_list') }}\" class=\"nav-link \">#}                        {#<i class=\"icon-list\"></i>#}                        {#<span class=\"title\">Liste</span>#}                        {#{% if routeName == 'back_splashcreen_list' %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#</li>#}                        {#<li {% if routeName == 'back_splashcreen_add' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>#}                        {#<a href=\"{{ path('back_splashcreen_add') }}\" class=\"nav-link \">#}                        {#<i class=\"icon-plus\"></i>#}                        {#<span class=\"title\">Ajout</span>#}                        {#{% if routeName == 'back_splashcreen_add' %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#</li>#}                        {#</ul>#}                        {#</li>#}                        {#{% set vodRoute = ['back_vod_list','back_vod_add','back_vod_edit',\"back_vod_list_adult\" ] %}#}                        {#<li {% if routeName in vodRoute %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>#}                        {#<a href=\"javascript:;\" class=\"nav-link nav-toggle\">#}                        {#<i class=\"fa fa-video-camera\"></i>#}                        {#<span class=\"title\">VOD</span>#}                        {#{% if routeName in vodRoute %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#<ul class=\"sub-menu\">#}                        {#{% if routeName == 'back_vod_edit' %}#}                        {#<li class=\"nav-item active\">#}                        {#<a href=\"javascript:;\" class=\"nav-link \">#}                        {#<i class=\"icon-pencil\"></i>#}                        {#<span class=\"title\">Edition</span>#}                        {#<span class=\"selected\"></span>#}                        {#</a>#}                        {#</li>#}                        {#{% endif %}#}                        {#<li {% if routeName == 'back_vod_list' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>#}                        {#<a href=\"{{ path('back_vod_list') }}\" class=\"nav-link \">#}                        {#<i class=\"icon-list\"></i>#}                        {#<span class=\"title\">Liste</span>#}                        {#{% if routeName == 'back_vod_list' %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#</li>#}                        {#<li {% if routeName == 'back_vod_list_adult' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>#}                        {#<a href=\"{{ path('back_vod_list_adult') }}\" class=\"nav-link \">#}                        {#<i class=\"icon-star\"></i>#}                        {#<span class=\"title\">Liste Adultes</span>#}                        {#{% if routeName == 'back_vod_list_adult' %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#</li>#}                        {#<li {% if routeName == 'back_vod_add' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>#}                        {#<a href=\"{{ path('back_vod_add') }}\" class=\"nav-link \">#}                        {#<i class=\"icon-plus\"></i>#}                        {#<span class=\"title\">Ajout</span>#}                        {#{% if routeName == 'back_vod_add' %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#</li>#}                        {#</ul>#}                        {#</li>#}                        {#{% set FicheTvRoute = ['back_fichetv_list', 'back_fichetv_add', 'back_fichetv_edit',\"back_fichetv_list_adults\"] %}#}                        {#<li {% if routeName in FicheTvRoute %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>#}                        {#<a href=\"javascript:;\" class=\"nav-link nav-toggle\">#}                        {#<i class=\"fa fa-tv\"></i>#}                        {#<span class=\"title\">Fiche TV</span>#}                        {#{% if routeName in FicheTvRoute %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#<ul class=\"sub-menu\">#}                        {#<li {% if routeName == 'back_fichetv_list' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>#}                        {#<a href=\"{{ path('back_fichetv_list') }}\" class=\"nav-link \">#}                        {#<i class=\"icon-list\"></i>#}                        {#<span class=\"title\">Liste</span>#}                        {#{% if routeName == 'back_fichetv_list' %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#</li>#}                        {#<li {% if routeName == 'back_fichetv_list_adults' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>#}                        {#<a href=\"{{ path('back_fichetv_list_adults') }}\" class=\"nav-link \">#}                        {#<i class=\"icon-star\"></i>#}                        {#<span class=\"title\">Liste Adultes</span>#}                        {#{% if routeName == 'back_fichetv_list_adults' %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#</li>#}                        {#<li {% if routeName == 'back_fichetv_add' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>#}                        {#<a href=\"{{ path('back_fichetv_add') }}\" class=\"nav-link \">#}                        {#<i class=\"icon-plus\"></i>#}                        {#<span class=\"title\">Ajout</span>#}                        {#{% if routeName == 'back_fichetv_add' %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#</li>#}                        {#</ul>#}                        {#</li>#}                        {#{% set FicheAppRoute = ['back_ficheapp_list', 'back_ficheapp_add', 'back_ficheapp_edit'] %}#}                        {#<li {% if routeName in FicheAppRoute %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>#}                        {#<a href=\"javascript:;\" class=\"nav-link nav-toggle\">#}                        {#<i class=\"fa fa-laptop\"></i>#}                        {#<span class=\"title\">Fiche APP</span>#}                        {#{% if routeName in FicheAppRoute %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#<ul class=\"sub-menu\">#}                        {#<li {% if routeName == 'back_ficheapp_list' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>#}                        {#<a href=\"{{ path('back_ficheapp_list') }}\" class=\"nav-link \">#}                        {#<i class=\"icon-list\"></i>#}                        {#<span class=\"title\">Liste</span>#}                        {#{% if routeName == 'back_ficheapp_list' %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#</li>#}                        {#<li {% if routeName == 'back_ficheapp_add' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>#}                        {#<a href=\"{{ path('back_ficheapp_add') }}\" class=\"nav-link \">#}                        {#<i class=\"icon-plus\"></i>#}                        {#<span class=\"title\">Ajout</span>#}                        {#{% if routeName == 'back_ficheapp_add' %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#</li>#}                        {#</ul>#}                        {#</li>#}                        {#{% set infoRoute = ['back_freeinfo_list','back_freeinfo_add','back_freeinfo_edit' ] %}#}                        {#<li {% if routeName in infoRoute %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>#}                        {#<a href=\"javascript:;\" class=\"nav-link nav-toggle\">#}                        {#<i class=\"fa fa-info\"></i>#}                        {#<span class=\"title\">Free Infos</span>#}                        {#{% if routeName in infoRoute %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#<ul class=\"sub-menu\">#}                        {#{% if routeName == 'back_freeinfo_edit' %}#}                        {#<li class=\"nav-item active\">#}                        {#<a href=\"javascript:;\" class=\"nav-link \">#}                        {#<i class=\"icon-pencil\"></i>#}                        {#<span class=\"title\">Edition</span>#}                        {#<span class=\"selected\"></span>#}                        {#</a>#}                        {#</li>#}                        {#{% endif %}#}                        {#<li {% if routeName == 'back_freeinfo_list' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>#}                        {#<a href=\"{{ path('back_freeinfo_list') }}\" class=\"nav-link \">#}                        {#<i class=\"icon-list\"></i>#}                        {#<span class=\"title\">Liste</span>#}                        {#{% if routeName == 'back_freeinfo_list' %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#</li>#}                        {#<li {% if routeName == 'back_freeinfo_add' %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>#}                        {#<a href=\"{{ path('back_freeinfo_add') }}\" class=\"nav-link \">#}                        {#<i class=\"icon-plus\"></i>#}                        {#<span class=\"title\">Ajout</span>#}                        {#{% if routeName == 'back_freeinfo_add' %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#</li>#}                        {#</ul>#}                        {#</li>#}                        {#<li class=\"heading\">#}                        {#<h3 class=\"uppercase\">DIFFUSIONS</h3>#}                        {#</li>#}                        {#{% set rubricRoute = [\"back_rubric_list\", \"back_rubric_add\"] %}#}                        {#<li {% if routeName in rubricRoute %} class=\"nav-item active open\" {% else %} class=\"nav-item\" {% endif %}>#}                        {#<a href=\"{{ path('back_rubric_list') }}\" class=\"nav-link nav-toggle\">#}                        {#<i class=\"icon-feed\"></i>#}                        {#<span class=\"title\">Rubriques</span>#}                        {#{% if routeName in rubricRoute %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#</li>#}                        {#<li class=\"heading\">#}                        {#<h3 class=\"uppercase\">STATISTIQUES</h3>#}                        {#</li>#}                        {#<li class=\"heading\">#}                        {#<h3 class=\"uppercase\">Autres</h3>#}                        {#</li>#}                        {#<li class=\"nav-item\">#}                        {#<a href=\"{{ path('nelmio_api_doc_index') }}\"#}                        {#title=\"Documentation API\" class=\"nav-link nav-toggle\">#}                        {#<i class=\"icon-book-open\"></i>#}                        {#<span class=\"title\">API DOC</span>#}                        {#</a>#}                        {#</li>#}                        {#{% set parametersRoute = [\"back_users\", \"back_newuser\", \"back_updateuser\", \"back_edituser\", \"back_updateuser\", \"back_chaines\", \"back_shops\"] %}#}                        {#<li class=\"nav-item  {% if routeName in parametersRoute %} active open{% endif %}\">#}                        {#<a href=\"javascript:;\" class=\"nav-link nav-toggle\">#}                        {#<i class=\"icon-settings\"></i>#}                        {#<span class=\"title\">Paramètres</span>#}                        {#<span class=\"arrow {% if routeName in parametersRoute %} open{% endif %}\"></span>#}                        {#</a>#}                        {#<ul class=\"sub-menu\">#}                        {#<li class=\"nav-item  {% if app.request.requestUri == path('back_users') %}active open{% endif %}\">#}                        {#<a href=\"{{ path('back_users') }}\" class=\"nav-link \">#}                        {#<span class=\"title\">Utilisateurs</span>#}                        {#{% if app.request.requestUri == path('back_users') %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#</li>#}                        {#<li class=\"nav-item  {% if app.request.requestUri == path('back_shops') %}active open{% endif %}\">#}                        {#<a href=\"{{ path('back_shops') }}\" class=\"nav-link \">#}                        {#<span class=\"title\">Boutiques</span>#}                        {#{% if app.request.requestUri == path('back_shops') %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#</li>#}                        {#<li class=\"nav-item  {% if app.request.requestUri == path('back_chaines') %}active open{% endif %}\">#}                        {#<a href=\"{{ path('back_chaines') }}\" class=\"nav-link \">#}                        {#<span class=\"title\">Chaines</span>#}                        {#{% if app.request.requestUri == path('back_chaines') %}#}                        {#<span class=\"selected\"></span>#}                        {#{% endif %}#}                        {#</a>#}                        {#</li>#}                        {#</ul>#}                        {#</li>#}                        <li class=\"nav-item\">                            <a href=\"{{ path('fos_user_security_logout') }}\"                               title=\"Se déconnecter\" class=\"nav-link nav-toggle\">                                <i class=\"icon-logout\"></i>                                <span class=\"title\">Déconnexion</span>                            </a>                        </li>                    </ul>                    <!-- END SIDEBAR MENU -->                    <!-- END SIDEBAR MENU -->                </div>                <!-- END SIDEBAR -->            </div>            <!-- END SIDEBAR -->            <!-- BEGIN CONTENT -->            <div class=\"page-content-wrapper\">                <!-- BEGIN CONTENT BODY -->                <div class=\"page-content\">                    <!-- BEGIN PAGE HEADER-->                    {% block back_body_header %}                        <!-- BEGIN PAGE BAR -->                        <div class=\"page-bar\">                            <ul class=\"page-breadcrumb\">                                <li>                                    <a href=\"{{ path('back_home') }}\"><i class=\"fa fa-home\"></i></a>                                    <i class=\"fa fa-circle\"></i>                                </li>                                {% block header_breadcrumb %}                                    <li>                                        <span>Liste</span>                                    </li>                                {% endblock header_breadcrumb %}                            </ul>                            <div class=\"page-toolbar\">                                {% block action_toolbar %}                                    <div class=\"btn-group pull-right\">                                        <button type=\"button\" class=\"btn green btn-sm btn-outline dropdown-toggle\"                                                data-toggle=\"dropdown\"> Actions                                            <i class=\"fa fa-angle-down\"></i>                                        </button>                                        <ul class=\"dropdown-menu pull-right\" role=\"menu\">                                            <li>                                                <a href=\"#\">                                                    <i class=\"icon-bell\"></i> Vidéos</a>                                            </li>                                            <li>                                                <a href=\"#\">                                                    <i class=\"icon-shield\"></i> Catalogues</a>                                            </li>                                            <li>                                                <a href=\"#\">                                                    <i class=\"icon-user\"></i> Rubric</a>                                            </li>                                            <li class=\"divider\"></li>                                            <li>                                                <a href=\"#\">                                                    <i class=\"icon-bag\"></i> Abonnements</a>                                            </li>                                        </ul>                                    </div>                                {% endblock action_toolbar %}                            </div>                        </div>                        <!-- END PAGE BAR -->                        <!-- BEGIN PAGE TITLE-->                        <h1 class=\"page-title\">{% block page_title %}Dashboard{% endblock page_title %}                            {% block page_sub_title %}                                <small>Dashboard & Statisques</small>{% endblock page_sub_title %}                        </h1>                    {% endblock back_body_header %}                    {#{{ dump(app.session.flashBag.all) }}#}                    <div class=\"row\">                        {% for type, messages in app.session.flashBag.all %}                            <div class=\"col-md-12 col-sm-12\">                                {% for message in messages %}                                    <div class=\" alert {{ type }}\">                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\"                                                aria-hidden=\"true\"></button>                                        {{ message | raw }}                                    </div>                                {% endfor %}                            </div>                        {% endfor %}                    </div>                    <!-- END THEME PANEL -->                    {% block back_body %}{% endblock back_body %}                </div>                <!-- END CONTENT BODY -->            </div>            <!-- END CONTENT -->            <!-- BEGIN QUICK SIDEBAR -->            <a href=\"javascript:;\" class=\"page-quick-sidebar-toggler\">                <i class=\"icon-login\"></i>            </a>            <!-- END QUICK SIDEBAR -->        </div>        <!-- END CONTAINER -->        <!-- BEGIN FOOTER -->        <div class=\"page-footer\">            <div class=\"page-footer-inner\">B2B {{ \"now\" | date (\"Y\") }} &copy; Tous droits réservés            </div>            <div class=\"scroll-to-top\">                <i class=\"icon-arrow-up\"></i>            </div>        </div>        <!-- END FOOTER -->    </div>{% endblock body %}    {% block javascripts %}        {{ parent() }}        {% javascripts        \"bundles/back/theme/assets/global/scripts/app.min.js\"        \"bundles/back/theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js\"        \"bundles/back/theme/assets/layouts/layout/scripts/layout.min.js\" %}        <script src=\"{{ asset_url }}\"></script>        {% endjavascripts %}    {% endblock javascripts %}   ", "@Back/layout.html.twig", "/Users/yann/Sites/B2B/src/BackBundle/Resources/views/layout.html.twig");
    }
}
