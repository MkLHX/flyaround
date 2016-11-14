<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

        if (0 === strpos($pathinfo, '/planemodel')) {
            // planemodel_index
            if (rtrim($pathinfo, '/') === '/planemodel') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_planemodel_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'planemodel_index');
                }

                return array (  '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::indexAction',  '_route' => 'planemodel_index',);
            }
            not_planemodel_index:

            // planemodel_show
            if (preg_match('#^/planemodel/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_planemodel_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planemodel_show')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::showAction',));
            }
            not_planemodel_show:

            // planemodel_new
            if ($pathinfo === '/planemodel/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_planemodel_new;
                }

                return array (  '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::newAction',  '_route' => 'planemodel_new',);
            }
            not_planemodel_new:

            // planemodel_edit
            if (preg_match('#^/planemodel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_planemodel_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planemodel_edit')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::editAction',));
            }
            not_planemodel_edit:

            // planemodel_delete
            if (preg_match('#^/planemodel/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_planemodel_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planemodel_delete')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::deleteAction',));
            }
            not_planemodel_delete:

        }

        // wcs_coav_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'wcs_coav_homepage');
            }

            return array (  '_controller' => 'WCS\\CoavBundle\\Controller\\DefaultController::indexAction',  '_route' => 'wcs_coav_homepage',);
        }

        if (0 === strpos($pathinfo, '/flight')) {
            // flight_index
            if (rtrim($pathinfo, '/') === '/flight') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_flight_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'flight_index');
                }

                return array (  '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::indexAction',  '_route' => 'flight_index',);
            }
            not_flight_index:

            // flight_show
            if (preg_match('#^/flight/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_flight_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'flight_show')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::showAction',));
            }
            not_flight_show:

            // flight_new
            if ($pathinfo === '/flight/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_flight_new;
                }

                return array (  '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::newAction',  '_route' => 'flight_new',);
            }
            not_flight_new:

            // flight_edit
            if (preg_match('#^/flight/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_flight_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'flight_edit')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::editAction',));
            }
            not_flight_edit:

            // flight_delete
            if (preg_match('#^/flight/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_flight_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'flight_delete')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::deleteAction',));
            }
            not_flight_delete:

        }

        if (0 === strpos($pathinfo, '/terrain')) {
            // terrain_index
            if (rtrim($pathinfo, '/') === '/terrain') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_terrain_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'terrain_index');
                }

                return array (  '_controller' => 'WCS\\CoavBundle\\Controller\\TerrainController::indexAction',  '_route' => 'terrain_index',);
            }
            not_terrain_index:

            // terrain_show
            if (preg_match('#^/terrain/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_terrain_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'terrain_show')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\TerrainController::showAction',));
            }
            not_terrain_show:

        }

        if (0 === strpos($pathinfo, '/reservation')) {
            // reservation_index
            if (rtrim($pathinfo, '/') === '/reservation') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reservation_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reservation_index');
                }

                return array (  '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::indexAction',  '_route' => 'reservation_index',);
            }
            not_reservation_index:

            // reservation_show
            if (preg_match('#^/reservation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reservation_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_show')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::showAction',));
            }
            not_reservation_show:

            // reservation_new
            if ($pathinfo === '/reservation/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_reservation_new;
                }

                return array (  '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::newAction',  '_route' => 'reservation_new',);
            }
            not_reservation_new:

            // reservation_edit
            if (preg_match('#^/reservation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_reservation_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_edit')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::editAction',));
            }
            not_reservation_edit:

            // reservation_delete
            if (preg_match('#^/reservation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_reservation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_delete')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::deleteAction',));
            }
            not_reservation_delete:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'WCS\\CoavBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'WCS\\CoavBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/wcs/coav')) {
                if (0 === strpos($pathinfo, '/admin/wcs/coav/terrain')) {
                    // admin_wcs_coav_terrain_list
                    if ($pathinfo === '/admin/wcs/coav/terrain/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.terrain',  '_sonata_name' => 'admin_wcs_coav_terrain_list',  '_route' => 'admin_wcs_coav_terrain_list',);
                    }

                    // admin_wcs_coav_terrain_create
                    if ($pathinfo === '/admin/wcs/coav/terrain/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.terrain',  '_sonata_name' => 'admin_wcs_coav_terrain_create',  '_route' => 'admin_wcs_coav_terrain_create',);
                    }

                    // admin_wcs_coav_terrain_batch
                    if ($pathinfo === '/admin/wcs/coav/terrain/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.terrain',  '_sonata_name' => 'admin_wcs_coav_terrain_batch',  '_route' => 'admin_wcs_coav_terrain_batch',);
                    }

                    // admin_wcs_coav_terrain_edit
                    if (preg_match('#^/admin/wcs/coav/terrain/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wcs_coav_terrain_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.terrain',  '_sonata_name' => 'admin_wcs_coav_terrain_edit',));
                    }

                    // admin_wcs_coav_terrain_delete
                    if (preg_match('#^/admin/wcs/coav/terrain/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wcs_coav_terrain_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.terrain',  '_sonata_name' => 'admin_wcs_coav_terrain_delete',));
                    }

                    // admin_wcs_coav_terrain_show
                    if (preg_match('#^/admin/wcs/coav/terrain/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wcs_coav_terrain_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.terrain',  '_sonata_name' => 'admin_wcs_coav_terrain_show',));
                    }

                    // admin_wcs_coav_terrain_export
                    if ($pathinfo === '/admin/wcs/coav/terrain/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.terrain',  '_sonata_name' => 'admin_wcs_coav_terrain_export',  '_route' => 'admin_wcs_coav_terrain_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/wcs/coav/flight')) {
                    // admin_wcs_coav_flight_list
                    if ($pathinfo === '/admin/wcs/coav/flight/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.flight',  '_sonata_name' => 'admin_wcs_coav_flight_list',  '_route' => 'admin_wcs_coav_flight_list',);
                    }

                    // admin_wcs_coav_flight_create
                    if ($pathinfo === '/admin/wcs/coav/flight/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.flight',  '_sonata_name' => 'admin_wcs_coav_flight_create',  '_route' => 'admin_wcs_coav_flight_create',);
                    }

                    // admin_wcs_coav_flight_batch
                    if ($pathinfo === '/admin/wcs/coav/flight/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.flight',  '_sonata_name' => 'admin_wcs_coav_flight_batch',  '_route' => 'admin_wcs_coav_flight_batch',);
                    }

                    // admin_wcs_coav_flight_edit
                    if (preg_match('#^/admin/wcs/coav/flight/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wcs_coav_flight_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.flight',  '_sonata_name' => 'admin_wcs_coav_flight_edit',));
                    }

                    // admin_wcs_coav_flight_delete
                    if (preg_match('#^/admin/wcs/coav/flight/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wcs_coav_flight_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.flight',  '_sonata_name' => 'admin_wcs_coav_flight_delete',));
                    }

                    // admin_wcs_coav_flight_show
                    if (preg_match('#^/admin/wcs/coav/flight/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wcs_coav_flight_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.flight',  '_sonata_name' => 'admin_wcs_coav_flight_show',));
                    }

                    // admin_wcs_coav_flight_export
                    if ($pathinfo === '/admin/wcs/coav/flight/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.flight',  '_sonata_name' => 'admin_wcs_coav_flight_export',  '_route' => 'admin_wcs_coav_flight_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/wcs/coav/planemodel')) {
                    // admin_wcs_coav_planemodel_list
                    if ($pathinfo === '/admin/wcs/coav/planemodel/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.planemodel',  '_sonata_name' => 'admin_wcs_coav_planemodel_list',  '_route' => 'admin_wcs_coav_planemodel_list',);
                    }

                    // admin_wcs_coav_planemodel_create
                    if ($pathinfo === '/admin/wcs/coav/planemodel/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.planemodel',  '_sonata_name' => 'admin_wcs_coav_planemodel_create',  '_route' => 'admin_wcs_coav_planemodel_create',);
                    }

                    // admin_wcs_coav_planemodel_batch
                    if ($pathinfo === '/admin/wcs/coav/planemodel/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.planemodel',  '_sonata_name' => 'admin_wcs_coav_planemodel_batch',  '_route' => 'admin_wcs_coav_planemodel_batch',);
                    }

                    // admin_wcs_coav_planemodel_edit
                    if (preg_match('#^/admin/wcs/coav/planemodel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wcs_coav_planemodel_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.planemodel',  '_sonata_name' => 'admin_wcs_coav_planemodel_edit',));
                    }

                    // admin_wcs_coav_planemodel_delete
                    if (preg_match('#^/admin/wcs/coav/planemodel/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wcs_coav_planemodel_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.planemodel',  '_sonata_name' => 'admin_wcs_coav_planemodel_delete',));
                    }

                    // admin_wcs_coav_planemodel_show
                    if (preg_match('#^/admin/wcs/coav/planemodel/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wcs_coav_planemodel_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.planemodel',  '_sonata_name' => 'admin_wcs_coav_planemodel_show',));
                    }

                    // admin_wcs_coav_planemodel_export
                    if ($pathinfo === '/admin/wcs/coav/planemodel/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.planemodel',  '_sonata_name' => 'admin_wcs_coav_planemodel_export',  '_route' => 'admin_wcs_coav_planemodel_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/wcs/coav/reservation')) {
                    // admin_wcs_coav_reservation_list
                    if ($pathinfo === '/admin/wcs/coav/reservation/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.reservation',  '_sonata_name' => 'admin_wcs_coav_reservation_list',  '_route' => 'admin_wcs_coav_reservation_list',);
                    }

                    // admin_wcs_coav_reservation_create
                    if ($pathinfo === '/admin/wcs/coav/reservation/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.reservation',  '_sonata_name' => 'admin_wcs_coav_reservation_create',  '_route' => 'admin_wcs_coav_reservation_create',);
                    }

                    // admin_wcs_coav_reservation_batch
                    if ($pathinfo === '/admin/wcs/coav/reservation/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.reservation',  '_sonata_name' => 'admin_wcs_coav_reservation_batch',  '_route' => 'admin_wcs_coav_reservation_batch',);
                    }

                    // admin_wcs_coav_reservation_edit
                    if (preg_match('#^/admin/wcs/coav/reservation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wcs_coav_reservation_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.reservation',  '_sonata_name' => 'admin_wcs_coav_reservation_edit',));
                    }

                    // admin_wcs_coav_reservation_delete
                    if (preg_match('#^/admin/wcs/coav/reservation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wcs_coav_reservation_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.reservation',  '_sonata_name' => 'admin_wcs_coav_reservation_delete',));
                    }

                    // admin_wcs_coav_reservation_show
                    if (preg_match('#^/admin/wcs/coav/reservation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wcs_coav_reservation_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.reservation',  '_sonata_name' => 'admin_wcs_coav_reservation_show',));
                    }

                    // admin_wcs_coav_reservation_export
                    if ($pathinfo === '/admin/wcs/coav/reservation/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.reservation',  '_sonata_name' => 'admin_wcs_coav_reservation_export',  '_route' => 'admin_wcs_coav_reservation_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/wcs/coav/user')) {
                    // admin_wcs_coav_user_list
                    if ($pathinfo === '/admin/wcs/coav/user/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_wcs_coav_user_list',  '_route' => 'admin_wcs_coav_user_list',);
                    }

                    // admin_wcs_coav_user_create
                    if ($pathinfo === '/admin/wcs/coav/user/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_wcs_coav_user_create',  '_route' => 'admin_wcs_coav_user_create',);
                    }

                    // admin_wcs_coav_user_batch
                    if ($pathinfo === '/admin/wcs/coav/user/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_wcs_coav_user_batch',  '_route' => 'admin_wcs_coav_user_batch',);
                    }

                    // admin_wcs_coav_user_edit
                    if (preg_match('#^/admin/wcs/coav/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wcs_coav_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_wcs_coav_user_edit',));
                    }

                    // admin_wcs_coav_user_delete
                    if (preg_match('#^/admin/wcs/coav/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wcs_coav_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_wcs_coav_user_delete',));
                    }

                    // admin_wcs_coav_user_show
                    if (preg_match('#^/admin/wcs/coav/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wcs_coav_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_wcs_coav_user_show',));
                    }

                    // admin_wcs_coav_user_export
                    if ($pathinfo === '/admin/wcs/coav/user/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_wcs_coav_user_export',  '_route' => 'admin_wcs_coav_user_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
