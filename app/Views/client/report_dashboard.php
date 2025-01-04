<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos del Cliente</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }

        .table-container {
            margin-top: 30px;
        }

        .navbar,
        .table-container {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #495057;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .btn-custom {
            background-color: #007bff;
            color: #ffffff;
            border-radius: 4px;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .logout {
            text-align: right;
            margin-top: 15px;
        }

        .text-truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>

<body>

    <nav style="background-color: white; position: fixed; top: 0; width: 100%; z-index: 1000; padding: 10px 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
        <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; max-width: 1200px; margin: 0 auto;">

            <!-- Logo izquierdo -->
            <div>
                <a href="https://dashboard.cycloidtalent.com/login">
                    <img src="<?= base_url('uploads/logoenterprisesstblancoslogan.png') ?>" alt="Enterprisesst Logo" style="height: 100px;">
                </a>
            </div>

            <!-- Logo centro -->
            <div>
                <a href="https://cycloidtalent.com/index.php/consultoria-sst">
                    <img src="<?= base_url('uploads/logosst.png') ?>" alt="SST Logo" style="height: 100px;">
                </a>
            </div>

            <!-- Logo derecho -->
            <div>
                <a href="https://cycloidtalent.com/">
                    <img src="<?= base_url('uploads/logocycloidsinfondo.png') ?>" alt="Cycloids Logo" style="height: 100px;">
                </a>
            </div>

        </div>
    </nav>

    <!-- Ajustar el espaciado para evitar que el contenido se oculte bajo el navbar fijo -->
    <div style="height: 120px;"></div>

    <div class="container table-container">
        <h2>Documentos Relacionados</h2>

        <?php if (!empty($reports)): ?>
            <div class="table-responsive">
                <table id="reportTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Título del Reporte</th>
                            <th>Tipo de Documento</th>
                            <th>Enlace</th>
                            <th>Estado</th>
                            <th>Observaciones</th>
                            <th>Fecha de Creación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($reports as $report): ?>
                            <tr>
                                <!-- <td><?= $report['id_reporte'] ?></td> -->
                                <td><?= $report['titulo_reporte'] ?></td>
                                <td><?= $report['Tipo_documento'] ?></td>
                                <td class="text-truncate" style="max-width: 150px;">
                                    <a href="<?= $report['enlace'] ?>" target="_blank" title="<?= $report['enlace'] ?>" style="display: inline-block;">
                                        Ver recurso
                                    </a>
                                </td>

                                <td><?= $report['estado'] ?></td>
                                <td><?= $report['observaciones'] ?></td>
                                <td><?= $report['created_at'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p class="text-muted">No hay documentos disponibles.</p>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <footer style="background-color: white; padding: 20px 0; border-top: 1px solid #B0BEC5; margin-top: 40px; color: #3A3F51; font-size: 14px; text-align: center;">
        <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-direction: column; align-items: center;">
            <!-- Company and Rights -->
            <p style="margin: 0; font-weight: bold;">Cycloid Talent SAS</p>
            <p style="margin: 5px 0;">Todos los derechos reservados © 2024</p>
            <p style="margin: 5px 0;">NIT: 901.653.912</p>

            <!-- Website Link -->
            <p style="margin: 5px 0;">
                Sitio oficial: <a href="https://cycloidtalent.com/" target="_blank" style="color: #007BFF; text-decoration: none;">https://cycloidtalent.com/</a>
            </p>

            <!-- Social Media Links -->
            <p style="margin: 15px 0 5px;"><strong>Nuestras Redes Sociales:</strong></p>
            <div style="display: flex; gap: 15px; justify-content: center;">
                <a href="https://www.facebook.com/CycloidTalent" target="_blank" style="color: #3A3F51; text-decoration: none;">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" style="height: 24px; width: 24px;">
                </a>
                <a href="https://co.linkedin.com/company/cycloid-talent" target="_blank" style="color: #3A3F51; text-decoration: none;">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733561.png" alt="LinkedIn" style="height: 24px; width: 24px;">
                </a>
                <a href="https://www.instagram.com/cycloid_talent?igsh=Nmo4d2QwZDg5dHh0" target="_blank" style="color: #3A3F51; text-decoration: none;">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="Instagram" style="height: 24px; width: 24px;">
                </a>
                <a href="https://www.tiktok.com/@cycloid_talent?_t=8qBSOu0o1ZN&_r=1" target="_blank" style="color: #3A3F51; text-decoration: none;">
                    <img src="https://cdn-icons-png.flaticon.com/512/3046/3046126.png" alt="TikTok" style="height: 24px; width: 24px;">
                </a>
            </div>
        </div>
    </footer>


    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            // Inicializa DataTable con configuraciones personalizadas
            $('#reportTable').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                },
                pageLength: 50, // Número de filas por defecto
                order: [
                    [5, 'desc']
                ], // Ordenar por Fecha de Creación (columna índice 5)
                columnDefs: [{
                    targets: 2, // Índice de la columna Enlace
                    width: "10%", // Ancho máximo para la columna
                    className: "text-truncate" // Clase CSS para truncar texto
                }],
                initComplete: function() {
                    // Agregar filtros en las columnas específicas
                    this.api().columns([0, 1, 3]).every(function() { // Índices: Título del Reporte, Tipo de Documento, Estado
                        var column = this;

                        // Crear un contenedor para los filtros
                        var container = $('<div class="d-flex flex-column"></div>');

                        // Agregar el nombre de la columna
                        container.append('<span>' + $(column.header()).text() + '</span>');

                        // Crear un filtro desplegable
                        var select = $('<select class="form-select form-select-sm mt-1"><option value="">Todos</option></select>')
                            .appendTo(container)
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });

                        // Precargar los valores únicos en el filtro
                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>');
                        });

                        // Vaciar y reemplazar el encabezado con el contenedor
                        $(column.header()).empty().append(container);
                    });
                }
            });
        });
    </script>

