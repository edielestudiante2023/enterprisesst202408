<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Variable Denominador</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h2 class="text-center mb-4">Editar Variable Denominador</h2>

        <form action="<?= base_url('editDenominatorVariablePost/' . $denominatorVariable['id_denominator_variable']) ?>" method="post" class="bg-white p-4 rounded shadow-sm">
            <div class="mb-3">
                <label for="denominator_variable_text" class="form-label">Texto de la Variable:</label>
                <input type="text" name="denominator_variable_text" id="denominator_variable_text" class="form-control" value="<?= esc($denominatorVariable['denominator_variable_text']) ?>" required>
            </div>

            <div class="mb-3">
                <label for="denominator_variable_data" class="form-label">Datos de la Variable:</label>
                <input type="text" name="denominator_variable_data" id="denominator_variable_data" class="form-control" value="<?= esc($denominatorVariable['denominator_variable_data']) ?>">
            </div>

            <div class="text-center">
                <input type="submit" value="Actualizar Variable Denominador" class="btn btn-primary">
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (Popper and jQuery for DataTables) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
