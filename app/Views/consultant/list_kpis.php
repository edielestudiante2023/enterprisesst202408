<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de KPIs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
</head>
<body class="bg-light text-dark">
    <div class="container mt-5">
        <h2 class="mb-4">Lista de KPIs</h2>
        <div class="table-responsive">
            <table id="kpiTable" class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Nombre del KPI</th>
                        <th>Comentarios</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kpis as $kpi): ?>
                        <tr>
                            <td><?= esc($kpi['kpi_name']) ?></td>
                            <td><?= esc($kpi['hpi_comments']) ?></td>
                            <td>
                                <a href="<?= base_url('editKpi/' . $kpi['id_kpis']) ?>" class="btn btn-sm btn-primary">Editar</a>
                                <a href="<?= base_url('deleteKpi/' . $kpi['id_kpis']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar este KPI?')">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            <a href="<?= base_url('addKpi') ?>" class="btn btn-success">Añadir KPI</a>
        </div>
        <div class="mt-5">
            <h2>Ir a Dashboard</h2>
            <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-info">Ir a Dashboard</a>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#kpiTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
                }
            });
        });
    </script>
</body>
</html>