<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Políticas de KPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }
        h2 {
            margin-top: 20px;
            color: #495057;
        }
        table {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .dataTables_wrapper .dataTables_filter input {
            margin-left: 0.5em;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Lista de Políticas de KPI</h2>
    <div class="table-responsive">
        <table id="kpiPolicyTable" class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>Definición de la Política</th>
                    <th>Comentarios</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kpiPolicies as $policy): ?>
                    <tr>
                        <td><?= esc($policy['policy_kpi_definition']) ?></td>
                        <td><?= esc($policy['policy_kpi_comments']) ?></td>
                        <td>
                            <a href="<?= base_url('editKpiPolicy/' . $policy['id_kpi_policy']) ?>" class="btn btn-sm btn-primary">Editar</a>
                            <a href="<?= base_url('deleteKpiPolicy/' . $policy['id_kpi_policy']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar esta política?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <br>
    <h2 class="text-center">Ir a Dashboard</h2>
    <div class="text-center">
        <a href="<?= base_url('/dashboardconsultant') ?>">
            <button type="button" class="btn btn-success">Ir a Dashboard</button>
        </a>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#kpiPolicyTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
            }
        });
    });
</script>
</body>
</html>