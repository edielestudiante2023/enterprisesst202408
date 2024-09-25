<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles Completos del KPI</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
            width: 50%;
            /* Cada columna ocupa el 50% */
        }

        th {
            background-color: #f2f2f2;
            /* Color de fondo para las cabeceras */
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>Detalles Completos del KPI</h2>

    <?php foreach ($clientKpis as $kpi): ?>
        <table>
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
                <!-- <td><?= $kpi['gran_total_indicador'] ?></td> -->
                <td><?= number_format($kpi['promedio_indicadores'] * 100, 2) ?>%</td>

            </tr>

        </table>

        <div>
            <h3 style="text-align: center;">PERIODOS</h3>
            <table border="1" width="100%" style="border-collapse: collapse; margin-top: 10px; table-layout: fixed;">
                <thead>
                    <tr>
                        <th style="width: 35%;">Numerador</th> <!-- Ajustar ancho -->
                        <th style="width: 15%; text-align: center;">Valor Numerador</th> <!-- Centrar -->
                        <th style="width: 35%;">Denominador</th> <!-- Ajustar ancho -->
                        <th style="width: 15%; text-align: center;">Valor Denominador</th> <!-- Centrar -->
                        <th style="width: 10%; text-align: center;">Indicador</th> <!-- Centrar -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kpi['periodos'] as $periodo): ?>
                        <tr>
                            <td><?= $periodo['numerador'] ?></td>
                            <td style="text-align: center;"><?= $periodo['dato_variable_numerador'] ?></td>
                            <td><?= $periodo['denominador'] ?></td>
                            <td style="text-align: center;"><?= $periodo['dato_variable_denominador'] ?></td>
                            <td style="text-align: center;"><?= $periodo['valor_indicador'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div>
            <h3 style="text-align: center;">ANALISIS Y SEGUIMIENTOS</h3>

            <table>
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
            </table>
        </div>


        <br><br> <!-- Espacio entre tablas de diferentes KPIs -->
    <?php endforeach; ?>

    <br>
    <h2>Ir a Dashboard</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
    <br><br>

    <h2>Editar Indicador</h2>
    <!-- Botón para ir a la vista de editar KPI -->
    <a href="<?= base_url('/editClientKpi/' . $kpi['id_client_kpi']) ?>">
        <button type="button">Editar Indicador</button>
    </a>
    <br><br>



</body>

</html>