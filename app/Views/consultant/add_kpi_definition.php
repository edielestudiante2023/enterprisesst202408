<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Nueva Definición de KPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Añadir Nueva Definición de KPI</h2>

    <div class="card shadow-sm p-4 mb-5 bg-white rounded">
        <form action="<?= base_url('addKpiDefinitionPost') ?>" method="post">
            <div class="mb-3">
                <label for="name_kpi_definition" class="form-label">Nombre de la Definición:</label>
                <input type="text" class="form-control" name="name_kpi_definition" id="name_kpi_definition" required>
            </div>

            <div class="mb-3">
                <label for="comment_kpi_definition" class="form-label">Comentario sobre la Definición:</label>
                <input type="text" class="form-control" name="comment_kpi_definition" id="comment_kpi_definition">
            </div>

            <button type="submit" class="btn btn-primary">Guardar Definición de KPI</button>
        </form>
    </div>
</div>

<!-- DataTables y Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        // Aquí puedes inicializar DataTables en las tablas si hay alguna más adelante
        $('#miTabla').DataTable();
    });
</script>

</body>
</html>
