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
