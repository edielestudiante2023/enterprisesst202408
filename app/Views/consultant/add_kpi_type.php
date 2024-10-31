<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Tipo de KPI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            color: #333;
        }
        .container {
            margin-top: 20px;
        }
        .form-label {
            font-weight: 500;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="mb-4">Añadir Tipo de KPI</h2>

    <form action="<?= base_url('addKpiTypePost') ?>" method="post" class="mb-4">
        <div class="mb-3">
            <label for="kpi_type" class="form-label">Nombre del Tipo de KPI:</label>
            <input type="text" name="kpi_type" id="kpi_type" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="kpi_type_comment" class="form-label">Comentario sobre el Tipo de KPI:</label>
            <input type="text" name="kpi_type_comment" id="kpi_type_comment" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar Tipo de KPI</button>
    </form>

    <h2 class="mb-3">Ir a Dashboard</h2>
    <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-secondary">Ir a Dashboard</a>
</div>

<script>
    $(document).ready(function() {
        // Si agregas una tabla aquí, activa DataTables con $('#miTabla').DataTable();
    });
</script>

</body>
</html>
