<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Añadir Nueva Variable Numerador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-white">
            <h2 class="h5 mb-0 text-center">Añadir Nueva Variable Numerador</h2>
        </div>
        <div class="card-body">
            <form action="<?= base_url('addNumeratorVariablePost') ?>" method="post">
                <div class="form-group">
                    <label for="numerator_variable_text" class="font-weight-bold">Texto de la Variable:</label>
                    <input type="text" class="form-control" name="numerator_variable_text" id="numerator_variable_text" required>
                </div>

                <div class="form-group">
                    <label for="numerator_variable_data" class="font-weight-bold">Datos de la Variable:</label>
                    <input type="text" class="form-control" name="numerator_variable_data" id="numerator_variable_data">
                </div>

                <button type="submit" class="btn btn-primary btn-block font-weight-bold">Guardar Variable Numerador</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
