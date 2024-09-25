<h2>Editar Variable Denominador</h2>

<form action="<?= base_url('editDenominatorVariablePost/' . $denominatorVariable['id_denominator_variable']) ?>" method="post">
    <label for="denominator_variable_text">Texto de la Variable:</label>
    <input type="text" name="denominator_variable_text" id="denominator_variable_text" value="<?= esc($denominatorVariable['denominator_variable_text']) ?>" required><br>

    <label for="denominator_variable_data">Datos de la Variable:</label>
    <input type="text" name="denominator_variable_data" id="denominator_variable_data" value="<?= esc($denominatorVariable['denominator_variable_data']) ?>" ><br>

    <input type="submit" value="Actualizar Variable Denominador">
</form>
