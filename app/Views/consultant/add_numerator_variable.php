<h2>Añadir Nueva Variable Numerador</h2>

<form action="<?= base_url('addNumeratorVariablePost') ?>" method="post">
    <label for="numerator_variable_text">Texto de la Variable:</label>
    <input type="text" name="numerator_variable_text" id="numerator_variable_text" required><br>

    <label for="numerator_variable_data">Datos de la Variable:</label>
    <input type="text" name="numerator_variable_data" id="numerator_variable_data" ><br>

    <input type="submit" value="Guardar Variable Numerador">
</form>
