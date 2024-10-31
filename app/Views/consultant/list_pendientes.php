<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Actividades - Plan de Trabajo Anual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }
        h2 {
            margin: 20px 0;
            text-align: center;
            color: #333;
        }
        .btn {
            margin-bottom: 20px;
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
        .tooltip-inner {
            max-width: 300px;
            white-space: normal;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2>Ir a Dashboard</h2>
    <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-primary">Ir a DashBoard</a>

    <h2>Añadir Actividad al Plan de Trabajo Anual</h2>
    <a href="<?= base_url('/addPlanDeTrabajoAnual') ?>" class="btn btn-success">Añadir Nueva Actividad</a>

    <h2 class="text-center mb-4">Lista de Actividades del Plan de Trabajo Anual</h2>

    <div class="table-responsive">
        <table id="actividadesTable" class="table table-striped table-bordered">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>ID Plan de Trabajo</th>
                    <th>PHVA</th>
                    <th>Numeral</th>
                    <th>Actividad</th>
                    <th>Responsable Sugerido</th>
                    <th>Fecha Propuesta</th>
                    <th>Fecha Cierre</th>
                    <th>Responsable Definido</th>
                    <th>Estado Actividad</th>
                    <th>Porcentaje Avance</th>
                    <th>Semana</th>
                    <th>Observaciones</th>
                    <th>Creado en</th>
                    <th>Actualizado en</th>
                    <th>Acciones</th>
                </tr>
                <!-- Fila de filtros -->
                <tr class="filters">
                    <th></th>
                    <th><select class="form-control form-control-sm filter-select"><option value="">Todos</option></select></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><select class="form-control form-control-sm filter-select"><option value="">Todos</option></select></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><select class="form-control form-control-sm filter-select"><option value="">Todos</option></select></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($actividades)) : ?>
                    <?php foreach ($actividades as $actividad) : ?>
                        <tr>
                            <td><?= esc($actividad['id_ptacliente']) ?></td>
                            <td data-bs-toggle="tooltip" title="<?= esc($actividad['nombre_cliente']) ?>"><?= esc($actividad['nombre_cliente']) ?></td>
                            <td><?= esc($actividad['id_plandetrabajo']) ?></td>
                            <td data-bs-toggle="tooltip" title="<?= esc($actividad['phva_plandetrabajo']) ?>"><?= esc($actividad['phva_plandetrabajo']) ?></td>
                            <td><?= esc($actividad['numeral_plandetrabajo']) ?></td>
                            <td data-bs-toggle="tooltip" title="<?= esc($actividad['actividad_plandetrabajo']) ?>"><?= esc($actividad['actividad_plandetrabajo']) ?></td>
                            <td><?= esc($actividad['responsable_sugerido_plandetrabajo']) ?></td>
                            <td><?= esc($actividad['fecha_propuesta']) ?></td>
                            <td><?= esc($actividad['fecha_cierre']) ?></td>
                            <td><?= esc($actividad['responsable_definido_paralaactividad']) ?></td>
                            <td data-bs-toggle="tooltip" title="<?= esc($actividad['estado_actividad']) ?>"><?= esc($actividad['estado_actividad']) ?></td>
                            <td data-bs-toggle="tooltip" title="<?= esc($actividad['porcentaje_avance']) ?>%"><?= esc($actividad['porcentaje_avance']) ?>%</td>
                            <td><?= esc($actividad['semana']) ?></td>
                            <td><?= esc($actividad['observaciones']) ?></td>
                            <td><?= esc($actividad['created_at']) ?></td>
                            <td><?= esc($actividad['updated_at']) ?></td>
                            <td>
                                <a href="<?= base_url('editPlanDeTrabajoAnual/' . $actividad['id_ptacliente']) ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="<?= base_url('deletePlanDeTrabajoAnual/' . $actividad['id_ptacliente']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta actividad?')">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="17" class="text-center">No se encontraron actividades.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#actividadesTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
            },
            "pagingType": "full_numbers",
            "responsive": true,
            "autoWidth": false,
            "initComplete": function() {
                // Llenar los selectores de filtros en las columnas Cliente, Responsable Sugerido y Estado Actividad
                this.api().columns([1, 6, 10]).every(function() {
                    var column = this;
                    var select = $(column.header()).find('select');
                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>');
                    });
                });
            }
        });

        // Aplicar los filtros de búsqueda al seleccionar una opción
        $('.filter-select').on('change', function() {
            var column = $(this).parent().index();
            table.column(column).search($(this).val()).draw();
        });

        // Inicializar tooltips de Bootstrap
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>
</body>
</html>
