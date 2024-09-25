<h2>Editar Definición de KPI</h2>

<form action="<?= base_url('editKpiDefinitionPost/' . $kpiDefinition['id_kpi_definition']) ?>" method="post">
    <label for="name_kpi_definition">Nombre de la Definición:</label>
    <input type="text" name="name_kpi_definition" id="name_kpi_definition" value="<?= esc($kpiDefinition['name_kpi_definition']) ?>" required><br>

    <label for="comment_kpi_definition">Comentario sobre la Definición:</label>
    <input type="text" name="comment_kpi_definition" id="comment_kpi_definition" value="<?= esc($kpiDefinition['comment_kpi_definition']) ?>"><br>

    <input type="submit" value="Actualizar Definición de KPI">
</form>
