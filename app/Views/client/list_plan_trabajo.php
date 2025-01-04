<<<<<<< HEAD
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

        /* Estilo para el tooltip */
        .tooltip-inner {
            max-width: 300px;
            white-space: normal;
        }

        /* Ajuste de altura de filas */
        tbody tr {
            height: 45px;
        }

        /* Ancho máximo de la columna "Actividad" */
        .actividad-column {
            max-width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
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


    <div class="container mt-5">
        <h2 class="text-center mb-4">Plan de Trabajo Anual</h2>

        <!-- Botón para ir a la vista de agregar reportes -->
        <!-- <div class="text-center btn-dashboard">
            <a href="<?= base_url('/dashboardclient') ?>">
                <button type="button" class="btn btn-primary">Ir a DashBoard</button>
            </a>
        </div> -->

        <!-- Mensaje de éxito -->
        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-success text-center"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>

        <!-- Tabla interactiva con DataTables y filtros personalizados -->
        <div class="table-responsive">
        <button id="downloadExcel" class="btn btn-primary">Descargar Excel</button>

            <table id="planesTable" class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Cliente</th>
                        <th>PHVA</th>
                        <th>Numeral</th>
                        <th>Actividad</th>
                        <th>Fecha Propuesta</th>
                        <th>Fecha Cierre</th>
                        <th>Responsable Definido</th>
                        <th>Estado de Actividad</th>
                        <th>Porcentaje de Avance</th>
                        <th>Semana</th>
                        <th>Observaciones</th>
                    </tr>
                    <!-- Fila adicional para los filtros dinámicos -->
                    <tr>
                        <th></th>
                        <th><select id="filterPHVA" class="form-control form-control-sm">
                                <option value="">Todos</option>
                            </select></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th><select id="filterResponsable" class="form-control form-control-sm">
                                <option value="">Todos</option>
                            </select></th>
                        <th><select id="filterEstado" class="form-control form-control-sm">
                                <option value="">Todos</option>
                            </select></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($planes as $plan): ?>
                        <tr>
                            <td data-bs-toggle="tooltip" title="<?= esc($plan['nombre_cliente']) ?>"><?= esc($plan['nombre_cliente']) ?></td>
                            <td data-bs-toggle="tooltip" title="<?= esc($plan['phva_plandetrabajo']) ?>"><?= esc($plan['phva_plandetrabajo']) ?></td>
                            <td data-bs-toggle="tooltip" title="<?= esc($plan['numeral_actividad']) ?>"><?= esc($plan['numeral_actividad']) ?></td>
                            <td class="actividad-column" data-bs-toggle="tooltip" title="<?= esc($plan['nombre_actividad']) ?>">
                                <?= strlen(esc($plan['nombre_actividad'])) > 40 ? substr(esc($plan['nombre_actividad']), 0, 40) . '...' : esc($plan['nombre_actividad']) ?>
                            </td>
                            <td data-bs-toggle="tooltip" title="<?= esc($plan['fecha_propuesta']) ?>"><?= esc($plan['fecha_propuesta']) ?></td>
                            <td data-bs-toggle="tooltip" title="<?= esc($plan['fecha_cierre']) ?>"><?= esc($plan['fecha_cierre']) ?></td>
                            <td data-bs-toggle="tooltip" title="<?= esc($plan['responsable_definido_paralaactividad']) ?>"><?= esc($plan['responsable_definido_paralaactividad']) ?></td>
                            <td data-bs-toggle="tooltip" title="<?= esc($plan['estado_actividad']) ?>"><?= esc($plan['estado_actividad']) ?></td>
                            <td data-bs-toggle="tooltip" title="<?= esc($plan['porcentaje_avance'] * 100) ?>%"><?= esc($plan['porcentaje_avance'] * 100) ?>%</td>
                            <td data-bs-toggle="tooltip" title="<?= esc($plan['semana']) ?>"><?= esc($plan['semana']) ?></td>
                            <td data-bs-toggle="tooltip" title="<?= esc($plan['observaciones']) ?>"><?= esc($plan['observaciones']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
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


    <!-- Scripts de jQuery, Bootstrap y DataTables -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script>
    document.getElementById('downloadExcel').addEventListener('click', function () {
        // Selecciona la tabla
        const table = document.getElementById('planesTable');
        
        // Crea una hoja de cálculo a partir de la tabla
        const wb = XLSX.utils.table_to_book(table, {sheet: "Planes de Trabajo"});
        
        // Genera el archivo Excel y lo descarga
        XLSX.writeFile(wb, 'PlanesDeTrabajo.xlsx');
    });
</script>


    <!-- Script para inicializar DataTables, filtros dinámicos y tooltips -->
    <script>
        $(document).ready(function() {
            // Inicialización de DataTables
            var table = $('#planesTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json'
                },
                pageLength: 10,
                responsive: true,
                initComplete: function() {
                    // Crear filtros dinámicos
                    this.api().columns([1, 6, 7]).every(function() {
                        var column = this;
                        var select = $(column.header()).find('select');
                        column.data().unique().sort().each(function(d) {
                            select.append('<option value="' + d + '">' + d + '</option>');
                        });
                    });
                }
            });

            // Filtrado basado en los select de la segunda fila
            $('#filterPHVA').on('change', function() {
                table.column(1).search(this.value).draw();
            });
            $('#filterResponsable').on('change', function() {
                table.column(6).search(this.value).draw();
            });
            $('#filterEstado').on('change', function() {
                table.column(7).search(this.value).draw();
            });

            // Inicializar tooltips de Bootstrap en todas las celdas con el atributo data-bs-toggle="tooltip"
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>

</body>

</html>
=======
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <!-- DataTables Buttons CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.3/css/buttons.bootstrap5.min.css">
    <!-- Bootstrap Icons (Opcional para los botones) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Custom CSS for uniform row heights and responsive design -->
    <style>
        /* Uniform row heights */
        table.dataTable tbody tr {
            height: 60px;
        }

        /* Adjust column widths to prevent excessive spacing */
        table.dataTable th,
        table.dataTable td {
            white-space: nowrap;
        }

        /* Ensure tooltips appear above other elements */
        .tooltip {
            z-index: 1060;
        }
    </style>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap Bundle JS (includes Popper) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <!-- DataTables Buttons JS -->
    <script src="https://cdn.datatables.net/buttons/2.3.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.bootstrap5.min.js"></script>
    <!-- JSZip for Excel export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <!-- Buttons HTML5 export -->
    <script src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.html5.min.js"></script>
    <!-- Buttons ColVis -->
    <script src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.colVis.min.js"></script>
</head>

<body class="bg-light text-dark">

    <!-- Navegación (Navbar) -->
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

        <!-- Fila de botones -->
        <div style="display: flex; justify-content: space-between; align-items: center; max-width: 1200px; margin: 10px auto 0; padding: 0 20px;">
            <!-- Botón izquierdo -->
            <div style="text-align: center;">
                <h2 style="margin: 0; font-size: 16px;">Ir a Dashboard</h2>
                <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-primary btn-sm mt-2">Ir a Dashboard</a>
            </div>

            <!-- Botón derecho -->
            <div style="text-align: center;">
                <h2 style="margin: 0; font-size: 16px;">Añadir Registro</h2>
                <a href="<?= base_url('/addClient') ?>" class="btn btn-success btn-sm mt-2" target="_blank">Añadir Registro</a>
            </div>
        </div>
    </nav>

    <!-- Ajustar el espaciado para evitar que el contenido se oculte bajo el navbar fijo -->
    <div style="height: 160px;"></div>

    <div class="container mt-5">
        <!-- Mensajes Flash (Errores y Éxitos) -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

        <h2 class="mb-4">Lista de Clientes</h2>

        <?php if (isset($clients) && !empty($clients)): ?>
            <div class="mb-3">
                <!-- Botón para restablecer filtros -->
                <button id="clearState" class="btn btn-secondary">Restablecer Filtros</button>
            </div>
            <div class="table-responsive">
                <table id="clientsTable" class="table table-bordered table-striped" style="width:100%">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Fecha de Ingreso</th>
                            <th>NIT Cliente</th>
                            <th>Nombre Cliente</th>
                            <th>Usuario</th>
                            <th>Correo Cliente</th>
                            <th>Teléfono 1</th>
                            <th>Teléfono 2</th>
                            <th>Dirección</th>
                            <th>Persona de Contacto</th>
                            <th>Código Actividad Económica</th>
                            <th>Nombre Representante Legal</th>
                            <th>Cédula Representante Legal</th>
                            <th>Fecha Fin de Contrato</th>
                            <th>Ciudad</th>
                            <th>Estado</th>
                            <th>ID Consultor</th>
                            <th>Logo</th>
                            <th>Firma Representante Legal</th>
                            <th>Estándares</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <!-- Filtros para cada columna -->
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="0">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'id_cliente'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="1">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'fecha_ingreso'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="2">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'nit_cliente'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="3">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'nombre_cliente'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="4">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'usuario'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="5">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'correo_cliente'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="6">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'telefono_1_cliente'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="7">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'telefono_2_cliente'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="8">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'direccion_cliente'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="9">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'persona_contacto_compras'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="10">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'codigo_actividad_economica'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="11">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'nombre_rep_legal'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="12">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'cedula_rep_legal'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="13">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'fecha_fin_contrato'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="14">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'ciudad_cliente'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="15">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'estado'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="16">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'id_consultor'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="17">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'logo'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="18">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'firma_representante_legal'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <th>
                                <select class="form-control form-control-sm filter-select" data-column="19">
                                    <option value="">Todos</option>
                                    <?php
                                    $uniqueValues = array_unique(array_column($clients, 'estandares'));
                                    foreach ($uniqueValues as $unique): ?>
                                        <option value="<?= htmlspecialchars($unique) ?>"><?= htmlspecialchars($unique) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </th>
                            <!-- Añadir un <th> vacío para la columna "Acciones" -->
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($clients as $client): ?>
                            <tr>
                                <td data-bs-toggle="tooltip" data-bs-placement="top" title="ID del Cliente"><?= htmlspecialchars($client['id_cliente']) ?></td>
                                <td><?= htmlspecialchars($client['fecha_ingreso']) ?></td>
                                <td><?= htmlspecialchars($client['nit_cliente']) ?></td>
                                <td><?= htmlspecialchars($client['nombre_cliente']) ?></td>
                                <td><?= htmlspecialchars($client['usuario']) ?></td>
                                <td><?= htmlspecialchars($client['correo_cliente']) ?></td>
                                <td><?= htmlspecialchars($client['telefono_1_cliente']) ?></td>
                                <td><?= htmlspecialchars($client['telefono_2_cliente']) ?></td>
                                <td><?= htmlspecialchars($client['direccion_cliente']) ?></td>
                                <td><?= htmlspecialchars($client['persona_contacto_compras']) ?></td>
                                <td><?= htmlspecialchars($client['codigo_actividad_economica']) ?></td>
                                <td><?= htmlspecialchars($client['nombre_rep_legal']) ?></td>
                                <td><?= htmlspecialchars($client['cedula_rep_legal']) ?></td>
                                <td><?= htmlspecialchars($client['fecha_fin_contrato']) ?></td>
                                <td><?= htmlspecialchars($client['ciudad_cliente']) ?></td>
                                <td><?= htmlspecialchars($client['estado']) ?></td>
                                <td><?= htmlspecialchars($client['id_consultor']) ?></td>
                                <td>
                                    <?php if (!empty($client['logo'])): ?>
                                        <img src="<?= base_url('uploads/' . $client['logo']) ?>" alt="Logo" width="50" data-bs-toggle="tooltip" data-bs-placement="top" title="Logo del Cliente">
                                    <?php else: ?>
                                        No disponible
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if (!empty($client['firma_representante_legal'])): ?>
                                        <img src="<?= base_url('uploads/' . $client['firma_representante_legal']) ?>" alt="Firma" width="50" data-bs-toggle="tooltip" data-bs-placement="top" title="Firma del Representante Legal">
                                    <?php else: ?>
                                        No disponible
                                    <?php endif; ?>
                                </td>
                                <td><?= htmlspecialchars($client['estandares']) ?></td>
                                <td>
                                    <a href="<?= base_url('/editClient/' . $client['id_cliente']) ?>" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Cliente">Editar</a>
                                    <a href="<?= base_url('/deleteClient/' . $client['id_cliente']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?')" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar Cliente">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p>No hay clientes disponibles.</p>
        <?php endif; ?>

        <!-- <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-secondary mt-3">Volver al Dashboard</a> -->
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

    <!-- DataTables Initialization Script -->
    <script>
        $(document).ready(function () {
            // Inicializar DataTable con opciones personalizadas
            var table = $('#clientsTable').DataTable({
                // Definir idioma en español
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
                },
                // Habilitar la extensión de botones
                "dom": 'Bfltip',
                "buttons": [
                    {
                        extend: 'excelHtml5',
                        text: '<i class="bi bi-file-earmark-excel"></i> Descargar Excel',
                        className: 'btn btn-success btn-sm',
                        titleAttr: 'Descargar a Excel'
                    },
                    {
                        extend: 'colvis',
                        text: '<i class="bi bi-columns"></i> Visibilidad de Columnas',
                        className: 'btn btn-secondary btn-sm',
                        titleAttr: 'Gestionar Visibilidad de Columnas'
                    }
                ],
                // Habilitar el guardado de estado (persistencia)
                "stateSave": true,
                // Configurar el almacenamiento del estado en localStorage
                "stateSaveCallback": function (settings, data) {
                    localStorage.setItem('DataTables_' + settings.sInstance, JSON.stringify(data));
                },
                "stateLoadCallback": function (settings) {
                    return JSON.parse(localStorage.getItem('DataTables_' + settings.sInstance));
                },
                // Ajustar el ancho de columnas automáticamente
                "autoWidth": false,
                // Responsividad
                "responsive": true,
                // Deshabilitar ordenamiento y búsqueda en la columna "Acciones" (última columna)
                "columnDefs": [
                    {
                        "targets": -1, // Última columna
                        "orderable": false,
                        "searchable": false
                    }
                ]
            });

            // Aplicar el filtro cuando se cambia la selección
            $('.filter-select').on('change', function () {
                var columnIndex = $(this).data('column');
                var filterValue = $(this).val();
                table.column(columnIndex).search(filterValue ? '^' + filterValue + '$' : '', true, false).draw();
            });

            // Botón para restablecer filtros y recargar la tabla
            $('#clearState').on('click', function () {
                // Limpiar el almacenamiento local del estado de DataTables
                localStorage.removeItem('DataTables_clientsTable');
                // Limpiar el estado de DataTables
                table.state.clear();
                // Recargar la página para restablecer todos los filtros
                location.reload();
            });

            // Inicializar tooltips
            function initializeTooltips() {
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                tooltipTriggerList.map(function (tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl);
                });
            }

            // Inicializar tooltips al cargar la página
            initializeTooltips();

            // Re-inicializar tooltips después de cada redibujado de la tabla
            table.on('draw', function () {
                initializeTooltips();
            });
        });
    </script>
</body>

</html>
>>>>>>> main
