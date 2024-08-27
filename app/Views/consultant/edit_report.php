<!DOCTYPE html>
<html>

<head>
    <title>Editar Reporte</title>
</head>

<body>
    <h2>Editar Reporte</h2>
    <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>
    <form action="<?= base_url('/editReportPost/' . $report['id_reporte']) ?>" method="post">
        <label>Título del Reporte:</label>
        <input type="text" name="titulo_reporte" value="<?= $report['titulo_reporte'] ?>" required><br>

        <label>Tipo de Documento:</label>
        <select name="Tipo_documento" required>
            <option value="PDF" <?= $report['Tipo_documento'] == 'PDF' ? 'selected' : '' ?>>PDF</option>
            <option value="HOJA DE CALCULO" <?= $report['Tipo_documento'] == 'HOJA DE CALCULO' ? 'selected' : '' ?>>HOJA DE CALCULO</option>
            <option value="DOC" <?= $report['Tipo_documento'] == 'DOC' ? 'selected' : '' ?>>DOC</option>
            <option value="VIDEO" <?= $report['Tipo_documento'] == 'VIDEO' ? 'selected' : '' ?>>VIDEO</option>
            <option value="IMAGEN" <?= $report['Tipo_documento'] == 'IMAGEN' ? 'selected' : '' ?>>IMAGEN</option>
        </select><br>

        <label>Enlace:</label>
        <input type="text" name="enlace" value="<?= $report['enlace'] ?>" required><br>

        <label>Estado:</label>
        <select name="estado" required>
            <option value="ABIERTO" <?= $report['estado'] == 'ABIERTO' ? 'selected' : '' ?>>ABIERTO</option>
            <option value="GESTIONANDO" <?= $report['estado'] == 'GESTIONANDO' ? 'selected' : '' ?>>GESTIONANDO</option>
            <option value="CERRADO" <?= $report['estado'] == 'CERRADO' ? 'selected' : '' ?>>CERRADO</option>
        </select><br>

        <label>Observaciones:</label>
        <textarea name="observaciones"><?= $report['observaciones'] ?></textarea><br>

        <label>Cliente:</label>
        <select name="id_cliente" required>
            <?php foreach ($clients as $client): ?>
                <option value="<?= $client['id_cliente'] ?>" <?= $report['id_cliente'] == $client['id_cliente'] ? 'selected' : '' ?>><?= $client['nombre_cliente'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="id_report_type">Tipo de Reporte:</label>
        <select name="id_report_type" required>
            <?php foreach ($reportTypes as $type): ?>
                <option value="<?= $type['id_report_type'] ?>" <?= $report['id_report_type'] == $type['id_report_type'] ? 'selected' : '' ?>>
                    <?= $type['report_type'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>


        <button type="submit">Actualizar Reporte</button>
    </form>
</body>

</html>