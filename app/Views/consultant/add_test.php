<!DOCTYPE html>
<html>
<head>
    <title>Agregar Test</title>
</head>
<body>
    <h2>Formulario de Prueba</h2>
    <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif;?>
    <form action="<?= base_url('/addTest') ?>" method="post">
        <label>Nombre Test:</label>
        <input type="text" name="nombre_test" required><br>
        <button type="submit">Agregar Test</button>
    </form>
</body>
</html>
