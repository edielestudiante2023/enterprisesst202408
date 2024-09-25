<h2>Añadir Nuevo KPI</h2>

<form action="<?= base_url('addKpiPost') ?>" method="post">
    <label for="kpi_name">Nombre del KPI:</label>
    <input type="text" name="kpi_name" id="kpi_name" required><br>

    <label for="hpi_comments">Comentarios:</label>
    <input type="text" name="hpi_comments" id="hpi_comments"><br>

    <input type="submit" value="Guardar KPI">
</form>
