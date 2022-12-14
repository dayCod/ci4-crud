<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->group('/', static function($routes) {
    $routes->get('', 'HomeController::index', ['as' => 'homepage']);
    $routes->add('/(:num)', 'HomeController::detail/$1');
});
$routes->group('auth', static function ($routes) {
    $routes->get('login', 'AuthController::login_view', ['as' => 'login']);
    $routes->get('register', 'AuthController::register_view', ['as' => 'register']);
    $routes->post('create_account', 'AuthController::create_users_account', ['as' => 'create_account']);
    $routes->post('login_account', 'AuthController::login_account', ['as' => 'login_account']);
    $routes->get('logout', 'AuthController::logout_account');
});
$routes->group('admin', static function($routes) {
    $routes->get('index', 'AdminController::index');
    $routes->get('create', 'AdminController::create');
    $routes->post('store', 'AdminController::store');
    $routes->get('edit/(:num)', 'AdminController::edit/$1');
    $routes->put('update/(:num)', 'AdminController::update/$1');
    $routes->delete('destroy/(:num)', 'AdminController::destroy/$1');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
