<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Versiones del Documento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#documentTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json"
                },
                "paging": true,
                "searching": true,
                "info": true
            });
        });
    </script>
</head>
<body class="bg-light text-dark">

<div class="container mt-5">
    <h1 class="text-center mb-4">Versiones del Documento</h1>

    <div class="table-responsive">
        <table id="documentTable" class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>Nombre del Cliente</th>
                    <th>Nombre del Documento</th>
                    <th>Tipo de Documento</th>
                    <th>Acrónimo</th>
                    <th>Número de Versión</th>
                    <th>Ubicación</th>
                    <th>Estado</th>
                    <th>Control de Cambios</th>
                    <th>Fecha de Creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($versions as $version): ?>
                    <tr>
                        <td><?= $version['nombre_cliente'] ?></td>
                        <td><?= $version['type_name'] ?></td>
                        <td><?= $version['document_type'] ?></td>
                        <td><?= $version['acronym'] ?></td>
                        <td><?= $version['version_number'] ?></td>
                        <td><?= $version['location'] ?></td>
                        <td><?= $version['status'] ?></td>
                        <td><?= $version['change_control'] ?></td>
                        <td><?= $version['created_at'] ?></td>
                        <td>
                            <a href="<?= base_url('editVersion/' . $version['id']) ?>" class="btn btn-outline-primary btn-sm me-2">Editar</a>
                            <a href="<?= base_url('deleteVersion/' . $version['id']) ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta versión?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-between mt-4">
        <a href="<?= base_url('addVersion') ?>" class="btn btn-success">Añadir Nueva Versión</a>
        <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-primary">Ir a DashBoard</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
