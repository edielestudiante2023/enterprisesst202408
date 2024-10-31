<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Nuevo Periodo de Medición</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h2 class="text-center mb-4">Añadir Nuevo Periodo de Medición</h2>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="<?= base_url('addMeasurementPeriodPost') ?>" method="post" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="measurement_period" class="form-label">Periodo de Medición:</label>
                        <input type="text" class="form-control" name="measurement_period" id="measurement_period" required>
                        <div class="invalid-feedback">Este campo es obligatorio.</div>
                    </div>

                    <div class="mb-3">
                        <label for="comment_measurement_period" class="form-label">Comentario sobre el Periodo de Medición:</label>
                        <input type="text" class="form-control" name="comment_measurement_period" id="comment_measurement_period">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Guardar Periodo de Medición</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        // Validación de formulario Bootstrap
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>
</html>
