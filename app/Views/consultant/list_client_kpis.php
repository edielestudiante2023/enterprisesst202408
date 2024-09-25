<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de KPIs de Clientes</title>
</head>

<body>

    <h2>Lista de KPIs de Clientes</h2>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Año</th>
                <th>Mes</th>
                <th>Cliente</th>
                <th>Política KPI</th>
                <th>Objetivo</th>
                <th>KPI</th>
                <th>Tipo</th>
                <th>Definición</th>
                <th>Meta</th>
                <th>Fuente de datos</th>
                <th>Responsable</th>
                <th>Interpretación</th>
                <th>Promedio del Indicador</th> <!-- Cambiar el nombre de la columna -->
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($clientKpis)) : ?>
                <?php foreach ($clientKpis as $kpi) : ?>
                    <tr>
                        <td><?= $kpi['id_client_kpi'] ?></td>
                        <td><?= $kpi['year'] ?></td>
                        <td><?= $kpi['month'] ?></td>
                        <td><?= $kpi['cliente'] ?></td>
                        <td><?= $kpi['kpi_policy'] ?></td>
                        <td><?= $kpi['objective'] ?></td>
                        <td><?= $kpi['kpi'] ?></td>
                        <td><?= $kpi['kpi_type'] ?></td>
                        <td><?= $kpi['kpi_definition'] ?></td>
                        <td><?= $kpi['kpi_target'] ?></td>
                        <td><?= $kpi['data_source'] ?></td>
                        <td><?= $kpi['data_owner'] ?></td>
                        <td><?= $kpi['kpi_interpretation'] ?></td>
                        <!-- Reemplazar el Gran Total del Indicador por el Promedio en porcentaje -->
                        <td><?= number_format($kpi['promedio_indicadores'] , 2) ?>%</td>
                        <td>
                            <a href="<?= base_url('/listClientKpisFull/' . $kpi['id_client_kpi']) ?>">Ver completo</a>
                            <a href="<?= base_url('/editClientKpi/' . $kpi['id_client_kpi']) ?>">Editar</a>
                            <a href="<?= base_url('/deleteClientKpi/' . $kpi['id_client_kpi']) ?>" onclick="return confirm('¿Estás seguro de eliminar este KPI?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="15">No hay KPIs registrados</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <br>
    <h2>Agregar Indicador</h2>
    <a href="<?= base_url('/addClientKpi') ?>"><button type="button">Ir a DashBoard</button></a>
    <br><br>
    <h2>Ir a Dashboard</h2>
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
    <br><br>

</body>

</html>
