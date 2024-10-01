<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Matriz Cycloid</title>
    <style>
        form {
            width: 50%;
            margin: auto;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }
        button {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
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

<h1 style="text-align:center;">Crear Nueva Matriz Cycloid</h1>

<!-- Formulario para crear una nueva matriz -->
<form action="<?= base_url('addMatrizCycloidPost') ?>" method="post">


    <label for="titulo_matriz">Título de la Matriz</label>
    <input type="text" name="titulo_matriz" id="titulo_matriz" required>

    <label for="Tipo_documento">Tipo de Documento</label>
    <input type="text" name="Tipo_documento" id="Tipo_documento" required>

    <label for="enlace">Enlace al Documento</label>
    <input type="text" name="enlace" id="enlace" required>

    <label for="observaciones">Observaciones</label>
    <textarea name="observaciones" id="observaciones" rows="4"></textarea>

    <button type="submit">Crear Matriz</button>

</form>

<!-- Enlace para volver a la lista de matrices -->
<a href="/listMatricesCycloid">Volver a la lista de matrices</a>

</body>
</html>
