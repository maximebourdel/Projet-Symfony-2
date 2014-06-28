<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/4b6e302')) {
                // _assetic_4b6e302
                if ($pathinfo === '/css/4b6e302.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4b6e302',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4b6e302',);
                }

                if (0 === strpos($pathinfo, '/css/4b6e302_part_1_bootstrap')) {
                    if (0 === strpos($pathinfo, '/css/4b6e302_part_1_bootstrap-')) {
                        if (0 === strpos($pathinfo, '/css/4b6e302_part_1_bootstrap-rtl')) {
                            // _assetic_4b6e302_0
                            if ($pathinfo === '/css/4b6e302_part_1_bootstrap-rtl_1.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '4b6e302',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_4b6e302_0',);
                            }

                            // _assetic_4b6e302_1
                            if ($pathinfo === '/css/4b6e302_part_1_bootstrap-rtl.min_2.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '4b6e302',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_4b6e302_1',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/css/4b6e302_part_1_bootstrap-theme')) {
                            // _assetic_4b6e302_2
                            if ($pathinfo === '/css/4b6e302_part_1_bootstrap-theme_3.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '4b6e302',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_4b6e302_2',);
                            }

                            if (0 === strpos($pathinfo, '/css/4b6e302_part_1_bootstrap-theme.')) {
                                // _assetic_4b6e302_3
                                if ($pathinfo === '/css/4b6e302_part_1_bootstrap-theme.css_4.css') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4b6e302',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_4b6e302_3',);
                                }

                                // _assetic_4b6e302_4
                                if ($pathinfo === '/css/4b6e302_part_1_bootstrap-theme.min_5.css') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4b6e302',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_4b6e302_4',);
                                }

                            }

                        }

                    }

                    // _assetic_4b6e302_5
                    if ($pathinfo === '/css/4b6e302_part_1_bootstrap_6.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4b6e302',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_4b6e302_5',);
                    }

                    // _assetic_4b6e302_6
                    if ($pathinfo === '/css/4b6e302_part_1_bootstrap.css_7.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4b6e302',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_4b6e302_6',);
                    }

                    // _assetic_4b6e302_7
                    if ($pathinfo === '/css/4b6e302_part_1_bootstrap_8.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4b6e302',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_4b6e302_7',);
                    }

                    // _assetic_4b6e302_8
                    if ($pathinfo === '/css/4b6e302_part_1_bootstrap.min_9.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4b6e302',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_4b6e302_8',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/14d5829')) {
                // _assetic_14d5829
                if ($pathinfo === '/css/14d5829.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '14d5829',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_14d5829',);
                }

                // _assetic_14d5829_0
                if ($pathinfo === '/css/14d5829_part_1_docs.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '14d5829',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_14d5829_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/93d9c5a')) {
            // _assetic_93d9c5a
            if ($pathinfo === '/js/93d9c5a.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '93d9c5a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_93d9c5a',);
            }

            if (0 === strpos($pathinfo, '/js/93d9c5a_part_1_')) {
                if (0 === strpos($pathinfo, '/js/93d9c5a_part_1_a')) {
                    // _assetic_93d9c5a_0
                    if ($pathinfo === '/js/93d9c5a_part_1_affix_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '93d9c5a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_93d9c5a_0',);
                    }

                    // _assetic_93d9c5a_1
                    if ($pathinfo === '/js/93d9c5a_part_1_alert_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '93d9c5a',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_93d9c5a_1',);
                    }

                }

                // _assetic_93d9c5a_2
                if ($pathinfo === '/js/93d9c5a_part_1_button_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '93d9c5a',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_93d9c5a_2',);
                }

                if (0 === strpos($pathinfo, '/js/93d9c5a_part_1_c')) {
                    // _assetic_93d9c5a_3
                    if ($pathinfo === '/js/93d9c5a_part_1_carousel_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '93d9c5a',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_93d9c5a_3',);
                    }

                    // _assetic_93d9c5a_4
                    if ($pathinfo === '/js/93d9c5a_part_1_collapse_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '93d9c5a',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_93d9c5a_4',);
                    }

                }

                // _assetic_93d9c5a_5
                if ($pathinfo === '/js/93d9c5a_part_1_dropdown_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '93d9c5a',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_93d9c5a_5',);
                }

                // _assetic_93d9c5a_6
                if ($pathinfo === '/js/93d9c5a_part_1_modal_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '93d9c5a',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_93d9c5a_6',);
                }

                // _assetic_93d9c5a_7
                if ($pathinfo === '/js/93d9c5a_part_1_popover_8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '93d9c5a',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_93d9c5a_7',);
                }

                // _assetic_93d9c5a_8
                if ($pathinfo === '/js/93d9c5a_part_1_scrollspy_9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '93d9c5a',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_93d9c5a_8',);
                }

                if (0 === strpos($pathinfo, '/js/93d9c5a_part_1_t')) {
                    // _assetic_93d9c5a_9
                    if ($pathinfo === '/js/93d9c5a_part_1_tab_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '93d9c5a',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_93d9c5a_9',);
                    }

                    // _assetic_93d9c5a_10
                    if ($pathinfo === '/js/93d9c5a_part_1_tooltip_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '93d9c5a',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_93d9c5a_10',);
                    }

                    // _assetic_93d9c5a_11
                    if ($pathinfo === '/js/93d9c5a_part_1_transition_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '93d9c5a',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_93d9c5a_11',);
                    }

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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/blog')) {
            // sdzblog_accueil
            if (preg_match('#^/blog(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_accueil')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::indexAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/blog/a')) {
                // sdzblog_voir
                if (0 === strpos($pathinfo, '/blog/article') && preg_match('#^/blog/article/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_voir')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::voirAction',));
                }

                // sdzblog_ajouter
                if ($pathinfo === '/blog/ajouter') {
                    return array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::ajouterAction',  '_route' => 'sdzblog_ajouter',);
                }

            }

            // sdzblog_modifier
            if (0 === strpos($pathinfo, '/blog/modifier') && preg_match('#^/blog/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_modifier')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::modifierAction',));
            }

            // sdzblog_supprimer
            if (0 === strpos($pathinfo, '/blog/supprimer') && preg_match('#^/blog/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_supprimer')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::supprimerAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sdz\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
