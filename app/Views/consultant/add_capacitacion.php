<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nueva Capacitación</title>
    <!-- Enlace de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace de DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }
        h2 {
            margin-top: 20px;
        }
        .form-container {
            background: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            font-weight: bold;
        }
        .alert {
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Agregar Nueva Capacitación</h2>
    
    <!-- Mensaje de alerta para feedback -->
    <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-info" role="alert">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>
    
    <!-- Formulario de Capacitación -->
    <div class="form-container">
        <form action="<?= base_url('addCapacitacionPost') ?>" method="post">
            
            <!-- Campo para el nombre de la capacitación -->
            <div class="mb-3">
                <label for="capacitacion" class="form-label">Nombre de la Capacitación:</label>
                <input type="text" class="form-control" name="capacitacion" id="capacitacion" required>
            </div>
            
            <!-- Campo para el objetivo de la capacitación -->
            <div class="mb-3">
                <label for="objetivo_capacitacion" class="form-label">Objetivo de la Capacitación:</label>
                <textarea class="form-control" name="objetivo_capacitacion" id="objetivo_capacitacion" required></textarea>
            </div>
            
            <!-- Campo para observaciones -->
            <div class="mb-3">
                <label for="observaciones" class="form-label">Observaciones:</label>
                <textarea class="form-control" name="observaciones" id="observaciones"></textarea>
            </div>

            <!-- Botón para enviar el formulario -->
            <button type="submit" class="btn btn-primary w-100">Agregar Capacitación</button>
        </form>
    </div>
</div>

<!-- Enlace de jQuery, DataTables y Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        // Inicialización de DataTables si tienes una tabla en el futuro
        $('#miTabla').DataTable({
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
            }
        });
    });
</script>

</body>
</html>
