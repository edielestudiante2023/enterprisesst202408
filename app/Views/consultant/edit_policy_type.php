<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tipo de Documento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>
<body class="bg-light text-dark">
    <div class="container my-5">
        <div class="text-center mb-4">
            <h2>Ir a Dashboard</h2>
            <!-- Botón para ir a la vista de agregar reportes -->
            <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-primary">Ir a DashBoard</a>
        </div>

        <div class="card shadow-sm p-4 mb-5 bg-white rounded">
            <h1 class="mb-4">Editar Tipo de Documento</h1>

            <?php if (isset($policyType)): ?>
                <form action="<?= base_url('/editPolicyTypePost/'.$policyType['id']) ?>" method="post">
                    <div class="mb-3">
                        <label for="type_name" class="form-label">Nombre del Tipo de Documento:</label>
                        <input type="text" name="type_name" class="form-control" value="<?= $policyType['type_name'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción del Tipo de Documento:</label>
                        <input type="text" name="description" class="form-control" value="<?= $policyType['description'] ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </form>
            <?php else: ?>
                <div class="alert alert-danger" role="alert">
                    Error: No se pudo cargar la información del tipo de política.
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('table').DataTable();
        });
    </script>
</body>
</html>
