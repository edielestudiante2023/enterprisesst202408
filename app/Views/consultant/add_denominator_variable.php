<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Nueva Variable Denominador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">
    <div class="container my-5">
        <div class="card shadow-sm">
            <div class="card-header bg-light">
                <h2 class="text-center text-dark">Añadir Nueva Variable Denominador</h2>
            </div>
            <div class="card-body">
                <form action="<?= base_url('addDenominatorVariablePost') ?>" method="post">
                    <div class="mb-3">
                        <label for="denominator_variable_text" class="form-label">Texto de la Variable:</label>
                        <input type="text" class="form-control" name="denominator_variable_text" id="denominator_variable_text" required>
                    </div>
                    <div class="mb-3">
                        <label for="denominator_variable_data" class="form-label">Datos de la Variable:</label>
                        <input type="text" class="form-control" name="denominator_variable_data" id="denominator_variable_data">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Guardar Variable Denominador</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
