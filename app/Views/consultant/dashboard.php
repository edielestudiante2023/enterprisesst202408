<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Consultor</title>
</head>
<body>



    <h2>Bienvenido, Consultor</h2>
    <p>Esta es tu dashboard donde puedes gestionar la información.</p>

    <!-- Botón para crear un nuevo cliente -->
    <a href="<?= base_url('/addClient') ?>">
        <button type="button">Agregar Nuevo Cliente</button>
    </a>

    <!-- Botón para crear un nuevo consultor -->
    <a href="<?= base_url('/addConsultant') ?>">
        <button type="button">Agregar Nuevo Consultor</button>
    </a>

    <a href="<?= base_url('/index.php/listConsultants') ?>">
    <button type="button">Ver Lista de Consultores</button>
</a>


    <h2>Ir a Lista de Documentos</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/reportList') ?>"><button type="button">Ir a Lista de documentos</button></a>
    <br><br>

    <a href="<?= base_url('/addReport') ?>">Agregar Nuevo Reporte</a> <br><br>

    <a href="<?= base_url('/logout') ?>">Cerrar Sesión</a>

    

    
</body>
</html>
