<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <title>Listado de Capacitaciones</title>
    <style>
        body {
            background-color: #f9f9f9;
            color: #333;
            font-family: Arial, sans-serif;
        }
        table {
            background-color: #fff;
        }
        th, td {
            text-align: left;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Listado de Capacitaciónes</h2>

    <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-info" role="alert">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>

    <div class="table-responsive">
        <table id="capacitacionesTable" class="table table-striped table-bordered">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Capacitación</th>
                    <th>Objetivo de la Capacitación</th>
                    <th>Observaciones</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($capacitaciones)): ?>
                    <tr>
                        <td colspan="5" class="text-center">No hay capacitaciones registradas.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($capacitaciones as $capacitacion): ?>
                        <tr>
                            <td><?= esc($capacitacion['id_capacitacion']) ?></td>
                            <td><?= esc($capacitacion['capacitacion']) ?></td>
                            <td><?= esc($capacitacion['objetivo_capacitacion']) ?></td>
                            <td><?= esc($capacitacion['observaciones']) ?></td>
                            <td>
                                <a href="<?= base_url('editCapacitacion/'.$capacitacion['id_capacitacion']) ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="<?= base_url('deleteCapacitacion/'.$capacitacion['id_capacitacion']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta capacitación?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        <a href="<?= base_url('addCapacitacion') ?>" class="btn btn-primary">Agregar Nueva Capacitación</a>
    </div>

    <div class="mt-5">
        <h2>Ir a Dashboard</h2>
        <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-secondary">Ir a DashBoard</a>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#capacitacionesTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"
            }
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
