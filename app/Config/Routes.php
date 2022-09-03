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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/admin', 'AdminController::admin');
$routes->get('/', 'Home::wellcome');
$routes->get('/daftar', 'DaftarController::daftar');
$routes->get('/jadwal', 'DaftarController::jadwal');
$routes->get('/jadwal/(:any)', 'DaftarController::instruktur/$1');
$routes->post('/regis', 'DaftarController::regis');
$routes->get('/seluruhsiswa', 'AdminController::allMem');
$routes->get('/hendri', 'AdminController::hendri');
$routes->get('/suhadi', 'AdminController::suhadi');
$routes->get('/yono', 'AdminController::yono');
$routes->get('/eko', 'AdminController::eko');
$routes->get('/edit/(:any)', 'AdminController::edit/$1');
$routes->post('/update/(:any)/(:any)', 'AdminController::update/$1/$2');
$routes->delete('/delete/(:any)/(:any)', 'AdminController::delete/$1/$2');
$routes->get('/login', 'LoginController::login');
$routes->post('/login_action', 'LoginController::login_action');
$routes->get('/logout', 'LoginController::logout');
$routes->post('/storeadmin', 'AdminController::store');
$routes->get('/inputadmin', 'AdminController::create');
$routes->get('/lihatadmin', 'AdminController::lihatadmin');
$routes->get('/download', 'AdminController::excel');
$routes->get('/validasisiswa', 'AdminController::valid');
$routes->post('/validasi/(:any)', 'AdminController::validasi/$1');
$routes->get('/lihatjadwal', 'AdminController::adminjadwal');
$routes->get('/lihatjadwal/(:any)', 'AdminController::lihatjadwal/$1');

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
