<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Matrices Cycloid</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <h1>Lista Completa de Matrices Cycloid</h1>

    <!-- Mensajes flash de éxito o error -->
    <?php if (session()->getFlashdata('success')): ?>
        <p style="color:green"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <p style="color:red"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <!-- Botón para crear nueva matriz -->
    <a href="<?= base_url('addMatrizCycloid') ?>" style="margin-bottom: 10px; display: inline-block;">Crear Nueva Matriz Cycloid</a>


    <!-- Tabla para listar todas las matrices con todos los campos -->
    <table>
        <thead>
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

                            <a href="<?= base_url('editMatrizCycloid/' . $matriz['id_matrizcycloid']) ?>">Editar</a> |
                            <a href="<?= base_url('deleteMatrizCycloid/' . $matriz['id_matrizcycloid']) ?>" onclick="return confirm('¿Estás seguro de eliminar esta matriz?');">Eliminar</a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8">No hay matrices disponibles.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>

</html>