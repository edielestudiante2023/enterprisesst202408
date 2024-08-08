<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::login');
$routes->post('/loginPost', 'AuthController::loginPost');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/dashboardclient', 'ClientController::index');
$routes->get('/dashboardconsultant', 'ConsultantController::index');

$routes->get('/addClient', 'ConsultantController::addClient');
$routes->post('/addClient', 'ConsultantController::addClientPost');

$routes->get('/prueba_form', 'PruebaController::index');
$routes->post('/prueba_save', 'PruebaController::save');

$routes->get('/addTest', 'TestController::index');
$routes->post('/addTest', 'TestController::addTestPost');

$routes->get('/addConsultant', 'ConsultantController::addConsultant');
$routes->post('/addConsultant', 'ConsultantController::addConsultantPost');




$routes->get('/reportList', 'ReportController::reportList');
$routes->get('/addReport', 'ReportController::addReport');
$routes->post('/addReportPost', 'ReportController::addReportPost');
$routes->get('/editReport/(:num)', 'ReportController::editReport/$1');
$routes->post('/editReportPost/(:num)', 'ReportController::editReportPost/$1');
$routes->get('/deleteReport/(:num)', 'ReportController::deleteReport/$1');

