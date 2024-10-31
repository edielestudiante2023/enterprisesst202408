<!DOCTYPE html>
<html>
<head>
    <title>Lista de Contenidos</title>
    <!-- Integración de Bootstrap y DataTables -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa; /* Fondo claro */
            font-family: Arial, sans-serif;
        }
        h1, h2 {
            color: #343a40; /* Color oscuro para encabezados */
        }
    </style>
</head>
<body>

<div class="container my-4">
    <h2>Ir a Dashboard</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button" class="btn btn-primary mb-3">Ir a DashBoard</button></a>

    <h1>Lista de Contenidos</h1>

    <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-info" role="alert">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>

    <table id="contentTable" class="table table-striped table-bordered">
        <thead class="table-light">
            <tr>
                <th>Cliente</th>
                <th>Tipo de Contenido</th>
                <th>Texto del Contenido</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($policies as $policy): ?>
                <tr>
                    <td><?= $clients[array_search($policy['client_id'], array_column($clients, 'id_cliente'))]['nombre_cliente'] ?></td>
                    <td><?= $policyTypes[array_search($policy['policy_type_id'], array_column($policyTypes, 'id'))]['type_name'] ?></td>
                    <td><?= $policy['policy_content'] ?></td>
                    <td>
                        <a href="<?= base_url('/editPolicy/'.$policy['id']) ?>" class="btn btn-outline-secondary btn-sm">Editar</a>
                        <a href="<?= base_url('/deletePolicy/'.$policy['id']) ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta política?');">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="<?= base_url('/addPolicy') ?>" class="btn btn-success mt-3">Agregar Nuevo Texto a Documento</a>
</div>

<script>
    $(document).ready(function() {
        $('#contentTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"
            }
        });
    });
</script>

</body>
</html>
