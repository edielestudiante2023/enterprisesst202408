<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Pendientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }
        h2 {
            color: #495057;
            font-weight: 700;
        }
        .table {
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .alert {
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Listado de Pendientes</h2>
        
        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-success text-center"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>

        <div class="table-responsive">
            <table id="pendientesTable" class="table table-bordered table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Responsable</th>
                        <th>Tarea Actividad</th>
                        <th>Fecha Cierre</th>
                        <th>Estado</th>
                        <th>Conteo Días</th>
                        <th>Estado Avance</th>
                        <th>Evidencia</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($pendientes)): ?>
                        <tr>
                            <td colspan="9" class="text-center">No hay pendientes registrados.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($pendientes as $pendiente): ?>
                        <tr>
                            <td><?= esc($pendiente['id_pendientes']) ?></td>
                            <td><?= esc($pendiente['nombre_cliente']) ?></td>
                            <td><?= esc($pendiente['responsable']) ?></td>
                            <td><?= esc($pendiente['tarea_actividad']) ?></td>
                            <td><?= esc($pendiente['fecha_cierre']) ?></td>
                            <td><?= esc($pendiente['estado']) ?></td>
                            <td><?= esc($pendiente['conteo_dias']) ?></td>
                            <td><?= esc($pendiente['estado_avance']) ?></td>
                            <td><?= esc($pendiente['evidencia_para_cerrarla']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#pendientesTable').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                },
                paging: true,
                lengthChange: true,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false
            });
        });
    </script>
</body>

</html>
