<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Periodo de Medición</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light text-dark">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-white">
            <h2 class="h4 mb-0">Editar Periodo de Medición</h2>
        </div>
        <div class="card-body">
            <form action="<?= base_url('editMeasurementPeriodPost/' . $measurementPeriod['id_measurement_period']) ?>" method="post">
                <div class="form-group">
                    <label for="measurement_period">Periodo de Medición:</label>
                    <input type="text" class="form-control" name="measurement_period" id="measurement_period" value="<?= esc($measurementPeriod['measurement_period']) ?>" required>
                </div>

                <div class="form-group">
                    <label for="comment_measurement_period">Comentario sobre el Periodo de Medición:</label>
                    <input type="text" class="form-control" name="comment_measurement_period" id="comment_measurement_period" value="<?= esc($measurementPeriod['comment_measurement_period']) ?>">
                </div>

                <button type="submit" class="btn btn-primary">Actualizar Periodo de Medición</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
