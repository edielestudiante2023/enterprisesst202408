<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <title>Lista de Periodos de Medición</title>
</head>
<body class="bg-light text-dark">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="card-title">Lista de Periodos de Medición</h2>
                <div class="table-responsive">
                    <table id="measurementPeriodsTable" class="table table-striped table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Periodo de Medición</th>
                                <th>Comentario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($measurementPeriods as $period): ?>
                                <tr>
                                    <td><?= esc($period['measurement_period']) ?></td>
                                    <td><?= esc($period['comment_measurement_period']) ?></td>
                                    <td>
                                        <a href="<?= base_url('editMeasurementPeriod/' . $period['id_measurement_period']) ?>" class="btn btn-sm btn-primary">Editar</a>
                                        <a href="<?= base_url('deleteMeasurementPeriod/' . $period['id_measurement_period']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar este Periodo de Medición?')">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <a href="<?= base_url('addMeasurementPeriod') ?>" class="btn btn-success mt-3">Añadir Periodo de Medición</a>
            </div>
        </div>
        <div class="text-center mt-5">
            <h2>Ir a Dashboard</h2>
            <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-info">Ir a DashBoard</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#measurementPeriodsTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
                }
            });
        });
    </script>
</body>
</html>