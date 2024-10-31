<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pendientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <style>
        td, th {
            max-width: 100px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        td[title], th[title] {
            cursor: help;
        }
        .tooltip-inner {
            max-width: 300px;
            white-space: normal;
        }
    </style>
</head>

<body>
<br>
<h2>Ir a Agregar Pendiente</h2>
<a href="<?= base_url('/addPendiente') ?>"><button type="button">Ir a Agregar Pendiente</button></a>
<br><br>

<h2>Ir a Dashboard</h2>
<a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
<br><br>

<div class="container mt-5">
    <h2 class="text-center mb-4">Lista de Pendientes</h2>
    <a href="<?= base_url('/addPendiente') ?>" class="btn btn-primary mb-3">Añadir Nuevo Pendiente</a>
    <table id="pendientesTable" class="table table-bordered table-striped">
        <thead>
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
            <tr>
                <th></th>
                <th><select class="form-control form-control-sm filter-select"><option value="">Todos</option></select></th>
                <th></th>
                <th><select class="form-control form-control-sm filter-select"><option value="">Todos</option></select></th>
                <th></th>
                <th></th>
                <th><select class="form-control form-control-sm filter-select"><option value="">Todos</option></select></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($pendientes)) : ?>
                <?php foreach ($pendientes as $pendiente) : ?>
                    <tr>
                        <td title="<?= $pendiente['id_pendientes'] ?>"><?= $pendiente['id_pendientes'] ?></td>
                        <td title="<?= $pendiente['nombre_cliente'] ?>"><?= $pendiente['nombre_cliente'] ?></td>
                        <td title="<?= $pendiente['created_at'] ?>"><?= $pendiente['created_at'] ?></td>
                        <td title="<?= $pendiente['responsable'] ?>"><?= $pendiente['responsable'] ?></td>
                        <td title="<?= $pendiente['tarea_actividad'] ?>"><?= $pendiente['tarea_actividad'] ?></td>
                        <td title="<?= $pendiente['fecha_cierre'] ?>"><?= $pendiente['fecha_cierre'] ?></td>
                        <td title="<?= $pendiente['estado'] ?>"><?= $pendiente['estado'] ?></td>
                        <td title="<?= $pendiente['conteo_dias'] ?>"><?= $pendiente['conteo_dias'] ?></td>
                        <td title="<?= $pendiente['estado_avance'] ?>"><?= $pendiente['estado_avance'] ?></td>
                        <td title="<?= $pendiente['evidencia_para_cerrarla'] ?>"><?= $pendiente['evidencia_para_cerrarla'] ?></td>
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

<script>
    $(document).ready(function() {
        var table = $('#pendientesTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es-ES.json"
            },
            "paging": true,
            "responsive": true,
            "autoWidth": false,
            "initComplete": function() {
                // Llenar selectores de filtros en las columnas Cliente, Responsable y Estado
                this.api().columns([1, 3, 6]).every(function() {
                    var column = this;
                    var select = $(column.header()).find('select');
                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>');
                    });
                });
            }
        });

        // Aplicar los filtros de búsqueda al cambiar el valor de los selectores
        $('.filter-select').on('change', function() {
            var column = $(this).parent().index();
            table.column(column).search($(this).val()).draw();
        });

        // Inicializar tooltips de Bootstrap después de que la tabla se haya renderizado
        $('body').tooltip({
            selector: '[title]',
            placement: 'top',
            trigger: 'hover'
        });
    });
</script>
</body>

</html>
