<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Añadir Nuevo Propietario de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa; color: #333;">

<div class="container mt-5">
    <h2 class="text-center mb-4">Añadir Nuevo Propietario de Datos</h2>

    <form action="<?= base_url('addDataOwnerPost') ?>" method="post" class="p-4 border rounded bg-white shadow-sm">
        <div class="mb-3">
            <label for="data_owner" class="form-label">Nombre del Propietario de Datos:</label>
            <input type="text" name="data_owner" id="data_owner" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="comment_data_owner" class="form-label">Comentario sobre el Propietario de Datos:</label>
            <input type="text" name="comment_data_owner" id="comment_data_owner" class="form-control">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar Propietario de Datos</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
