<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Matriz Cycloid</title>
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
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
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

<h1 style="text-align:center;">Editar Matriz Cycloid</h1>

<!-- Formulario para editar una matriz -->
<form action="<?= base_url('editMatrizCycloidPost/' . esc($matriz['id_matrizcycloid'])) ?>" method="post">


    <label for="titulo_matriz">Título de la Matriz</label>
    <input type="text" name="titulo_matriz" id="titulo_matriz" value="<?= esc($matriz['titulo_matriz']) ?>" required>

    <label for="Tipo_documento">Tipo de Documento</label>
    <input type="text" name="Tipo_documento" id="Tipo_documento" value="<?= esc($matriz['Tipo_documento']) ?>" required>

    <label for="enlace">Enlace al Documento</label>
    <input type="text" name="enlace" id="enlace" value="<?= esc($matriz['enlace']) ?>" required>

    <label for="observaciones">Observaciones</label>
    <textarea name="observaciones" id="observaciones" rows="4"><?= esc($matriz['observaciones']) ?></textarea>

    <button type="submit">Actualizar Matriz</button>

</form>

<!-- Enlace para volver a la lista de matrices -->
<a href="/listMatricesCycloid">Volver a la lista de matrices</a>

</body>
</html>
