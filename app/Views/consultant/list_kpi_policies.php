<h2>Lista de Políticas de KPI</h2>
<table border="1">
    <thead>
        <tr>
            <th>Definición de la Política</th>
            <th>Comentarios</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kpiPolicies as $policy): ?>
            <tr>
                <td><?= esc($policy['policy_kpi_definition']) ?></td>
                <td><?= esc($policy['policy_kpi_comments']) ?></td>
                <td>
                    <a href="<?= base_url('editKpiPolicy/' . $policy['id_kpi_policy']) ?>">Editar</a> |
                    <a href="<?= base_url('deleteKpiPolicy/' . $policy['id_kpi_policy']) ?>" onclick="return confirm('¿Está seguro de eliminar esta política?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br>
<h2>Ir a Dashboard</h2>
<!-- Botón para ir a la vista de agregar reportes -->
<a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
<br><br>
