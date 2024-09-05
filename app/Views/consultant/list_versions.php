<h1>Versiones del Documento</h1>

<table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse; margin-top: 20px;">
    <tr>
        <th>Nombre del Cliente</th>
        <th>Nombre de la Política</th>
        <th>Tipo de Documento</th>
        <th>Acrónimo</th>
        <th>Número de Versión</th>
        <th>Ubicación</th>
        <th>Estado</th>
        <th>Control de Cambios</th>
        <th>Fecha de Creación</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($versions as $version): ?>
        <tr>
            <td><?= $version['nombre_cliente'] ?></td>
            <td><?= $version['type_name'] ?></td>
            <td><?= $version['document_type'] ?></td>
            <td><?= $version['acronym'] ?></td>
            <td><?= $version['version_number'] ?></td>
            <td><?= $version['location'] ?></td>
            <td><?= $version['status'] ?></td>
            <td><?= $version['change_control'] ?></td>
            <td><?= $version['created_at'] ?></td>
            <td>
                <a href="<?= base_url('editVersion/' . $version['id']) ?>" style="margin-right: 10px;">Editar</a>
                <a href="<?= base_url('deleteVersion/' . $version['id']) ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar esta versión?');" style="color: red;">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<br>

<a href="<?= base_url('addVersion') ?>"><button type="button" style="margin-bottom: 20px;">Añadir Nueva Versión</button></a>

<br><br>
<h2>Ir a Dashboard</h2>
<a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
<br><br>
