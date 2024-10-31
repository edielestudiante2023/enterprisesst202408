<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Variable Numerador</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light text-dark">
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Editar Variable Numerador</h2>
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="<?= base_url('editNumeratorVariablePost/' . $numeratorVariable['id_numerator_variable']) ?>" method="post">
                    <div class="mb-3">
                        <label for="numerator_variable_text" class="form-label">Texto de la Variable:</label>
                        <input type="text" name="numerator_variable_text" id="numerator_variable_text" class="form-control" 
                               value="<?= esc($numeratorVariable['numerator_variable_text']) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="numerator_variable_data" class="form-label">Datos de la Variable:</label>
                        <input type="text" name="numerator_variable_data" id="numerator_variable_data" class="form-control" 
                               value="<?= esc($numeratorVariable['numerator_variable_data']) ?>">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Actualizar Variable Numerador</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
