<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles Completos del KPI</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }

        .table-container {
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .btn-dashboard,
        .btn-edit {
            display: block;
            width: fit-content;
            margin: 0 auto;
            font-weight: bold;
        }

        th {
            background-color: #e9ecef !important;
        }
    </style>
    <!-- jQuery and DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</head>

<body>

    <h2>Detalles Completos del KPI</h2>

    <?php foreach ($clientKpis as $kpi): ?>
        <div class="table-container">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td><?= $kpi['id_client_kpi'] ?></td>
                    </tr>
                    <tr>
                        <th>Año</th>
                        <td><?= $kpi['year'] ?></td>
                    </tr>
                    <tr>
                        <th>Mes</th>
                        <td><?= $kpi['month'] ?></td>
                    </tr>
                    <tr>
                        <th>Cliente</th>
                        <td><?= $kpi['cliente'] ?></td>
                    </tr>
                    <tr>
                        <th>Política KPI</th>
                        <td><?= $kpi['kpi_policy'] ?></td>
                    </tr>
                    <tr>
                        <th>Objetivo</th>
                        <td><?= $kpi['objective'] ?></td>
                    </tr>
                    <tr>
                        <th>KPI</th>
                        <td><?= $kpi['kpi'] ?></td>
                    </tr>
                    <tr>
                        <th>Tipo de KPI</th>
                        <td><?= $kpi['kpi_type'] ?></td>
                    </tr>
                    <tr>
                        <th>Definición</th>
                        <td><?= $kpi['kpi_definition'] ?></td>
                    </tr>
                    <tr>
                        <th>Meta</th>
                        <td><?= $kpi['kpi_target'] ?></td>
                    </tr>
                    <tr>
                        <th>Fuente de Datos</th>
                        <td><?= $kpi['data_source'] ?></td>
                    </tr>
                    <tr>
                        <th>Responsable</th>
                        <td><?= $kpi['data_owner'] ?></td>
                    </tr>
                    <tr>
                        <th>Interpretación</th>
                        <td><?= $kpi['kpi_interpretation'] ?></td>
                    </tr>
                    <tr>
                        <th>Periodicidad</th>
                        <td><?= $kpi['periodicidad'] ?></td>
                    </tr>
                    <tr>
                        <th>Gran Total del Indicador</th>
                        <td><?= number_format($kpi['promedio_indicadores'] * 100, 2) ?>%</td>
                    </tr>
                </tbody>
            </table>

            <h3 class="text-center mt-4">PERIODOS</h3>
            <table class="table table-striped table-bordered datatable" style="width:100%">
                <thead>
                    <tr>
                        <th>Numerador</th>
                        <th>Valor Numerador</th>
                        <th>Denominador</th>
                        <th>Valor Denominador</th>
                        <th>Indicador</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kpi['periodos'] as $periodo): ?>
                        <tr>
                            <td><?= $periodo['numerador'] ?></td>
                            <td class="text-center"><?= $periodo['dato_variable_numerador'] ?></td>
                            <td><?= $periodo['denominador'] ?></td>
                            <td class="text-center"><?= $periodo['dato_variable_denominador'] ?></td>
                            <td class="text-center"><?= $periodo['valor_indicador'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <h3 class="text-center mt-4">ANALISIS Y SEGUIMIENTOS</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Analisis de los Datos</th>
                        <td><?= $kpi['analisis_datos'] ?></td>
                    </tr>
                    <tr>
                        <th>Seguimiento 1 del Indicador - Plan de Acción</th>
                        <td><?= $kpi['seguimiento1'] ?></td>
                    </tr>
                    <tr>
                        <th>Seguimiento 2 del Indicador - Plan de Acción</th>
                        <td><?= $kpi['seguimiento2'] ?></td>
                    </tr>
                    <tr>
                        <th>Seguimiento 3 del Indicador - Plan de Acción</th>
                        <td><?= $kpi['seguimiento3'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <br> <!-- Espacio entre tablas de diferentes KPIs -->
    <?php endforeach; ?>

    <div class="text-center mt-5">
        <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-primary btn-dashboard">Ir a Dashboard</a>
        <br><br>
        <a href="<?= base_url('/editClientKpi/' . $kpi['id_client_kpi']) ?>" class="btn btn-secondary btn-edit">Editar Indicador</a>
    </div>

    <!-- Bootstrap and DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json'
                }
            });
        });
    </script>
</body>

</html>
