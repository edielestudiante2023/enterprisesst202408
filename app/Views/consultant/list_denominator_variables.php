<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Variables Denominador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light text-dark">
    <div class="container my-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="card-title mb-4">Lista de Variables Denominador</h2>
                <table id="denominatorTable" class="table table-striped table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Texto de la Variable</th>
                            <th>Datos</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($denominatorVariables as $variable): ?>
                            <tr>
                                <td><?= esc($variable['denominator_variable_text']) ?></td>
                                <td><?= esc($variable['denominator_variable_data']) ?></td>
                                <td>
                                    <a href="<?= base_url('editDenominatorVariable/' . $variable['id_denominator_variable']) ?>" class="btn btn-outline-primary btn-sm">Editar</a>
                                    <a href="<?= base_url('deleteDenominatorVariable/' . $variable['id_denominator_variable']) ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar esta variable?')">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="mt-4">
                    <a href="<?= base_url('addDenominatorVariable') ?>" class="btn btn-success">Añadir Variable Denominador</a>
                </div>
            </div>
        </div>
        <div class="card shadow-sm mt-5">
            <div class="card-body">
                <h2 class="card-title mb-4">Ir a Dashboard</h2>
                <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-primary">Ir a DashBoard</a>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#denominatorTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
                }
            });
        });
    </script>
</body>
</html>