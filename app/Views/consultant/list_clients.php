<!DOCTYPE html>
<html>

<head>
    <title>Lista de Clientes</title>
</head>

<body>

    <?php if (session()->getFlashdata('error')): ?>
        <div style="color: red;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('msg')): ?>
        <div style="color: green;">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>

    <h2>Lista de Clientes</h2>

    <?php if (isset($clients) && !empty($clients)): ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Fecha de Ingreso</th>
                <th>NIT Cliente</th>
                <th>Nombre Cliente</th>
                <th>Usuario</th>
                <th>Correo Cliente</th>
                <th>Teléfono 1</th>
                <th>Teléfono 2</th>
                <th>Dirección</th>
                <th>Persona de Contacto</th>
                <th>Código Actividad Económica</th>
                <th>Nombre Representante Legal</th>
                <th>Cédula Representante Legal</th>
                <th>Fecha Fin de Contrato</th>
                <th>Ciudad</th>
                <th>Estado</th>
                <th>ID Consultor</th>
                <th>Logo</th>
                <th>Firma Representante Legal</th>
                <th>Estándares</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= $client['id_cliente'] ?></td>
                    <td><?= $client['fecha_ingreso'] ?></td>
                    <td><?= $client['nit_cliente'] ?></td>
                    <td><?= $client['nombre_cliente'] ?></td>
                    <td><?= $client['usuario'] ?></td>
                    <td><?= $client['correo_cliente'] ?></td>
                    <td><?= $client['telefono_1_cliente'] ?></td>
                    <td><?= $client['telefono_2_cliente'] ?></td>
                    <td><?= $client['direccion_cliente'] ?></td>
                    <td><?= $client['persona_contacto_compras'] ?></td>
                    <td><?= $client['codigo_actividad_economica'] ?></td>
                    <td><?= $client['nombre_rep_legal'] ?></td>
                    <td><?= $client['cedula_rep_legal'] ?></td>
                    <td><?= $client['fecha_fin_contrato'] ?></td>
                    <td><?= $client['ciudad_cliente'] ?></td>
                    <td><?= $client['estado'] ?></td>
                    <td><?= $client['id_consultor'] ?></td>
                    <td>
                        <?php if (!empty($client['logo'])): ?>
                            <img src="<?= base_url('uploads/' . $client['logo']) ?>" alt="Logo" width="50">
                        <?php else: ?>
                            No disponible
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if (!empty($client['firma_representante_legal'])): ?>
                            <img src="<?= base_url('uploads/' . $client['firma_representante_legal']) ?>" alt="Firma" width="50">
                        <?php else: ?>
                            No disponible
                        <?php endif; ?>
                    </td>
                    <td><?= $client['estandares'] ?></td>
                    <td>
                        <a href="<?= base_url('/editClient/' . $client['id_cliente']) ?>">Editar</a>
                        <a href="<?= base_url('/deleteClient/' . $client['id_cliente']) ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?')">Eliminar</a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No hay clientes disponibles.</p>
    <?php endif; ?>

    <a href="<?= base_url('/dashboardconsultant') ?>">Volver al Dashboard</a>
</body>

</html>