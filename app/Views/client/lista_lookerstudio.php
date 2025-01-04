<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Dashboards</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<<<<<<< HEAD
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Mis Dashboards</h1>
        <table id="datatable" class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
=======
    <!-- DataTables Buttons CSS -->
    <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (opcional para iconos en botones) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Ajuste de altura de filas */
        table.dataTable tbody tr {
            height: 60px; /* Ajusta según tus necesidades */
        }
        /* Ajuste de ancho de columnas */
        table.dataTable th, table.dataTable td {
            white-space: nowrap;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center w-100">
                <!-- Logos -->
                <div class="d-flex align-items-center">
                    <a href="https://dashboard.cycloidtalent.com/login" class="me-3">
                        <img src="<?= base_url('uploads/logoenterprisesstblancoslogan.png') ?>" alt="Enterprisesst Logo" style="height: 60px;">
                    </a>
                    <a href="https://cycloidtalent.com/index.php/consultoria-sst" class="me-3">
                        <img src="<?= base_url('uploads/logosst.png') ?>" alt="SST Logo" style="height: 60px;">
                    </a>
                    <a href="https://cycloidtalent.com/">
                        <img src="<?= base_url('uploads/logocycloidsinfondo.png') ?>" alt="Cycloids Logo" style="height: 60px;">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div style="height: 100px;"></div>
    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Mis Dashboards</h1>
        
        <!-- Botón Restablecer Filtros -->
        <div class="mb-3">
            <button id="clearState" class="btn btn-warning">
                <i class="bi bi-arrow-clockwise"></i> Restablecer Filtros
            </button>
        </div>

        <!-- Tabla de Dashboards -->
        <table id="datatable" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead class="table-dark">
                <tr>
>>>>>>> main
                    <th>Tipo de Dashboard</th>
                    <th>Enlace</th>
                </tr>
            </thead>
<<<<<<< HEAD
            <tbody>
                <?php foreach ($lookerStudios as $looker): ?>
                    <tr>
                        <td><?= $looker['id_looker'] ?></td>
=======
            <tfoot>
                <tr>
                    <th>
                        <select class="form-select form-select-sm filter-select" data-column="0">
                            <option value="">Todos</option>
                        </select>
                    </th>
                    <th>
                        <!-- No se aplica filtro a la columna de enlaces -->
                    </th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach ($lookerStudios as $looker): ?>
                    <tr>
>>>>>>> main
                        <td><?= htmlspecialchars($looker['tipodedashboard'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td>
                            <a href="<?= htmlspecialchars($looker['enlace'], ENT_QUOTES, 'UTF-8') ?>" 
                               target="_blank" 
                               rel="noopener noreferrer" 
<<<<<<< HEAD
                               class="btn btn-link text-decoration-none">Ver</a>
=======
                               class="btn btn-link text-decoration-none" 
                               data-bs-toggle="tooltip" 
                               title="Abrir Dashboard">Ver</a>
>>>>>>> main
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<<<<<<< HEAD
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json"
                },
                responsive: true,
                lengthMenu: [5, 10, 25, 50],
                pageLength: 10
=======
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <!-- DataTables Buttons JS -->
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
    <!-- JSZip para exportar a Excel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Inicializar DataTable con las configuraciones requeridas
            var table = $('#datatable').DataTable({
                // Cargar idioma en español
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json"
                },
                // Hacer la tabla responsiva
                responsive: true,
                // Configurar la paginación y el número de filas por página
                lengthMenu: [5, 10, 25, 50],
                pageLength: 10,
                // Guardar el estado de la tabla (filtros, paginación, etc.)
                stateSave: true,
                // Configurar las extensiones de botones
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'colvis',
                        text: '<i class="bi bi-columns"></i> Columnas',
                        className: 'btn btn-secondary btn-sm'
                    },
                    {
                        extend: 'excelHtml5',
                        text: '<i class="bi bi-file-earmark-excel"></i> Exportar a Excel',
                        className: 'btn btn-success btn-sm',
                        exportOptions: {
                            columns: ':visible'
                        }
                    }
                ]
            });

            // Función para rellenar los filtros desplegables en el footer
            table.columns().every(function() {
                var column = this;
                var columnIdx = column.index();
                // Solo aplicar filtros a la primera columna (Tipo de Dashboard)
                if (columnIdx === 0) {
                    var select = $('select.filter-select[data-column="' + columnIdx + '"]');
                    // Obtener valores únicos y ordenarlos
                    var uniqueData = [];
                    column.data().unique().sort().each(function(d) {
                        uniqueData.push(d);
                    });
                    // Rellenar el select con opciones
                    uniqueData.forEach(function(d) {
                        select.append('<option value="' + d + '">' + d + '</option>');
                    });
                }
            });

            // Evento al cambiar un filtro desplegable
            $('select.filter-select').on('change', function() {
                var columnIdx = $(this).data('column');
                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                table.column(columnIdx).search(val ? '^' + val + '$' : '', true, false).draw();
            });

            // Botón para restablecer los filtros y el estado de la tabla
            $('#clearState').on('click', function () {
                // Limpiar el almacenamiento local del estado de DataTables
                localStorage.removeItem('DataTables_datatable_/');
                // Limpiar el estado de la tabla
                table.state.clear();
                // Restablecer los filtros desplegables a su valor predeterminado
                $('select.filter-select').val('');
                // Recargar la tabla sin filtros
                table.search('').columns().search('').draw();
                // Recargar la página para asegurar que todo se restablece
                location.reload();
            });

            // Inicializar los tooltips de Bootstrap
            function initializeTooltips() {
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl);
                });
            }

            initializeTooltips(); // Inicializar al cargar la página

            // Re-inicializar los tooltips después de cada redibujo de la tabla
            table.on('draw', function () {
                initializeTooltips();
>>>>>>> main
            });
        });
    </script>
</body>
</html>
