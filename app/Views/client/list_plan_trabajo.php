<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan de Trabajo Anual</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }
        h2 {
            color: #343a40;
            font-weight: 600;
        }
        .container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .btn-dashboard {
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Plan de Trabajo Anual</h2>

        <!-- Botón para ir a la vista de agregar reportes -->
        <div class="text-center btn-dashboard">
            <a href="<?= base_url('/dashboardclient') ?>">
                <button type="button" class="btn btn-primary">Ir a DashBoard</button>
            </a>
        </div>

        <!-- Mensaje de éxito -->
        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-success text-center"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>

        <!-- Tabla interactiva con DataTables -->
        <div class="table-responsive">
            <table id="planesTable" class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID Plan</th>
                        <th>Cliente</th>
                        <th>ID Plan de Trabajo</th>
                        <th>PHVA</th>
                        <th>Numeral</th>
                        <th>Actividad</th>
                        <th>Responsable Sugerido</th>
                        <th>Fecha Propuesta</th>
                        <th>Fecha Cierre</th>
                        <th>Responsable Definido</th>
                        <th>Estado de Actividad</th>
                        <th>Porcentaje de Avance</th>
                        <th>Semana</th>
                        <th>Observaciones</th>
                        <th>Fecha Creación</th>
                        <th>Última Actualización</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($planes)): ?>
                        <tr>
                            <td colspan="16" class="text-center">No hay planes de trabajo registrados.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($planes as $plan): ?>
                            <tr>
                                <td><?= esc($plan['id_ptacliente']) ?></td>
                                <td><?= esc($plan['nombre_cliente']) ?></td>
                                <td><?= esc($plan['id_plandetrabajo']) ?></td>
                                <td><?= esc($plan['phva_plandetrabajo']) ?></td>
                                <td><?= esc($plan['numeral_actividad']) ?></td>
                                <td><?= esc($plan['nombre_actividad']) ?></td>
                                <td><?= esc($plan['responsable_sugerido_plandetrabajo']) ?></td>
                                <td><?= esc($plan['fecha_propuesta']) ?></td>
                                <td><?= esc($plan['fecha_cierre']) ?></td>
                                <td><?= esc($plan['responsable_definido_paralaactividad']) ?></td>
                                <td><?= esc($plan['estado_actividad']) ?></td>
                                <td><?= esc($plan['porcentaje_avance']) ?>%</td>
                                <td><?= esc($plan['semana']) ?></td>
                                <td><?= esc($plan['observaciones']) ?></td>
                                <td><?= esc($plan['created_at']) ?></td>
                                <td><?= esc($plan['updated_at']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Scripts de jQuery, Bootstrap y DataTables -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Inicialización de DataTables -->
    <script>
        $(document).ready(function() {
            $('#planesTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json'
                },
                pageLength: 10,
                responsive: true
            });
        });
    </script>
</body>

</html>
