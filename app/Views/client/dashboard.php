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



 <br><br>
<a href="<?= base_url('/asignacionResponsable/1') ?>" target="_blank">
    <button type="button">1.1.1 Asignación de Responsable</button>
</a>
 <br><br>
<a href="<?= base_url('/asignacionResponsabilidades/1') ?>" target="_blank">
    <button type="button">1.1.2 Asignación de Responsabilidades</button>
</a>

 <br><br>
<a href="<?= base_url('/asignacionVigia/1') ?>" target="_blank">
    <button type="button">1.1.3 Asignación de Vigía</button>
</a>

 <br><br>
<a href="<?= base_url('/exoneracionCocolab/1') ?>" target="_blank">
    <button type="button">1.1.4 Exoneración de Comité de Convivencia Laboral</button>
</a>

 <br><br>
<a href="<?= base_url('/registroAsistencia/1') ?>" target="_blank">
    <button type="button">1.1.5 Registro de Asistencia a Capacitación</button>
</a>

 <br><br>

<a href="<?= base_url('/viewDocuments') ?>">
    <button type="button">Ver Documentos x tipo de documento</button>
</a>

<br><br>

    <!-- Botón para cerrar sesión -->
    <a href="<?= base_url('/logout') ?>">Cerrar Sesión</a>
</body>
</html>
