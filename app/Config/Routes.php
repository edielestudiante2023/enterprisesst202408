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
$routes->post('/addClientPost', 'ConsultantController::addClientPost');
$routes->get('/responsableSGSST/(:num)', 'SGSSTPlanear::responsableDelSGSST/$1');

$routes->get('/error', 'ErrorController::index');

$routes->get('/reportTypes', 'ReportTypeController::index');
$routes->get('/reportTypes/add', 'ReportTypeController::add');
$routes->post('/reportTypes/addPost', 'ReportTypeController::addPost');

$routes->get('/addReportType', 'ReportTypeController::addReportType');
$routes->post('/addReportTypePost', 'ReportTypeController::addReportTypePost');

$routes->get('/listReportTypes', 'ReportTypeController::index');

$routes->get('/listReportTypes', 'ReportTypeController::listReportTypes');
$routes->get('/addReportType', 'ReportTypeController::addReportType');
$routes->post('/addReportTypePost', 'ReportTypeController::addReportTypePost');
$routes->get('/editReportType/(:num)', 'ReportTypeController::edit/$1');
$routes->post('/editReportTypePost/(:num)', 'ReportTypeController::editPost/$1');
$routes->get('/deleteReportType/(:num)', 'ReportTypeController::delete/$1');

$routes->get('/viewDocuments', 'ClientController::viewDocuments');

$routes->get('/listPolicies', 'PolicyController::listPolicies');
$routes->get('/addPolicy', 'PolicyController::addPolicy');
$routes->post('/addPolicyPost', 'PolicyController::addPolicyPost');
$routes->get('/editPolicy/(:num)', 'PolicyController::editPolicy/$1');
$routes->post('/editPolicyPost/(:num)', 'PolicyController::editPolicyPost/$1');
$routes->get('/deletePolicy/(:num)', 'PolicyController::deletePolicy/$1');

$routes->get('/listPolicyTypes', 'PolicyController::listPolicyTypes');
$routes->get('/addPolicyType', 'PolicyController::addPolicyType');
$routes->post('/addPolicyTypePost', 'PolicyController::addPolicyTypePost');
$routes->get('/editPolicyType/(:num)', 'PolicyController::editPolicyType/$1');
$routes->post('/editPolicyTypePost/(:num)', 'PolicyController::editPolicyTypePost/$1');
$routes->get('/deletePolicyType/(:num)', 'PolicyController::deletePolicyType/$1');

$routes->get('/policyNoAlcoholDrogas/(:num)', 'SGSSTPlanear::policyNoAlcoholDrogas/$1');
$routes->get('/prueba1/(:num)', 'Prueba1Controller::prueba1/$1');
$routes->get('/viewPolicy/(:num)', 'ClientDocumentController::viewPolicy/$1');
$routes->get('/addVersion', 'VersionController::addVersion');
$routes->post('/addVersionPost', 'VersionController::addVersionPost');
$routes->get('/editVersion/(:num)', 'VersionController::editVersion/$1');
$routes->post('/editVersionPost/(:num)', 'VersionController::editVersionPost/$1');
$routes->get('/deleteVersion/(:num)', 'VersionController::deleteVersion/$1');
$routes->get('/listVersions', 'VersionController::listVersions');
$routes->get('/generatePdfNoAlcoholDrogas', 'SGSSTPlanear::generatePdfNoAlcoholDrogas');































