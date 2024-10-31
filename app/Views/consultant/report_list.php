<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Reportes</title>
    <!-- Enlaces de Bootstrap CSS y DataTables -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container my-4">
        <h2 class="text-center mb-4">Lista de Reportes</h2>

        <!-- Botones de navegación -->
        <div class="d-flex justify-content-between mb-4">
            <a href="<?= base_url('/addReport') ?>" class="btn btn-primary">Agregar Nuevo Reporte</a>
            <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-secondary">Ir a Dashboard</a>
        </div>

        <!-- Filtro de Reportes por Cliente -->
        <div class="card mb-4">
            <div class="card-body">
                <h3 class="card-title">Filtrar Reportes por Cliente</h3>
                <form method="get" action="<?= base_url('/reportList') ?>">
                    <div class="mb-3">
                        <label for="id_cliente" class="form-label">Cliente:</label>
                        <?php if (isset($clients)) : ?>
                            <select name="id_cliente" id="id_cliente" class="form-select">
                                <option value="">Todos</option>
                                <?php foreach ($clients as $client) : ?>
                                    <option value="<?= $client['id_cliente'] ?>" <?= (isset($_GET['id_cliente']) && $_GET['id_cliente'] == $client['id_cliente']) ? 'selected' : '' ?>>
                                        <?= $client['nombre_cliente'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        <?php else : ?>
                            <p class="text-danger">Error: No se han encontrado clientes.</p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </form>
            </div>
        </div>

        <!-- Tabla de Reportes -->
        <h3 class="mb-3">Reportes</h3>
        <?php if (isset($reports) && !empty($reports)) : ?>
            <table id="reportTable" class="table table-striped table-hover">
                <thead>
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
                </thead>
                <tbody>
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
                                <a href="<?= base_url('/editReport/' . $report['id_reporte']) ?>" class="btn btn-sm btn-warning">Editar</a>
                                <a href="<?= base_url('/deleteReport/' . $report['id_reporte']) ?>" class="btn btn-sm btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p class="text-muted">No hay reportes disponibles.</p>
        <?php endif; ?>
    </div>

    <!-- Scripts de jQuery, Bootstrap y DataTables -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#reportTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                }
            });
        });
    </script>

</body>

</html>
