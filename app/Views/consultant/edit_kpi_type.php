<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Editar Tipo de KPI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        h2 {
            color: #343a40;
        }
        label {
            font-weight: bold;
            color: #495057;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="mb-4">Editar Tipo de KPI</h2>

    <form action="<?= base_url('editKpiTypePost/' . $kpiType['id_kpi_type']) ?>" method="post">
        <div class="form-group">
            <label for="kpi_type">Nombre del Tipo de KPI:</label>
            <input type="text" class="form-control" name="kpi_type" id="kpi_type" value="<?= esc($kpiType['kpi_type']) ?>" required>
        </div>

        <div class="form-group">
            <label for="kpi_type_comment">Comentario sobre el Tipo de KPI:</label>
            <input type="text" class="form-control" name="kpi_type_comment" id="kpi_type_comment" value="<?= esc($kpiType['kpi_type_comment']) ?>">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Tipo de KPI</button>
    </form>

    <hr class="my-4">

    <h2>Ir a Dashboard</h2>
    <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-secondary">Ir a Dashboard</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
