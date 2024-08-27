<!DOCTYPE html>
<html>
<head>
    <title>Editar Tipo de Reporte</title>
</head>
<body>

    <h2>Editar Tipo de Reporte</h2>
    <form action="<?= base_url('/editReportTypePost/' . $reportType['id_report_type']) ?>" method="post">
        <label>Tipo de Reporte:</label>
        <input type="text" name="report_type" value="<?= $reportType['report_type'] ?>" required><br><br>
        <button type="submit">Guardar Cambios</button>
    </form>

    <br>
    <a href="<?= base_url('/listReportTypes') ?>">Volver a la Lista de Tipos de Reportes</a>

</body>
</html>
