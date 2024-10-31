<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <title>Editar Versión</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="mb-4">Editar Versión</h1>

        <form action="<?= base_url('editVersionPost/' . $version['id']) ?>" method="post">
            <div class="table-responsive">
                <table id="versionTable" class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>Nombre del Cliente</th>
                            <th>Nombre del Documento</th>
                            <th>Tipo de Documento</th>
                            <th>Acrónimo</th>
                            <th>Número de Versión</th>
                            <th>Ubicación</th>
                            <th>Estado</th>
                            <th>Control de Cambios</th>
                            <th>Fecha de Creación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select name="client_id" class="form-select" required>
                                    <?php foreach ($clients as $client): ?>
                                        <option value="<?= $client['id_cliente'] ?>" <?= $client['id_cliente'] == $version['client_id'] ? 'selected' : '' ?>>
                                            <?= $client['nombre_cliente'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td>
                                <select name="policy_type_id" class="form-select" required>
                                    <?php foreach ($policyTypes as $policyType): ?>
                                        <option value="<?= $policyType['id'] ?>" <?= $policyType['id'] == $version['policy_type_id'] ? 'selected' : '' ?>>
                                            <?= $policyType['type_name'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="document_type" class="form-control" value="<?= $version['document_type'] ?>" required>
                            </td>
                            <td>
                                <input type="text" name="acronym" class="form-control" value="<?= $version['acronym'] ?>" required>
                            </td>
                            <td>
                                <input type="number" name="version_number" class="form-control" value="<?= $version['version_number'] ?>" required>
                            </td>
                            <td>
                                <input type="text" name="location" class="form-control" value="<?= $version['location'] ?>" required>
                            </td>
                            <td>
                                <input type="text" name="status" class="form-control" value="<?= $version['status'] ?>" required>
                            </td>
                            <td>
                                <textarea name="change_control" class="form-control" rows="3"><?= $version['change_control'] ?></textarea>
                            </td>
                            <td><?= $version['created_at'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="<?= base_url('listVersions') ?>" class="btn btn-secondary">Cancelar</a>
            </div>

            <div class="mt-5">
                <h2>Ir a Dashboard</h2>
                <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-success">Ir a DashBoard</a>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#versionTable').DataTable({
                paging: false,
                searching: false,
                info: false
            });
        });
    </script>
</body>
</html>