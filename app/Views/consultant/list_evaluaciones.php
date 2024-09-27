<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Evaluaciones</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<a href="<?= base_url('addEvaluacion') ?>"><button type="button">Agregar Evaluación</button></a>

<h1>Lista de Evaluaciones</h1>

<table>
    <thead>
        <tr>
            <!-- <th>ID</th> -->
            <!-- <th>Fecha Creación</th>
            <th>Fecha Actualización</th> -->
            <th>Cliente</th>
            <th>Ciclo</th>
            <th>Estándar</th>
            <th>Detalle Estándar</th>
            <th>Estándares Mínimos</th>
            <!-- <th>Numeral</th> -->
            <th>Numerales del Cliente</th>
            <!-- <th>Siete</th>
            <th>Veintiún</th>
            <th>Sesenta</th> -->
            <th>Item del Estándar</th>
            <th>Evaluación Inicial</th>
            <th>Valor</th>
            <th>Puntaje Cuantitativo</th>
            <th>Item</th>
            <th>Criterio</th>
            <th>Modo de Verificación</th>
            <!-- <th>Calificación</th>
            <th>Nivel de Evaluación</th> -->
            <th>Observaciones</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($evaluaciones) && is_array($evaluaciones)): ?>
            <?php foreach ($evaluaciones as $evaluacion): ?>
                <tr>
                    <!-- <td><?= esc($evaluacion['id_ev_ini']); ?></td> -->
                    <!-- <td><?= esc($evaluacion['created_at']); ?></td>
                    <td><?= esc($evaluacion['updated_at']); ?></td> -->
                    <td><?= esc($evaluacion['nombre_cliente']); ?></td>
                    <td><?= esc($evaluacion['ciclo']); ?></td>
                    <td><?= esc($evaluacion['estandar']); ?></td>
                    <td><?= esc($evaluacion['detalle_estandar']); ?></td>
                    <td><?= esc($evaluacion['estandares_minimos']); ?></td>
                    <!-- <td><?= esc($evaluacion['numeral']); ?></td> -->
                    <td><?= esc($evaluacion['numerales_del_cliente']); ?></td>
                    <!-- <td><?= esc($evaluacion['siete']); ?></td>
                    <td><?= esc($evaluacion['veintiun']); ?></td>
                    <td><?= esc($evaluacion['sesenta']); ?></td> -->
                    <td><?= esc($evaluacion['item_del_estandar']); ?></td>
                    <td><?= esc($evaluacion['evaluacion_inicial']); ?></td>
                    <td><?= esc($evaluacion['valor']); ?></td>
                    <td><?= esc($evaluacion['puntaje_cuantitativo']); ?></td>
                    <td><?= esc($evaluacion['item']); ?></td>
                    <td><?= esc($evaluacion['criterio']); ?></td>
                    <td><?= esc($evaluacion['modo_de_verificacion']); ?></td>
                    <!-- <td><?= esc($evaluacion['calificacion']); ?></td>
                    <td><?= esc($evaluacion['nivel_de_evaluacion']); ?></td> -->
                    <td><?= esc($evaluacion['observaciones']); ?></td>
                    <td>
                    <a href="<?= base_url('editEvaluacion/' . $evaluacion['id_ev_ini']); ?>">
                        <button type="button">Editar</button>
                    </a>
                    <a href="<?= base_url('deleteEvaluacion/' . $evaluacion['id_ev_ini']); ?>" onclick="return confirm('¿Estás seguro de que quieres eliminar esta evaluación?');">
                        <button type="button">Eliminar</button>
                    </a>
                </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="23">No se encontraron evaluaciones.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

</body>
</html>
