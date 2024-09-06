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

    <a href="<?= base_url('/responsableSGSST/1') ?>">
    <button type="button">Ver Carta de Asignación de Responsabilidad</button>
</a>


<br><br>

<!-- Botón para ir a la vista de la política de No Alcohol, Drogas ni Tabaco -->
<a href="<?= base_url('/policyNoAlcoholDrogas/1') ?>">
    <button type="button">Ver Política de No Alcohol, Drogas ni Tabaco</button>
</a>

 <br><br>
<a href="<?= base_url('/prueba1/1') ?>">
    <button type="button">PRUEBA 1</button>
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
