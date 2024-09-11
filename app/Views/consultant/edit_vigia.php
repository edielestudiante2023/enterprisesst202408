<h2>Editar Vigía</h2>
<form action="<?= base_url('updateVigia/' . $vigia['id_vigia']) ?>" method="post" enctype="multipart/form-data">
    <label for="nombre_vigia">Nombre del Vigía:</label>
    <input type="text" name="nombre_vigia" value="<?= esc($vigia['nombre_vigia']) ?>" required><br>

    <label for="cedula_vigia">Cédula:</label>
    <input type="text" name="cedula_vigia" value="<?= esc($vigia['cedula_vigia']) ?>" required><br>

    <label for="periodo_texto">Período:</label>
    <input type="text" name="periodo_texto" value="<?= esc($vigia['periodo_texto']) ?>" required><br>

    <label for="firma_vigia">Firma (Imagen):</label>
    <input type="file" name="firma_vigia" accept="image/*"><br>
    
    <!-- Mostrar la firma actual si existe -->
    <?php if (!empty($vigia['firma_vigia'])): ?>
        <img src="<?= base_url('uploads/' . $vigia['firma_vigia']) ?>" alt="Firma del Vigía" width="100"><br>
    <?php endif; ?>

    <label for="id_cliente">Cliente:</label>
<select name="id_cliente">
    <?php foreach ($clients as $client): ?>
        <option value="<?= $client['id_cliente'] ?>"><?= $client['nombre_cliente'] ?></option>
    <?php endforeach; ?>
</select><br>


    <input type="submit" value="Actualizar Vigía">
</form>
