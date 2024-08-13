<!DOCTYPE html>
<html>

<head>
    <title>Agregar Nuevo Consultor</title>
</head>

<body>

    <a href="<?= base_url('/index.php/listConsultants') ?>">
        <button type="button">Ver Lista de Consultores</button>
    </a>

    <br><br>

    <a href="<?= base_url('/dashboardconsultant') ?>">
        <button type="button">Volver al Dashboard</button>
    </a>

    <br><br>

    <h2>Agregar Nuevo Consultor</h2>

    <form action="<?= base_url('/addConsultantPost') ?>" method="post" enctype="multipart/form-data">
        <!-- Campos del formulario -->
        <label>Nombre Consultor:</label>
        <input type="text" name="nombre_consultor" required><br>

        <label>Cédula Consultor:</label>
        <input type="text" name="cedula_consultor" required><br>

        <label>Usuario:</label>
        <input type="text" name="usuario" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <label>Correo Consultor:</label>
        <input type="email" name="correo_consultor" required><br>

        <label>Teléfono Consultor:</label>
        <input type="text" name="telefono_consultor" required><br>

        <label>Número de Licencia:</label>
        <input type="text" name="numero_licencia" required><br>

        <label>Foto del Consultor:</label>
        <input type="file" name="foto_consultor" accept="image/*"><br>

        <label>Firma del Consultor:</label>
        <input type="file" name="firma_consultor" accept="image/*"><br>


        <label>ID Cliente:</label>
        <input type="number" name="id_cliente" required><br>

        <button type="submit">Agregar Consultor</button>
    </form>

</body>

</html>