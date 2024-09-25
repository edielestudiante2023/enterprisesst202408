<h2>Lista de Propietarios de Datos</h2>
<table border="1">
    <thead>
        <tr>
            <th>Nombre del Propietario</th>
            <th>Comentario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dataOwners as $owner): ?>
            <tr>
                <td><?= esc($owner['data_owner']) ?></td>
                <td><?= esc($owner['comment_data_owner']) ?></td>
                <td>
                    <a href="<?= base_url('editDataOwner/' . $owner['id_data_owner']) ?>">Editar</a> |
                    <a href="<?= base_url('deleteDataOwner/' . $owner['id_data_owner']) ?>" onclick="return confirm('¿Está seguro de eliminar este propietario?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<br>
<a href="<?= base_url('addDataOwner') ?>"><button type="button">Añadir Propietario de Datos</button></a>
<br><br>

<br>
<h2>Ir a Dashboard</h2>
<!-- Botón para ir a la vista de agregar reportes -->
<a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
<br><br>

