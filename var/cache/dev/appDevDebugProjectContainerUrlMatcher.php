<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/7293b1a')) {
            // _assetic_7293b1a
            if ($pathinfo === '/css/7293b1a.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7293b1a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7293b1a',);
            }

            if (0 === strpos($pathinfo, '/css/7293b1a_')) {
                // _assetic_7293b1a_0
                if ($pathinfo === '/css/7293b1a_bootstrap-switch.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7293b1a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_7293b1a_0',);
                }

                // _assetic_7293b1a_1
                if ($pathinfo === '/css/7293b1a_components.min_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7293b1a',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_7293b1a_1',);
                }

                // _assetic_7293b1a_2
                if ($pathinfo === '/css/7293b1a_plugins.min_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7293b1a',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_7293b1a_2',);
                }

                // _assetic_7293b1a_3
                if ($pathinfo === '/css/7293b1a_layout.min_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7293b1a',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_7293b1a_3',);
                }

                // _assetic_7293b1a_4
                if ($pathinfo === '/css/7293b1a_darkblue.min_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7293b1a',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_7293b1a_4',);
                }

                // _assetic_7293b1a_5
                if ($pathinfo === '/css/7293b1a_custom.min_6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7293b1a',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_7293b1a_5',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/5e72e9f')) {
            // _assetic_5e72e9f
            if ($pathinfo === '/js/5e72e9f.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5e72e9f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5e72e9f',);
            }

            if (0 === strpos($pathinfo, '/js/5e72e9f_')) {
                // _assetic_5e72e9f_0
                if ($pathinfo === '/js/5e72e9f_app.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5e72e9f',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5e72e9f_0',);
                }

                // _assetic_5e72e9f_1
                if ($pathinfo === '/js/5e72e9f_jquery.slimscroll.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5e72e9f',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_5e72e9f_1',);
                }

                // _assetic_5e72e9f_2
                if ($pathinfo === '/js/5e72e9f_layout.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5e72e9f',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_5e72e9f_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/8')) {
            // _assetic_8ed61eb
            if ($pathinfo === '/css/8ed61eb.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8ed61eb',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8ed61eb',);
            }

            if (0 === strpos($pathinfo, '/css/8519eb6')) {
                // _assetic_8519eb6
                if ($pathinfo === '/css/8519eb6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8519eb6',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8519eb6',);
                }

                if (0 === strpos($pathinfo, '/css/8519eb6_')) {
                    // _assetic_8519eb6_0
                    if ($pathinfo === '/css/8519eb6_css?family=Open+Sans:400,300,600,700&subset=all_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8519eb6',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8519eb6_0',);
                    }

                    // _assetic_8519eb6_1
                    if ($pathinfo === '/css/8519eb6_font-awesome.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8519eb6',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_8519eb6_1',);
                    }

                    // _assetic_8519eb6_2
                    if ($pathinfo === '/css/8519eb6_simple-line-icons.min_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8519eb6',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_8519eb6_2',);
                    }

                    if (0 === strpos($pathinfo, '/css/8519eb6_bootstrap')) {
                        // _assetic_8519eb6_3
                        if ($pathinfo === '/css/8519eb6_bootstrap.min_5.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '8519eb6',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_8519eb6_3',);
                        }

                        // _assetic_8519eb6_4
                        if ($pathinfo === '/css/8519eb6_bootstrap-switch.min_6.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '8519eb6',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_8519eb6_4',);
                        }

                    }

                    // _assetic_8519eb6_5
                    if ($pathinfo === '/css/8519eb6_components.min_7.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8519eb6',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_8519eb6_5',);
                    }

                    // _assetic_8519eb6_6
                    if ($pathinfo === '/css/8519eb6_plugins.min_8.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8519eb6',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_8519eb6_6',);
                    }

                    // _assetic_8519eb6_7
                    if ($pathinfo === '/css/8519eb6_login-2_9.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8519eb6',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_8519eb6_7',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/797a084')) {
                // _assetic_797a084
                if ($pathinfo === '/js/797a084.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '797a084',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_797a084',);
                }

                if (0 === strpos($pathinfo, '/js/797a084_')) {
                    // _assetic_797a084_0
                    if ($pathinfo === '/js/797a084_jquery.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '797a084',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_797a084_0',);
                    }

                    // _assetic_797a084_1
                    if ($pathinfo === '/js/797a084_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '797a084',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_797a084_1',);
                    }

                    if (0 === strpos($pathinfo, '/js/797a084_j')) {
                        // _assetic_797a084_2
                        if ($pathinfo === '/js/797a084_js.cookie.min_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '797a084',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_797a084_2',);
                        }

                        // _assetic_797a084_3
                        if ($pathinfo === '/js/797a084_jquery.slimscroll.min_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '797a084',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_797a084_3',);
                        }

                    }

                    // _assetic_797a084_4
                    if ($pathinfo === '/js/797a084_app.min_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '797a084',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_797a084_4',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/2977f45')) {
                // _assetic_2977f45
                if ($pathinfo === '/js/2977f45.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2977f45',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_2977f45',);
                }

                if (0 === strpos($pathinfo, '/js/2977f45_')) {
                    // _assetic_2977f45_0
                    if ($pathinfo === '/js/2977f45_jquery.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2977f45',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_2977f45_0',);
                    }

                    // _assetic_2977f45_1
                    if ($pathinfo === '/js/2977f45_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2977f45',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_2977f45_1',);
                    }

                    if (0 === strpos($pathinfo, '/js/2977f45_j')) {
                        // _assetic_2977f45_2
                        if ($pathinfo === '/js/2977f45_js.cookie.min_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '2977f45',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_2977f45_2',);
                        }

                        // _assetic_2977f45_3
                        if ($pathinfo === '/js/2977f45_jquery.slimscroll.min_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '2977f45',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_2977f45_3',);
                        }

                    }

                    // _assetic_2977f45_4
                    if ($pathinfo === '/js/2977f45_bootstrap-switch.min_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2977f45',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_2977f45_4',);
                    }

                    // _assetic_2977f45_5
                    if ($pathinfo === '/js/2977f45_jquery.validate.min_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2977f45',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_2977f45_5',);
                    }

                    // _assetic_2977f45_6
                    if ($pathinfo === '/js/2977f45_additional-methods.min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2977f45',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_2977f45_6',);
                    }

                    // _assetic_2977f45_7
                    if ($pathinfo === '/js/2977f45_jquery.backstretch.min_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2977f45',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_2977f45_7',);
                    }

                    // _assetic_2977f45_8
                    if ($pathinfo === '/js/2977f45_app.min_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2977f45',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_2977f45_8',);
                    }

                    // _assetic_2977f45_9
                    if ($pathinfo === '/js/2977f45_login_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2977f45',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_2977f45_9',);
                    }

                    // _assetic_2977f45_10
                    if ($pathinfo === '/js/2977f45_router_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2977f45',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_2977f45_10',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/35402b4')) {
            // _assetic_35402b4
            if ($pathinfo === '/css/35402b4.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '35402b4',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_35402b4',);
            }

            if (0 === strpos($pathinfo, '/css/35402b4_')) {
                // _assetic_35402b4_0
                if ($pathinfo === '/css/35402b4_font-awesome.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '35402b4',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_35402b4_0',);
                }

                // _assetic_35402b4_1
                if ($pathinfo === '/css/35402b4_simple-line-icons.min_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '35402b4',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_35402b4_1',);
                }

                // _assetic_35402b4_2
                if ($pathinfo === '/css/35402b4_bootstrap.min_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '35402b4',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_35402b4_2',);
                }

                // _assetic_35402b4_3
                if ($pathinfo === '/css/35402b4_jquery-ui.min_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '35402b4',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_35402b4_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/48b4921')) {
            // _assetic_48b4921
            if ($pathinfo === '/js/48b4921.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '48b4921',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_48b4921',);
            }

            if (0 === strpos($pathinfo, '/js/48b4921_')) {
                if (0 === strpos($pathinfo, '/js/48b4921_jquery')) {
                    // _assetic_48b4921_0
                    if ($pathinfo === '/js/48b4921_jquery.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '48b4921',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_48b4921_0',);
                    }

                    // _assetic_48b4921_1
                    if ($pathinfo === '/js/48b4921_jquery-ui.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '48b4921',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_48b4921_1',);
                    }

                }

                // _assetic_48b4921_2
                if ($pathinfo === '/js/48b4921_bootstrap.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '48b4921',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_48b4921_2',);
                }

                // _assetic_48b4921_3
                if ($pathinfo === '/js/48b4921_js.cookie.min_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '48b4921',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_48b4921_3',);
                }

                // _assetic_48b4921_4
                if ($pathinfo === '/js/48b4921_router_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '48b4921',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_48b4921_4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // back_api
        if (rtrim($pathinfo, '/') === '/api') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'back_api');
            }

            return array (  '_controller' => 'RestApiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_api',);
        }

        // back_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'back_home');
            }

            return array (  '_controller' => 'BackBundle\\Controller\\BackController::indexAction',  '_route' => 'back_home',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // back_user
            if ($pathinfo === '/user') {
                return array (  '_controller' => 'BackBundle\\Controller\\UserController::indexAction',  '_route' => 'back_user',);
            }

            if (0 === strpos($pathinfo, '/user-action')) {
                // back_user_reset_password
                if ($pathinfo === '/user-action/reset/password') {
                    return array (  '_controller' => 'BackBundle\\Controller\\UserController::resetByEmailAction',  '_route' => 'back_user_reset_password',);
                }

                // back_user_check_email
                if ($pathinfo === '/user-action/check-email') {
                    return array (  '_controller' => 'BackBundle\\Controller\\UserController::checkEmailValidAction',  '_route' => 'back_user_check_email',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
