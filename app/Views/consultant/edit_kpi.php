<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar KPI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4 text-center">Editar KPI</h2>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="<?= base_url('editKpiPost/' . $kpi['id_kpis']) ?>" method="post">
                <div class="form-group">
                    <label for="kpi_name" class="font-weight-bold">Nombre del KPI:</label>
                    <input type="text" class="form-control" name="kpi_name" id="kpi_name" 
                           value="<?= esc($kpi['kpi_name']) ?>" required>
                </div>

                <div class="form-group">
                    <label for="hpi_comments" class="font-weight-bold">Comentarios:</label>
                    <input type="text" class="form-control" name="hpi_comments" id="hpi_comments" 
                           value="<?= esc($kpi['hpi_comments']) ?>">
                </div>

                <button type="submit" class="btn btn-primary w-100">Actualizar KPI</button>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.data-table').DataTable({
            responsive: true,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
            }
        });
    });
</script>

</body>
</html>
