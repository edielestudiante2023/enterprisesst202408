<!DOCTYPE html>
<html>

<head>
    <title>Lista de Tipos de Reportes</title>
</head>

<body>


    <h2>Ir a Dashboard</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
    <br><br>

    <h2>Ir a Lista de Documentos</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/reportList') ?>"><button type="button">Ir a Lista de documentos</button></a>
    <br><br>

    <h2>Lista de Tipos de Reportes</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tipo de Reporte</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($reportTypes as $type): ?>
            <tr>
                <td><?= $type['id_report_type'] ?></td>
                <td><?= $type['report_type'] ?></td>
                <td>
                    <a href="<?= base_url('/editReportType/' . $type['id_report_type']) ?>">Editar</a>
                    <a href="<?= base_url('/deleteReportType/' . $type['id_report_type']) ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este tipo de reporte?');">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <a href="<?= base_url('/addReportType') ?>">Agregar Nuevo Tipo de Reporte</a>

</body>

</html>