<h2>Añadir Nuevo Propietario de Datos</h2>

<form action="<?= base_url('addDataOwnerPost') ?>" method="post">
    <label for="data_owner">Nombre del Propietario de Datos:</label>
    <input type="text" name="data_owner" id="data_owner" required><br>

    <label for="comment_data_owner">Comentario sobre el Propietario de Datos:</label>
    <input type="text" name="comment_data_owner" id="comment_data_owner"><br>

    <input type="submit" value="Guardar Propietario de Datos">
</form>
