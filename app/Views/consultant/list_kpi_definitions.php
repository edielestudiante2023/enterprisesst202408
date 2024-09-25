<h2>Lista de Definiciones de KPI</h2>
<table border="1">
    <thead>
        <tr>
            <th>Nombre de la Definición</th>
            <th>Comentario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kpiDefinitions as $definition): ?>
            <tr>
                <td><?= esc($definition['name_kpi_definition']) ?></td>
                <td><?= esc($definition['comment_kpi_definition']) ?></td>
                <td>
                    <a href="<?= base_url('editKpiDefinition/' . $definition['id_kpi_definition']) ?>">Editar</a> |
                    <a href="<?= base_url('deleteKpiDefinition/' . $definition['id_kpi_definition']) ?>" onclick="return confirm('¿Está seguro de eliminar esta definición?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<br>
<br>
<a href="<?= base_url('addKpiDefinition') ?>"><button type="button">Añadir Definición de KPI</button></a>
<br><br>

<br>
<h2>Ir a Dashboard</h2>
<!-- Botón para ir a la vista de agregar reportes -->
<a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
<br><br>

