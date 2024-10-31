<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Tipo de Reporte</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center mb-4">Añadir Tipo de Reporte</h1>
        
        <!-- Formulario para añadir tipo de reporte -->
        <div class="card shadow-sm p-4">
            <form action="<?= base_url('/addReportTypePost') ?>" method="post">
                <div class="mb-3">
                    <label class="form-label">Nombre del Tipo de Reporte:</label>
                    <input type="text" class="form-control" name="report_type" required>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Tipo de Reporte</button>
            </form>
        </div>

        <!-- Mensaje de error si existe -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger mt-4">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        // Código de configuración para DataTables (si fuera necesario en el futuro)
        $(document).ready(function() {
            $('#miTabla').DataTable({
                // Opciones de DataTables para activación de filtros, paginación, etc.
            });
        });
    </script>
</body>
</html>
