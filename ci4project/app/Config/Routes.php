<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/dashboard', 'dashboardUtama::dashboardutama');
$routes->get('/transaksi/pembelian', 'transaksi::pembelian');
$routes->get('/transaksi/service', 'transaksi::service');
$routes->get('/print_nota', 'print_nota::invoice');

$routes->get('/master_barang', 'masterbarang::index');
$routes->get('/user/admin', 'UserController::userAdmin');
// $routes->get('/user/admin/(:any)', 'UserController::deleteadm/$1');
$routes->get('/user/supplier', 'UserController::userSupplier');
$routes->get('/user/customer', 'UserController::userCustomer');
$routes->get('/user/mekanik', 'UserController::userMekanik');
$routes->get('/user/editadmin/(:num)', 'UserController::editadmin/$1');
$routes->get('/user/editsupplier/(:num)', 'UserController::editsupp/$1');
$routes->get('/user/editcustomer/(:num)', 'UserController::editcust/$1');
$routes->get('/user/editmekanik/(:num)', 'UserController::editmekan/$1');
$routes->get('/user/editsupplier', 'UserController::editsupplier');
$routes->get('/user/editcustomer', 'UserController::editcustomer');
$routes->get('/user/editmekanik', 'UserController::editmekanik');
$routes->get('/', 'Auth::login');
// $routes->get('/auth/register', 'Auth::register');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
