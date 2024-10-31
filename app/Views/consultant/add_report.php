<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar y Ver Reportes</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <!-- DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <style>
        body {
            background-color: #f9f9f9;
            color: #333;
        }

        h2 {
            color: #0056b3;
            margin-top: 30px;
        }

        .container {
            max-width: 800px;
            padding-top: 20px;
        }

        .alert {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Ir a Dashboard</h2>
        <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-primary mb-3">Ir a DashBoard</a>

        <h2>Ir a Lista de Documentos</h2>
        <a href="<?= base_url('/reportList') ?>" class="btn btn-secondary mb-3">Ir a Lista de documentos</a>

        <h2>Agregar Nuevo Reporte</h2>
        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/addReportPost') ?>" method="post">
            <div class="form-group">
                <label for="titulo_reporte">Título del Reporte:</label>
                <input type="text" name="titulo_reporte" id="titulo_reporte" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Tipo_documento">Tipo de Documento:</label>
                <select name="Tipo_documento" id="Tipo_documento" class="form-control" required>
                    <option value="PDF">PDF</option>
                    <option value="HOJA DE CALCULO">HOJA DE CALCULO</option>
                    <option value="DOC">DOC</option>
                    <option value="VIDEO">VIDEO</option>
                    <option value="IMAGEN">IMAGEN</option>
                </select>
            </div>

            <div class="form-group">
                <label for="enlace">Enlace:</label>
                <input type="text" name="enlace" id="enlace" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="estado">Estado:</label>
                <select name="estado" id="estado" class="form-control" required>
                    <option value="ABIERTO">ABIERTO</option>
                    <option value="GESTIONANDO">GESTIONANDO</option>
                    <option value="CERRADO">CERRADO</option>
                </select>
            </div>

            <div class="form-group">
                <label for="observaciones">Observaciones:</label>
                <textarea name="observaciones" id="observaciones" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="id_cliente">Cliente:</label>
                <?php if (isset($clients)): ?>
                    <select name="id_cliente" id="id_cliente" class="form-control">
                        <option value="">Todos</option>
                        <?php foreach ($clients as $client) : ?>
                            <option value="<?= $client['id_cliente'] ?>" <?= (isset($_GET['id_cliente']) && $_GET['id_cliente'] == $client['id_cliente']) ? 'selected' : '' ?>>
                                <?= $client['nombre_cliente'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                <?php else: ?>
                    <p class="text-danger">Error: No se han encontrado clientes.</p>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="id_report_type">Tipo de Reporte:</label>
                <select name="id_report_type" id="id_report_type" class="form-control" required>
                    <?php foreach ($reportTypes as $type): ?>
                        <option value="<?= $type['id_report_type'] ?>"><?= $type['report_type'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Agregar Reporte</button>
        </form>

        <br><br>

        <a href="<?= base_url('/logout') ?>" class="btn btn-danger">Cerrar Sesión</a>
    </div>

    <!-- Initialize DataTables -->
    <script>
        $(document).ready(function() {
            $('table').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json'
                },
                paging: true,
                searching: true,
                responsive: true
            });
        });
    </script>
</body>

</html>
