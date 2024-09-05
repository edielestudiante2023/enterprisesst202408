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

<br><br>

<a href="<?= base_url('/listClients') ?>">
    <button type="button">Ver Lista de Clientes</button>
</a>

<br><br>

<!-- Botón para ir a la lista de tipos de reporte -->
<a href="<?= base_url('/listReportTypes') ?>">
    <button type="button">Ver Lista de Tipos de Reporte</button>
</a>

<br><br>

    <h2>Ir a Lista de Documentos</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/reportList') ?>"><button type="button">Ir a Lista de documentos</button></a>
    <br><br>

    <a href="<?= base_url('/addReport') ?>">Agregar Nuevo Reporte</a> <br><br>

    <!-- Botón para ir a la vista de editar política -->
<a href="<?= base_url('/editPolicy') ?>">
    <button type="button">Editar Política</button>
</a>

<br>

<!-- Botón para ir a la vista de agregar nueva política -->
<a href="<?= base_url('/addPolicy') ?>">
    <button type="button">Agregar Nueva Política</button>
</a>

<br>
<!-- Botón para ir a la vista de listar políticas -->
<a href="<?= base_url('/listPolicies') ?>">
    <button type="button">Ver Lista de Políticas</button>
</a>
<br>
<br>
<a href="<?= base_url('/listPolicyTypes') ?>"><button>Ver Tipos de Políticas</button></a>
<br>
<a href="<?= base_url('/addPolicyType') ?>"><button>Añadir Nuevo Tipo de Política</button></a>
<br>

<br>
<a href="<?= base_url('listVersions') ?>"><button type="button">Lista de Versiones</button></a>

<br>
<br>

    <a href="<?= base_url('/logout') ?>">Cerrar Sesión</a>

    

    
</body>
</html>
