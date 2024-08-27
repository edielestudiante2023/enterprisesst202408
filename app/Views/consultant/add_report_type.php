<!-- C:\laragon\www\enterprise-sst202408\app\Views\consultant\add_report_type.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Añadir Tipo de Reporte</title>
</head>
<body>
    <h1>Añadir Tipo de Reporte</h1>

    <form action="<?= base_url('/addReportTypePost') ?>" method="post">
    <label>Nombre del Tipo de Reporte:</label>
    <input type="text" name="report_type" required><br><br>
    <button type="submit">Agregar Tipo de Reporte</button>
</form>


    <?php if (session()->getFlashdata('error')): ?>
        <div style="color: red;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
</body>
</html>
