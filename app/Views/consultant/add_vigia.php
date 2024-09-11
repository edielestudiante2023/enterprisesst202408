<h2>Añadir Vigía</h2>
<form action="<?= base_url('saveVigia') ?>" method="post" enctype="multipart/form-data">
    <label for="nombre_vigia">Nombre del Vigía:</label>
    <input type="text" name="nombre_vigia" required><br>

    <label for="cedula_vigia">Cédula:</label>
    <input type="text" name="cedula_vigia" required><br>

    <label for="periodo_texto">Período:</label>
    <input type="text" name="periodo_texto" required><br>

    <label for="firma_vigia">Firma (Imagen):</label>
    <input type="file" name="firma_vigia" accept="image/*"><br>

    <label for="id_cliente">Cliente:</label>
    <select name="id_cliente">
        <?php foreach ($clients as $client): ?>
            <option value="<?= $client['id_cliente'] ?>"><?= $client['nombre_cliente'] ?></option>
        <?php endforeach; ?>
    </select><br>

    <input type="submit" value="Guardar Vigía">
</form>
