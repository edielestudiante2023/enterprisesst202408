<!DOCTYPE html>
<html>
<head>
    <title>Agregar Consultor</title>
</head>
<body>
    <h2>Agregar Nuevo Consultor</h2>
    <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif;?>
    <form action="<?= base_url('/addConsultant') ?>" method="post">
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

        <label>ID Cliente:</label>
        <input type="number" name="id_cliente" required><br>

        <button type="submit">Agregar Consultor</button>
    </form>
</body>
</html>
