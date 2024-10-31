<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <title>Lista de Propietarios de Datos</title>
    <style>
        body {
            background-color: #f8f9fa;
            color: #212529;
            font-family: Arial, sans-serif;
        }
        h2 {
            margin-top: 20px;
        }
        .table-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #007bff;
            color: #ffffff;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="table-container">
            <h2 class="mb-4">Lista de Propietarios de Datos</h2>
            <table id="dataOwnersTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nombre del Propietario</th>
                        <th>Comentario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataOwners as $owner): ?>
                        <tr>
                            <td><?= esc($owner['data_owner']) ?></td>
                            <td><?= esc($owner['comment_data_owner']) ?></td>
                            <td>
                                <a href="<?= base_url('editDataOwner/' . $owner['id_data_owner']) ?>" class="btn btn-sm btn-primary">Editar</a>
                                <a href="<?= base_url('deleteDataOwner/' . $owner['id_data_owner']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar este propietario?')">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="mt-4">
                <a href="<?= base_url('addDataOwner') ?>" class="btn btn-custom">Añadir Propietario de Datos</a>
            </div>
        </div>
        <div class="mt-5">
            <h2>Ir a Dashboard</h2>
            <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-custom">Ir a DashBoard</a>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#dataOwnersTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
                }
            });
        });
    </script>
</body>
</html>