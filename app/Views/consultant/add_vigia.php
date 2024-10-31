<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Añadir Vigía</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Añadir Vigía</h2>
        <form action="<?= base_url('saveVigia') ?>" method="post" enctype="multipart/form-data" class="p-4 bg-white rounded shadow-sm">
            <div class="mb-3">
                <label for="nombre_vigia" class="form-label">Nombre del Vigía:</label>
                <input type="text" name="nombre_vigia" id="nombre_vigia" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="cedula_vigia" class="form-label">Cédula:</label>
                <input type="text" name="cedula_vigia" id="cedula_vigia" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="periodo_texto" class="form-label">Período:</label>
                <input type="text" name="periodo_texto" id="periodo_texto" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="firma_vigia" class="form-label">Firma (Imagen):</label>
                <input type="file" name="firma_vigia" id="firma_vigia" class="form-control" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="id_cliente" class="form-label">Cliente:</label>
                <select name="id_cliente" id="id_cliente" class="form-select">
                    <?php foreach ($clients as $client): ?>
                        <option value="<?= $client['id_cliente'] ?>"><?= $client['nombre_cliente'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="d-grid">
                <input type="submit" value="Guardar Vigía" class="btn btn-primary">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
