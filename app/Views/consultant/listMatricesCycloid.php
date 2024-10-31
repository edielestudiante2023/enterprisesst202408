<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Matrices Cycloid</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
        }
        
        h1 {
            margin-top: 20px;
            font-weight: bold;
            text-align: center;
            color: #343a40;
        }

        .dataTables_filter input {
            width: 300px;
            margin-left: 0.5rem;
        }

        table {
            width: 100%;
            background-color: #fff;
        }

        table th, table td {
            vertical-align: middle !important;
        }

        .table-wrapper {
            margin-top: 20px;
        }

        .flash-message {
            margin-top: 15px;
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Lista Completa de Matrices Cycloid</h1>

        <!-- Mensajes flash de éxito o error -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success flash-message" role="alert">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger flash-message" role="alert">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <!-- Botón para crear nueva matriz -->
        <a href="<?= base_url('addMatrizCycloid') ?>" class="btn btn-primary mb-3">Crear Nueva Matriz Cycloid</a>

        <!-- Tabla para listar todas las matrices con todos los campos -->
        <div class="table-wrapper">
            <table id="matricesTable" class="table table-striped table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Título de la Matriz</th>
                        <th>Tipo de Documento</th>
                        <th>Enlace</th>
                        <th>Observaciones</th>
                        <th>Fecha de Creación</th>
                        <th>Fecha de Actualización</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($matrices)): ?>
                        <?php foreach ($matrices as $matriz): ?>
                            <tr>
                                <td><?= esc($matriz['id_matrizcycloid']) ?></td>
                                <td><?= esc($matriz['titulo_matriz']) ?></td>
                                <td><?= esc($matriz['Tipo_documento']) ?></td>
                                <td><a href="<?= esc($matriz['enlace']) ?>" target="_blank">Ver Documento</a></td>
                                <td><?= esc($matriz['observaciones']) ?></td>
                                <td><?= esc($matriz['created_at']) ?></td>
                                <td><?= esc($matriz['updated_at']) ?></td>
                                <td>
                                    <a href="<?= base_url('editMatrizCycloid/' . $matriz['id_matrizcycloid']) ?>" class="btn btn-sm btn-warning">Editar</a>
                                    <a href="<?= base_url('deleteMatrizCycloid/' . $matriz['id_matrizcycloid']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta matriz?');">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8" class="text-center">No hay matrices disponibles.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- jQuery and DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables Initialization -->
    <script>
        $(document).ready(function() {
            $('#matricesTable').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                },
                responsive: true,
                dom: '<"top"f>rt<"bottom"lp><"clear">'
            });
        });
    </script>
</body>

</html>
