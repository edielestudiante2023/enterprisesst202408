<h2>Lista de Periodos de Medición</h2>
<table border="1">
    <thead>
        <tr>
            <th>Periodo de Medición</th>
            <th>Comentario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($measurementPeriods as $period): ?>
            <tr>
                <td><?= esc($period['measurement_period']) ?></td>
                <td><?= esc($period['comment_measurement_period']) ?></td>
                <td>
                    <a href="<?= base_url('editMeasurementPeriod/' . $period['id_measurement_period']) ?>">Editar</a> |
                    <a href="<?= base_url('deleteMeasurementPeriod/' . $period['id_measurement_period']) ?>" onclick="return confirm('¿Está seguro de eliminar este Periodo de Medición?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br>
<a href="<?= base_url('addMeasurementPeriod') ?>"><button type="button">Añadir Periodo de Medición</button></a>
<br><br>
<br>
<h2>Ir a Dashboard</h2>
<!-- Botón para ir a la vista de agregar reportes -->
<a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
<br><br>
