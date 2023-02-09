<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/register', 'Register::index');
$routes->post('/register/action', 'Register::action');
$routes->get('/berita/baca/(:segment)', 'Berita::baca/$1');
$routes->get('/berita', 'Berita::index');
$routes->get('/baca/(:segment)', 'Baca::index/$1');
$routes->get('/landak', 'Landak::index');
$routes->post('/landak/validasi', 'Landak::validasi');
$routes->get('/landak/dashboard/(:segment)', 'Landak::dashboard/$1');
$routes->get('/landak/dashboard', 'Landak::dashboard');
$routes->post('/landak/updconf', 'Landak::updconf');
$routes->post('/landak/updberita', 'Landak::updberita');
$routes->get('/landak/delberita/(:segment)', 'Landak::delberita/$1');
$routes->get('/landak/validasi/(:segment)', 'Landak::validasi/$1');
$routes->post('/landak/updateuser/(:segment)','Landak::updateuser/$1');
$routes->post('/landak/sendotp/(:segment)','Landak::sendotp/$1');
$routes->resource('api');
$routes->resource('userapi');
$routes->resource('konfigurasiapi');





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
