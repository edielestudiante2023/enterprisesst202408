<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Nuevo Objetivo de Política</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
</head>
<body class="bg-light text-dark">

<div class="container my-5">
    <div class="card shadow-sm p-4">
        <h2 class="text-center mb-4">Añadir Nuevo Objetivo de Política</h2>

        <form action="<?= base_url('addObjectivePost') ?>" method="post">
            <div class="mb-3">
                <label for="name_objectives" class="form-label">Nombre del Objetivo:</label>
                <input type="text" class="form-control" name="name_objectives" id="name_objectives" required>
            </div>
            <div class="mb-3">
                <label for="comments_objectives" class="form-label">Comentarios sobre el Objetivo:</label>
                <input type="text" class="form-control" name="comments_objectives" id="comments_objectives">
            </div>
            <button type="submit" class="btn btn-primary w-100">Guardar Objetivo</button>
        </form>
    </div>

    <div class="text-center mt-5">
        <h2>Ir a Dashboard</h2>
        <a href="<?= base_url('/dashboardconsultant') ?>">
            <button type="button" class="btn btn-secondary">Ir a DashBoard</button>
        </a>
    </div>
</div>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- DataTables JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('.data-table').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json'
            }
        });
    });
</script>
</body>
</html>
