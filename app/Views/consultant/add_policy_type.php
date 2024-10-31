<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Nuevo Tipo de Documento</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body class="bg-light">

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary">Ir a Dashboard</h2>
        <!-- Botón para ir a la vista de agregar reportes -->
        <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-primary">Ir a DashBoard</a>
    </div>

    <div class="card shadow-sm p-4">
        <h1 class="text-center mb-4">Añadir Nuevo Tipo de Documento</h1>
        <form action="<?= base_url('/addPolicyTypePost') ?>" method="post" class="row g-3">
            <div class="col-md-6">
                <label for="type_name" class="form-label">Nombre del Tipo de Documento:</label>
                <input type="text" name="type_name" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="description" class="form-label">Descripción del Tipo de Documento:</label>
                <input type="text" name="description" class="form-control" required>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-success mt-3">Guardar</button>
            </div>
        </form>
    </div>
</div>

<!-- Scripts de Bootstrap y DataTables -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        // Inicializar DataTables si se añaden tablas en el futuro
        $('table').DataTable();
    });
</script>
</body>
</html>
