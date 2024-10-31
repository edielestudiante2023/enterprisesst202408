<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Matriz Cycloid</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        h1 {
            margin-top: 30px;
            color: #343a40;
        }
        form {
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        label {
            font-weight: bold;
            margin-top: 10px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center">Editar Matriz Cycloid</h1>

    <!-- Formulario para editar una matriz -->
    <form action="<?= base_url('editMatrizCycloidPost/' . esc($matriz['id_matrizcycloid'])) ?>" method="post" class="mt-4">
        <div class="form-group">
            <label for="titulo_matriz">Título de la Matriz</label>
            <input type="text" name="titulo_matriz" id="titulo_matriz" class="form-control" value="<?= esc($matriz['titulo_matriz']) ?>" required>
        </div>

        <div class="form-group">
            <label for="Tipo_documento">Tipo de Documento</label>
            <input type="text" name="Tipo_documento" id="Tipo_documento" class="form-control" value="<?= esc($matriz['Tipo_documento']) ?>" required>
        </div>

        <div class="form-group">
            <label for="enlace">Enlace al Documento</label>
            <input type="text" name="enlace" id="enlace" class="form-control" value="<?= esc($matriz['enlace']) ?>" required>
        </div>

        <div class="form-group">
            <label for="observaciones">Observaciones</label>
            <textarea name="observaciones" id="observaciones" rows="4" class="form-control"><?= esc($matriz['observaciones']) ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Matriz</button>
    </form>

    <!-- Enlace para volver a la lista de matrices -->
    <a href="/listMatricesCycloid" class="btn btn-link">Volver a la lista de matrices</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        // Inicializar DataTables en las tablas si es necesario
        $('table').DataTable();
    });
</script>

</body>
</html>