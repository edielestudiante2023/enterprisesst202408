<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Propietario de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h2 class="text-center mb-4">Editar Propietario de Datos</h2>

        <div class="card shadow-sm p-4">
            <form action="<?= base_url('editDataOwnerPost/' . $dataOwner['id_data_owner']) ?>" method="post">
                <div class="mb-3">
                    <label for="data_owner" class="form-label">Nombre del Propietario de Datos:</label>
                    <input type="text" name="data_owner" id="data_owner" class="form-control" value="<?= esc($dataOwner['data_owner']) ?>" required>
                </div>

                <div class="mb-3">
                    <label for="comment_data_owner" class="form-label">Comentario sobre el Propietario de Datos:</label>
                    <input type="text" name="comment_data_owner" id="comment_data_owner" class="form-control" value="<?= esc($dataOwner['comment_data_owner']) ?>">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Actualizar Propietario de Datos</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
