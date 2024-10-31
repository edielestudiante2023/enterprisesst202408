<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tipos de KPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light text-dark">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="mb-4">Lista de Tipos de KPI</h2>
                <table id="kpiTable" class="table table-striped table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Nombre</th>
                            <th>Comentario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kpiTypes as $kpiType): ?>
                            <tr>
                                <td><?= esc($kpiType['kpi_type']) ?></td>
                                <td><?= esc($kpiType['kpi_type_comment']) ?></td>
                                <td>
                                    <a href="<?= base_url('editKpiType/' . $kpiType['id_kpi_type']) ?>" class="btn btn-outline-primary btn-sm">Editar</a>
                                    <a href="<?= base_url('deleteKpiType/' . $kpiType['id_kpi_type']) ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar este tipo de KPI?')">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-4">
            <h2>Crear Nuevo Tipo de Indicador</h2>
            <a href="<?= base_url('/addKpiType') ?>" class="btn btn-success mt-2">Crear</a>
        </div>

        <div class="mt-4">
            <h2>Ir a Dashboard</h2>
            <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-primary mt-2">Ir a DashBoard</a>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#kpiTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json"
                }
            });
        });
    </script>
</body>
</html>