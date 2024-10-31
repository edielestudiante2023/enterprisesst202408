<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Consultor</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #F8F9FA;
            color: #343A40;
        }

        .navbar {
            background-color: #F8F9FA;
            border-bottom: 1px solid #E9ECEF;
        }

        .navbar-brand img {
            max-height: 50px;
        }

        .header-logos img {
            max-height: 50px;
            margin-right: 10px;
        }

        .content {
            padding: 20px;
        }

        .table th {
            background-color: #6C757D;
            color: #FFF;
        }

        .table td a {
            color: #495057;
            text-decoration: none;
        }

        .table td a:hover {
            color: #007BFF;
        }

        .logout-button {
            text-align: center;
            margin-top: 20px;
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


    <div class="container-fluid content">
        <h2 class="text-center mb-4">Bienvenido, Consultor</h2>
        <p class="text-center mb-4">Esta es tu dashboard donde puedes gestionar la información.</p>

        <!-- Tabla con DataTables -->
        <div class="table-responsive">
            <table id="consultorTable" class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Elemento de Gestión</th>
                        <th>Detalle</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Clientes</td>
                        <td>Ver Lista de Clientes</td>
                        <td><a href="<?= base_url('/listClients') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Clientes</td>
                        <td>Agregar Nuevo Cliente</td>
                        <td><a href="<?= base_url('/addClient') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Consultores</td>
                        <td>Ver Lista de Consultores</td>
                        <td><a href="<?= base_url('/index.php/listConsultants') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Consultores</td>
                        <td>Agregar Nuevo Consultor</td>
                        <td><a href="<?= base_url('/addConsultant') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Documentos</td>
                        <td>Ver Lista de Documentos</td>
                        <td><a href="<?= base_url('/reportList') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Documentos</td>
                        <td>Agregar Nuevo Reporte</td>
                        <td><a href="<?= base_url('/addReport') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Versiones de Documentos</td>
                        <td>Ver Lista de Versiones</td>
                        <td><a href="<?= base_url('listVersions') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Listado de Documentos y Matrices</td>
                        <td>Ver Lista</td>
                        <td><a href="<?= base_url('listReportTypes') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Políticas</td>
                        <td>Ver Lista de Políticas</td>
                        <td><a href="<?= base_url('/listPolicies') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Políticas</td>
                        <td>Agregar Nueva Política</td>
                        <td><a href="<?= base_url('/addPolicy') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Tipos de Documentos</td>
                        <td>Ver Tipos de Documentos</td>
                        <td><a href="<?= base_url('/listPolicyTypes') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Tipos de Documentos</td>
                        <td>Agregar Nuevo Tipo de Documento</td>
                        <td><a href="<?= base_url('/addPolicyType') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Vigías</td>
                        <td>Ver Lista de Vigías</td>
                        <td><a href="<?= base_url('listVigias') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Vigías</td>
                        <td>Añadir Vigía</td>
                        <td><a href="<?= base_url('addVigia') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>1 KPI</td>
                        <td>Politica de SST de cada cliente</td>
                        <td><a href="<?= base_url('listKpiPolicies') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>2 KPI</td>
                        <td>Objetivos que persiguen los indicadores</td>
                        <td><a href="<?= base_url('listObjectives') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>3 KPI</td>
                        <td>Nombre del indicador</td>
                        <td><a href="<?= base_url('listKpis') ?>"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>4 KPI</td>
                        <td>Tipos de Indicadores SST y su Significado</td>
                        <td><a href="<?= base_url('listKpiTypes') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>5 KPI</td>
                        <td>Definiciones de los Indicadores</td>
                        <td><a href="<?= base_url('listKpiDefinitions') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>


                    <tr>
                        <td>6 KPI</td>
                        <td>Cargos que son responsables de los indicadores</td>
                        <td><a href="<?= base_url('listDataOwners') ?>"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>7 KPI</td>
                        <td>Numeradores de los Indicadores</td>
                        <td><a href="<?= base_url('listNumeratorVariables') ?>"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>8 KPI</td>
                        <td>Denominadores de Indicadores</td>
                        <td><a href="<?= base_url('listDenominatorVariables') ?>"><button type="button">Abrir</button></a></td>
                    </tr>


                    <tr>
                        <td>9 KPI</td>
                        <td>Matriz de Indicadores de Todos los clientes</td>
                        <td><a href="<?= base_url('listClientKpis') ?>"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Evaluaciones</td>
                        <td>Listado de todas las evaluaciones</td>
                        <td><a href="<?= base_url('listEvaluaciones') ?>"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Capacitaciones</td>
                        <td>Listado de capacitaciones</td>
                        <td><a href="<?= base_url('listCapacitaciones') ?>"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Cronogramas de Capacitación</td>
                        <td>Listado de cronogramas de capacitación</td>
                        <td><a href="<?= base_url('listcronogCapacitacion') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Plan de Trabajo Anual</td>
                        <td>Listado de actividades del plan de trabajo anual</td>
                        <td><a href="<?= base_url('listPlanDeTrabajoAnual') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Pendientes</td>
                        <td>Listado de Pendientes</td>
                        <td><a href="<?= base_url('listPendientes') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                    <tr>
                        <td>Matrices Cycloid</td>
                        <td>Listado de Matrices Cycloid</td>
                        <td><a href="<?= base_url('listMatricesCycloid') ?>" target="_blank"><button type="button">Abrir</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="logout-button">
            <a href="<?= base_url('/logout') ?>" target="_blank"><button type="button" class="btn btn-danger">Cerrar Sesión</button></a>
        </div>
    </div>

    <!-- jQuery y DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#consultorTable').DataTable({
                paging: true,
                searching: true,
                lengthChange: true,
                pageLength: 5,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json' // Traducción al español
                }
            });
        });
    </script>

</body>

</html>