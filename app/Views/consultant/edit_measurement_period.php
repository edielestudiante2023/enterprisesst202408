<h2>Editar Periodo de Medición</h2>

<form action="<?= base_url('editMeasurementPeriodPost/' . $measurementPeriod['id_measurement_period']) ?>" method="post">
    <label for="measurement_period">Periodo de Medición:</label>
    <input type="text" name="measurement_period" id="measurement_period" value="<?= esc($measurementPeriod['measurement_period']) ?>" required><br>

    <label for="comment_measurement_period">Comentario sobre el Periodo de Medición:</label>
    <input type="text" name="comment_measurement_period" id="comment_measurement_period" value="<?= esc($measurementPeriod['comment_measurement_period']) ?>"><br>

    <input type="submit" value="Actualizar Periodo de Medición">
</form>

