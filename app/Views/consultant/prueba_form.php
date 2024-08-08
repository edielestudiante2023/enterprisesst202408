<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Prueba</title>
</head>
<body>
    <h2>Formulario de Prueba</h2>
    <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('/prueba_save') ?>" method="post">
        <label>Nombre de la Prueba:</label>
        <input type="text" name="nombre_prueba" required><br>
        <button type="submit">Agregar Registro</button>
    </form>
</body>
</html>
