<!DOCTYPE html>
<html>
<head>
    <title>Documentos del Cliente</title>
</head>
<body>

<a href="<?= base_url('/dashboardclient') ?>">Volver al Dashboard</a>


    <h2>Documentos Relacionados</h2>

    <?php if (!empty($reports)): ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Título del Reporte</th>
                <th>Tipo de Documento</th>
                <th>Enlace</th>
                <th>Estado</th>
                <th>Observaciones</th>
                <th>Fecha de Creación</th>
            </tr>
            <?php foreach ($reports as $report): ?>
                <tr>
                    <td><?= $report['id_reporte'] ?></td>
                    <td><?= $report['titulo_reporte'] ?></td>
                    <td><?= $report['Tipo_documento'] ?></td>
                    <td><a href="<?= $report['enlace'] ?>" target="_blank"><?= $report['enlace'] ?></a></td>
                    <td><?= $report['estado'] ?></td>
                    <td><?= $report['observaciones'] ?></td>
                    <td><?= $report['created_at'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No hay documentos disponibles.</p>
    <?php endif; ?>

    <a href="<?= base_url('/logout') ?>">Cerrar Sesión</a>
</body>
</html>
