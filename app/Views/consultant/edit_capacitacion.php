<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Capacitación</title>
    <!-- CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-white text-center">
                <h2 class="mb-0">Editar Capacitación</h2>
            </div>
            <div class="card-body">
                <form action="<?= base_url('editCapacitacionPost/' . $capacitacion['id_capacitacion']) ?>" method="post">

                    <!-- Nombre de la capacitación -->
                    <div class="mb-3">
                        <label for="capacitacion" class="form-label">Capacitación:</label>
                        <input type="text" name="capacitacion" id="capacitacion" value="<?= esc($capacitacion['capacitacion']) ?>" class="form-control" required>
                    </div>

                    <!-- Objetivo de la capacitación -->
                    <div class="mb-3">
                        <label for="objetivo_capacitacion" class="form-label">Objetivo de la Capacitación:</label>
                        <textarea name="objetivo_capacitacion" id="objetivo_capacitacion" rows="4" class="form-control" required><?= esc($capacitacion['objetivo_capacitacion']) ?></textarea>
                    </div>

                    <!-- Observaciones -->
                    <div class="mb-3">
                        <label for="observaciones" class="form-label">Observaciones:</label>
                        <textarea name="observaciones" id="observaciones" rows="3" class="form-control"><?= esc($capacitacion['observaciones']) ?></textarea>
                    </div>

                    <!-- Botones de acción -->
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('listCapacitaciones') ?>" class="btn btn-secondary me-2">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
