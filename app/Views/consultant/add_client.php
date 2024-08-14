<!-- C:\laragon\www\enterprise-sst202408\app\Views\consultant\add_client.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Agregar Cliente</title>
</head>

<body>

<a href="<?= base_url('/listClients') ?>">
    <button type="button">Ver Lista de Clientes</button>
</a>

<br><br>
    <h2>Agregar Nuevo Cliente</h2>
    <?php if (session()->getFlashdata('msg')) : ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('/addClientPost') ?>" method="post" enctype="multipart/form-data">

        <label>Fecha Inicio del Contrato:</label>
        <input type="date" name="fecha_ingreso" required><br>

        <label>Nit Cliente:</label>
        <input type="text" name="nit_cliente" required><br>

        <label>Nombre del Tercero (Como está en el RUT):</label>
        <input type="text" name="nombre_cliente" required><br>

        <label>Usuario:</label>
        <input type="text" name="usuario" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <label>Correo del Cliente:</label>
        <input type="email" name="correo_cliente" required><br>

        <label>Teléfono 1:</label>
        <input type="text" name="telefono_1_cliente" required><br>

        <label>Teléfono 2:</label>
        <input type="text" name="telefono_2_cliente"><br>

        <label>Dirección:</label>
        <input type="text" name="direccion_cliente" required><br>

        <label>Persona de Contacto para Compras:</label>
        <input type="text" name="persona_contacto_compras" required><br>

        <label>Código de Actividad Económica:</label>
        <input type="text" name="codigo_actividad_economica" required><br>

        <label>Nombre del Representante Legal:</label>
        <input type="text" name="nombre_rep_legal" required><br>

        <label>Cédula del Representante Legal:</label>
        <input type="text" name="cedula_rep_legal" required><br>

        <label>Fecha Fin de Contrato:</label>
        <input type="date" name="fecha_fin_contrato" required><br>

        <label>Ciudad del Cliente:</label>
        <input type="text" name="ciudad_cliente" required><br>

        <label>Estado:</label>
        <select name="estado" required>
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
            <option value="pendiente">Pendiente</option>
        </select><br>

        <label>ID Consultor:</label>
        <!-- <input type="number" name="id_consultor" required><br> -->

        <select name="id_consultor" required>
            <option value="">Seleccione un Consultor</option>
            <?php foreach ($consultants as $consultant) : ?>
                <option value="<?= $consultant['id_consultor'] ?>"><?= $consultant['nombre_consultor'] ?></option>
            <?php endforeach; ?>
        </select>

        <label>Logo:</label>
        <input type="file" name="logo"><br>

        <label>Firma del Representante Legal:</label>
        <input type="file" name="firma_representante_legal"><br>

        <label>Estándares:</label>
        <select name="estandares">
            <option value="7 Estándares">7 Estándares</option>
            <option value="21 Estándares">21 Estándares</option>
            <option value="60 Estándares">60 Estándares</option>
        </select><br>





        <button type="submit">Agregar Cliente</button>
    </form>
</body>

</html>