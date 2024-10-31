<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Matriz Cycloid</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 700px;
            margin-top: 30px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            font-weight: 500;
            color: #343a40;
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: 500;
            margin-top: 10px;
        }
        input[type="text"], textarea {
            margin-top: 5px;
        }
        button[type="submit"] {
            margin-top: 20px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #0d6efd;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Crear Nueva Matriz Cycloid</h1>

    <!-- Formulario para crear una nueva matriz -->
    <form action="<?= base_url('addMatrizCycloidPost') ?>" method="post">
        <div class="mb-3">
            <label for="titulo_matriz" class="form-label">Título de la Matriz</label>
            <input type="text" name="titulo_matriz" id="titulo_matriz" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="Tipo_documento" class="form-label">Tipo de Documento</label>
            <input type="text" name="Tipo_documento" id="Tipo_documento" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="enlace" class="form-label">Enlace al Documento</label>
            <input type="text" name="enlace" id="enlace" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="observaciones" class="form-label">Observaciones</label>
            <textarea name="observaciones" id="observaciones" rows="4" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success w-100">Crear Matriz</button>
    </form>

    <!-- Enlace para volver a la lista de matrices -->
    <a href="/listMatricesCycloid" class="btn btn-link">Volver a la lista de matrices</a>
</div>

<!-- jQuery and DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        // Activar DataTables en las tablas cuando se agreguen
        $('table').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"
            }
        });
    });
</script>
<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</body>
</html>
