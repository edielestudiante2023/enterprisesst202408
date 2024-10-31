<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Política</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin-top: 20px;
        }
        h1, h2 {
            color: #495057;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary, .btn-secondary {
            margin-top: 10px;
        }
        .dataTable-filter {
            display: none;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url('/dashboardconsultant') ?>">Dashboard</a>
    </nav>

    <div class="container">
        <h2 class="mt-4">Ir a Dashboard</h2>
        <!-- Botón para ir a la vista de agregar reportes -->
        <a href="<?= base_url('/dashboardconsultant') ?>">
            <button type="button" class="btn btn-primary">Ir a DashBoard</button>
        </a>
        <br><br>

        <h1 class="mb-4">Agregar Nuevo Texto a Documento</h1>

        <form action="<?= base_url('/addPolicyPost') ?>" method="post">
            <div class="form-group">
                <label for="client_id" class="form-label">Cliente:</label>
                <select name="client_id" class="form-control" required>
                    <?php foreach ($clients as $client): ?>
                        <option value="<?= $client['id_cliente'] ?>"><?= $client['nombre_cliente'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="policy_type_id" class="form-label">Tipo de Documento:</label>
                <select name="policy_type_id" class="form-control" required>
                    <?php foreach ($policyTypes as $type): ?>
                        <option value="<?= $type['id'] ?>"><?= $type['type_name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="policy_content" class="form-label">Contenido:</label>
                <textarea name="policy_content" class="form-control" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Agregar Texto</button>
        </form>

        <a href="<?= base_url('/listPolicies') ?>" class="btn btn-secondary mt-3">Volver a la lista de Documentos</a>
    </div>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            // Inicialización de DataTables si hay tablas en esta página en futuras expansiones
            $('table').DataTable();
        });
    </script>
</body>

</html>
