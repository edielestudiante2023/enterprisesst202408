<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Objetivos de Política</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Lista de Objetivos de Política</h2>
                <div class="table-responsive">
                    <table id="objectivesTable" class="table table-striped table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Nombre del Objetivo</th>
                                <th>Comentarios</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($objectives as $objective): ?>
                                <tr>
                                    <td><?= esc($objective['name_objectives']) ?></td>
                                    <td><?= esc($objective['comments_objectives']) ?></td>
                                    <td>
                                        <a href="<?= base_url('editObjective/' . $objective['id_objectives']) ?>" class="btn btn-sm btn-primary">Editar</a>
                                        <a href="<?= base_url('deleteObjective/' . $objective['id_objectives']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar este objetivo?')">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between mb-4">
            <a href="<?= base_url('/addObjective') ?>" class="btn btn-success">Crear Nuevo Objetivo de Indicador</a>
            <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-secondary">Ir a Dashboard</a>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#objectivesTable').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
                }
            });
        });
    </script>
</body>
</html>