</body>

</html>
=======
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Documentos - Enterprisesst</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <style>
        body {
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            margin-top: 30px;
            max-width: 1200px;
        }

        .table-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .table-container h2 {
            color: #333;
            font-weight: 600;
            font-size: 24px;
            margin-bottom: 15px;
        }

        .table th {
            background-color: #0066cc;
            color: #fff;
            text-align: center;
            font-size: 16px;
        }

        .table td {
            font-size: 15px;
            vertical-align: middle;
            text-align: center;
        }

        .table td a {
            color: #0066cc;
            text-decoration: underline;
            font-weight: 500;
        }

        .table td a:hover {
            color: #004c99;
        }

        .empty-message {
            color: #333;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            padding: 20px;
        }

        /* Estilos adicionales para los filtros en el pie de la tabla */
        tfoot {
            background-color: #f1f1f1;
        }

        tfoot th {
            padding: 8px 10px;
        }

        .filter-select {
            width: 100%;
            padding: 4px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        #clearState {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav style="background-color: white; position: fixed; top: 0; width: 100%; z-index: 1000; padding: 10px 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
        <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; max-width: 1200px; margin: 0 auto;">

            <!-- Logos -->
            <div>
                <a href="https://dashboard.cycloidtalent.com/login">
                    <img src="<?= base_url('uploads/logoenterprisesstblancoslogan.png') ?>" alt="Enterprisesst Logo" style="height: 100px;">
                </a>
            </div>
            <div>
                <a href="https://cycloidtalent.com/index.php/consultoria-sst">
                    <img src="<?= base_url('uploads/logosst.png') ?>" alt="SST Logo" style="height: 100px;">
                </a>
            </div>
            <div>
                <a href="https://cycloidtalent.com/">
                    <img src="<?= base_url('uploads/logocycloidsinfondo.png') ?>" alt="Cycloids Logo" style="height: 100px;">
                </a>
            </div>
        </div>
    </nav>

    <!-- Espacio para el Navbar Fijo -->
    <div style="height: 120px;"></div>

    <div class="container">

        <!-- Tabla de Reportes -->
        <div class="table-container">
            <h2>Reportes</h2>
            <?php if (!empty($reports)) : ?>
                <!-- Botón para Restablecer Filtros -->
                <button id="clearState" class="btn btn-danger btn-sm">Restablecer Filtros</button>

                <table id="reportsTable" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Título</th>
                            <th>Enlace</th>
                            <th>Estado</th>
                            <th>Observaciones</th>
                            <th>Detalle Reporte</th>
                            <th>Tipo Reporte</th>
                            <!-- <th>Cliente</th> -->
                            <th>Fecha Creación</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Título</th>
                            <th>Enlace</th>
                            <th>Estado</th>
                            <th>Observaciones</th>
                            <th>Detalle Reporte</th>
                            <th>Tipo Reporte</th>
                            <!-- <th>Cliente</th> -->
                            <th>Fecha Creación</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($reports as $report): ?>
                        <tr>
                            <!-- <td><?= esc($report['id_reporte']) ?></td> -->
                            <td><?= esc($report['titulo_reporte']) ?></td>
                            <td><a href="<?= esc($report['enlace']) ?>" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Abrir enlace">Ver</a></td>
                            <td><?= esc($report['estado']) ?></td>
                            <td><?= esc($report['observaciones']) ?></td>
                            <td><?= esc($report['detalle_reporte']) ?></td>
                            <td><?= esc($report['tipo_reporte']) ?></td>
                            <!-- <td><?= esc($report['cliente_nombre']) ?></td> -->
                            <td><?= esc($report['created_at']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p class="empty-message">No hay reportes disponibles.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Footer -->
    <footer style="background-color: white; padding: 20px 0; border-top: 1px solid #B0BEC5; margin-top: 40px; color: #3A3F51; font-size: 14px; text-align: center;">
        <p style="margin: 0;">Cycloid Talent SAS - Todos los derechos reservados © 2024</p>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- DataTables Bootstrap 5 JS -->
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            // Inicializar DataTable con stateSave y filtros por columna
            var table = $('#reportsTable').DataTable({
                paging: true,
                searching: true,
                lengthChange: true,
                pageLength: 20,
                stateSave: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json'
                },
                initComplete: function () {
                    this.api().columns().every(function () {
                        var column = this;
                        var select = $('<select class="filter-select"><option value="">Todos</option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });

                        // Obtener valores únicos y ordenarlos
                        column.data().unique().sort().each(function (d, j) {
                            if (d) {
                                select.append('<option value="' + d + '">' + d + '</option>')
                            }
                        });
                    });
                }
            });

            // Botón para borrar el estado
            $('#clearState').on('click', function () {
                // Borrar estado guardado en localStorage
                localStorage.removeItem('DataTables_reportsTable_/');
                table.state.clear(); // Limpiar estado en DataTables
                location.reload(); // Recargar la página
            });

            // Inicializar tooltips de Bootstrap
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        });
    </script>

</body>

</html>
>>>>>>> main
