<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Definiciones de KPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</head>
<body class="bg-light text-dark">
    <div class="container my-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="mb-4">Lista de Definiciones de KPI</h2>
                <table id="kpiTable" class="table table-striped table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Nombre de la Definición</th>
                            <th>Comentario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kpiDefinitions as $definition): ?>
                            <tr>
                                <td><?= esc($definition['name_kpi_definition']) ?></td>
                                <td><?= esc($definition['comment_kpi_definition']) ?></td>
                                <td>
                                    <a href="<?= base_url('editKpiDefinition/' . $definition['id_kpi_definition']) ?>" class="btn btn-sm btn-primary">Editar</a>
                                    <a href="<?= base_url('deleteKpiDefinition/' . $definition['id_kpi_definition']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar esta definición?')">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="mt-4">
                    <a href="<?= base_url('addKpiDefinition') ?>" class="btn btn-success">Añadir Definición de KPI</a>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h2>Ir a Dashboard</h2>
            <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-info">Ir a DashBoard</a>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#kpiTable').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"
                }
            });
        });
    </script>
</body>
</html>