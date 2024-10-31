<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Variables Numerador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }
        table {
            background-color: #ffffff;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Lista de Variables Numerador</h2>
    <table id="numeratorVariablesTable" class="table table-striped table-bordered">
        <thead class="table-light">
            <tr>
                <th>Texto de la Variable</th>
                <th>Datos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($numeratorVariables as $variable): ?>
                <tr>
                    <td><?= esc($variable['numerator_variable_text']) ?></td>
                    <td><?= esc($variable['numerator_variable_data']) ?></td>
                    <td>
                        <a href="<?= base_url('editNumeratorVariable/' . $variable['id_numerator_variable']) ?>" class="btn btn-sm btn-primary">Editar</a>
                        <a href="<?= base_url('deleteNumeratorVariable/' . $variable['id_numerator_variable']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar esta variable?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="mt-4">
        <a href="<?= base_url('addNumeratorVariable') ?>">
            <button type="button" class="btn btn-success">Añadir Variable Numerador</button>
        </a>
    </div>
    <div class="mt-5">
        <h2>Ir a Dashboard</h2>
        <a href="<?= base_url('/dashboardconsultant') ?>">
            <button type="button" class="btn btn-secondary">Ir a Dashboard</button>
        </a>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#numeratorVariablesTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"
            }
        });
    });
</script>
</body>
</html>