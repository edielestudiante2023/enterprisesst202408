<h2>Añadir Tipo de KPI</h2>

<form action="<?= base_url('addKpiTypePost') ?>" method="post">
    <label for="kpi_type">Nombre del Tipo de KPI:</label>
    <input type="text" name="kpi_type" id="kpi_type" required><br>

    <label for="kpi_type_comment">Comentario sobre el Tipo de KPI:</label>
    <input type="text" name="kpi_type_comment" id="kpi_type_comment"><br>

    <input type="submit" value="Guardar Tipo de KPI">
</form>
<br>
<h2>Ir a Dashboard</h2>
<!-- Botón para ir a la vista de agregar reportes -->
<a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
<br><br>
