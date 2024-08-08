<!DOCTYPE html>
<html>
<head>
    <title>Agregar y Ver Reportes</title>
</head>
<body>
    <h2>Agregar Nuevo Reporte</h2>
    <?php if(session()->getFlashdata('msg')): ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>
    <form action="<?= base_url('/addReportPost') ?>" method="post">
        <label>Título del Reporte:</label>
        <input type="text" name="titulo_reporte" required><br>

        <label>Tipo de Documento:</label>
        <select name="Tipo_documento" required>
            <option value="PDF">PDF</option>
            <option value="HOJA DE CALCULO">HOJA DE CALCULO</option>
            <option value="DOC">DOC</option>
            <option value="VIDEO">VIDEO</option>
            <option value="IMAGEN">IMAGEN</option>
        </select><br>

        <label>Enlace:</label>
        <input type="text" name="enlace" required><br>

        <label>Estado:</label>
        <select name="estado" required>
            <option value="ABIERTO">ABIERTO</option>
            <option value="GESTIONANDO">GESTIONANDO</option>
            <option value="CERRADO">CERRADO</option>
        </select><br>

        <label>Observaciones:</label>
        <textarea name="observaciones"></textarea><br>

        <label>Cliente:</label>
        <select name="id_cliente" required>
            <?php foreach ($clients as $client): ?>
                <option value="<?= $client['id_cliente'] ?>"><?= $client['nombre_cliente'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <button type="submit">Agregar Reporte</button>
    </form>

    <br><br>

    <?php include('report_list.php'); ?>

    <a href="<?= base_url('/logout') ?>">Cerrar Sesión</a>
</body>
</html>
