<!DOCTYPE html>
<html>
<head>
    <title>Lista de Contenidos</title>
</head>
<body>

<h2>Ir a Dashboard</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
    <br><br>

<h1>Lista de Contenidos</h1>

<?php if (session()->getFlashdata('msg')): ?>
    <p><?= session()->getFlashdata('msg') ?></p>
<?php endif; ?>

<table>
    <thead>
        <tr>
            <th>Cliente</th>
            <th>Tipo de Contenido</th>
            <th>Texto del Contenido</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($policies as $policy): ?>
            <tr>
                <td><?= $clients[array_search($policy['client_id'], array_column($clients, 'id_cliente'))]['nombre_cliente'] ?></td>
                <td><?= $policyTypes[array_search($policy['policy_type_id'], array_column($policyTypes, 'id'))]['type_name'] ?></td>
                <td><?= $policy['policy_content'] ?></td>
                <td>
                    <a href="<?= base_url('/editPolicy/'.$policy['id']) ?>">Editar</a>
                    <a href="<?= base_url('/deletePolicy/'.$policy['id']) ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar esta política?');">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<a href="<?= base_url('/addPolicy') ?>">Agregar Nuevo Texto a Documento</a>

</body>
</html>
