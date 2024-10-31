<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Tipos de Documentos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</head>
<body class="bg-light text-dark">

    <div class="container my-5">
        <h2 class="text-center mb-4">Ir a Dashboard</h2>
        <div class="text-center mb-5">
            <!-- Botón para ir a la vista de agregar reportes -->
            <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-primary">Ir a DashBoard</a>
        </div>

        <h1 class="mb-4">Lista de Tipos de Documentos</h1>
        <div class="mb-3">
            <a href="<?= base_url('/addPolicyType') ?>" class="btn btn-success">Añadir Nuevo Tipo de Documentos</a>
        </div>

        <!-- Tabla con DataTables -->
        <div class="table-responsive">
            <table id="documentTypesTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nombre del Tipo de Documento</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($policyTypes as $type): ?>
                        <tr>
                            <td><?= $type['type_name'] ?></td>
                            <td><?= $type['description'] ?></td>
                            <td>
                                <a href="<?= base_url('/editPolicyType/'.$type['id']) ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="<?= base_url('/deletePolicyType/'.$type['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este tipo de política?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Script para activar DataTables -->
    <script>
        $(document).ready(function() {
            $('#documentTypesTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
                }
            });
        });
    </script>

</body>
</html>
