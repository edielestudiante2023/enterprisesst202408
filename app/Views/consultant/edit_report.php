<!DOCTYPE html>
<html>

<head>
    <title>Editar Reporte</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Editar Reporte</h2>
            </div>
            <div class="card-body">
                <?php if (session()->getFlashdata('msg')): ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif; ?>
                <form action="<?= base_url('/editReportPost/' . $report['id_reporte']) ?>" method="post">
                    <div class="form-group">
                        <label for="titulo_reporte">Título del Reporte:</label>
                        <input type="text" class="form-control" id="titulo_reporte" name="titulo_reporte" value="<?= $report['titulo_reporte'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Tipo_documento">Tipo de Documento:</label>
                        <select class="form-control" id="Tipo_documento" name="Tipo_documento" required>
                            <option value="PDF" <?= $report['Tipo_documento'] == 'PDF' ? 'selected' : '' ?>>PDF</option>
                            <option value="HOJA DE CALCULO" <?= $report['Tipo_documento'] == 'HOJA DE CALCULO' ? 'selected' : '' ?>>HOJA DE CALCULO</option>
                            <option value="DOC" <?= $report['Tipo_documento'] == 'DOC' ? 'selected' : '' ?>>DOC</option>
                            <option value="VIDEO" <?= $report['Tipo_documento'] == 'VIDEO' ? 'selected' : '' ?>>VIDEO</option>
                            <option value="IMAGEN" <?= $report['Tipo_documento'] == 'IMAGEN' ? 'selected' : '' ?>>IMAGEN</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="enlace">Enlace:</label>
                        <input type="text" class="form-control" id="enlace" name="enlace" value="<?= $report['enlace'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <select class="form-control" id="estado" name="estado" required>
                            <option value="ABIERTO" <?= $report['estado'] == 'ABIERTO' ? 'selected' : '' ?>>ABIERTO</option>
                            <option value="GESTIONANDO" <?= $report['estado'] == 'GESTIONANDO' ? 'selected' : '' ?>>GESTIONANDO</option>
                            <option value="CERRADO" <?= $report['estado'] == 'CERRADO' ? 'selected' : '' ?>>CERRADO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="observaciones">Observaciones:</label>
                        <textarea class="form-control" id="observaciones" name="observaciones"><?= $report['observaciones'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="id_cliente">Cliente:</label>
                        <select class="form-control" id="id_cliente" name="id_cliente" required>
                            <?php foreach ($clients as $client): ?>
                                <option value="<?= $client['id_cliente'] ?>" <?= $report['id_cliente'] == $client['id_cliente'] ? 'selected' : '' ?>>
                                    <?= $client['nombre_cliente'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_report_type">Tipo de Reporte:</label>
                        <select class="form-control" id="id_report_type" name="id_report_type" required>
                            <?php foreach ($reportTypes as $type): ?>
                                <option value="<?= $type['id_report_type'] ?>" <?= $report['id_report_type'] == $type['id_report_type'] ? 'selected' : '' ?>>
                                    <?= $type['report_type'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Reporte</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('table').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/es_es.json"
                }
            });
        });
    </script>
</body>

</html>
