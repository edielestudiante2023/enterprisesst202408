<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Políticas de KPI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title text-center text-primary">Añadir Nueva Política de KPI</h2>
            <form action="<?= base_url('addKpiPolicyPost') ?>" method="post">
                <div class="form-group">
                    <label for="policy_kpi_definition" class="font-weight-bold">Definición de la Política:</label>
                    <input type="text" class="form-control" name="policy_kpi_definition" id="policy_kpi_definition" required>
                </div>

                <div class="form-group">
                    <label for="policy_kpi_comments" class="font-weight-bold">Comentarios sobre la Política:</label>
                    <input type="text" class="form-control" name="policy_kpi_comments" id="policy_kpi_comments">
                </div>

                <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Guardar Política de KPI">
                </div>
            </form>
        </div>
    </div>

    <div class="text-center mt-4">
        <h2 class="text-secondary">Ir a Dashboard</h2>
        <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-outline-primary btn-lg mt-2">Ir a Dashboard</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
