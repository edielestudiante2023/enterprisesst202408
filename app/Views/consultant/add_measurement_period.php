<h2>Añadir Nuevo Periodo de Medición</h2>

<form action="<?= base_url('addMeasurementPeriodPost') ?>" method="post">
    <label for="measurement_period">Periodo de Medición:</label>
    <input type="text" name="measurement_period" id="measurement_period" required><br>

    <label for="comment_measurement_period">Comentario sobre el Periodo de Medición:</label>
    <input type="text" name="comment_measurement_period" id="comment_measurement_period"><br>

    <input type="submit" value="Guardar Periodo de Medición">
</form>
