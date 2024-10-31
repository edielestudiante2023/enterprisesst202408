<!DOCTYPE html>
<html>
<head>
    <title>Editar Tipo de Reporte</title>
    <!-- Agregar Bootstrap y DataTables -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        h2 {
            margin-bottom: 30px;
        }
        label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card shadow-sm p-4">
        <h2 class="text-center">Editar Tipo de Reporte</h2>
        <form action="<?= base_url('/editReportTypePost/' . $reportType['id_report_type']) ?>" method="post">
            <div class="form-group">
                <label for="report_type">Tipo de Reporte:</label>
                <input type="text" class="form-control" id="report_type" name="report_type" value="<?= $reportType['report_type'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Guardar Cambios</button>
        </form>
        <a href="<?= base_url('/listReportTypes') ?>" class="btn btn-secondary btn-block">Volver a la Lista de Tipos de Reportes</a>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.datatable').DataTable();
    });
</script>

</body>
</html>
