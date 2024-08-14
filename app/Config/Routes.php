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
$routes->get('/dashboardclient', 'ClientController::dashboard');

$routes->get('/dashboardconsultant', 'ConsultantController::index');

$routes->get('/addClient', 'ConsultantController::addClient');
$routes->post('/addClient', 'ConsultantController::addClientPost');

$routes->get('/prueba_form', 'PruebaController::index');
$routes->post('/prueba_save', 'PruebaController::save');

$routes->get('/addTest', 'TestController::index');
$routes->post('/addTest', 'TestController::addTestPost');

$routes->get('/addConsultant', 'ConsultantController::addConsultant');
$routes->post('/addConsultantPost', 'ConsultantController::addConsultantPost');
$routes->get('/listConsultants', 'ConsultantController::listConsultants');
$routes->get('/editConsultant/(:num)', 'ConsultantController::editConsultant/$1');
$routes->post('/editConsultant/(:num)', 'ConsultantController::editConsultant/$1');
$routes->get('/deleteConsultant/(:num)', 'ConsultantController::deleteConsultant/$1');






$routes->get('/reportList', 'ReportController::reportList');
$routes->get('/addReport', 'ReportController::addReport');
$routes->post('/addReportPost', 'ReportController::addReportPost');
$routes->get('/editReport/(:num)', 'ReportController::editReport/$1');
$routes->post('/editReportPost/(:num)', 'ReportController::editReportPost/$1');
$routes->get('/deleteReport/(:num)', 'ReportController::deleteReport/$1');

$routes->get('/report_dashboard', 'ClienteReportController::index');
$routes->get('/documento', 'DocumentoController::mostrarDocumento');

$routes->get('/showPhoto/(:num)', 'ConsultantController::showPhoto/$1');
$routes->post('/editConsultantPost/(:num)', 'ConsultantController::editConsultantPost/$1');
$routes->get('/documento', 'ClientController::documento');

$routes->get('/listClients', 'ConsultantController::listClients');
$routes->get('/editClient/(:num)', 'ConsultantController::editClient/$1');
$routes->post('/updateClient/(:num)', 'ConsultantController::updateClient/$1');
$routes->get('/deleteClient/(:num)', 'ConsultantController::deleteClient/$1');






