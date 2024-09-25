<h2>Lista de Tipos de KPI</h2>
<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Comentario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kpiTypes as $kpiType): ?>
            <tr>
                <td><?= esc($kpiType['kpi_type']) ?></td>
                <td><?= esc($kpiType['kpi_type_comment']) ?></td>
                <td>
                    <a href="<?= base_url('editKpiType/' . $kpiType['id_kpi_type']) ?>">Editar</a> |
                    <a href="<?= base_url('deleteKpiType/' . $kpiType['id_kpi_type']) ?>" onclick="return confirm('¿Está seguro de eliminar este tipo de KPI?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<br>
<h2>Crear Nuevo Tipo de Indicador</h2>
<!-- Botón para ir a la vista de agregar reportes -->
<a href="<?= base_url('/addKpiType') ?>"><button type="button">Crear</button></a>
<br><br>


<br>
<h2>Ir a Dashboard</h2>
<!-- Botón para ir a la vista de agregar reportes -->
<a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
<br><br>
