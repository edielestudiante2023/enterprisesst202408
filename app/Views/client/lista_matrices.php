<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Matrices o Carpetas</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Mis Matrices Interactivas</h1>
        <table id="datatable" class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Tipo de Matriz o Carpeta</th>
                    <th>Descripción o Detalle</th>
                    <th>Observaciones</th>
                    <th>Enlace</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($matrices as $matriz): ?>
                    <tr>
                        <!-- <td><?= $matriz['id_matriz'] ?></td> -->
                        <td><?= htmlspecialchars($matriz['tipo'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td><?= htmlspecialchars($matriz['descripcion'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td><?= htmlspecialchars($matriz['observaciones'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td>
                            <a href="<?= htmlspecialchars($matriz['enlace'], ENT_QUOTES, 'UTF-8') ?>" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="btn btn-link text-decoration-none">Ver</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json"
                },
                responsive: true,
                lengthMenu: [5, 10, 25, 50],
                pageLength: 10
            });
        });
    </script>
</body>
</html>
