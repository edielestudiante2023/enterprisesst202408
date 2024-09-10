<h1>Añadir Nueva Versión</h1>

<form action="<?= base_url('addVersionPost') ?>" method="post">

    <label for="client_id">Nombre del Cliente:</label>
    <select name="client_id" required>
        <?php foreach ($clients as $client): ?>
            <option value="<?= $client['id_cliente'] ?>"><?= $client['nombre_cliente'] ?></option>
        <?php endforeach; ?>
    </select>
    <br><br>

    <label for="policy_type_id">Nombre del Documento:</label>
    <select name="policy_type_id" required>
        <?php foreach ($policyTypes as $policyType): ?>
            <option value="<?= $policyType['id'] ?>"><?= $policyType['type_name'] ?></option>
        <?php endforeach; ?>
    </select>
    <br><br>

    <label for="document_type">Tipo de Documento:</label>
    <input type="text" name="document_type" required>
    <br><br>

    <label for="acronym">Acrónimo:</label>
    <input type="text" name="acronym" required>
    <br><br>

    <label for="version_number">Número de Versión:</label>
    <input type="number" name="version_number" required>
    <br><br>

    <label for="location">Ubicación:</label>
    <input type="text" name="location" required>
    <br><br>

    <label for="status">Estado:</label>
    <input type="text" name="status" required>
    <br><br>

    <label for="change_control">Control de Cambios:</label>
    <textarea name="change_control"></textarea>
    <br><br>

    <button type="submit">Guardar Versión</button>
    <a href="<?= base_url('listVersions') ?>"><button type="button">Cancelar</button></a>

</form>

<br><br>

<h2>Ir a Dashboard</h2>
<!-- Botón para ir a la vista de agregar reportes -->
<a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
<br><br>
