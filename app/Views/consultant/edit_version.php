<h1>Editar Versión</h1>

<form action="<?= base_url('editVersionPost/' . $version['id']) ?>" method="post">

    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <tr>
            <th>Nombre del Cliente</th>
            <th>Nombre del Documento</th>
            <th>Tipo de Documento</th>
            <th>Acrónimo</th>
            <th>Número de Versión</th>
            <th>Ubicación</th>
            <th>Estado</th>
            <th>Control de Cambios</th>
            <th>Fecha de Creación</th>
        </tr>
        <tr>
            <td>
                <select name="client_id" required>
                    <?php foreach ($clients as $client): ?>
                        <option value="<?= $client['id_cliente'] ?>" <?= $client['id_cliente'] == $version['client_id'] ? 'selected' : '' ?>>
                            <?= $client['nombre_cliente'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
            <td>
                <select name="policy_type_id" required>
                    <?php foreach ($policyTypes as $policyType): ?>
                        <option value="<?= $policyType['id'] ?>" <?= $policyType['id'] == $version['policy_type_id'] ? 'selected' : '' ?>>
                            <?= $policyType['type_name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
            <td>
                <input type="text" name="document_type" value="<?= $version['document_type'] ?>" required>
            </td>
            <td>
                <input type="text" name="acronym" value="<?= $version['acronym'] ?>" required>
            </td>
            <td>
                <input type="number" name="version_number" value="<?= $version['version_number'] ?>" required>
            </td>
            <td>
                <input type="text" name="location" value="<?= $version['location'] ?>" required>
            </td>
            <td>
                <input type="text" name="status" value="<?= $version['status'] ?>" required>
            </td>
            <td>
                <textarea name="change_control"><?= $version['change_control'] ?></textarea>
            </td>
            <td><?= $version['created_at'] ?></td>
        </tr>
    </table>

    <br>

    <button type="submit">Guardar Cambios</button>
    <a href="<?= base_url('listVersions') ?>"><button type="button">Cancelar</button></a>

    <br><br>
    <h2>Ir a Dashboard</h2>
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
    <br><br>
</form>
