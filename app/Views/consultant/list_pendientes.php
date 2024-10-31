<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pendientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        td, th {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 100ch;
            height: 70px;
        }

        td[title], th[title] {
            cursor: help;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h2>Ir a Agregar Pendiente</h2>
        <a href="<?php echo base_url('/addPendiente') ?>" class="btn btn-info mb-3">Ir a Agregar Pendiente</a>

        <h2>Ir a Dashboard</h2>
        <a href="<?php echo base_url('/dashboardconsultant') ?>" class="btn btn-secondary mb-5">Ir a DashBoard</a>

        <h2 class="text-center mb-4">Lista de Pendientes</h2>
        <a href="<?php echo base_url('/addPendiente') ?>" class="btn btn-primary mb-3">Añadir Nuevo Pendiente</a>

        <div class="table-responsive">
            <table id="pendientesTable" class="table table-bordered table-striped">
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
                </thead>
                <tbody>
                    <?php if (!empty($pendientes)) : ?>
                        <?php foreach ($pendientes as $pendiente) : ?>
                            <tr>
                                <td title="<?php echo $pendiente['id_pendientes'] ?>"><?php echo $pendiente['id_pendientes'] ?></td>
                                <td title="<?php echo htmlspecialchars($pendiente['nombre_cliente'], ENT_QUOTES, 'UTF-8') ?>"><?php echo htmlspecialchars($pendiente['nombre_cliente'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td title="<?php echo htmlspecialchars($pendiente['created_at'], ENT_QUOTES, 'UTF-8') ?>"><?php echo htmlspecialchars($pendiente['created_at'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td title="<?php echo htmlspecialchars($pendiente['responsable'], ENT_QUOTES, 'UTF-8') ?>"><?php echo htmlspecialchars($pendiente['responsable'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td title="<?php echo htmlspecialchars($pendiente['tarea_actividad'], ENT_QUOTES, 'UTF-8') ?>"><?php echo htmlspecialchars($pendiente['tarea_actividad'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td title="<?php echo htmlspecialchars($pendiente['fecha_cierre'], ENT_QUOTES, 'UTF-8') ?>"><?php echo htmlspecialchars($pendiente['fecha_cierre'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td title="<?php echo htmlspecialchars($pendiente['estado'], ENT_QUOTES, 'UTF-8') ?>"><?php echo htmlspecialchars($pendiente['estado'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td title="<?php echo htmlspecialchars($pendiente['conteo_dias'], ENT_QUOTES, 'UTF-8') ?>"><?php echo htmlspecialchars($pendiente['conteo_dias'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td title="<?php echo htmlspecialchars($pendiente['estado_avance'], ENT_QUOTES, 'UTF-8') ?>"><?php echo htmlspecialchars($pendiente['estado_avance'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td title="<?php echo htmlspecialchars($pendiente['evidencia_para_cerrarla'], ENT_QUOTES, 'UTF-8') ?>"><?php echo htmlspecialchars($pendiente['evidencia_para_cerrarla'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td>
                                    <a href="<?php echo base_url('/editPendiente/' . $pendiente['id_pendientes']) ?>" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="<?php echo base_url('/deletePendiente/' . $pendiente['id_pendientes']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este pendiente?')">Eliminar</a>
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
            $('#pendientesTable').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es-ES.json"
                },
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true
            });

            // Inicializar tooltips de Bootstrap para todas las celdas con contenido de texto largo
            $('[title]').tooltip();
        });
    </script>
</body>

</html>
