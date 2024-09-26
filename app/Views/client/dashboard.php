<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Cliente</title>
</head>

<body>

    <?php if (session()->getFlashdata('error')): ?>
        <div style="color: red;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <h2>Bienvenido, Cliente</h2>

    <h3>Documentos Relacionados</h3>

    <!-- Botón para ir a la vista report_dashboard -->
    <a href="<?= base_url('/report_dashboard') ?>">
        <button type="button">Ver Documentos Relacionados</button>
    </a>

    <br><br>

    <h2>PLANEAR</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Descripción</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.1.1 Asignación de Responsable</td>
                <td><a href="<?= base_url('/asignacionResponsable/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>1.1.2 Asignación de Responsabilidades</td>
                <td><a href="<?= base_url('/asignacionResponsabilidades/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>1.1.3 Asignación de Vigía</td>
                <td><a href="<?= base_url('/asignacionVigia/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>1.1.4 Exoneración de Comité de Convivencia Laboral</td>
                <td><a href="<?= base_url('/exoneracionCocolab/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>1.1.5 Registro de Asistencia a Capacitación</td>
                <td><a href="<?= base_url('/registroAsistencia/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>1.1.6 Acta de Reunión Copasst</td>
                <td><a href="<?= base_url('/actaCopasst/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>1.1.7 Formato de Inscripción al Copasst</td>
                <td><a href="<?= base_url('/inscripcionCopasst/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>1.1.8 Formato de Asistencia (No aplica para capacitaciones)</td>
                <td><a href="<?= base_url('/formatoAsistencia/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>1.1.9 Formato de Acuerdo de Confidencialidad COCOLAB</td>
                <td><a href="<?= base_url('/confidencialidadCocolab/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>1.1.10 Formato de Inscripción al COCOLAB</td>
                <td><a href="<?= base_url('/inscripcionCocolab/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>1.1.10.1 Acta de Reunión COCOLAB</td>
                <td><a href="<?= base_url('/actaCocolab/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>1.1.11 Formato quejas de situaciones que pueden constituir acoso laboral</td>
                <td><a href="<?= base_url('/quejaCocolab/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>1.1.12 Manual de Convivencia Laboral</td>
                <td><a href="<?= base_url('/manconvivenciaLaboral/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>1.1.13 Conformación y Funcionamiento del comité de Convivencia Laboral</td>
                <td><a href="<?= base_url('/prcCocolab/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>1.2.1 Programa de Capacitación y Entrenamiento</td>
                <td><a href="<?= base_url('/prgCapacitacion/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>1.2.2 Programa de Inducción y Reinducción</td>
                <td><a href="<?= base_url('/prgInduccion/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>1.2.3 Evaluación de la Inducción y/o Reinducción</td>
                <td><a href="<?= base_url('/ftevaluacionInduccion/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>2.1.1 Política de Seguridad y Salud en el Trabajo</td>
                <td><a href="<?= base_url('/politicaSst/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>2.1.2 Política de No Alcohol Drogas Ni Tabaco</td>
                <td><a href="<?= base_url('/politicaAlcohol/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>2.1.3 Política de Prevención, Preparación y Respuesta ante Emergencias</td>
                <td><a href="<?= base_url('/politicaEmergencias/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>2.1.4 Política para la Prevención y Gestión del Acoso Laboral</td>
                <td><a href="<?= base_url('/politicaAcoso/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>2.1.5 Política de Seguridad Vial</td>
                <td><a href="<?= base_url('/politicaPesv/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>2.1.6 Reglamento de Higiene y Seguridad Industrial</td>
                <td><a href="<?= base_url('/regHigsegind/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>2.1.7 Objetivos del Sistema de Gestión de la Seguridad y Salud en el Trabajo (SG-SST)</td>
                <td><a href="<?= base_url('/oBjetivos/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>2.5.1 Procedimiento para el Control y Conservación de Documentos del SG-SST</td>
                <td><a href="<?= base_url('/documentosSgsst/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>2.5.2 Procedimiento de Rendición de Cuentas en Seguridad y Salud en el Trabajo (SG-SST)</td>
                <td><a href="<?= base_url('/rendicionCuentas/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>2.5.3 Procedimiento de Comunicación Interna y Externa en Seguridad y Salud en el Trabajo (SG-SST)</td>
                <td><a href="<?= base_url('/comunicacionInterna/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>2.5.4 Manual de Contratación para Proveedores y Contratistas en Seguridad y Salud en el Trabajo (SST)</td>
                <td><a href="<?= base_url('/manProveedores/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            

        </tbody>
    </table>

    <h2>HACER</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Descripción</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>2.2.0 Procedimiento para la Toma de Exámenes Médicos Ocupacionales</td>
                <td><a href="<?= base_url('/examenMedico/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>2.2.1 Programa de Medicina Preventiva y del Trabajo</td>
                <td><a href="<?= base_url('/medPreventiva/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>2.5.0 Procedimiento de Reporte de Accidentes e Incidentes de Trabajo</td>
                <td><a href="<?= base_url('/reporteAccidente/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>2.9.0 Procedimiento de Inspecciones Planeadas y No Planeadas en Seguridad y Salud en el Trabajo</td>
                <td><a href="<?= base_url('/inspeccionPlanynoplan/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>2.11.0 Procedimiento de Entrega y Reposición de EPP y Dotación</td>
                <td><a href="<?= base_url('/entregaDotacion/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>2.12.0 Formato de Asignación de Responsable del PESV</td>
                <td><a href="<?= base_url('/responsablePesv/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>2.14.0 Divulgación de Recomendaciones Médicas</td>
                <td><a href="<?= base_url('/responsabilidadesSalud/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>4.1.0 Procedimiento para la Identificación de Peligros y Valoración de Riesgos</td>
                <td><a href="<?= base_url('/indentPeligros/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>4.1.1 Procedimiento de Revisión por la Alta Dirección del SG-SST</td>
                <td><a href="<?= base_url('/revisionAltagerencia/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>4.1.2 Procedimiento para Acciones Correctivas, Preventivas y de Mejora (ACPM)</td>
                <td><a href="<?= base_url('/accionCorrectiva/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>4.1.3 Programa de Pausas Activas</td>
                <td><a href="<?= base_url('/pausasActivas/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>4.1.4 Procedimiento de Identificación, Evaluación y Actualización de Requisitos Legales</td>
                <td><a href="<?= base_url('/requisitosLegales/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>4.1.5 Procedimiento de Auditorías Internas en Seguridad y Salud en el Trabajo (SST)</td>
                <td><a href="<?= base_url('/procedimientoAuditoria/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
        </tbody>
    </table>

    <!-- *-************************ KPI **************************************** -->

    
    <h2>KPI</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Descripción</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>CUMPLIMIENTO DEL PLAN DE TRABAJO ANUAL</td>
                <td><a href="<?= base_url('/planDeTrabajoKpi/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>CUMPLIMIENTO MEDIDAS DE INTERVENCIÓN DE LA MATRIZ DE IDENTIFICACIÓN DE PELIGROS, VALORACIÓN DE RIESGOS Y DETERMINACIÓN DE CONTROLES
                </td>
                <td><a href="<?= base_url('/mipvrdcKpi/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>CUMPLIMIENTO DE LOS PROGRAMAS DE RIESGOS PRIORITARIOS</td>
                <td><a href="<?= base_url('/gestionriesgoKpi/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>CUMPLIMIENTO DE LOS PROGRAMAS DE VIGILANCIA EPIDEMIOLOGICA</td>
                <td><a href="<?= base_url('/vigepidemiologicaKpi/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>EVALUACIÓN DEL SISTEMA</td>
                <td><a href="<?= base_url('/evinicialKpi/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>EFICACIA DE LAS ACCIONES</td>
                <td><a href="<?= base_url('/accpreventivaKpi/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>CUMPLIMIENTO LEGAL</td>
                <td><a href="<?= base_url('/cumplilegalKpi/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>CUMPLIMIENTO AL PROGRAMA DE CAPACITACION</td>
                <td><a href="<?= base_url('/capacitacionKpi/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>ESTRUCTURA DEL SG SST</td>
                <td><a href="<?= base_url('/estructuraKpi/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>REPORTE, INVESTIGACIÓN Y  ANÁLISIS ESTADISTICO DE INCIDENTES, ACCIDENTES DE TRABAJO Y ENFERMEDADES LABORALES.</td>
                <td><a href="<?= base_url('/atelKpi/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>FRECUENCIA DE ACCIDENTES LABORALES</td>
                <td><a href="<?= base_url('/indicefrecuenciaKpi/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>SEVERIDAD DE ACCIDENTES LABORALES</td>
                <td><a href="<?= base_url('/indiceseveridadKpi/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>PROPORCIÓN DE ACCIDENTES MORTALES</td>
                <td><a href="<?= base_url('/mortalidadKpi/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>PREVALENCIA DE ENFERMEDADES LABORALES</td>
                <td><a href="<?= base_url('/prevalenciaKpi/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>INCIDENCIA DE ENFERMEDADES LABORALES</td>
                <td><a href="<?= base_url('/incidenciaKpi/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>RESULTADOS DE LOS PROGRAMAS DE REHABILITACIÓN</td>
                <td><a href="<?= base_url('/rehabilitacionKpi/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>AUSENTISMO</td>
                <td><a href="<?= base_url('/ausentismoKpi/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>RESULTADO</td>
                <td><a href="<?= base_url('/todoslosKpi/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Tres Periodos</td>
                <td><a href="<?= base_url('/indicadorTresPeriodos/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Cuatro Periodos</td>
                <td><a href="<?= base_url('/indicadorcuatroPeriodos/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Seis Periodos</td>
                <td><a href="<?= base_url('/indicadorseisPeriodos/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Doce Periodos</td>
                <td><a href="<?= base_url('/indicadordocePeriodos/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Anual</td>
                <td><a href="<?= base_url('/indicadorAnual/1') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
          
        </tbody>
    </table>


    <!-- ******************* SEGMENTO 2************************************************** -->

    <br>

    <a href="<?= base_url('/viewDocuments') ?>">
        <button type="button">Ver Documentos x tipo de documento</button>
    </a>

    <br><br>

    <!-- Botón para cerrar sesión -->
    <a href="<?= base_url('/logout') ?>">Cerrar Sesión</a>
</body>

</html>