<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pendientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }

        .dataTables_filter input {
            background-color: #f0f0f0;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 6px;
        }

        .dataTables_length select {
            background-color: #f0f0f0;
            border-radius: 5px;
            padding: 6px;
        }

        td, th {
            max-width: 80ch;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            height: 50px;
        }

        td[title], th[title] {
            cursor: help;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Ir a Agregar Pendiente</h2>
        <!-- Botón para ir a la vista de agregar pendientes -->
        <a href="<?= base_url('/addPendiente') ?>" class="btn btn-info mb-3">Ir a Agregar Pendiente</a>

        <h2 class="text-center mb-4">Ir a Dashboard</h2>
        <!-- Botón para ir a la vista de agregar reportes -->
        <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-secondary mb-5">Ir a DashBoard</a>

        <h2 class="text-center mb-4">Lista de Pendientes</h2>
        <a href="<?= base_url('/addPendiente') ?>" class="btn btn-primary mb-3">Añadir Nuevo Pendiente</a>

        <div class="table-responsive">
            <table id="pendientesTable" class="table table-striped table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Fecha Creación</th>
                        <th>Responsable</th>
                        <th>Tarea Actividad</th>
                        <th>Fecha Cierre</th>
                        <th>Estado</th>
                        <th>Conteo Días</th>
                        <th>Estado Avance</th>
                        <th>Evidencia para Cerrarla</th>
                        <th>Acciones</th>
                    </tr>
                    <tr class="filters">
                        <th></th>
                        <th><select class="form-control form-control-sm filter-select"></select></th>
                        <th></th>
                        <th><select class="form-control form-control-sm filter-select"></select></th>
                        <th></th>
                        <th></th>
                        <th><select class="form-control form-control-sm filter-select"></select></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($pendientes)) : ?>
                        <?php foreach ($pendientes as $pendiente) : ?>
                            <tr style="height: 50px;">
                                <td><span title="<?= $pendiente['id_pendientes'] ?>"><?= $pendiente['id_pendientes'] ?></span></td>
                                <td><span title="<?= $pendiente['id_cliente'] ?>"><?= $pendiente['id_cliente'] ?></span></td>
                                <td><span title="<?= $pendiente['created_at'] ?>"><?= $pendiente['created_at'] ?></span></td>
                                <td><span title="<?= $pendiente['responsable'] ?>"><?= $pendiente['responsable'] ?></span></td>
                                <td><span title="<?= $pendiente['tarea_actividad'] ?>"><?= $pendiente['tarea_actividad'] ?></span></td>
                                <td><span title="<?= $pendiente['fecha_cierre'] ?>"><?= $pendiente['fecha_cierre'] ?></span></td>
                                <td><span title="<?= $pendiente['estado'] ?>"><?= $pendiente['estado'] ?></span></td>
                                <td><span title="<?= $pendiente['conteo_dias'] ?>"><?= $pendiente['conteo_dias'] ?></span></td>
                                <td><span title="<?= $pendiente['estado_avance'] ?>"><?= $pendiente['estado_avance'] ?></span></td>
                                <td><span title="<?= $pendiente['evidencia_para_cerrarla'] ?>"><?= $pendiente['evidencia_para_cerrarla'] ?></span></td>
                                <td>
                                    <a href="<?= base_url('/editPendiente/' . $pendiente['id_pendientes']) ?>" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="<?= base_url('/deletePendiente/' . $pendiente['id_pendientes']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este pendiente?')">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="11" class="text-center">No se encontraron pendientes.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // Inicializar DataTable
            var table = $('#pendientesTable').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
                },
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "initComplete": function() {
                    this.api().columns([1, 3, 6]).every(function() {
                        var column = this;
                        var select = $(column.header()).find('select');
                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>');
                        });
                    });
                }
            });

            // Aplicar los filtros de búsqueda
            $('.filter-select').on('change', function () {
                var column = $(this).parent().index();
                table.column(column).search($(this).val()).draw();
            });

            // Inicializar tooltips de Bootstrap
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[title]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
</body>

</html>
