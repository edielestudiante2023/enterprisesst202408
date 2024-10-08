<!DOCTYPE html>
<html>

<head>
    <title>Lista de Reportes</title>
</head>

<body>

    <h2>Lista de Reportes</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/addReport') ?>"><button type="button">Agregar Nuevo Reporte</button></a>
    <br><br>

    <h2>Ir a Dashboard</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
    <br><br>
    
    <h2>Agregar Nuevo Reporte</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/addReport') ?>"><button type="button">Agregar Nuevo Reporte</button></a>
    <br><br>

   
    <h3>Filtrar Reportes por Cliente</h3>
    <form method="get" action="<?= base_url('/reportList') ?>">
        <label>Cliente:</label>
        <?php if(isset($clients)): ?>
    <select name="id_cliente">
        <option value="">Todos</option>
        <?php foreach ($clients as $client) : ?>
            <option value="<?= $client['id_cliente'] ?>" <?= (isset($_GET['id_cliente']) && $_GET['id_cliente'] == $client['id_cliente']) ? 'selected' : '' ?>><?= $client['nombre_cliente'] ?></option>
        <?php endforeach; ?>
    </select>
<?php else: ?>
    <p>Error: No se han encontrado clientes.</p>
<?php endif; ?>

        </select>
        <button type="submit">Filtrar</button>
    </form>

    <h3>Reportes</h3>
    <?php if (isset($reports) && !empty($reports)) : ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Título del Reporte</th>
                <th>Tipo de Documento</th>
                <th>Enlace</th>
                <th>Estado</th>
                <th>Observaciones</th>
                <th>ID Cliente</th>
                <th>Nombre del Cliente</th>
                <th>Tipo de Reporte</th>
                <th>Fecha de Creación</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($reports as $report) : ?>
                <tr>
                    <td><?= $report['id_reporte'] ?></td>
                    <td><?= $report['titulo_reporte'] ?></td>
                    <td><?= $report['Tipo_documento'] ?></td>
                    <td><a href="<?= $report['enlace'] ?>" target="_blank"><?= $report['enlace'] ?></a></td>
                    <td><?= $report['estado'] ?></td>
                    <td><?= $report['observaciones'] ?></td>
                    <td><?= $report['id_cliente'] ?></td>
                    <td><?= $clients[array_search($report['id_cliente'], array_column($clients, 'id_cliente'))]['nombre_cliente'] ?></td>
                    <td><?= $reportTypes[array_search($report['id_report_type'], array_column($reportTypes, 'id_report_type'))]['report_type'] ?></td>

                    <td><?= $report['created_at'] ?></td>
                    <td>
                        <a href="<?= base_url('/editReport/' . $report['id_reporte']) ?>">Editar</a>
                        <a href="<?= base_url('/deleteReport/' . $report['id_reporte']) ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <p>No hay reportes disponibles.</p>
    <?php endif; ?>
</body>

</html>