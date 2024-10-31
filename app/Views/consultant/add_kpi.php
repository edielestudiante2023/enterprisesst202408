<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Nuevo KPI</title>
    <!-- Enlace a Bootstrap CSS y DataTables CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">

<div class="container mt-5">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white text-center">
            <h2 class="h4 fw-bold text-dark">Añadir Nuevo KPI</h2>
        </div>
        <div class="card-body">
            <form action="<?= base_url('addKpiPost') ?>" method="post">
                <div class="mb-3">
                    <label for="kpi_name" class="form-label">Nombre del KPI:</label>
                    <input type="text" class="form-control" name="kpi_name" id="kpi_name" required>
                </div>
                <div class="mb-3">
                    <label for="hpi_comments" class="form-label">Comentarios:</label>
                    <input type="text" class="form-control" name="hpi_comments" id="hpi_comments">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Guardar KPI</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Enlace a Bootstrap JS y DataTables JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>
