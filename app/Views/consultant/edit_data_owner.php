<h2>Editar Propietario de Datos</h2>

<form action="<?= base_url('editDataOwnerPost/' . $dataOwner['id_data_owner']) ?>" method="post">
    <label for="data_owner">Nombre del Propietario de Datos:</label>
    <input type="text" name="data_owner" id="data_owner" value="<?= esc($dataOwner['data_owner']) ?>" required><br>

    <label for="comment_data_owner">Comentario sobre el Propietario de Datos:</label>
    <input type="text" name="comment_data_owner" id="comment_data_owner" value="<?= esc($dataOwner['comment_data_owner']) ?>"><br>

    <input type="submit" value="Actualizar Propietario de Datos">
</form>
