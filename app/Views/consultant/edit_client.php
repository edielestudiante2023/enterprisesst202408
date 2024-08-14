<!DOCTYPE html>
<html>

<head>
    <title>Editar Cliente</title>
</head>

<body>
    <h2>Editar Cliente</h2>

    <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('/updateClient/' . $client['id_cliente']) ?>" method="post" enctype="multipart/form-data">
        <label>Fecha de Ingreso:</label>
        <input type="date" name="fecha_ingreso" value="<?= $client['fecha_ingreso'] ?>"><br>

        <label>NIT Cliente:</label>
        <input type="text" name="nit_cliente" value="<?= $client['nit_cliente'] ?>"><br>

        <label>Nombre Cliente:</label>
        <input type="text" name="nombre_cliente" value="<?= $client['nombre_cliente'] ?>"><br>

        <label>Usuario:</label>
        <input type="text" name="usuario" value="<?= $client['usuario'] ?>"><br>

        <label>Correo Cliente:</label>
        <input type="email" name="correo_cliente" value="<?= $client['correo_cliente'] ?>"><br>

        <label>Teléfono 1:</label>
        <input type="text" name="telefono_1_cliente" value="<?= $client['telefono_1_cliente'] ?>"><br>

        <label>Teléfono 2:</label>
        <input type="text" name="telefono_2_cliente" value="<?= isset($client['telefono_2_cliente']) ? $client['telefono_2_cliente'] : '' ?>">


        <label>Dirección:</label>
        <input type="text" name="direccion_cliente" value="<?= $client['direccion_cliente'] ?>"><br>

        <label>Persona de Contacto para Compras:</label>
        <input type="text" name="persona_contacto_compras" value="<?= $client['persona_contacto_compras'] ?>"><br>

        <label>Código de Actividad Económica:</label>
        <input type="text" name="codigo_actividad_economica" value="<?= $client['codigo_actividad_economica'] ?>"><br>

        <label>Nombre del Representante Legal:</label>
        <input type="text" name="nombre_rep_legal" value="<?= $client['nombre_rep_legal'] ?>"><br>

        <label>Cédula del Representante Legal:</label>
        <input type="text" name="cedula_rep_legal" value="<?= $client['cedula_rep_legal'] ?>"><br>

        <label>Fecha Fin de Contrato:</label>
        <input type="date" name="fecha_fin_contrato" value="<?= $client['fecha_fin_contrato'] ?>"><br>

        <label>Ciudad:</label>
        <input type="text" name="ciudad_cliente" value="<?= $client['ciudad_cliente'] ?>"><br>

        <label>Estado:</label>
        <select name="estado">
            <option value="activo" <?= $client['estado'] == 'activo' ? 'selected' : '' ?>>Activo</option>
            <option value="inactivo" <?= $client['estado'] == 'inactivo' ? 'selected' : '' ?>>Inactivo</option>
            <option value="pendiente" <?= $client['estado'] == 'pendiente' ? 'selected' : '' ?>>Pendiente</option>
        </select><br>

        <label>Logo:</label>
        <input type="file" name="logo"><br>
        <?php if ($client['logo']): ?>
            <img src="<?= base_url('uploads/' . $client['logo']) ?>" alt="Logo" width="100"><br>
        <?php endif; ?>

        <label>Firma Representante Legal:</label>
        <input type="file" name="firma_representante_legal"><br>
        <?php if ($client['firma_representante_legal']): ?>
            <img src="<?= base_url('uploads/' . $client['firma_representante_legal']) ?>" alt="Firma" width="100"><br>
        <?php endif; ?>

        <label>Estándares:</label>
        <select name="estandares">
            <option value="7" <?= $client['estandares'] == '7' ? 'selected' : '' ?>>7 Estándares</option>
            <option value="21" <?= $client['estandares'] == '21' ? 'selected' : '' ?>>21 Estándares</option>
            <option value="60" <?= $client['estandares'] == '60' ? 'selected' : '' ?>>60 Estándares</option>
        </select><br>

        <button type="submit">Actualizar Cliente</button>
    </form>

    <a href="<?= base_url('/listClients') ?>">Volver a la lista de clientes</a>
</body>

</html>