<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tipos de Reportes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
</head>

<body class="bg-light text-dark">

    <div class="container my-5">

        <h2 class="mb-4">Ir a Dashboard</h2>
        <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-primary mb-3">Ir a Dashboard</a>

        <h2 class="mb-4">Ir a Lista de Documentos</h2>
        <a href="<?= base_url('/reportList') ?>" class="btn btn-primary mb-5">Ir a Lista de documentos</a>

        <h2 class="mb-4">Lista de Tipos de Reportes</h2>
        <table id="reportTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo de Reporte</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reportTypes as $type): ?>
                    <tr>
                        <td><?= $type['id_report_type'] ?></td>
                        <td><?= $type['report_type'] ?></td>
                        <td>
                            <a href="<?= base_url('/editReportType/' . $type['id_report_type']) ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="<?= base_url('/deleteReportType/' . $type['id_report_type']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este tipo de reporte?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="mt-4">
            <a href="<?= base_url('/addReportType') ?>" class="btn btn-success">Agregar Nuevo Tipo de Reporte</a>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#reportTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
                }
            });
        });
    </script>
</body>

</html>
