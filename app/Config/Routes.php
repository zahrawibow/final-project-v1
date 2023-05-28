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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//-------------------------USER ROLE-----------------------------
// Home and Dashboard Routes
$routes->get('/home', 'Home::landingPage');
$routes->get('/', 'DashboardController::index');
$routes->get('/iaea', 'DashboardController::radioisotope');
$routes->get('/attendance', 'DashboardController::attendance');

$routes->group('attendance', static function ($routes) {
    $routes->post('store', 'DashboardController::stored_attendance', ['as' => 'attendance.store']); //non-controller

    $routes->get('manage', 'ManageAttendanceController::index', ['as' => 'attendance.manage', 'filter' => 'role:admin']); //non-controller
});

// Asset Routes
$routes->group('asset', static function ($routes) {
    $routes->get('/', 'AssetsController::index', ['as' => 'asset.index']);
    $routes->get('detail/(:any)', 'AssetsController::show_detail/$1', ['as' => 'asset.detail']);

    // Manage Assets Routes & Admin previleges
    $routes->group('', ['filter' => 'role:admin'], static function ($routes) {
        $routes->get('create', 'AssetsController::create', ['as' => 'asset.create']);
        $routes->post('storedasset', 'AssetsController::stored_asset', ['as' => 'asset.store']);

        $routes->get('edit', 'AssetsController::edit', ['as' => 'asset.edit']);
        $routes->post('updatedasset', 'AssetsController::updated_asset', ['as' => 'asset.update']);
    });
});

// $routes->get('/asset/detail', 'AssetsController::show_detail');


// Logbook Routes
$routes->get('/logbook', 'LogbookController::index');
// $routes->get('/loans', 'LogbookController::create_loaning');
// $routes->get('/returns', 'LogbookController::create_returning');
// $routes->get('/logs', 'LogbookController::create_logging');

$routes->post('/storedloans', 'LogbookController::stored_loaning'); //non-controller
$routes->post('/storedreturns', 'LogbookController::stored_returning'); //non-controller
$routes->post('/storedlogs', 'LogbookController::stored_logging'); //non-controller
$routes->post('/storedradiation', 'LogbookController::stored_radiation'); //non-controller

// $routes->post('/updatedloans', 'LogbookController::updated_loaning'); //non-controller
// $routes->post('/updatedreturns', 'LogbookController::updated_returning'); //non-controller
// $routes->post('/updatedlogs', 'LogbookController::updated_logging'); //non-controller

// Practicum Routes
$routes->get('/practicum', 'PracticumController::index');
$routes->get('/modules', 'PracticumController::show_module');
$routes->get('/schedules', 'PracticumController::show_schedule');
$routes->get('/teams', 'PracticumController::show_team');

// Schedule Routes
$routes->get('/schedule', 'ScheduleController::index');

// Profile Routes
$routes->get('/myprofile', 'ProfileController::index');





//---------------------------ADMIN ROLE-------------------------------
// Manage Maintenance Routes
$routes->group('maintenance', ['filter' => 'role:admin'], static function ($routes) {
    $routes->get('/', 'MaintenanceController::index');
    $routes->get('detail', 'MaintenanceController::show_detail');
    $routes->get('create', 'MaintenanceController::create');
    $routes->get('edit', 'MaintenanceController::edit');
    $routes->post('storedmaintenance', 'MaintenanceController::stored_maintenance'); //non-controller
    $routes->post('updatedmaintenance', 'MaintenanceController::updated_maintenance'); //non-controller
});

// Manage Account Routes
$routes->group('manage-account', ['filter' => 'role:admin'], static function ($routes) {
    $routes->get('/', 'AccountController::index');
    $routes->get('detail', 'AccountController::show_detail');
    $routes->get('edit', 'AccountController::edit');
    $routes->get('create', 'AccountController::create');
    $routes->post('updatedacc', 'AccountController::updated_acc'); //non-controller
    $routes->post('storedacc', 'AccountController::stored_acc'); //non-controller
});


// Manage Practicum Routes
$routes->get('/manageprac', 'ManagePracticumController::index'); //non-controller
$routes->get('/manageprac/create', 'ManagePracticumController::create'); //non-controller
$routes->post('/storedprac', 'ManagePracticumController::stored_practicum'); //non-controller
// $routes->get('/modules/create', 'PracticumController::create_module'); //non-controller
// $routes->get('/schedules/create', 'PracticumController::create_schedule'); //non-controller
// $routes->get('/teams/create', 'PracticumController::create_team'); //non-controller
// $routes->post('/storedmodules', 'PracticumController::stored_module'); //non-controller
// $routes->post('/storedschedules', 'PracticumController::stored_schedule'); //non-controller
// $routes->post('/storedteams', 'PracticumController::stored_team'); //non-controller
// $routes->post('/updatedmodules', 'PracticumController::updated_module'); //non-controller
// $routes->post('/updatedschedules', 'PracticumController::updated_schedule'); //non-controller
// $routes->post('/updatedteams', 'PracticumController::updated_team'); //non-controller


$routes->get('/manageloan', 'ManageLoansController::create'); //non-controller
$routes->get('/managelogs', 'ManageLogsController::index'); //non-controller

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
