<h2>Añadir Nueva Variable Denominador</h2>

<form action="<?= base_url('addDenominatorVariablePost') ?>" method="post">
    <label for="denominator_variable_text">Texto de la Variable:</label>
    <input type="text" name="denominator_variable_text" id="denominator_variable_text" required><br>

    <label for="denominator_variable_data">Datos de la Variable:</label>
    <input type="number" name="denominator_variable_data" id="denominator_variable_data" required><br>

    <input type="submit" value="Guardar Variable Denominador">
</form>
