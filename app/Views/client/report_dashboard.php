<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos del Cliente</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }
        .table-container {
            margin-top: 30px;
        }
        .navbar, .table-container {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #495057;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .btn-custom {
            background-color: #007bff;
            color: #ffffff;
            border-radius: 4px;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .logout {
            text-align: right;
            margin-top: 15px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light">
        <a href="<?= base_url('/dashboardclient') ?>" class="btn btn-custom">Volver al Dashboard</a>
    </nav>

    <div class="container table-container">
        <h2>Documentos Relacionados</h2>

        <?php if (!empty($reports)): ?>
            <div class="table-responsive">
                <table id="reportTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título del Reporte</th>
                            <th>Tipo de Documento</th>
                            <th>Enlace</th>
                            <th>Estado</th>
                            <th>Observaciones</th>
                            <th>Fecha de Creación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($reports as $report): ?>
                            <tr>
                                <td><?= $report['id_reporte'] ?></td>
                                <td><?= $report['titulo_reporte'] ?></td>
                                <td><?= $report['Tipo_documento'] ?></td>
                                <td><a href="<?= $report['enlace'] ?>" target="_blank"><?= $report['enlace'] ?></a></td>
                                <td><?= $report['estado'] ?></td>
                                <td><?= $report['observaciones'] ?></td>
                                <td><?= $report['created_at'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p class="text-muted">No hay documentos disponibles.</p>
        <?php endif; ?>
    </div>

    <div class="container logout">
        <a href="<?= base_url('/logout') ?>" class="btn btn-danger">Cerrar Sesión</a>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#reportTable').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                }
            });
        });
    </script>
</body>
</html>
