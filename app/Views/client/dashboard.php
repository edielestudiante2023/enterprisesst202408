<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Cliente</title>
</head>
<body>
    <h2>Bienvenido, Cliente</h2>

    <h3>Documentos Relacionados</h3>
    
    <!-- Botón para ir a la vista report_dashboard -->
    <a href="<?= base_url('/report_dashboard') ?>">
        <button type="button">Ver Documentos Relacionados</button>
    </a>

    <a href="<?= base_url('/documento') ?>">
    <button type="button">ASIGNACIÓN DE RESPONSABLE</button>
</a>


    <!-- Botón para cerrar sesión -->
    <a href="<?= base_url('/logout') ?>">Cerrar Sesión</a>
</body>
</html>
