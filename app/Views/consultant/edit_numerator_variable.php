<h2>Editar Variable Numerador</h2>

<form action="<?= base_url('editNumeratorVariablePost/' . $numeratorVariable['id_numerator_variable']) ?>" method="post">
    <label for="numerator_variable_text">Texto de la Variable:</label>
    <input type="text" name="numerator_variable_text" id="numerator_variable_text" value="<?= esc($numeratorVariable['numerator_variable_text']) ?>" required><br>

    <label for="numerator_variable_data">Datos de la Variable:</label>
    <input type="number" name="numerator_variable_data" id="numerator_variable_data" value="<?= esc($numeratorVariable['numerator_variable_data']) ?>" required><br>

    <input type="submit" value="Actualizar Variable Numerador">
</form>
