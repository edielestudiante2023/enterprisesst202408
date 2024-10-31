<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Nueva Versión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>
<body style="background-color: #f8f9fa; color: #343a40; font-family: Arial, sans-serif;">

<div class="container mt-5">
    <h1 class="text-center mb-4">Añadir Nueva Versión</h1>
    
    <form action="<?= base_url('addVersionPost') ?>" method="post" class="p-4 border rounded bg-white shadow-sm">
        <div class="mb-3">
            <label for="client_id" class="form-label">Nombre del Cliente:</label>
            <select name="client_id" class="form-select" required>
                <?php foreach ($clients as $client): ?>
                    <option value="<?= $client['id_cliente'] ?>"><?= $client['nombre_cliente'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="policy_type_id" class="form-label">Nombre del Documento:</label>
            <select name="policy_type_id" class="form-select" required>
                <?php foreach ($policyTypes as $policyType): ?>
                    <option value="<?= $policyType['id'] ?>"><?= $policyType['type_name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="document_type" class="form-label">Tipo de Documento:</label>
            <input type="text" name="document_type" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="acronym" class="form-label">Acrónimo:</label>
            <input type="text" name="acronym" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="version_number" class="form-label">Número de Versión:</label>
            <input type="number" name="version_number" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Ubicación:</label>
            <input type="text" name="location" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Estado:</label>
            <input type="text" name="status" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="change_control" class="form-label">Control de Cambios:</label>
            <textarea name="change_control" class="form-control" rows="3"></textarea>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Guardar Versión</button>
            <a href="<?= base_url('listVersions') ?>" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>

    <div class="text-center mt-5">
        <h2>Ir a Dashboard</h2>
        <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-info">Ir a DashBoard</a>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.dataTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
            }
        });
    });
</script>

</body>
</html>
