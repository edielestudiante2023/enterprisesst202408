<h2>Lista de Vigías</h2>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>Nombre del Vigía</th>
            <th>Cédula</th>
            <th>Período</th>
            <th>Firma</th>
            <th>Cliente</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($vigias as $vigia): ?>
            <tr>
                <td><?= $vigia['nombre_vigia'] ?></td>
                <td><?= $vigia['cedula_vigia'] ?></td>
                <td><?= $vigia['periodo_texto'] ?></td>
                <td>
                    <img src="<?= base_url('uploads/' . $vigia['firma_vigia']) ?>" alt="Firma del Vigía" style="max-width: 100px;">
                </td>
                <td>
                    <?php
                    // Obtener el nombre del cliente según el id_cliente
                    foreach ($clientes as $cliente) {
                        if ($cliente['id_cliente'] == $vigia['id_cliente']) {
                            echo $cliente['nombre_cliente'];
                            break;
                        }
                    }
                    ?>
                </td>
                <td>
                    <a href="<?= base_url('editVigia/' . $vigia['id_vigia']) ?>">Editar</a>
                    <a href="<?= base_url('deleteVigia/' . $vigia['id_vigia']) ?>" onclick="return confirm('¿Estás seguro de eliminar este vigía?');">Eliminar</a>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br>
<a href="<?= base_url('addVigia') ?>"><button type="button">Añadir Vigía</button></a>
<br>
<br>

<br><br>

<h2>Ir a Dashboard</h2>
<!-- Botón para ir a la vista de agregar reportes -->
<a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
<br><br>