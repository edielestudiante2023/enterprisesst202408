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
$routes->get('/asignacionResponsable/(:num)', 'PzasignacionresponsableController::asignacionResponsable/$1');
$routes->get('/asignacionResponsabilidades/(:num)', 'PzasignacionresponsabilidadesController::asignacionResponsabilidades/$1');
$routes->get('/prueba1/(:num)', 'Prueba1Controller::prueba1/$1');
$routes->get('/viewPolicy/(:num)', 'ClientDocumentController::viewPolicy/$1');
$routes->get('/addVersion', 'VersionController::addVersion');
$routes->post('/addVersionPost', 'VersionController::addVersionPost');
$routes->get('/editVersion/(:num)', 'VersionController::editVersion/$1');
$routes->post('/editVersionPost/(:num)', 'VersionController::editVersionPost/$1');
$routes->get('/deleteVersion/(:num)', 'VersionController::deleteVersion/$1');
$routes->get('/listVersions', 'VersionController::listVersions');
$routes->get('/generatePdfNoAlcoholDrogas', 'SGSSTPlanear::generatePdfNoAlcoholDrogas');
$routes->get('/generatePdf_asignacionResponsable', 'PzasignacionresponsableController::generatePdf_asignacionResponsable');
$routes->get('/generatePdf_asignacionResponsabilidades', 'PzasignacionresponsabilidadesController::generatePdf_asignacionResponsabilidades');

