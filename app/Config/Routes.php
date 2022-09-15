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
$routes->get('/', 'Home::index');

$routes->get('/active-plan', 'ActivePlan::index');
$routes->get('/active-plan/cancel/(:any)', 'ActivePlan::cancel/$1');
$routes->post('/active-plan/save', 'ActivePlan::save');
$routes->get('/active-plan/addrunning/(:any)', 'ActivePlan::addRunning/$1');
$routes->get('/active-plan/edit/(:any)', 'ActivePlan::edit/$1');
$routes->post('/active-plan/update', 'ActivePlan::update');


$routes->get('/running-transaction', 'RunningTransaction::index');
$routes->get('/running-transaction/edit/(:any)', 'RunningTransaction::edit/$1');
$routes->post('/running-transaction/update', 'RunningTransaction::update');
$routes->get('/running-transaction/finish/(:any)', 'RunningTransaction::finish/$1');



$routes->get('/finish-plan', 'FinishPlan::index');
$routes->get('/cancel-plan', 'CancelPlan::index');

$routes->get('/review-trading-plan', 'Education::reviewTradingPlan');

$routes->get('/sl-tp-calculator', 'SltpCalculator::index');
$routes->post('/sl-tp-calculator/save', 'SltpCalculator::save');






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
