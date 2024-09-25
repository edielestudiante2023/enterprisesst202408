<h2>Lista de KPIs</h2>
<table border="1">
    <thead>
        <tr>
            <th>Nombre del KPI</th>
            <th>Comentarios</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kpis as $kpi): ?>
            <tr>
                <td><?= esc($kpi['kpi_name']) ?></td>
                <td><?= esc($kpi['hpi_comments']) ?></td>
                <td>
                    <a href="<?= base_url('editKpi/' . $kpi['id_kpis']) ?>">Editar</a> |
                    <a href="<?= base_url('deleteKpi/' . $kpi['id_kpis']) ?>" onclick="return confirm('¿Está seguro de eliminar este KPI?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br>
<a href="<?= base_url('addKpi') ?>"><button type="button">Añadir KPI</button></a>
<br><br>
<br>
<h2>Ir a Dashboard</h2>
<!-- Botón para ir a la vista de agregar reportes -->
<a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
<br><br>
