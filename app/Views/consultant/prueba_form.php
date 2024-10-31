<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Prueba</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
        h2 {
            font-weight: 600;
            margin-bottom: 30px;
        }
        .alert {
            margin-top: 20px;
        }
        label {
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Formulario de Prueba</h2>
        
        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('msg') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/prueba_save') ?>" method="post">
            <div class="form-group">
                <label for="nombre_prueba">Nombre de la Prueba:</label>
                <input type="text" class="form-control" id="nombre_prueba" name="nombre_prueba" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Agregar Registro</button>
        </form>
        
        <hr>
        
        <!-- Ejemplo de tabla que se puede expandir para futuras implementaciones -->
        <h4 class="text-center">Datos de la Prueba</h4>
        <div class="table-responsive">
            <table id="tablaPrueba" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre de la Prueba</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Filas de datos de ejemplo -->
                    <tr>
                        <td>1</td>
                        <td>Prueba de ejemplo</td>
                        <td><button class="btn btn-sm btn-outline-primary">Editar</button> <button class="btn btn-sm btn-outline-danger">Eliminar</button></td>
                    </tr>
                    <!-- Más filas aquí -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tablaPrueba').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                }
            });
        });
    </script>
</body>
</html>
