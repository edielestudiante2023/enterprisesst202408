<h2>Editar KPI</h2>

<form action="<?= base_url('editKpiPost/' . $kpi['id_kpis']) ?>" method="post">
    <label for="kpi_name">Nombre del KPI:</label>
    <input type="text" name="kpi_name" id="kpi_name" value="<?= esc($kpi['kpi_name']) ?>" required><br>

    <label for="hpi_comments">Comentarios:</label>
    <input type="text" name="hpi_comments" id="hpi_comments" value="<?= esc($kpi['hpi_comments']) ?>"><br>

    <input type="submit" value="Actualizar KPI">
</form>
