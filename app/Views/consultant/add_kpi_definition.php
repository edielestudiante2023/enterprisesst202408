<h2>Añadir Nueva Definición de KPI</h2>

<form action="<?= base_url('addKpiDefinitionPost') ?>" method="post">
    <label for="name_kpi_definition">Nombre de la Definición:</label>
    <input type="text" name="name_kpi_definition" id="name_kpi_definition" required><br>

    <label for="comment_kpi_definition">Comentario sobre la Definición:</label>
    <input type="text" name="comment_kpi_definition" id="comment_kpi_definition"><br>

    <input type="submit" value="Guardar Definición de KPI">
</form>
