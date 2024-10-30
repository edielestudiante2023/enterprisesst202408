<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Documentos - Enterprisesst</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            margin-top: 30px;
            max-width: 1200px;
        }

        .table-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .table-container h2 {
            color: #333;
            font-weight: 600;
            font-size: 24px;
            margin-bottom: 15px;
        }

        .table th {
            background-color: #0066cc;
            color: #fff;
            text-align: center;
            font-size: 16px;
        }

        .table td {
            font-size: 15px;
            vertical-align: middle;
        }

        .table td a {
            color: #0066cc;
            text-decoration: underline;
            font-weight: 500;
        }

        .table td a:hover {
            color: #004c99;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #0066cc;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .back-link:hover {
            background-color: #004c99;
        }

        .empty-message {
            color: #333;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <a href="<?= base_url('/dashboardclient') ?>" class="back-link">Volver al Dashboard</a>

        <div class="table-container">
            <h2>Hojas de Cálculo Interactivas</h2>
            <?php if (!empty($hojasDeCalculo)) : ?>
                <table id="hojasCalculoTable" class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Enlace</th>
                            <th>Estado</th>
                            <th>Observaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($hojasDeCalculo as $reporte) : ?>
                            <tr>
                                <td><?= esc($reporte['titulo_reporte']) ?></td>
                                <td><a href="<?= esc($reporte['enlace']) ?>" target="_blank">Ver Documento</a></td>
                                <td><?= esc($reporte['estado']) ?></td>
                                <td><?= esc($reporte['observaciones']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p class="empty-message">No hay documentos de Hojas de Cálculo Interactivas disponibles.</p>
            <?php endif; ?>
        </div>

        <div class="table-container">
            <h2>Matrices</h2>
            <?php if (!empty($matrices)) : ?>
                <table id="matricesTable" class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Enlace</th>
                            <th>Estado</th>
                            <th>Observaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($matrices as $reporte) : ?>
                            <tr>
                                <td><?= esc($reporte['titulo_reporte']) ?></td>
                                <td><a href="<?= esc($reporte['enlace']) ?>" target="_blank">Ver Documento</a></td>
                                <td><?= esc($reporte['estado']) ?></td>
                                <td><?= esc($reporte['observaciones']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p class="empty-message">No hay documentos de Matrices disponibles.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#hojasCalculoTable').DataTable({
                paging: true,
                searching: true,
                lengthChange: true,
                pageLength: 5,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json'
                }
            });
            $('#matricesTable').DataTable({
                paging: true,
                searching: true,
                lengthChange: true,
                pageLength: 5,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json'
                }
            });
        });
    </script>

</body>

</html>