$routes->get('/asignacionVigia/(:num)', 'PzvigiaController::asignacionVigia/$1');
$routes->get('/generatePdf_asignacionVigia', 'PzvigiaController::generatePdf_asignacionVigia');
$routes->get('/exoneracionCocolab/(:num)', 'PzexoneracioncocolabController::exoneracionCocolab/$1');
$routes->get('/generatePdf_exoneracionCocolab', 'PzexoneracioncocolabController::generatePdf_exoneracionCocolab');
$routes->get('/registroAsistencia/(:num)', 'PzregistroasistenciaController::registroAsistencia/$1');
$routes->get('/generatePdf_registroAsistencia', 'PzregistroasistenciaController::generatePdf_registroAsistencia');
$routes->get('/actaCopasst/(:num)', 'PzactacopasstController::actaCopasst/$1');
$routes->get('/generatePdf_actaCopasst', 'PzactacopasstController::generatePdf_actaCopasst');
$routes->get('/inscripcionCopasst/(:num)', 'PzinscripcioncopasstController::inscripcionCopasst/$1');
$routes->get('/generatePdf_inscripcionCopasst', 'PzinscripcioncopasstController::generatePdf_inscripcionCopasst');
$routes->get('/formatoAsistencia/(:num)', 'PzformatodeasistenciaController::formatoAsistencia/$1');
$routes->get('/generatePdf_formatoAsistencia', 'PzformatodeasistenciaController::generatePdf_formatoAsistencia');
$routes->get('/confidencialidadCocolab/(:num)', 'PzconfidencialidadcocolabController::confidencialidadCocolab/$1');
$routes->get('/generatePdf_confidencialidadCocolab', 'PzconfidencialidadcocolabController::generatePdf_confidencialidadCocolab');
$routes->get('/inscripcionCocolab/(:num)', 'PzinscripcioncocolabController::inscripcionCocolab/$1');
$routes->get('/generatePdf_inscripcionCocolab', 'PzinscripcioncocolabController::generatePdf_inscripcionCocolab');
$routes->get('/quejaCocolab/(:num)', 'PzquejacocolabController::quejaCocolab/$1');
$routes->get('/generatePdf_quejaCocolab', 'PzquejacocolabController::generatePdf_quejaCocolab');
$routes->get('/manconvivenciaLaboral/(:num)', 'PzmanconvivencialaboralController::manconvivenciaLaboral/$1');
$routes->get('/generatePdf_manconvivenciaLaboral', 'PzmanconvivencialaboralController::generatePdf_manconvivenciaLaboral');
$routes->get('/prcCocolab/(:num)', 'PzprccocolabController::prcCocolab/$1');
$routes->get('/generatePdf_prcCocolab', 'PzprccocolabController::generatePdf_prcCocolab');
$routes->get('/prgCapacitacion/(:num)', 'PzprgcapacitacionController::prgCapacitacion/$1');
$routes->get('/generatePdf_prgCapacitacion', 'PzprgcapacitacionController::generatePdf_prgCapacitacion');
$routes->get('/prgInduccion/(:num)', 'PzprginduccionController::prgInduccion/$1');
$routes->get('/generatePdf_prgInduccion', 'PzprginduccionController::generatePdf_prgInduccion');
$routes->get('/ftevaluacionInduccion/(:num)', 'PzftevaluacioninduccionController::ftevaluacionInduccion/$1');
$routes->get('/generatePdf_ftevaluacionInduccion', 'PzftevaluacioninduccionController::generatePdf_ftevaluacionInduccion');
$routes->get('/politicaSst/(:num)', 'PzpoliticasstController::politicaSst/$1');
$routes->get('/generatePdf_politicaSst', 'PzpoliticasstController::generatePdf_politicaSst');
$routes->get('/politicaAlcohol/(:num)', 'PzpoliticaalcoholController::politicaAlcohol/$1');
$routes->get('/generatePdf_politicaAlcohol', 'PzpoliticaalcoholController::generatePdf_politicaAlcohol');
$routes->get('/politicaEmergencias/(:num)', 'PzpoliticaemergenciasController::politicaEmergencias/$1');
$routes->get('/generatePdf_politicaEmergencias', 'PzpoliticaemergenciasController::generatePdf_politicaEmergencias');
$routes->get('/politicaAcoso/(:num)', 'PzpoliticaacosoController::politicaAcoso/$1');
$routes->get('/generatePdf_politicaAcoso', 'PzpoliticaacosoController::generatePdf_politicaAcoso');
$routes->get('/politicaPesv/(:num)', 'PzpoliticapesvController::politicaPesv/$1');
$routes->get('/generatePdf_politicaPesv', 'PzpoliticapesvController::generatePdf_politicaPesv');
$routes->get('/regHigsegind/(:num)', 'PzreghigsegindController::regHigsegind/$1');
$routes->get('/generatePdf_regHigsegind', 'PzreghigsegindController::generatePdf_regHigsegind');
$routes->get('/oBjetivos/(:num)', 'PzobjetivosController::oBjetivos/$1');
$routes->get('/generatePdf_oBjetivos', 'PzobjetivosController::generatePdf_oBjetivos');
$routes->get('/documentosSgsst/(:num)', 'PzdocumentacionController::documentosSgsst/$1');
$routes->get('/generatePdf_documentosSgsst', 'PzdocumentacionController::generatePdf_documentosSgsst');
$routes->get('/rendicionCuentas/(:num)', 'PzrendicionController::rendicionCuentas/$1');
$routes->get('/generatePdf_rendicionCuentas', 'PzrendicionController::generatePdf_rendicionCuentas');
$routes->get('/comunicacionInterna/(:num)', 'PzcomunicacionController::comunicacionInterna/$1');
$routes->get('/generatePdf_comunicacionInterna', 'PzcomunicacionController::generatePdf_comunicacionInterna');
$routes->get('/manProveedores/(:num)', 'PzmanproveedoresController::manProveedores/$1');
$routes->get('/generatePdf_manProveedores', 'PzmanproveedoresController::generatePdf_manProveedores');
$routes->get('/examenMedico/(:num)', 'PzexamedController::examenMedico/$1');
$routes->get('/generatePdf_examenMedico', 'PzexamedController::generatePdf_examenMedico');
$routes->get('/medPreventiva/(:num)', 'PzmedpreventivaController::medPreventiva/$1');
$routes->get('/generatePdf_medPreventiva', 'PzmedpreventivaController::generatePdf_medPreventiva');
$routes->get('/reporteAccidente/(:num)', 'PzrepoaccidenteController::reporteAccidente/$1');
$routes->get('/generatePdf_reporteAccidente', 'PzrepoaccidenteController::generatePdf_reporteAccidente');
$routes->get('/inspeccionPlanynoplan/(:num)', 'PzinpeccionplanynoplanController::inspeccionPlanynoplan/$1');
$routes->get('/generatePdf_inspeccionPlanynoplan', 'PzinpeccionplanynoplanController::generatePdf_inspeccionPlanynoplan');
$routes->get('/entregaDotacion/(:num)', 'HzentregadotacionController::entregaDotacion/$1');
$routes->get('/generatePdf_entregaDotacion', 'HzentregadotacionController::generatePdf_entregaDotacion');
$routes->get('/responsablePesv/(:num)', 'HzresponsablepesvController::responsablePesv/$1');
$routes->get('/generatePdf_responsablePesv', 'HzresponsablepesvController::generatePdf_responsablePesv');
$routes->get('/responsabilidadesSalud/(:num)', 'HzrespsaludController::responsabilidadesSalud/$1');
$routes->get('/generatePdf_responsabilidadesSalud', 'HzrespsaludController::generatePdf_responsabilidadesSalud');
$routes->get('/indentPeligros/(:num)', 'HzindentpeligroController::indentPeligros/$1');
$routes->get('/generatePdf_indentPeligros', 'HzindentpeligroController::generatePdf_indentPeligros');
$routes->get('/revisionAltagerencia/(:num)', 'HzrevaltagerenciaController::revisionAltagerencia/$1');
$routes->get('/generatePdf_revisionAltagerencia', 'HzrevaltagerenciaController::generatePdf_revisionAltagerencia');
$routes->get('/accionCorrectiva/(:num)', 'HzaccioncorrectivaController::accionCorrectiva/$1');
$routes->get('/generatePdf_accionCorrectiva', 'HzaccioncorrectivaController::generatePdf_accionCorrectiva');
$routes->get('/pausasActivas/(:num)', 'HzpausaactivaController::pausasActivas/$1');
$routes->get('/generatePdf_pausasActivas', 'HzpausaactivaController::generatePdf_pausasActivas');
$routes->get('/requisitosLegales/(:num)', 'HzreqlegalesController::requisitosLegales/$1');
$routes->get('/generatePdf_requisitosLegales', 'HzreqlegalesController::generatePdf_requisitosLegales');
$routes->get('/actaCocolab/(:num)', 'PzactacocolabController::actaCocolab/$1');
$routes->get('/generatePdf_actaCocolab', 'PzactacocolabController::generatePdf_actaCocolab');
$routes->get('/procedimientoAuditoria/(:num)', 'HzauditoriaController::procedimientoAuditoria/$1');
$routes->get('/generatePdf_procedimientoAuditoria', 'HzauditoriaController::generatePdf_procedimientoAuditoria');



$routes->get('/listVigias', 'VigiaController::listVigias');
$routes->get('/addVigia', 'VigiaController::addVigia');
$routes->post('/saveVigia', 'VigiaController::saveVigia');
$routes->get('/editVigia/(:num)', 'VigiaController::editVigia/$1');
$routes->post('/updateVigia/(:num)', 'VigiaController::updateVigia/$1');
$routes->get('/deleteVigia/(:num)', 'VigiaController::deleteVigia/$1');































